<?php 
 if($user['ranga'] == 'Szef'){}
                else{
                    header('Location: dane');
                    exit;
                }
 ?>





<!DOCTYPE HTML>
<html lang="pl">
<head>
        <base href="http://localhost/kohana/">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>HighLine Spedition Admin Panel</title>
        
        <script>
        
        function timer()
        {
        var t = new Date();
        var day = t.getDay();
        var month = t.getMonth()+1;
        var year = t.getFullYear();
        
        var hour = t.getHours();
        var minute = t.getMinutes();
        var second = t.getSeconds();
        if (second < 10) "0"+second;
        
        document.getElementById("clock").innerHTML = day+"/"+month +"/"+year+" | "+hour+":"+minute+":"+second;
        
        setTimeout("timer()", 1000);
        
        
        }
        </script>
</head>

<body onload="timer();" bgcolor="#4c4c4c">
    
    <div style="color:white" align="right" id="clock"></div>
    
    <span style="color:aqua"><h1>Witaj <?php echo $user['user']; ?>!</h1></span>
    <h2><span style="color:orange">Znajdujesz sie na stronie administratora!</h2></span>
    <h2><span style="color:orange">Możesz tutaj zarzadzac użytkownikami!</h2></span>
    
    <form>
         Zarobione Pieniadze<input type="text" name="id" value="" /><br/>
          <input type="submit" name="Znajdz" value="Szukaj" />
    </form>
    
    <h2>Twoja ciężarówka:  <span style="color:orange"><?php echo $user['tir']?></h2></span>
    

    
    <br/><br/><br/>
<br />
<h3>
<a href="index/dane"> <span style="color:yellow">Przejdz na strone główna</a><br/>
<a href="admin/dodaj"> <span style="color:yellow">Dodaj użytkownika</span></a><br/>
<a href="admin/usun"> <span style="color:yellow">Usun użytkownika</span></a><br/>
<a href="admin/logout"> <span style="color:yellow">Wyloguj</span> </a><br/>
</h3>
</body>
</html>