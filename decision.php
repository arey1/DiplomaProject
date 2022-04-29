


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NERIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-family: 'Copperplate', fantasy;
    font-size: 70px;
}

p{
    font-size: 25px;
    text-align: center;
    font-family: 'Sriracha', cursive;
}

input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: blue;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    height:100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}

.size{

    padding-top:200px;
}
   
        </style>
</head>
<body>
    <img class="bg" src="decision.jpg" alt="nerist">
    <div class="container">
        <h1>Welcome to NERIST ERP</h3>
        <p>Please choose your operation</p>
       <div class="container size">
        <form action="index.php" method="post">
            
      <a href="travel.php" button type='travel' class='btn btn-primary'> Registration for College Trip</button></a> <br><br>
      <a href="wifi.php" button type='wifi' class='btn btn-primary'>Wi-Fi Registration</button></a>
        </form>
</div>
    </div>
    <script src="index.js"></script>
    
</body>
</html>