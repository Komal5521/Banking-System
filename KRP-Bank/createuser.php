<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRP Bank- Create User</title>
    <link rel="stylesheet" href="createuser.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      
      .card{
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
      }
      .card:hover{
        transform: scale(1.1);
        box-shadow: 5px 5px 35px rgba(0,0,0,0.3);
      }
    </style>
    
</head>
<body>
<?php
include 'connectdb.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User has been added');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
      
    <!--navigation bar-->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning py-3 navigation ">
            <a class="navbar-brand" href="#">KRP Bank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-4">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item ml-4">
                  <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
                <li class="nav-item ml-4">
                  <a class="nav-link" href="about.html">ABOUT</a>
                </li>
              </ul>
            </div>
          </nav>
     </header>
    <br><br><br><br><br>


     <!-- user page card -->

     <section class="usercard">
       <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
           <div class="card ">
             <div class="card-header bg-dark text-white text-center">
                 <h3>Create a User</h3>
             </div>
             <div class="card-body bg-light">
                 <form action="" class="userform" method="post">
                   <div class="form-group">
                     <input type="text" name="name" class="form-control" placeholder="Name" required>
                   </div>
                   <div class="form-group">
                     <input type="email" name="email" class="form-control" placeholder="Email" required>
                   </div>
                   <div class="form-group">
                     <input type="number" name="balance" class="form-control" placeholder="Balance" required>
                   </div>
                   <div class="text-center button">
                     <input type="submit" value="CREATE" name="submit" class="btn btn-warning" style="font-size:1.2rem; ">
                    
                     
                   </div>
                 </form>
               </div>
            </div> 
         </div>
        </div>  
        
        </div>
     </section>

       <!-- footer  -->
       <footer class="footer" style=" background-color: black;
      font-size:12px;
      height:100px;
      color:white;
      text-align: center;
      margin-top: 50px;
      padding-top: 35px;
      ">
       <p style="font-size: 20px;">Copyright 2021. All rights reserved. Made by - KOMAL PATIL</p>
      </footer>
      

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>