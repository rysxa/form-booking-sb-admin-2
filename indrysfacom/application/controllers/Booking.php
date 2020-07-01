<?php

class Booking extends CI_Controller {
    public function order($name = '')
    {
        $data['judul'] = 'Form Booking Order';
        $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('booking/order');
        $this->load->view('templates/footer');
    }

    public function order_wa($name = '')
    {
        $data['judul'] = 'Form Booking Order';
        $data['name'] = $name;
        $this->load->view('templates/header', $data);
        $this->load->view('booking/order-wa');
        $this->load->view('templates/footer');
    }

    public function team($name = '')
    {
        $data['judul'] = 'Form List Team';
        $data['name'] = $name;

        $data['employees'] = $this->m_booking->getDataTeam()->result();
        $this->load->view('templates/header');
        $this->load->view('team/v_nameteam', $data);
        $this->load->view('templates/footer');

        // $this->load->model('m_booking');
    }
}