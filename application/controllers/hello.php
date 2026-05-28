<?php

class hello extends CI_Controller {

    public function index()
{
    $data['nama'] = "2026";
    $this->load->view('hello_view',$data);
}
    public function namasaya()
{
    $data['nama'] = "lulu";
    $this->load->view('hello_view',$data);
}

}