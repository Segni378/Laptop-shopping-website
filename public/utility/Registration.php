
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <!-- <link rel="" href="form.js"> -->
    <script src="form.js" defer></script>
    <title>Doc</title>
</head>
<body>
  <button id="open">
    Open
</button>
    <form>
        
        <div class="home-page-signup-container">
          <button id="close" onclick="togglepopup()">&times;
          </button>
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn">Submit</button>
        </div>
        <div class="home-page-signin-container">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form> 
</body>