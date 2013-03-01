<?php

class News extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('news_model');
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['page_title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'text', 'required');
    $this->form_validation->set_rules('slug', 'text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $data['page']['page_template'] = 'news/create';
      $data['page']['page_data'] = '';
      $this->load->view('templates/html', $data);
    }
    else
    {
      $data['page']['page_template'] = 'news/success';
      $data['page']['page_data']['news_item'] = $this->news_model->set_news();
      $this->load->view('templates/html', $data);
    }
  }


  public function index()
  {
    $data['news'] = $this->news_model->get_news();
    $data['page_title'] = 'News archive';

    $this->load->helper('text');
    $data['page']['page_template'] = 'news/index';
    $data['page']['page_data'] = $this->news_model->get_news();
    $this->load->view('templates/html',$data);
  }

  public function view($slug = FALSE)
  {
    $news_item = $this->news_model->get_news($slug);
    if (empty($news_item))
    {
      show_404();
    }
    $data['page_title'] = ucfirst($slug) . 'news archive ';
    $data['page']['page_template'] = 'news/view';
    $data['page']['page_data']['news_item'] = $news_item;
    $this->load->view('templates/html',$data);
  }

  public function article($slug = FALSE) {
    if (!$slug) {
      //redirect('news/view');
    }
    $article_data = $this->news_model->get_article($slug);
    $data['page_title'] = $article_data['title'];
    $data['page']['page_template'] = 'news/article';
    $data['page']['page_data']['article_data'] = $article_data;
    $this->load->view('templates/html',$data);
  }
}