<?php

class Role extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$admin = $this->session->userdata('admin');
		if (empty($admin)) {
			$this->session->set_flashdata('msg', 'Your session has expired');
			$this->session->set_flashdata('icon', 'error');
			return redirect('Login');
		}
	}

	public function index()
	{
		$data['roles'] = $this->Model->select('role');
		// echo '<pre>';
		// print_r($data['roles']);
		// exit();
		$this->load->view('admin/role/list', $data);
	}

	public function create()
	{
		$this->load->view('admin/role/create');
	}

	public function insert()
	{
		$role = $this->input->post('role');
		$data = array(
			'role' => $role,
			'created_at' => date("Y-m-d")
		);
		$insert = $this->Model->insert('role', $data);

		if ($insert) {
			$this->session->set_flashdata('msg', 'Role Add Successfully');
			$this->session->set_flashdata('icon', 'success');
			return redirect('Role');
		} else {
			$this->session->set_flashdata('msg', 'Somthin Went Wrong');
			$this->session->set_flashdata('icon', 'error');
			return redirect('Role/create');
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['role'] = $this->Model->select_where('role', $w = array('role_id' => $id));
		// echo '<pre>';
		// print_r($data['role']);
		// exit();
		$this->load->view('admin/role/edit', $data);
	}

	public function update()
	{
		$update_id = $this->input->post('update_id');
		$role = $this->input->post('role');
		$data = array(
			'role' => $role,
			'updated_at' => date("Y-m-d")
		);
		$update = $this->Model->update('role', $data, $w = array('role_id' => $update_id));
		if ($update) {
			$this->session->set_flashdata('msg', 'Role Update Successfully');
			$this->session->set_flashdata('icon', 'success');
			return redirect('Role');
		} else {
			$this->session->set_flashdata('msg', 'Somthin Went Wrong');
			$this->session->set_flashdata('icon', 'error');
			return redirect('Role/create');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Model->delete('role', $w = array('role_id' => $id));
		$this->session->set_flashdata('msg', 'Role Delete Successfully');
		$this->session->set_flashdata('icon', 'success');
		return redirect('Role');
	}


	public function staff_list()
	{
		$data['staffs'] = $this->Model->join('staff', 'role', 'staff.role_id = role.role_id');
		// echo '<pre>';
		// print_r($data['staffs']);
		// exit();
		$this->load->view('admin/staff/list', $data);
	}

	public function staff_create()
	{
		$data['roles'] = $this->Model->select('role');
		// echo '<pre>';
		// print_r($data['roles']);
		// exit();
		$this->load->view('admin/staff/create', $data);
	}

	private function hash_password($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}


	public function staff_insert()
	{
		$password = $this->input->post('password');
		$hash_password =  $this->hash_password($password);
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $hash_password,
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('address'),
			'role_id' => $this->input->post('role'),
			'created_at' => date("Y-m-d")
		);

		$insert = $this->Model->insert('staff', $data);

		if ($insert) {
			$this->session->set_flashdata('msg', 'Staff Add Successfully');
			$this->session->set_flashdata('icon', 'success');
			return redirect('Role/staff_list');
		} else {
			$this->session->set_flashdata('msg', 'Somthin Went Wrong');
			$this->session->set_flashdata('icon', 'error');
			return redirect('Role/staff_create');
		}
	}

	public function staff_edit()
	{
		$id = $this->uri->segment(3);
		$data['staff'] = $this->Model->join_where('staff', 'role', 'staff.role_id = role.role_id', $w = array('staff_id' => $id));
		$data['roles'] = $this->Model->select('role');
		// echo '<pre>';
		// print_r($data['staff']);
		// exit();
		$this->load->view('admin/staff/edit', $data);
	}

	public function staff_update()
	{
		$update_id = $this->input->post('update_id');
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('address'),
			'role_id' => $this->input->post('role'),
			'updated_at' => date("Y-m-d")
		);

		$update = $this->Model->update('staff', $data, $w = array('staff_id' => $update_id));
		if ($update) {
			$this->session->set_flashdata('msg', 'Staff Update Successfully');
			$this->session->set_flashdata('icon', 'success');
			return redirect('Role/staff_list');
		} else {
			$this->session->set_flashdata('msg', 'Somthin Went Wrong');
			$this->session->set_flashdata('icon', 'error');
			return redirect('Role/staff_edit/' . $update_id);
		}
	}

	public function staff_delete()
	{
		$id = $this->uri->segment(3);
		$this->Model->delete('staff', $w = array('staff_id' => $id));
		$this->session->set_flashdata('msg', 'Staff Deleted Successfully');
		$this->session->set_flashdata('icon', 'success');
		return redirect('Role/staff_list');
	}
}
