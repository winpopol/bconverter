<!DOCTYPE html>
<html lang="en">
<head>
	<title>SYSTEM CONVERSION </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="WINCENT PAUL GALLARDO"
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" method="post" action="">
					<span class="contact2-form-title">
						System Conversion.
					</span>

					<div class="wrap-input2 validate-input" data-validate="Please enter a number">
						<input class="input2" name="number" type="text">
						<span class="focus-input2" data-placeholder="Enter a number"></span>
					</div>


					<div class="wrap-input2">
						<textarea disabled class="input2" name="message"><?php
  
  $number = isset($_POST['number']) ? $_POST['number']:"";
 
  if (isset($_POST['d2b'])) {
      echo decbin($number);
  }
  if (isset($_POST['d2o'])) {
      echo decoct($number);
  }
  if (isset($_POST['d2h'])) {
      echo dechex($number);
  }
  if (isset($_POST['b2d'])) {
      echo bindec($number);
  }
  if (isset($_POST['o2d'])) {
      echo octdec($number);
  }
  if (isset($_POST['h2d'])) {
      echo hexdec($number);
  }
 
  ?></textarea>
						<span class="focus-input2"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2b" value="Decimal to Binary" />
                        </div>

                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="b2d" value="Binary to Decimal" />
                        </div>
                        
                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2o" value="Decimal to Octal" />
                        </div>
                        
                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="o2d" value="Octal to Decimal" />
                        </div>

                        
                        
                        
</div>
<div class="container-contact2-form-btn">
<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="d2h" value="Decimal to Hexadecimal" />
                        </div>                        

                        <div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <input type="submit" name="h2d" value="Hexadecimal to Decimal" />
                        </div>

                        
                        
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>
