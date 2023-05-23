<!-- Proses Logic dari sistem -->

<?php

class Blog extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    public function index()
    {
        // prosess menampilkan data dari database read seluruh data blog

        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        // Proses Select Data dari database untuk detail blog

        $query = $this->Blog_model->getSingleBlog($url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
        // print_r($url);
    }
}
