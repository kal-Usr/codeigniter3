<?php

class Blog_model extends CI_Model 
{
    public function getBlogs() 
    {
        return $this->db->query("SELECT * FROM blog");
    }

    public function getSingleBlog()
    {
        return $this->db->query('SELECT * FROM blog WHERE url = "' . $url . '"');
    }
}