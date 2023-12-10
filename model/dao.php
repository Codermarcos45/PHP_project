<?php
require "db.php";

function addUser($user) {
    $con = $GLOBALS['conn'];
    $un = $user['username'];
    $pw = $user['password'];
    $email = $user['email'];
    $ph = $user['ph'];
    $sql = "INSERT INTO users(id,username,password,email,phone) VALUES(null,?,?,?,?);";     //we don't use it for preventing sql injection attack
    $st = $con->prepare($sql);          //preparing sql query 
    $st->bind_param('sssi',$un, $pw, $email, $ph);       //binding the parameters into the prepared sql query ($st)
    
    if($st->execute()) {
        return true;
    }
    else {
        return false;
    }     
}

function addBook($book) {
    $con = $GLOBALS['conn'];
    $title = $book['title'];
    $author = $book['author'];
    $imageLink = $book['imageLink'];
    $des = $book['des'];

    $sql = "INSERT INTO `books` VALUES(NULL,?,?,?,?)";
    $st = $con->prepare($sql);
    $st->bind_param('ssss', $title, $imageLink, $author, $des);

    if($st->execute()) {
        return true;
    } else {
        return false;
    }
}

function login($user) {
    $con = $GLOBALS['conn'];
    $un = $user['username'];
    $pw = $user['password'];

    $sql="SELECT id, username FROM users WHERE username = ? AND password = ?";
    
    $st = $con->prepare($sql);
    $st->bind_param('ss', $un, $pw);
    $st->execute();
    $result=$st->get_result();
    if($result->num_rows>0) {   
        if($row=$result->fetch_assoc()) {
            return $row;
        }
    }   

}

function getBooks() {
    $con = $GLOBALS['conn'];
    $sql = "SELECT * FROM `books`";
    $result = $con->query($sql);

    $books = array();
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    return $books;
}

?>