<?php

class CommentsModel extends HomeModel {

    function getAll()
    {
        $statement = self::$db->query(
            "SELECT * FROM comments LEFT JOIN posts ON comments.post_id = posts.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getCommentById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM comments WHERE id_comment= ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function getCommentByPostId(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM comments WHERE post_id= ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function createComment(string $author, string $comment, int $post_id, int $id_comment)
    {
        $statement = self::$db->prepare("INSERT INTO comments(author, comment, post_id, id_comment) VALUES(?,?,?,?)");
        $statement->bind_param("ssii", $author, $comment, $post_id, $id_comment);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
    
}