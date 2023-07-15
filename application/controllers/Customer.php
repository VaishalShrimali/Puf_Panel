<?php

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if (empty($admin)) {
            $this->session->set_flashdata('msg', 'Your session has expired');
            $this->session->set_flashdata('icon', 'error');
            return redirect('Admin');
        }
    }

    public function customer_create()
    {
        $this->load->view('puf/customer/create');
    }

    public function customer_insert()
    {
        $data = array(
            'cname' => $this->input->post('cname'),
            'cmobile' => $this->input->post('cmobile'),
            'caddress' => $this->input->post('caddress'),
            'cemail' => $this->input->post('cemail'),
            'gst_no' => $this->input->post('gst_no'),
        );
        $insert = $this->Model->insert('customer', $data);
        if ($insert) {

            $this->session->set_flashdata('msg', 'New Customer Added  Successfully');
            $this->session->set_flashdata('icon', 'success');

            redirect('Customer/customer_list');
        } else {
            echo 'SOMTHING WENT WRONG';
        }
    }
    public function customer_list()
    {
        $data['clist'] = $this->Model->select('customer');
        $this->load->view('puf/customer/list', $data);
    }
    public function customer_edit()
    {
        $id = $this->uri->segment(3);
        $data['cedit'] = $this->Model->select_where('customer', $w = array('id' => $id));
        $this->load->view('puf/customer/edit', $data);
    }
    public function customer_update()
    {
        $update_id = $this->input->post('update_id');
        $data = array(
            'cname' => $this->input->post('cname'),
            'cmobile' => $this->input->post('cmobile'),
            'caddress' => $this->input->post('caddress'),
            'cemail' => $this->input->post('cemail'),
            'gst_no' => $this->input->post('gst_no'),
        );

        $update = $this->Model->update('customer', $data, $w = array('id' => $update_id));
        if ($update) {
            $this->session->set_flashdata('msg', 'Customer data updated Successfully');
            $this->session->set_flashdata('icon', 'success');
            return redirect('Customer/customer_list');
        } else {
            $this->session->set_flashdata('msg', 'Something Went Wrong!');
            $this->session->set_flashdata('icon', 'error');
            return redirect('Customer/customer_edit');
        }
    }
    public function customer_delete()
    {
        $id = $this->uri->segment(3);
        $this->Model->delete('customer', $w = array('id' => $id));
        $this->session->set_flashdata('msg', 'Customer Deleted Successfully');
        $this->session->set_flashdata('icon', 'success');
        return redirect('Customer/customer_list');
    }
}
