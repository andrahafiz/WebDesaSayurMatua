<?php
defined('BASEPATH') or exit('No direct script access allowed');

class test extends CI_Controller
{
    public function index()
    {
        $this->load->view('emailaktif');
    }
}
