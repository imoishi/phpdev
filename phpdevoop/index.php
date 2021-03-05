<?php 
    include 'Book.php';
    // require 'Book.php';

    // echo 'oishi';
    // die();

    // $book1 = new Book('My Book', 9.99);
    //$book1->setTitle('My Book');
    // echo $book1->getTitle();
    // echo '<br>';

    // $book1->setPrice(50);
    // echo  $book1->price;


    //echo $book1->getPrice();
    //echo $book1->title;

    //echo Book::getStore();


    $mag1 = new Magazine('PC World', 4.99, 'october', '2016');
    echo $mag1->getYear();