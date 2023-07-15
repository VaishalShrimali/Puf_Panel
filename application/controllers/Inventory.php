<?php

class Inventory extends CI_Controller
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
        $data['inventory'] = $this->Model->select('inventory');
        $this->load->view('admin/inventory/list', $data);
    }

    public function create()
    {
        $data['product'] = $this->Model->select('panel_category');
        $this->load->view('admin/inventory/create', $data);
    }

    public function insert()
    {

        $data = array(
            'raw_matrial' => $this->input->post('raw_matrial'),
            'size'  => $this->input->post('size'),
            'meters' => $this->input->post('meters'),
            'quantity' => $this->input->post('quntity'),
            'created_at' => date("Y-m-d")
        );

        // echo '<pre>';
        // print_r($data);
        // exit();
        $insert = $this->Model->insert('inventory', $data);

        if ($insert) {
            $this->session->set_flashdata('msg', 'Inventory Add Successfully');
            $this->session->set_flashdata('icon', 'success');
            return redirect('Inventory');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $data['inventory'] = $this->Model->select_where('inventory', $w = array('inventory_id' => $id));
        $this->load->view('admin/inventory/edit', $data);
    }

    public function update()
    {
        $update_id = $this->input->post('update_id');
        $data = array(
            'raw_matrial' => $this->input->post('raw_matrial'),
            'size'  => $this->input->post('size'),
            'meters' => $this->input->post('meters'),
            'quantity' => $this->input->post('quntity'),
            'updated_at' => date("Y-m-d")
        );

        // echo '<pre>';
        // print_r($data);
        // exit();
        $update = $this->Model->update('inventory', $data, $w = array('inventory_id' => $update_id));

        if ($update) {
            $this->session->set_flashdata('msg', 'Inventory Update Successfully');
            $this->session->set_flashdata('icon', 'success');
            return redirect('Inventory');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $delete = $this->Model->delete('inventory', $w = array('inventory_id' => $id));

        if ($delete) {
            $this->session->set_flashdata('msg', 'Inventory Deleted Successfully');
            $this->session->set_flashdata('icon', 'success');
            return redirect('Inventory');
        }
    }
}
