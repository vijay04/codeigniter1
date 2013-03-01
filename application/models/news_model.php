<?php
class News_model extends CI_Model {

  public function __construct()
  {
      $this->load->database();
  }
  public function get_news($slug = FALSE)
  {
      if ($slug === FALSE)
      {
          $query = $this->db->get('news');
          return $query->result_array();
      }

      $query = $this->db->get_where('news', array('slug' => $slug));
      return $query->result_array();
  }

  public function get_article($id) {
      $query = $this->db->get_where('news', array('id' => $id));
      return $query->row_array();
  }

  public function set_news()
  {
    $this->load->helper('url');

    $data = array(
      'title' => $this->input->post('title'),
      'slug' => $this->input->post('slug'),
      'text' => $this->input->post('text')
    );

    return $this->db->insert('news', $data);
  }
}