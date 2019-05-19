

    <div class="container-fluid">
    <span style="color:brown"><h1>Witaj <?php echo $user['user']; ?>!</h1></span>
    <h2>Twoja ciężarówka:  <span style="color:orange"><?php echo $user['tir']?></h2></span>
    <h2>Twoja obecna ranga:  <span style="color:orange"><?php echo $user['ranga']?></h2></span>
    <h2>Twój stan konta:  <span style="color:orange"><?php echo $user['kasa']?></h2></span>
    <h2>Przejechane kilometry:  <span style="color:orange"><?php echo $user['km']?>km</h2></span>
    <h2>Spalone paliwo:  <span style="color:orange"><?php echo $user['litry']?>l</h2></span>
    <h2>Lączny czas pracy: <span style="color:orange"><?php echo $user['godz']?>h</h2></span>
    <h2>Laczna waga ladunków: <span style="color:orange"><?php echo $user['ciezar']?>Ton</h2></span>
    <h2>Jestes w firmie od: <span style="color:orange"><?php echo $user['okres']?></h2></span>
    </div>

