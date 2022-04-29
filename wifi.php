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
  

  //Collect post variables
  $name=$_POST['name'];
  
  
  $roll=$_POST['roll_no'];
  $Regno = $_POST['Regno'];
  $Branch = $_POST['Branch'];

  
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $disc=$_POST['disc'];
  $sql = "INSERT INTO `project`.`wifi` (`name`, `roll`, `Regno`, `Branch`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$roll', '$Regno', '$Branch', '$email', '$phone', '$disc', current_timestamp());";

  
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wifi  Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

            <style>
                
   *{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}

.container{
   max-width:75%;
  
   padding: 34px;
   margin :auto;
}
.container h1,p{
   font-family: Itim;
   text-align:center;
}
input, textarea{
  
   width:80%;
   display:block;
   margin:11px  auto;
   font-size:15px;
   padding:5px;
   border:2px solid black;
   border-radius: 6px;
   outline:none;
}




.p{
   font-size: 20px;

}

.pg{
  width:100%;
  position:absolute;
  z-index:-1;
  opacity: 0.8;

}
.btn{
   color:white;
   margin:40px 500px;
   background-color:blue;
   padding:8px 12px;
   font-size: 20px;
   border:2px solid white;
   border-radius:14px;
   cursor:pointer;
}
.submitMsg{
 
   color:green;
}







                </style>
    
</head>

<body>
    <img class="pg" src="wifi.jpg" alt="NERIST" >
    <div class="container">
    <h1>Welcome to Wifi Access Form </h1>
    
    <p>Enter your details to get benifited </p>
    <?php
    if($insert == true){
    echo "<p class='submitMsg'>Thanks for submitting your form.Soon you will be able to access wifi</p>";
  }
    ?>
    <form action="wifi.php" method="post">
          <input type="text" name="name" id="name" placeholder="Enter your name">
         
         
          <input type="text" name="roll_no" id="roll no" placeholder="Enter your roll no">
          <input type="text" name="Regno" id="Regno" placeholder="Enter your registration no">
          <input type="Branch" name="Branch" id="Branch" placeholder="Enter your branch name">
          <input type="email" name="email" id="email" placeholder="Enter your email">
          <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
          <textarea name="disc" id="disc" cols="30" rows="8" placeholder="Enter any more info."></textarea>
          <button class="btn">Submit</button>
        </form>
        <a href="index.php" button class="btn">log out</button></a>
    </div>
    
    

    
</body>
</html> 