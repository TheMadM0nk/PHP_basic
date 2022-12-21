<?php

require_once 'task_1.php';

class Comment {
    private User $author;
    private Task $task;
    private string $text;

    function __construct($author,$task, $text){
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

   public function getAuthor(): User
    {
        return $this->author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

     public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
}

class TaskService {

    public static function addComment(User $author, Task $task, $text)
    {
        $comment = new Comment($author, $task, $text);
        Task::$comments[] = $comment;
    }
}