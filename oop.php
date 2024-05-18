<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No available copies of '{$this->title}'." . PHP_EOL;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

// Create 2 books with the properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members 
$member1 = new Member("borrow  book 1");
$member2 = new Member("borrow  book 2");

// Apply Borrow book method 
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Result
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}" . PHP_EOL;
?>