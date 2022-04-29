<?php
$insert = false;
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
  //echo "Succes conneting to dbffffffffffffffffffffffffg";

  //Collect post variables

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $contactno=$_POST['contactno'];
    $regno=$_POST['regno'];
    $sql = " INSERT INTO `users`.`users` (`name`, `email`, `pass`, `contactno`, `regno`, `date`)
     VALUES ('$name', '$email', '$password', '$contactno', '$regno', current_timestamp());";
  //echo $sql; 
//Execute the query
  if($con->query($sql) == true){
    //echo "succussfully inserted";

    //Flag for successful insertion
    $insert = true;
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }

  //Close the database connection
  $con->close();
}
 
?>



<!DOCTYPE html>

<html>
    <head>
        <title>Sign up</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
            <style>
                .shape{
                    padding-top:150px;
                    padding-bottom: 200px;
                    padding-left:300px;
                    
                }


                .end {
                      padding: 25px;
                      background-color: #101010;
                      color:#9d9d9d;
                      width: 100%;
                      text-align: center;
                }
                
                .bottom{
                    padding-bottom:50px;
                    padding: auto;
                    
                }
                .bg{
                    width:100%;
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
        <img class="bg" src="signup.jpeg" alt="NERIST">
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
  
  <?php
    if($insert == true)
    {
    echo "<p class='submitMsg'>You have successfully created an account. Please Log in to continue</p>";
    }
    ?>
        <div class="col-xs-6">
            <div  class="panel-primary" >
                <div class="panel-heading">
                    <h4><b>Sign up</b></h4>
                </div>
                <div class="panel-body">
     
     
                    <form class='bottom' action="signup.php" method="post">
                       
                           <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            
                            <div class="form-group">
                               <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                               <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                               <input type="phone" class="form-control" name="contactno" id="contactno" placeholder="Contact">
                            </div>
                            <div class="form-group">
                               <input type="text" class="form-control" name="regno" id="regno" placeholder="Registration Number">
                            </div>
                    
                        
                            <button class='btn btn-primary'>Submit</button>
                        
                    </form>
                </div>
            </div>
            </div>
        </div>
        
        <footer>
            <div class="container end">
                    <p>NERIST NIRJULI,ARUNACHAL</p>
                </div>
        </footer>
    </body>
</html>