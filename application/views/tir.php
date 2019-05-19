   

   <div class="container-fluid">
       <span style="color:brown"><h1>Witaj <?php echo $user['user']; ?>! <br/>
       Oto dane na temat twojej ciezarówki: </h1></span>
    <h2>Twoja ciężarówka:  <span style="color:orange"><?php echo $user['tir']?></h2></span>
    <h2>Moc silnika:  <span style="color:orange"><?php echo $user['moc']?>km</h2></span>
    <h2>Rejestracja:  <span style="color:orange"><?php echo $user['rej']?></h2></span>
    <h2>Przebieg:  <span style="color:orange"><?php echo $user['przebieg']?>km</h2></span>
    <h2>Zainstalowane częsci tuningowe:  <span style="color:orange"><?php echo $user['tune']?>l</h2></span>
   </div>
