<?php
 if($rank['r_all'] == 'yes' || $rank['r_du'] == 'yes'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>

    
        <div class="container-fluid">
    <span style="color:brown"><h2>Witaj <?php echo $user['user']; ?>!</h2></span>
    
    <h3><span style="color:darkcyan">
    Znajdujesz sie na stronie administratora!
    Możesz tutaj ususwać użytkowników!
    </h3></span>
        </div>
    
            <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nick</th>
        <th>Ranga</th>
        <th>Stan konta</th>
        <th>Czałkowite przejechane kilometry</th>
        <th>Całkowite spalone paliwo</th>
        <th>Całkowity czas pracy</th>
        <th>Całkowity przewieziony cieżar w tonach</th>
        <th>W firmie od:</th>
        <th>Akcja</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($list as $row): ?>
        <form method="post" action="">
      <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
      <input type="hidden" name="user" value="<?php echo $row['user']?>"/>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['user']?></td>
        <td><?=$row['ranga']?></td>
        <td><?=$row['kasa']?></td>
        <td><?=$row['km']?></td>
        <td><?=$row['litry']?></td>
        <td><?=$row['godz']?></td>
        <td><?=$row['ciezar']?></td>
        <td><?=$row['okres']?></td>
        <td>
            <input type="submit" class="btn btn-danger" name="usun" value="Usuń"/>
        </td>
      </tr>
        </form>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><br/>
 </form>
    </h2>
