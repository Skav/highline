<?php 
 if($rank['r_all'] == 'yes' || $rank['r_pa'] == 'yes'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>

    
    <div class="container-fluid">
    <span style="color:brown"><h2>Witaj <?php echo $user['user']; ?>!</h2></span>
    <h3><span style="color:darkcyan">
    Znajdujesz sie na stronie administratora!<br/>
    Możesz tutaj zarzadzac użytkownikami!<br/>
    
    
    
    <h4>Lista Administratorów</h4><br/>
    </h3>
    </span>
    </div>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nick</th>
        <th>Ranga</th>
        <th>Stan konta</th>
        <th>Całkowite przejechane kilometry</th>
        <th>Całkowite spalone paliwo</th>
        <th>Całkowity czas pracy</th>
        <th>Całkowity przewieziony cieżar w tonach</th>
        <th>Ciężarówka</th>
        <th>Moc silnika</th>
        <th>Rejestracja</th>
        <th>Przebieg</th>
        <th>Cześci tuningowe</th>
        <th>Ilość kursów</th>
        <th>W firmie od:</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($list as $row): ?>
        <?php if($row['ranga'] == 'Szef' || $row['ranga'] == 'Admin' || $row['ranga'] == 'Mod'): ?>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['user']?></td>
        <td><?=$row['ranga']?></td>
        <td><?=$row['kasa']?></td>
        <td><?=$row['km']?></td>
        <td><?=$row['litry']?></td>
        <td><?=$row['godz']?></td>
        <td><?=$row['ciezar']?></td>
        <td><?=$row['tir']?></td>
        <td><?=$row['moc']?></td>
        <td><?=$row['rej']?></td>
        <td><?=$row['przebieg']?></td>
        <td><?=$row['tune']?></td>
        <td><?=$row['kursy']?></td>
        <td><?=$row['okres']?></td>
      </tr>
      <?php endif; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><br/>
 
 <br/><br/><br/>
 <span style="color:darkcyan">
     <h4>Lista Użytkowników:</h4><br/>
 </span>
 <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nick</th>
        <th>Ranga</th>
        <th>Stan konta</th>
        <th>Całkowite przejechane kilometry</th>
        <th>Całkowite spalone paliwo</th>
        <th>Całkowity czas pracy</th>
        <th>Całkowity przewieziony cieżar w tonach</th>
        <th>Ciężarówka</th>
        <th>Moc silnika</th>
        <th>Rejestracja</th>
        <th>Przebieg</th>
        <th>Cześci tuningowe</th>
        <th>Ilość kursów</th>
        <th>W firmie od:</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($list as $row): ?>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['user']?></td>
        <td><?=$row['ranga']?></td>
        <td><?=$row['kasa']?></td>
        <td><?=$row['km']?></td>
        <td><?=$row['litry']?></td>
        <td><?=$row['godz']?></td>
        <td><?=$row['ciezar']?></td>
        <td><?=$row['tir']?></td>
        <td><?=$row['moc']?></td>
        <td><?=$row['rej']?></td>
        <td><?=$row['przebieg']?></td>
        <td><?=$row['tune']?></td>
        <td><?=$row['kursy']?></td>
        <td><?=$row['okres']?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><br/>


