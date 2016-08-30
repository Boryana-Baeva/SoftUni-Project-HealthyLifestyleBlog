<?php

class HomeController extends BaseController
{
    function index() {
        $lastPosts = $this->model->getLastPosts(5);
        $this->posts = array_slice($lastPosts,0,3);
        $this->sidebarPosts = $lastPosts;
    }
	
	function view(int $id) {
        $recentPost = $this->model->getPostById($id);
        if(!$recentPost){
            $this->addErrorMessage("Error: Invalid post ID!");
            $this->redirect("");
            
        }
        $this->post = $recentPost;
    }
}
