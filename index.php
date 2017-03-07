<?php
	$fp = fopen('heyoo.txt', 'a');
	fwrite($fp, '1');
	fclose($fp);
?>
<!DOCTYPE html>
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
    <h1>Having Trouble?</h1>
    <h2>Press here!</h2>
	<div>
	<form class="mui-form" method="post" action="index.php" target="votar"  class="waves-effect waves-light btn-large">
    <button id="mybtn" class="waves-effect waves-light btn" type="submit">NUT</button>
	</form>
	</div>
    <p id="test"></p>

    <script src="js/ohjava.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCCaN9mzW605Jj4ETpg24_WdUmZ26vkrVA",
            authDomain: "keith-campbell-oh-crapp.firebaseapp.com",
            databaseURL: "https://keith-campbell-oh-crapp.firebaseio.com",
            storageBucket: "keith-campbell-oh-crapp.appspot.com",
            messagingSenderId: "391577714832"
        };
        firebase.initializeApp(config);
    </script>



</body>


</html>
