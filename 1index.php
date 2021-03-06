<!DOCTYPE html>
<html>
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- <link rel="icon" href=logo.jpg type="image/icon type"> -->
   <link href='https://fonts.googleapis.com/css?family=Basic|Bellota|Black Ops One' rel='stylesheet'>
   
   </head>
   <body>
   <img src="logo.jpg"  width="210" height="100" align="left">
    <h1 align="center"> XYZ EVENT MANAGEMENT </h1>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
            <div class="login-form">
                <!--Login-->
                <div class="sign-in-htm">
                   
                    <div class="group">
                        <label for="email" class="label">E-mail Address</label>
                        <input id="email" type="email" class="input" name ="email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name ="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Logged in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Login">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <div id="myBtn">Forgot Password?</div>
                    </div>
                </div>

                


                <!--Register-->
                <div class="sign-up-htm">
                    <form name="register"  action="save.php" method="post">
                     <div class="group">
                        <label for="fname" class="label">first name</label>
                        <input id="fname" type="text" class="input" name ="fname">
                    </div>
                    <div class="group">
                        <label for="lname" class="label">last name</label>
                        <input id="lname" type="text" class="input" name ="lname">
                    </div>
                    
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="email" class="input" name ="email">
                    </div>
                    <div class="group">
                        <label for="mobile" class="label">Mobile Number</label>
                        <input id="mobile" type="tel" class="input" data-type="Number" name ="mobile" maxlength="10">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name ="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name ="repassword">
                    </div>
                    
                    <div class="group">
                        <input type="submit" class="button" value="Register">
                    </div>
                </form>
                </div>
                <!--Forgot Password Pop-up-->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Forgot Password?</h2>
                    </div>
                    <div class="modal-body">
                        <div class="group">
                            <label for="email" class="label">Please enter Email Address of your account</label>
                            <input id="email" type="text" class="input">
                        </div>
                        
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Send">
                    </div>
                    <div class="modal-footer">A Password reset link will be sent to your registered email address.
                    </div>
                    
                    </div>
                
                </div> 
            </div> 
        </div>  
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</body>
</html>