


<?php
    
    session_start();
    $sessionid=session_id();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agroprotechtor";

    $fname=$age=$password=$phoneno=$slist=$district=$city="";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM login WHERE MobileNumber='".$sessionid."'"; 
    
    $result=mysqli_query($conn,$sql);
    
    if( mysqli_num_rows($result) == 0) {
    // output data of each row
      Redirect('../login.php', false);
} else {
        $row=mysqli_fetch_assoc($result);
    $phoneno=$row["MobileNumber"];
    $ngo=$row["NGO"];
        $fname=$row["Name"];
        $slist=$row["State"];
        $district=$row["District"];
        $city=$row["City"];
    }
    //IMAGE 
$target_dir = "C:/xampp/htdocs/Temporary/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      /*Connection SHHEHDH*/  
        $sql="INSERT INTO ngo ('MobileNumber','payportal') VALUES ('".$phoneno."','".$target_file."')";
        mysqli_query($conn,$sql);
    
    $result=mysqli_query($conn,$sql);
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
