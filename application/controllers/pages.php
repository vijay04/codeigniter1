<?php

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    redirect('pages/view');
  }

  public function view($page='home')
  {
    if ( ! file_exists('application/views/pages/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        show_404();
    }
    $data['page']['page_template'] = 'pages/'. $page;
    $data['page']['page_data'] = '';

    $data['page_title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/html',$data);
  }
}
