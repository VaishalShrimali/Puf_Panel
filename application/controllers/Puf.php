<?php

class Puf extends CI_Controller
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

    public function create()
    {
        $data['panel'] = $this->Model->select('panel_category');
        $data['thickness'] = $this->Model->select('thickness');
        $data['measure'] = $this->Model->select('measure');
        $data['skin'] = $this->Model->select('skin');
        $data['customer'] = $this->Model->select('customer');
        $this->load->view('puf/create', $data);
    }

    public function add_customer()
    {

        $data = array(
            'cname' => $this->input->post('name'),
            'cmobile' => $this->input->post('phone'),
            'caddress' => $this->input->post('address'),
            'cemail' => $this->input->post('email'),
        );

        $insert = $this->Model->insert('customer', $data);
        if ($insert) {

            $json_data['customer_data'] = $this->Model->select('customer');
            $msg = array(
                'msg' => 'New Customer Added  Successfully',
                'icon' =>  'success'
            );
            $json_data['msg'] = $msg;

            echo json_encode($json_data);
        } else {
            $msg = array(
                'msg' => 'Somthing Went Worng',
                'icon' =>  'error'
            );
            $json_data['msg'] = $msg;
            echo json_encode($json_data);
        }
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function list()
    {
        // $result['puf'] = $this->Model->for_join('puf_manage', 'panel_category', 'panel_category.panel_id=puf_manage.panel', 'thickness', 'thickness.Thickness_id = puf_manage.thickness', 'skin', 'skin.Skin_id = puf_manage.skin', 'measure', 'measure.measure_id = puf_manage.measure');
        // echo '<pre>';
        // print_r($result['puf']);
        // exit();
        $result['puf'] = $this->Model->join('puf_manage', 'customer', 'customer.id = puf_manage.cname');
        // echo '<pre>';
        // print_r($result['puf']);
        // exit();
        $this->load->view('puf/list', $result);
    }


    public function get_thickness()
    {
        $puf_panel =  $this->input->get('puf_panel');
        $thickness = $this->Model->select_where('thickness', $w = array('panel_id' => $puf_panel));
        echo json_encode($thickness);
    }

    public function get_measure()
    {
        $puf_thickness =  $this->input->get('puf_panel');
        $measure = $this->Model->select_where('measure', $w = array('panel_id' => $puf_thickness));
        echo json_encode($measure);
    }


    public function Invoice()
    {
        $id = $this->uri->segment(3);
        $data['puf'] = $this->Model->for_join_where('puf_manage', 'panel_category', 'panel_category.panel_id=puf_manage.panel', 'thickness', 'thickness.Thickness_id = puf_manage.thickness', 'skin', 'skin.Skin_id = puf_manage.skin', 'measure', 'measure.measure_id = puf_manage.measure', $w = array('puf_manage.id' => $id));

        $this->load->view('puf/invoice', $data);
    }
    public function edit()
    {
        $id = $this->uri->segment(3);

        $data['puf'] = $this->Model->select_where('puf_manage', $w = array('id' => $id));
        $data['panel'] = $this->Model->select('panel_category');
        $data['thick'] = $this->Model->select('thickness');
        $data['sk'] = $this->Model->select('skin');
        $data['meas'] = $this->Model->select('measure');
        $data['customer'] = $this->Model->select('customer');
        // echo '<pre>';
        // print_r(json_decode($data['puf'][0]['coio']));
        // print_r(json_decode($data['puf'][0]['lwst']));
        // exit();
        $data['coio'] = json_decode($data['puf'][0]['coio'], true);
        $data['lwst'] = json_decode($data['puf'][0]['lwst'], true);
        echo '<pre>';
        print_r($data);
        exit();
        $this->load->view('puf/edit', $data);
    }
    public function update()
    {
        $update_id = $this->input->post('update_id');
        // echo $update_id;
        // exit();
        $row_count =  count($this->input->post('row'));
        $cpanel_row_count =  count($this->input->post('c_panel_row'));

        $data1 = array();
        $data2 = array();

        for ($i = 0; $i < $row_count; $i++) {
            $row_id = $this->input->post('row')[$i];
            $main_data = array(
                'length' => $this->input->post('length(mm)' . $row_id),
                'width' => $this->input->post('width(mm)' . $row_id),
                'sqm' => $this->input->post('sqm(mm)' . $row_id),
                'nospanel' => $this->input->post('total_panel' . $row_id),
                'puf_panel' => $this->input->post('puf_panel' . $row_id),
                'puf_thickness' => $this->input->post('puf_thickness' . $row_id),
                'puf_skin' => $this->input->post('puf_skin' . $row_id),
                'puf_measure' => $this->input->post('puf_measure' . $row_id),
            );
            array_push($data1, $main_data);
        }

        for ($j = 0; $j < $cpanel_row_count; $j++) {
            $crow_id = $this->input->post('c_panel_row')[$j];
            $second_data = array(
                'channel' => $this->input->post('c_channel' . $crow_id),
                'outer' => $this->input->post('l_outer' . $crow_id),
                'inner' => $this->input->post('l_inner' . $crow_id),
                'other' => $this->input->post('other_items' . $crow_id)
            );
            array_push($data2, $second_data);
        }

        $data = array(
            'total_panel' => $this->input->post('grand_total_panel'),
            'transporter_name' => $this->input->post('transporter_name'),
            'vehicle_no' => $this->input->post('vehicle_no'),
            'mobile_no' => $this->input->post('mobile_number'),
            'dispath_by' => $this->input->post('dispatch_by'),
            'dispath_time' => $this->input->post('dispatch_time'),
            'dispath_date' => $this->input->post('dispatch_date'),
            'boq_date' => date("Y/m/d"),
            'coio' => json_encode($data2),
            'ctp' => $this->input->post('ctap'),
            'gfilm' => $this->input->post('gfilm'),
            'surface' => $this->input->post('surface'),
            'lwst' => json_encode($data1)
        );

        $update = $this->Model->update('puf_manage', $data, $w = array('id' => $update_id));
        if ($update) {
            $this->session->set_flashdata('msg', 'Customer updated Successfully');
            $this->session->set_flashdata('icon', 'success');
            return redirect('Puf/list');
        } else {
            $this->session->set_flashdata('msg', 'Something Went Wrong!');
            $this->session->set_flashdata('icon', 'error');
            return redirect('Puf/list');
        }
    }

    public function leads()
    {
        $this->load->view('puf/leads');
    }
    public function products()
    {
        $this->load->view('puf/products');
    }
    public function Staff()
    {
        $this->load->view('puf/staff');
    }
    public function Qutoation()
    {
        $this->load->view('puf/quotation');
    }
    public function Packaging()
    {
        $this->load->view('puf/packaging');
    }
    public function Production()
    {
        $this->load->view('puf/production');
    }
    public function Purchase()
    {
        $this->load->view('puf/purchase');
    }
    public function Deleivery()
    {
        $this->load->view('puf/deleivery');
    }
    public function delivery_list()
    {
        $this->load->view('puf/delivery_list');
    }
}
