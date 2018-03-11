</!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../style/login.css">
    
  </head>

  <body>
      <div class="cover">
          <div class="bg">
  <div id="container">
      <div id="form_box">
        <form method="get" action="auth.php">
          <p id="form_heading">Login</p>
          <input type="text" placeholder="Enter your Name" name="name" required><br />
           <input type="password" placeholder="Enter your Password" name="password" required><br/>
            <input type="hidden" id="unique" name="unique" value="Login">
            <input type="submit" name="submit" value="Login"><br />
          </form>
      </div>
    </div>
      </div>
          </div>
    </body>
</html>