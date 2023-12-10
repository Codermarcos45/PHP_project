<?php 
include "../model/dao.php";


//register
if(isset($_POST['register'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $email = $_POST['email'];
    $ph = $_POST['ph'];


    $user = array('username'=> $un,'password'=> $pw, 'email'=> $email, 'ph'=> $ph);

    if(addUser($user)) {
        header("location:../view/home.php?user=$un");
    }
}


//login
if(isset($_POST['login'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    $user = array('username'=> $un, 'password'=> $pw);

    $result = login($user);
    if(count($result) > 0) {
        $username = $result['username'];
        header("location:../view/home.php?user=$username");
    }
     else {
        header("location:../view/login.php?$msg=`Usename or Password is invalid`");
    }
}

//add new book
if(isset($_POST['book'])) {
    $book = array('title'=>$_POST['title'], 'author'=>$_POST['author'], 'imageLink'=>$_POST['imageLink'], 'des'=>$_POST['des']);

    if(addBook($book)) {
        header("location:../view/home.php");
    }
}

function getAllBooks() {
    return getBooks();
}




?>