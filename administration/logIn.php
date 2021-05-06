<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dzudo Klub</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>

<body>
 
	<form action="scripts/logIn.php" method="post">
		<div class="main col-sm-4">
      <span class="my-label"></span>    
			<input id="username" name="username" class="form-control" placeholder="Korisničko ime" required >
       <span style="display: none; color: red; " class="error" id="usernameError">
        Korisničko ime može sadržati samo mala slova, brojeve i "_"
       </span>
			<input id="password" name="password" type="password" class="form-control" placeholder="Lozinka" required>
        <span style="display: none; color: red; " class="error" id="passwordError">
          Password može sadržati samo mala slova, velika slova i brojeve
        </span>
			<input type="submit" class="btn form-control" id="confirm" name="confirm" value="Prijavi se">
			
			<?php
				require 'scripts/connection.php';
				if(isset($_GET['error'])){
			?>
					<div class="error">
						<span>Ne postoji nalog sa navedenim korisničkim imenom i lozinkom. Molimo Vas pokušajte opet.</span>
					</div>
			<?php
				}
			?>			
			
			<div id="signIn" style="text-align: center;">
				<a href="signIn.php" class="">Sign In</a>
			</div>
			
		</div>
	</form>
	
 
  <script src="../js/jquery.js"></script>

    <script type="text/javascript">
    function validateUsername(uid){
        var pattern= new RegExp(/^[a-z0-9_]+$/);
        return pattern.test(uid);
    }

    function validatePassword(pass){
        var pattern1= new RegExp(/^[a-z0-9A-Z]+$/);
        return pattern1.test(pass);
    }

    $(document).ready(function(){
        $('#logging').submit(function(event){
            $('#error').css('display', 'none');
            var username = $('#username').val();
            if(validateUsername(username)){
          }
          else{
             $('#usernameError').css('display', 'block');
             event.preventDefault();
          }

          var password = $('#password').val();
          if(validatePassword(password)){
          }
          else{
             $('#passwordError').css('display', 'block');
             event.preventDefault();
          }
        });
    });
    </script>
</body>

</html>
