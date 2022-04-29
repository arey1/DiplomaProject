<?php

$login = false;
  if(isset($_POST['name'])){
    //Set connection variable
  $server = "localhost";
  $username = "root";
  $password = "";
 //Create a database connection
  $con = mysqli_connect($server, $username, $password);
//Check for connection issues
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error());
  }
 
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $sql = "Select * from users where email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;

                header("location: decision.php");
            } 
            else{
                echo "<p class='submitMsg'>Invalid Credentials</p>";
            }
        }
        
    } 
    else{
        echo "<p class='submitMsg'>Invalid Credentials</p>";
    }
} 

 
?>

<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <style>
                .shape{
                    padding-top:200px;
                    padding-bottom: 215px;
                    padding-left:350px;
                }
                .end {
                      padding:25px;
                      background-color: #101010;
                      color:#9d9d9d;
                      width: 100%;
                      text-align: center;
                }
                
                .bottom{
                    padding-bottom: 50px;
                }
                .bg{
                    width: 100%;
                    height:100%;
                    position: absolute;
                    z-index:-1;
                }
                .submitMsg{
                     color:green;
                } 
            </style>
    </head>
    <body>
    <img class="bg" src="login.jpeg" alt="NERIST">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">NERIST Homepage</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a>
                    </li>
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container shape">

   
    
        <div class="col-xs-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <h4><b>Log in</b></h4>
                </div>
                <div class="panel-body">
                    <p style="color:white">Log in for your query</p>
                    <form class='bottom' action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name='email' id='email'  placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name='pass' id='pass' placeholder="Password"><br>
                        </div>
                       <a  href="decision.php" button type='submit' class='btn btn-primary'>Log in</button> </a>
                    </form>
            </div>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account? <a href="signup.php">Register</a> </p>
                </div>
            </div>
        </div>
        <footer>
            <div class="container end">
                    <p>NERIST,Nirjuli,Arunachal Pradesh</p>
                </div>
        </footer>
            
    </body>
</html>
