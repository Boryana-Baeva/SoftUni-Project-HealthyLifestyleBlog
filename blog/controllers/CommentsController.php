<?php

class CommentsController extends BaseController
{

    function index()
    {

        $this->comments = $this->model->getAll();
    }

    function createComment()
    {
        if ($this->isPost) {
            $author = $_POST['author'];
            if (strlen($author) < 1) {
                $this->setValidationError("author", "Name of the author cannot be empty!");
            }
            $comment = $_POST['comment'];
            if (strlen($comment) < 1) {
                $this->setValidationError("comment", "Comment cannot be empty!");
            }
            if ($this->formValid()) {
                $commentId = $_SESSION['id_comment'];
                $post_id = $_POST['post_id'];
                if ($this->model->createComment($author, $comment, $commentId, $post_id)) {
                    $this->addInfoMessage("Done");
                    $this->redirect("comments");
                } else {
                    $this->addErrorMessage("Error: Cannot post comment!");
                }
            }
        }
    }
}