<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {
        
        $blogModel = $this->model("BlogModel");
        $data['postList'] =$blogModel->getAll();
        $this->view("blog/list", $data); 
    }

    public function show($id)
    {

      //show single post by ID  
     $blogModel = $this->model("BlogModel");
     $data['post'] = $blogModel->getSingle($id);
     $this->view("blog/single", $data); 
    }

}
