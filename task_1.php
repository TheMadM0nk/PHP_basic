<?php

require_once 'task_2.php';

// class User Взят из методички.
class User {
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;

        $this->dateCreated = new DateTime();
    }

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }

    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }

}

class Task {
    private User $user;
    private string $description = '';
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private static int $priority_counter = 0;
    private bool $isDone;

    public static array $comments = [];

    public function __construct(string $description, User $user)
    {
        $this->user = $user;
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->priority = self::$priority_counter += 1;
        $this->isDone = false;
    }

    public function markAsDone():void
    {
        $this->isDone = true;
        $this->setDateDone(new DateTime());
        $this->setDateUpdated(new DateTime());
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): int
    {
       return $this->priority = $priority;
    }
}

// Тестирование

$user = new User('Ivan', 'a@f.v');

$task1 = new Task('first task', $user);
$task2 = new Task('second task',$user);
$task3 = new Task('third task', $user);

print_r($task1);
print_r($task2);
print_r($task3);

$task2->setDescription('Edited');
$task3->markAsDone();

print_r($task3);


TaskService::addComment($user, $task2, 'beleberda');

print_r($task2::$comments);
