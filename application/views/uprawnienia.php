<?php   
  if($rank['r_all'] == 'yes' || $rank['r_u'] == 'yes'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>

<h3><span style="color:darkcyan">
    Znajdujesz sie na stronie administratora!<br/>
    Możesz tutaj zmienac dane użytkowników!
    </h3></span
</div><br/>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nick</th>
        <th>Ranga</th>
        <th>Stan konta</th>
        <th> przejechane kilometry</th>
        <th>spalone paliwo</th>
        <th>czas pracy</th>
        <th>cieżar w tonach</th>
        <th>Ciężarówka</th>
        <th>Rejestracja</th>
        <th>Moc silnika</th>
        <th>Przebieg</th>
        <th>Cześci tuningowe</th>
        <th>Ilość kursów</th>
        <th>Akcja</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($list as $row): ?>
    <form method='post' action=''>
      <tr>
        <?php if($row['ranga'] != "Szef"):?>
          <input type='hidden' name='id' value='<?=$row['id']?>'/></td>
        <td><?=$row['id']?></td>
        <td><?=$row['user']?></td>
        <td><input type='text' name="ranga" /></td>
        <td><input type='number' name="kasa" value="<?=$row['kasa']?>"/></td>
        <td><input type='number' name="km" value="<?=$row['km']?>"/></td>
        <td><input type='number' name="litry" value="<?=$row['litry']?>"/></td>
        <td><input type='number' name="czas" value="<?=$row['godz']?>"/></td>
        <td><input type='number' name="ton" value="<?=$row['ciezar']?>"/></td>
        <td><input type='text' name="tir" value="<?=$row['tir']?>"/></td>
        <td><input type='text' name="rej" value="<?=$row['rej']?>"/></td>
        <td><input type='number' name="moc" value="<?=$row['moc']?>"/></td>
        <td><input type='number' name="przebieg" value="<?=$row['przebieg']?>"/></td>
        <td><input type='text' name="tune" value="<?=$row['tune']?>"/></td>
        <td><input type='number' name="kursy" value="<?=$row['kursy']?>"/></td>
        <td> <input type='submit' class='btn btn-danger' value="Zmień" name="zmien" </td>
        <?php endif; ?>
      </tr>
    </form>
      <?php endforeach; ?>
    </tbody>
  </table>
<br/>
 
 
