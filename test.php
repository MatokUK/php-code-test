<?php
include "src/GetBookList.php";

$api = new \Matok\BookApi\GetBookList(new \Matok\BookApi\Converter\NullConverter());

$books = $api
    ->filter('author', 'Robert C. Martin')
    ->filter('title', 'clean')
    ->getBooks(5);
var_dump($books);