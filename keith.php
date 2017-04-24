<?php
	if (isset($_POST['btn'])){
		$fh = fopen( 'heyoo.txt', 'w' ); 
		$fp = fopen('reset.txt', 'a');
		fwrite($fp, '1');
		fclose($fp);
		fclose($fh);
	}
?>
<!DOCTYPE hmtl>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
      body {
          background-color: #F4D8BB;
      }

      h1 {
          color: white;
          font-family: 'Montserrat', sans-serif;
          font-weight: lighter;
          font-size: 50px;
          text-align: center;
      }

      h2 {
          font-family: 'Montserrat', sans-serif;
          font-weight: lighter;
          font-size: 20px;
          text-align: center;
      }

      p {
          font-family: 'Montserrat', sans-serif;
          font-weight: lighter;
          font-size: 15px;
          text-align: center;
      }

      div  {
          text-align: center;
      }

  </style>


</head>


<body>
<title>Keith Campbell's Oh Crap! App</title>
<h1>Mr. Campbell's Control Center</h1>
<h2>This is the amount of people having an "Oh Crap!" moment</h2>
    <p>
        <!--VASANTH PUT THE PYTHON SCRIPT HERE-->
    </p>
    <div>
		<form class="mui-form" method="post" action="keith.php" target="votar">
			<!--<input type="email" name="email" id="email" class="waves-effect waves-light btn">RESET</a>-->
			<button id="myBtn" class="waves-effect waves-light btn" style="align: center;" type="submit" name = "btn">RESET</button>
		</form>
    </div>



</body>

</html>
