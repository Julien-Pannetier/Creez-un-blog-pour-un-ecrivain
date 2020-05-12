<?php
class Comment extends Model {

    protected $id;
    protected $postId;
    protected $author;
    protected $authorEmail;
    protected $comment;
    protected $reported;
    protected $moderated;
    protected $date;

    // Constructor
    public function __construct(array $comment) {
        $this->hydrate($comment);
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getPostId() {
        return $this->postId;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getAuthorEmail() {
        return $this->authorEmail;
    }

    public function getComment() {
        return $this->comment;
    }

    public function getReported() {
        return $this->reported;
    }

    public function getModerated() {
        return $this->moderated;
    }

    public function getDate() {
        return $this->date;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setPostId($postId) {
        $this->postId = $postId;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setAuthorEmail($authorEmail) {
        $this->authorEmail = $authorEmail;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }

    public function setReported($reported) {
        $this->reported = $reported;
    }

    public function setModerated($moderated) {
        $this->moderated = $moderated;
    }

    public function setDate($date) {
        $this->date = $date;
    }
}