<h2><span style="color:brown">
    Witaj <?php echo $user['user']  ?>!    
    </span></h2>
    <h3><span style="color:darkcyan">
        Oto twoje wiadomości:
        </span></h3>
    <ul class="pagination">
        <li class="active"><a>Nowe</a></li>
        <li><a href="index/odebrane">Odebrane</a></li>
    </ul>
<div class="container">
    
  <table class="table">
    <thead>
      <tr>
        <th>Od</th>
        <th>Tytuł</th>
        <th>Treść</th>
        <th>Akcja</th>
      </tr>
    </thead>
    <tbody>
    
         <?php foreach($list as $row): ?>
    <form actin="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
      <tr>        
        <td><?= $row['send_user']?></td>
        <td><?= $row['head']?></td>
        <td>
        <a href="#demo" class="btn btn-info" data-toggle="collapse">Pokaż treść</a>
        <div id="demo" class="collapse">
        <?= $row['text']?>
        </div>
       </td>
       <td>
           <input type="submit" class="btn btn-success" name="acc" value="Przeczytana"/>
       </td>
       <td>
           <input type="submit" class="btn btn-danger" name="del" value="Usuń"/>
       </td>
      </tr>
    </form>
    <?php endforeach; ?>       
    </tbody>
  </table>
</div>
