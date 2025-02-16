<?php

require_once 'Controller.php';
require_once 'models/book.php';
class BookController extends Controller
{
    public static function index()
    {
        $query_string = $_SERVER['QUERY_STRING'] ?? NULL;
        
        if(isset($query_string))
        {
            $filter = explode('=', $query_string);
            $data = Book::filter($filter[1]);
            return self::view("views/book.php", $data);
        }
        
        $listbook = Book::get();
        return self::view("views/book.php", $listbook);
    }
}

BookController::index();
