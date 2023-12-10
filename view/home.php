<?php
include "header.php" ; 
include "../controller/usercontroller.php";

$allBooks = getAllBooks();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-color: #9EC8B9;
        }
        .container {
        background-color: #9EC8B9 !important;
        }
        .heading h3{
            text-align: center;
            padding : 1rem;
            font-size: 2rem;
        }
        .main-content {
            padding : 0.5rem;
            border : 0.25rem solid #fff;
            border-radius : 6px;
        }
        .row {
            display : flex !important;
            flex-wrap : wrap !important;
            gap : 1rem !important;
            justify-content : space-evenly;
        }
        .card {
            max-width : 250px;
            padding : 0.5rem;
            max-height : 450px;
        }
        .card img {
            height : 40%;
        }
        .card-title, .card-author {
            font-weight : bold;
            font-size : 0.85rem;
        }
        .book-btn {
            display : flex;
            justify-content : flex-end;
            padding : 0rem 2rem 0.5rem 2rem;
        }
        .book-btn a{
            color : green !important;
            font-weight : bold;
        }
        .book-btn a:hover {
            color : #fff !important;
        }
        .card-text {
            font-size : 0.75rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h3> Welcome
            <?php if(!empty($_GET['user'])) {
                echo $_GET['user'];
            } ?>
            </h3>
        </div>
        <div class="book-btn">
            <a href="book-form.php" class="btn btn-outline-success">Add New Book</a>
        </div>
        <div class="main-content">
            <div class="row">
            <?php for($i=0;$i<count($allBooks);$i++) { ?>
                <div class="card">
                    <img src="<?= $allBooks[$i]['imageLink'] ?>" alt="book-image">
                    <div class="card-body">
                        <div class="card-title"><?= $allBooks[$i]['title'] ?></div>
                        <div class="card-author"><i>By <?= $allBooks[$i]['author'] ?></i></div>
                        <div class="card-text"><?= $allBooks[$i]['desm'] ?></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include "footer.php" ?>