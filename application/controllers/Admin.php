<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{



    public function index()
    {
        $admin = $this->session->userdata('admin');
        if (empty($admin)) {
            $this->load->view('login');
        } else {
            $this->load->view('dashboard');
        }
    }



    public function login()
    {
        $this->load->view('login');

        return redirect('Admin');
    }

    public function authenticate()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $admin = $this->Model->select_where('admins_1', $w = array('email' => $email));
            // echo '<pre>';
            // print_r($admin);
            // exit();
            if (password_verify($password, $admin[0]['password'])) {
                $adminarray = array(
                    'admin_id' => $admin[0]['id'],
                    'admin_username' => $admin[0]['username'],
                    'admin_email' => $admin[0]['email']
                );

                $this->session->set_userdata('admin', $adminarray);
                $this->session->set_flashdata('msg', 'Login Successfully');
                $this->session->set_flashdata('icon', 'success');
                return redirect('Admin');
            } else {
                $this->session->set_flashdata('msg', 'Invalid Credentials');
                $this->session->set_flashdata('icon', 'error');
                return redirect('Admin');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('admin');
        $this->session->set_flashdata('msg', 'Your session has expired');
        $this->session->set_flashdata('icon', 'error');
        return redirect('Admin/login');
    }

    public function forgot_password()
    {
        $this->load->view('admin/forgotpassword');
    }

    public function reset_password_link()
    {
        $email = $this->input->post('email');
        $user = $this->Model->select_where('admins_1', $w = array('email' => $email));
        echo $user;
        if (count($user) > 0) {

            $random_number = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
            $data = array(
                'user_id' => $user[0]['id'],
                'code' => $random_number,
                'date' => date('d-m-Y')
            );

            $this->Model->insert('maincode', $data);
            // Load PHPMailer library
            $this->load->library('phpmailer_lib');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();

            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'poojar.dww@gmail.com';
            $mail->Password = 'axtswcreqwsnkegz';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;

            $mail->setFrom('info@example.com', 'CodexWorld');
            $mail->addReplyTo('info@example.com', 'CodexWorld');

            // Add a recipient
            $mail->addAddress($email);

            // Add cc or bcc 
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            // Email subject
            $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
            $reset_url = base_url('Admin/resetpassword/' . $random_number);
            // Set email format to HTML
            $mail->isHTML(true);

            // Email body content
            $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
           <p>This is a test email sending using SMTP mail server with PHPMailer.</p>
           <p>" . $reset_url . "</p>";
            $mail->Body = $mailContent;

            // Send email
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $this->session->set_flashdata('msg', 'Password reset link sent successfully..!');
                $this->session->set_flashdata('icon', 'success');
                return redirect('Admin/forgot_password');
            }
        }
    }

    public function resetpassword()
    {
        $mail_code = $this->uri->segment(3);

        $user_check = count($this->Model->select_where('maincode', $w = array('code' => $mail_code)));

        if ($user_check > 0) {

            $data['user'] = $this->Model->select_where('maincode', $w = array('code' => $mail_code));
            if ($data['user'][0]['status'] == 1) {
                $data['user_profile'] = $this->Model->select_where('admins_1', $w = array('id' => $data['user'][0]['user_id']));
                $this->load->view('admin/change_password', $data);
            } else {
                $this->session->set_flashdata('msg', 'link has been deactive..!');
                $this->session->set_flashdata('icon', 'error');
                return redirect('Admin/forgot_password');
            }
        }
    }

    public function update_password()
    {
        $user_id = $this->input->post('user_id');
        $new_pass = $this->input->post('new_pass');
        $confirm_pass = $this->input->post('confirm_pass');
        $code = $this->input->post('secret_code');
        if ($new_pass != $confirm_pass) {
            $data['user_profile'] = $this->Model->select_where('admins_1', $w = array('id' => $user_id));
            $this->session->set_flashdata('msg', 'Both Password are not same !');
            $this->session->set_flashdata('icon', 'error');
            $this->load->view('admin/change_password', $data);
            return redirect('Admin/forgot_password');
        } else {
            $updated_password = password_hash($new_pass, PASSWORD_DEFAULT);

            $data = array(
                'password' => $updated_password
            );

            $data1 = array(
                'status' => 0
            );
            $this->Model->update('maincode', $data1, $w = array('code' => $code));
            $update = $this->Model->update('admins_1', $data, $w = array('id' => $user_id));

            if ($update) {
                $this->session->set_flashdata('msg', 'Password reset link sent successfully..!');
                $this->session->set_flashdata('icon', 'success');
                return redirect('Admin');
            }
        }
    }

    public function send_mail()
    {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'poojar.dww@gmail.com';
        $mail->Password = 'axtswcreqwsnkegz';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;

        $mail->setFrom('info@example.com', 'CodexWorld');
        $mail->addReplyTo('info@example.com', 'CodexWorld');

        // Add a recipient
        $mail->addAddress('vaishalshrimali@gmail.com');

        // Add cc or bcc 
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>Password Reset</h1>
           <p>click on the below URL to reset your password..!</p>";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
