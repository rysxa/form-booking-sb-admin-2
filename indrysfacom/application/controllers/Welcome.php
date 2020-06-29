<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$data = array(
			'name'		=> $this->input->post('name'),
			'password'	=> $this->input->post('password')
		);

		$this->load->model('m_welcome');

		$cek = $this->m_welcome->ceklogin($data)->num_rows();

		$data_user = $this->m_welcome->ceklogin($data)->row();

		if ($cek > 0) {
			$sess = array(
				'name'		=> $data_user->name,
				'status'	=> TRUE
			);

			$this->session->set_userdata($sess);
			redirect('home');
		} else {
			redirect(base_url());
		}
	}

	public function admin()
	{
		if ($this->session->userdata('status') == TRUE) {
			$this->load->view('admin/home');
		} else {
			redirect(base_url());
		}
		
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}
