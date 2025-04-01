<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correctPasscode = "12345";
    $enteredPasscode = $_POST["passcode"];

    if ($enteredPasscode === $correctPasscode) {
        $_SESSION["authenticated"] = true;
        header("Location: upload.php");
        $errorMessage = "Login Done !";
        exit();
    } else {
        $errorMessage = "Incorrect passcode. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 9px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<center><h2>Want to Upload Documents ! You are at the Right place Professor.</h2></center>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="imgcontainer">
            <img src="prof.jpg" alt="Avatar" class="avatar" width="50px" height="300px">
        </div>

        <div class="container">
            <label for="uname"><b>Your Name </b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <div class="container">
                <label for="uname"><b>Passcode </b></label>
                <input type="password" id="passcodeInput" name="passcode" placeholder="Enter passcode">
                <button type="submit">Submit</button>
            </div>
        </div>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <center><button type="reset" class="cancelbtn">Reset</button></center>
   
  </div>
</form>

</body>
</html>