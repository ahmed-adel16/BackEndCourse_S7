<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <style>
        :root {
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            border-radius: 10px;
        }
        span {
            color: #626262;
        }
        h1 {
            color:#8926E2;
        }
        input {
            display: block;
            margin-bottom: 10px;
        }
        button {
            border: none;
            padding: 10px;
            background-color: #8926E2;
            color: white;
            border-radius: 10px;
        }
    </style> -->
</head>
<body>
    <img src="images/image.jpeg" alt="person's image">
    <h1>Ahmed Adel Mohamed</h1>
    <span>ahmed.be1556@gmail.com</span>
    <h2>about</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum exercitationem, cumque nihil optio esse repudiandae. Illum laborum ab a porro, inventore ratione quas minima, doloribus impedit, aliquid dolores laudantium mollitia?</p>
    <h4>Skills:</h4>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
        <li>Python</li>
        <li>Java</li>
        <li>CPP</li>
    </ul>
    <h2>Projects</h2>
    <ul>
        <li><a href="">Project 1</a></li>
        <li><a href="">Project 2</a></li>
        <li><a href="">Project 3</a></li>
        <li><a href="">Project 4</a></li>
    </ul>
    <h2>Contact me</h2>
    <div class="container">
        <form action="handel_form.php" method="POST" enctype="multipart/form-data">
           <label class ='mt-2'><b>Name</b></label>
            <input type="text" id="name" name = "name" class="form-control">
            <?php
            // name validation message
            if(isset($_SESSION["name_error"])){
                echo "<p class='text-danger'>{$_SESSION["name_error"]}</p>";
                unset($_SESSION["name_error"]);
            }
            ?>

            <label class = 'mt-2' for="email"><b>Email</b></label>
            <input type="text" id="email" name = "email" class="form-control"> 
            <?php
                if(isset($_SESSION["email_error"])){
                    echo "<p class='text-danger'>{$_SESSION["email_error"]}</p>";
                    unset($_SESSION["email_error"]);
                }
            ?>

            <label class = 'mt-2' for="job"><b>job</b></label>
            <input type="text" id="job" name = "job" class="form-control">
            <?php
                // job validation message
                if(isset($_SESSION["job_error"])){
                    echo "<p class='text-danger'>{$_SESSION["job_error"]}</p>";
                    unset($_SESSION["job_error"]);
                }
            ?>

            <label class = 'mt-2' for="picture"><b>picture</b></label>
            <input type="file" id="picture" name = "picture" class="form-control">
            <?php
                // picture validation message
                if(isset($_SESSION["file_error"])){
                    echo "<p class='text-danger'>{$_SESSION["file_error"]}</p>";
                    unset($_SESSION["file_error"]);
                }
            ?>
 
            <button class="btn btn-success mt-2" type="submit" >Send</button>
        </form>
    </div>
</body>
</html>