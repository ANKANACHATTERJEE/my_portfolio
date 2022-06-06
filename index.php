<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     //echo "Success connecting to the db";

    //Collect post variables
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $msg = $_POST['msg'];
    

    $sql = "INSERT INTO `my_portfolio`.`messages` (`name`, `email_id`, `msg`) VALUES ('$name', '$email_id', '$msg');";
     //echo $sql;
     $stmt = mysqli_prepare($con, $sql);
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <title>Portfolio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          
          <div class="navbar-brand">
            <img src="logo.png" alt="" width="50" height="24" class="d-inline-block align-text-top">
            Ankana Chatterjee
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link " href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#continue">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Feedback">Message me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="Home" id="Home">
        <div class="max-width">
            <div class="Home-content">
                <div class="text-1">Hi, I am</div>
                <div class="text-2">Ankana Chatterjee</div>
                <div class="text-3">
                  <p>I am a <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                </div>
                <br><br><br><br>
                <div class="my-icons">
                  <a href="https://www.facebook.com/anankana.chatterjee.165470/" class="fa fa-facebook" target="_blank"></a>
                  <a href="https://www.instagram.com/_._ankana_._/?hl=en" class="fa fa-instagram" target="_blank"></a>
                  <a href="https://www.linkedin.com/in/ankana-chatterjee-4102ab1bb/" class="fa fa-linkedin" target="_blank"></a>
                </div>
                
              </div>
            </div>
        </div>
      </div>
      <div class="About" id="About">
        <div class="max-width">
          <div id="About-title">
              Let me introduce myself
          </div>
          <img src="mypic2.jpeg">
          <div id="About-content">
            People call me Ankana. At present, I am a IIIrd year student at Vellore Institute of Technology as a Computer Science Engineering student. You can call me a programmer, web developer, an experimental chef, a dancer and a fashion enthusiast. Well, I would like to experiment as much as I can, on food and my life. I am very passionate about developing new technical skills. <br><br>
            I have been coding in languages such as Python, C, C++ and Java since the past 5 and a half years. Recently, Web development and Android development has captured my attention. I want to do everything possible to learn these skills and become a professional in this field. I already know SQL, HTML and CSS, and I am working hard to improve my Javascript and PHP  coding skills. I created this page using Bootstrap as well. Hope you like it!
          </div>
      </div>     
      </div>
      <div class="container-fluid py-5" id="continue">
        <div class="row">
          <div class="col">
            <h3 style="color:black; font-weight: bold;">PROFILE</h3>
            <br>
            <br>
            <div class="mt-4 mb-3">
              <div class="title" style="font-weight: bold; font-size: 150%;">Full Name:</div>
              <div class="sub-title" style="font-size: 125%;">Ankana Chatterjee</div>
            </div>
            <div class="mt-4 mb-3">
              <div class="title" style="font-weight: bold; font-size: 150%;">Birth Date:</div>
              <div class="sub-title" style="font-size: 125%;">16th July, Every Year</div>
            </div>
            <div class="mt-4 mb-3">
              <div class="title" style="font-weight: bold; font-size: 150%;">College Name:</div>
              <div class="sub-title" style="font-size: 125%;">Vellore Institute of Technology, Chennai</div>
            </div>
            <div class="mt-4 mb-3">
              <div class="title" style="font-weight: bold; font-size: 150%;">Email:</div>
              <div class="sub-title" style="font-size: 125%;">ankana.chatterjee2020@vitstudent.ac.in</div>
            </div>
            <div class="mt-4 mb-3">
              <div class="title" style="font-weight: bold; font-size: 150%;">Full Name:</div>
              <div class="sub-title" style="font-size: 125%;">+91
                <span id="clickToReveal" style="color: black; text-decoration: none; font-size: 90%;">CLICK TO REVEAL</span>
              </div>
            </div>
          </div>
          <div class="col">
            <h3 style="color:black; font-weight: bold;">SKILLS</h3>
            <br>
            <br>
            <p style="font-size: large;">I am extremely passionate about developing and designing amazing websites. I also love to code.</p>
            <h5>HTML,CSS,Javascript</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>PHP & MySQL</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>WordPress</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>Python</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>C/C++</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>Java</h5>
            <div class="progress mt-2 mb-3">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="Feedback" id="Feedback">
        <div class="max-width">
          <div id="Feedback-title">
              Message Me
          </div>
          <div id="myform" style="color: white; font-size: 200%; text-align: center;">
            <div class="container" >
              <form action="#Home" name="form">
                <div class="form-group">
                    <input type="text" name="naam" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter your Email Id">
                </div>
                <div class="form-group">
                    <textarea style="height: 15vw" type="text" name="message" placeholder="Enter your message"></textarea>
                </div>
                <button class="btn">Send</button>
            </form>
            </div>
        
    </div>
      </div>     
      </div>
      
<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
  <div class="footer-copyright text-center py-3">Created by <b>Ankana Chatterjee</b> | © 2022 Copyright 
    
  </div>
  <div>
    <a href="https://www.facebook.com/anankana.chatterjee.165470/" class="fa fa-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/_twilight_queenbae_/" class="fa fa-instagram" target="_blank"></a>
    <a href="https://www.linkedin.com/in/ankana-chatterjee-4102ab1bb/" class="fa fa-linkedin" target="_blank"></a>
  </div>
    
  
</footer>
<!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script src="script.js"></script>
  </body>
</html>
