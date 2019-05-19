<?php 
 if($rank['r_all'] == 'yes' || $rank['r_ac'] == 'yes'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>


        <div class="container-fluid">
    <span style="color:brown"><h2>Witaj <?php echo $user['user']; ?>!</h2></span>
    
    <h3><span style="color:darkcyan">
    Znajdujesz sie na stronie administratora!<br/>
    Możesz tutaj akceptować kursy!
    </h3></span
        </div><br/>


<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Dostawy</th>
        <th>ID kierowcy</th>
        <th>Poczatek trasy</th>
        <th>Koniec trasy</th>
        <th>Przejechane kilometry</th>
        <th>Typ towaru</th>
        <th>Masa towaru</th>
        <th>Zarobione pieniadze</th>
        <th>Wypłata</th>
        <th>Spalone paliwo</th>
        <th>Status</th>
        <th>Data dodania</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($list as $row): ?>
        <form method="post" action="">
       <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
       <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>"/>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['user_id']?></td>
        <td><?=$row['start']?></td>
        <td><?=$row['koniec']?></td>
        <td><?=$row['km']?></td>
        <td><?=$row['Typ']?></td>
        <td><?=$row['ciezar']?></td>
        <td><?=$row['fkasa']?></td>
        <td><?=$row['km']*4?></td>
        <td><?=$row['litry']?></td>
        <td><?=$row['is_acc']?></td>
        <td><?=$row['data']?></td>
        <td>
            <input type="submit" class="btn btn-success" name="acc" value="Zaakceptuj"/>

        </td>
        <td>

            <input type="submit" class="btn btn-danger" name="del" value="Usuń"/>
        </td>
      </tr>
        </form>
      <?php endforeach; ?>
    </tbody>
  </table>
</div><br/>
 </form>
     
         
