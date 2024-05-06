<?php
error_reporting(0);
session_start();
session_destroy();



?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mangement System</title>
    <link rel="stylesheet" href="style.css">


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <img class="ofppt_logo" src="ofppt.png" alt="">
        
        <label class="logo">OFPPT</label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Admision</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>

    </nav>
    <div class="section1">
        <label class="img-text">We Teach Students With Care </label>
      <img class="main_img" src="image1.jpg" >  
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <img class="welcome_img" src="image2.jpeg">
            </div>
            <div class="col-md-8">
                <h1>Welcome To ofppt</h1>
                <p>Lorem, ipsum dolor 
                    sit amet consectetur adipisi
                    cing elit. Ipsa tempore accusamus
                    , fugiat voluptatum alias amet laboru
                    m perferendis eligendi natus hic quasi
                    , harum fuga itaque esse. Veniam accusan
                    tium ea libero animi?</p>
            </div>
        </div>
    </div>

    <center>
        <h1>Our Teachers</h1>

    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="teacher1.jpeg">
                <p>Lorem ipsum dolor sit a
                    met consectetur adipis
                    </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="teacher2.jpeg">
                <p>Lorem ipsum dolor sit a
                    met consectetur adipis
                    </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="teacher3.jpg">
                <p>Lorem ipsum dolor sit a
                    met consectetur adipis
                    </p>
            </div>
        </div>
    </div>



    <center><h1>Our Courses</h1></center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="cyber.jpeg">
                <h3>Cyber Security</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="resau.png">
                <h3>Resaux informatique</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="web.jpeg">
                <h3>Web Development</h3>
            </div>
        </div>
    </div>


    <center><h1>Admision Form</h1></center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text" >Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text" >Phone</label>
                <input class="input_deg" type="phone" name="phone" required>
            </div>
            <div class="adm_int">
                <label class="label_text" >Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_int">
                <input class="btn btn-primary" type="submit" id="submit" value="apply" name="apply" >
            </div>
        </form>
    </div>
<footer>
    <h2> All @copyright by The Responsable </h2>
</footer>
</body>
</html>