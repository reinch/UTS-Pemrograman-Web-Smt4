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