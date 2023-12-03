<!DOCTYPE html>
<html>
  <head>
    <title>Login form</title>
    <link rel="stylesheet" href="login.css">
    <script>
	
    </script>
    <style>
        html{
    font-family:'mangoose','Poppins',sans-serif;
  } 
  body{
    background-image: linear-gradient(to right,grey,cadetblue);
      color: white;
      background-size: cover;
      }
  .container{
      width: 330px;
      margin: auto;
      margin-top: 10%;
      padding: 5px;
      backdrop-filter: blur(17px) saturate(200%);
      -webkit-backdrop-filter: blur(17px) saturate(200%);
      background-color: rgba(190, 190, 190, 0.44);
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.125);
      border-radius: 10px;
  }
   h3{
    text-align: center;
      color: #ff523b;
      font-weight:90px;
      font-size:  28px;
      font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  .form{
    padding: 15px;
  }
  .form-group {
  position: relative;
  padding: 20px 0;
  margin: auto;
  max-width: 100%;
  }
  
  .form-group input {
  background-color: transparent;
  border: none;
  border-bottom: 1.4px solid #d8d7d7;
  font-size: 18px;
  padding: 10px 0;
  display: block;
  width: 100%;
  }
  
  .form-group label {
  color: #f0eaea;
  font-size: 16px;
  font-weight: 100;
  position: absolute;
  pointer-events: none;
  top: 0;
  transform: translateY(30px);
  transition: all 0.2s ease-in-out;
  left: 0px;
  }
  
  .form-group input:valid,
  .form-group input:focus {
  border-bottom-color: #dddddd;
  outline: none;
  }
  
  .form-group input:valid + label,
  .form-group input:focus + label {
  color: rgb(247, 247, 247);
  font-size: 14px;
  transform: translateY(0);
  }
  .submit{
    background: rgb(218 51 3);
      padding: 7px 0;
      outline: none;
      font-size: 18px;
      width: 100%;
      margin: 17px 0;
      cursor: pointer;
      color: rgb(226, 224, 224);
      border-radius: 5px;
      transition: 0.1s;
      border: 1px solid rgb(218 51 3);
  }
  .submit:hover{
    background: rgba(216, 214, 214, 0.301);
    color: rgb(218 51 3);
  }
  a{
    text-decoration: none;
  }

  .row a{
    color: rgb(218 51 3);
  }
  a:hover{ 
    color: white;
  }
  .last{
    text-align: center;
      padding: 5px;
  }
  .last a{
    margin: 0 10px;
    font-size: 14px;
    color:blue;
  }
  @media only screen and (max-width: 480px){
    body{
      background-image: linear-gradient(to right,magenta,darkblue);
      height: 93px;
      position: relative;

    }
    .container{
      position:absolute;
    }
  }
    </style>
  </head>
  <?php
  
    $servername="localhost";
    $username="root";
    $password="";
    $database="mini_proj";

    $con=mysqli_connect($servername,$username,$password);

    if(isset($_POST['submit'])) {

            mysqli_select_db($con,$database); 

        if($_SERVER['REQUEST_METHOD']=='POST'){

            $u_name=$_POST['username'];
            $password=$_POST['password'];

            $result=mysqli_query($con,"SELECT name,password FROM admin WHERE name ='$u_name'and password='$password'");
            
            if(mysqli_num_rows($result)==0){

                echo"<script>alert('Id or password not matched');</script>";
                

            }
            else{
              echo"<script>alert('Login Sucessful');</script>";
              header('location:admin-dashboard.php');
            }
        }

    }
  
  ?>
  <body>
  <div class="container">
    <div class="form">
      <h3 class="title">Admin Login</h3> <hr>
      <form id="login-form" method="post">
        <div class="form-group">
          <input type="text"  placeholder="username"  id="username" class="form-group" name="username" >
        </div>
        <div class="form-group">
          <input type="password" placeholder="password" id="password" class="form-group" name="password" >
        </div>
        <input type="submit" value="Sign In" class="submit" onclick="login()" name="submit">

          <a href="index.html" style="padding-left: 5px;">Back</a>

         <!---- <a href="accnt.html" style="padding-left: 120px;">Create an Account</a> -->
      
      </form>
    </div>
    <div class="last">
      <a href="#">T&C</a>
      <a href="#">Policy</a>
    </div>
  </div>
</body>
</html> 