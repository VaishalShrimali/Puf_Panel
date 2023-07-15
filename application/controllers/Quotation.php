<?php


class Quotation extends CI_Controller
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

    public function index()
    {
        // $result['puf'] = $this->Model->for_join('puf_manage', 'panel_category', 'panel_category.panel_id=puf_manage.panel', 'thickness', 'thickness.Thickness_id = puf_manage.thickness', 'skin', 'skin.Skin_id = puf_manage.skin', 'measure', 'measure.measure_id = puf_manage.measure');
        // echo '<pre>';
        // print_r($result['puf']);
        // exit();
        // $result['puf'] = $this->Model->join('puf_manage', 'customer', 'customer.id = puf_manage.cname');


        $this->db->select('puf_manage.*, customer.cname as customer_name');
        $this->db->from('puf_manage');
        $this->db->join('customer', 'customer.id = puf_manage.cname');
        $result['puf'] = $this->db->get()->result_array();
        // echo '<pre>';
        // print_r($result['puf']);
        // exit();
        $this->load->view('admin/quotation/list', $result);
    }

    public function approved()
    {
        $id = $this->uri->segment(3);
        $status_check = $this->Model->select_where('puf_manage', $W = array('id' => $id));
        // echo $status_check[0]['quotation_status'];
        if ($status_check[0]['quotation_status'] == 'Pending') {
            $data = array(
                'quotation_status' => 'Approved'
            );
            $update = $this->Model->update('puf_manage', $data, $W = array('id' => $id));
            if ($update) {
                $this->session->set_flashdata('msg', 'Status Change Successfully');
                $this->session->set_flashdata('icon', 'success');
                return redirect('Quotation');
            }
        }

        if ($status_check[0]['quotation_status'] == 'Approved') {
            $data = array(
                'quotation_status' => 'Pending'
            );
            $update = $this->Model->update('puf_manage', $data, $W = array('id' => $id));
            if ($update) {
                $this->session->set_flashdata('msg', 'Status Change Successfully');
                $this->session->set_flashdata('icon', 'success');
                return redirect('Quotation');
            }
        }
    }
}
