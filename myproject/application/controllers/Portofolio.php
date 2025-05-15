<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Raihan\'s CV';
        $this->load->view('templates/header', $data);
        $this->load->view('hero');
        $this->load->view('about');
        $this->load->view('resume');
        $this->load->view('portfolio');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}

public function send_message() {
    $this->load->library('email');

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    // Configure email settings
    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'your_smtp_host',
        'smtp_port' => 587,
        'smtp_user' => 'your_smtp_user',
        'smtp_pass' => 'your_smtp_pass',
        'mailtype' => 'text',
        'charset' => 'iso-8859-1'
    );
    $this->email->initialize($config);

    $this->email->from($email, $name);
    $this->email->to('sartareza51@gmail.com');
    $this->email->subject($subject);
    $this->email->message($message);

    if ($this->email->send()) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent. Thank you!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send message.']);
    }
}