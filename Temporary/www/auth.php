<?php

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "agroprotechtor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $fname=$age=$password=$phoneno=$slist=$district=$city="";
$ngo=0;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function call_sessionStart($phoneno,$ngo){
    session_start();
    session_id($phoneno);
    if($ngo==1){
        redirect("Folio/index.php");
    }
    
}
if ($_SERVER['REQUEST_METHOD']  == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $fname = test_input($_POST["name"]);
    $age = test_input($_POST["age"]);
  $password = md5(test_input($_POST["password"]));
  $phoneno = test_input($_POST["phoneno"]);
  $slist = test_input($_POST["slist"]);
  $district = test_input($_POST["district"]);
  $city = test_input($_POST["city"]);
  if(isset($_POST["ngo"])){
      $ngo=1;
  }
      
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$district)) {
      $nameErr = "Only letters and white space allowed"; 
    }
      if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $nameErr = "Only letters and white space allowed"; 
    }
}


    
    $sql="INSERT INTO login(Name,MobileNumber,State,City,District,NGO,Age,Password)VALUES('" .($fname). "','" .($phoneno). "','" .($slist). "','" .($city). "','" .($district). "','" .($ngo). "','" .($age). "','" .($password). "')";
    
    if(mysqli_query($conn,$sql)){
        
        call_sessionStart($phoneno,$ngo);
        //REDIRECT ...
    }
}
else if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $fname=test_input($_GET["name"]);
    $password=md5(test_input($_GET["password"]));
    $sql="SELECT * FROM login WHERE Name='".$fname."' and Password='".$password."'"; 
    
    $result=mysqli_query($conn,$sql);
    
    if( mysqli_num_rows($result) == 0) {
    // output data of each row
      Redirect('login.php', false);
} else {
        $row=mysqli_fetch_assoc($result);
    $phoneno=$row["MobileNumber"];
    $ngo=$row["NGO"];
    call_sessionStart($phoneno,$ngo);
}
    
    mysqli_close();
}
?>