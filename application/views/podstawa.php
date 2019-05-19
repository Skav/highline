<!DOCTYPE HTML>
<html lang="pl">
<head>
        <base href="http://localhost/kohana/">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>HighLine Spedition</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <script src="assets/js/clock.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
</head>

<body onload="timer();" bgcolor="#4c4c4c">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index/dane">Strona głowna</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://google.pl">Forum<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="index/panel">Panel rozliczeniowy<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="index/tir">Twoja cieżarówka<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="index/naprawa">Mechanik<span class="sr-only">(current)</span></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right" >
      <?php
     if($user['ranga'] == "Szef"){echo'        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:red">Panel administratora<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin/admin">Panel</a></li>
            <li><a href="admin/dodaj">Dodaj użytkownika</a></li>
            <li><a href="admin/usun">Usun użytkowniak</a></li>
          </ul>
        </li>';
     }?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Konto <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index/zmien">Ustawienia konta</a></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index/logout">Wyloguj</a></li>
          </ul>
        </li>
      </ul>
    </div>
     </nav>
  </div>
         
         <div style="color:black" align="right" id="clock"></div>
  
    
    
<br />
</body>
</html>
