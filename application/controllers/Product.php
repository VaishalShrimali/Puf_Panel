<?php

class Product extends CI_Controller
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
        $this->load->view('admin/product/list');
    }

    public function create()
    {
        $data['product'] = $this->Model->select('panel_category');
        $data['inventory'] = $this->Model->select('inventory');

        $this->load->view('admin/product/create', $data);
    }

    public function get_raw_matrial()
    {
        $raw_matrial =  $this->input->get('raw_matrial');

        $get_raw_matrial = $this->Model->select_where('inventory', $w = array('inventory_id' => $raw_matrial));

        echo json_encode($get_raw_matrial);
    }

    public function insert()
    {
        $row_count = count($this->input->post('row'));
        for ($i = 0; $i < $row_count; $i++) {
            $id = $this->input->post('row')[$i];

            $data = array(
                'product' => $this->input->post('product'),
                'raw_matrial' => $this->input->post('raw_matrial_id' . $id),
                'required_qty' => $this->input->post('product_qty' . $id),
                'created_at' => date("Y-m-d")
            );

            $this->Model->insert('product', $data);
        }

        $this->session->set_flashdata('msg', 'Product Add Successfully');
        $this->session->set_flashdata('icon', 'success');
        return redirect('Product');
    }

    public function add_product()
    {
        $product_name = $this->input->post('product_name');
        $data = array(
            'panel_name' => $product_name
        );
        $insert = $this->Model->insert('panel_category', $data);
        if ($insert) {
            $json_data['product'] = $this->Model->select('panel_category');
            $json_data['message'] = array('msg', 'Product Add Successfully', 'icon', 'success');
            echo json_encode($json_data);
        }
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
