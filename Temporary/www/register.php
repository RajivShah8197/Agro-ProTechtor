

  <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    <!-- IS GOOGLE API LINK NEEDED ? @varun-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div id="container">
      <div id="form_box">
        <form method="post" action="auth.php" >
          <p id="form_heading">Register</p>
          <input type="text" placeholder="Enter your Name" name="name" required><br />
          <input type="number" placeholder="Age" required min="14" max="99" name="age"><br /> 
          <input type="password" placeholder="Enter your Password" required name="password"><br />
          <input type="Phone" placeholder="Enter Phone Number" required name="phoneno"><br />
          <!-- Script by hscripts.com -->
<select name="slist" required>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
          <input type="text" placeholder="Enter your District/Taluka" name="district" required><br />
          <input type="text" placeholder="Enter your City" required name="city"><br />
           <label for="checkbox" style="color:white; font-size:25px;">NGO</label><input type="checkbox" id="NGO"  name="ngo"><br />
          <input type="checkbox" id="checkbox"><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
            <input type="hidden" id="unique" name="unique" value="Register">
          <input type="submit" value="Register"><br />
        </form>
      </div>
    </div>
     
  </body>

  </html>
