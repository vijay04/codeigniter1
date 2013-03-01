<?php

  class Page extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
    }
    public function index() {
      $this->template->load
      $this->load->view('templates/template');
    }

}