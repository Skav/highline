<div >
<h2><span style="color:brown">
    Witaj <?php echo $user['user']; ?>!<br/>
    </span></h2>
    <h4><span style="color:darkcyan">
    Możesz tutaj wysłać wiadomośc prywatna swojemu znajomemu

  <a data-toggle="tooltip" title="Jeżeli bedziesz podejrzany/a administracja może przejżeć twoje wiadomości żeby wykryć ewentualne żagrożenie dla spedycji "> <span class="glyphicon glyphicon-pushpin"></span></a>
  </div>

</h4></span><br/><br/>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
     
    

<form acrion="" method="post">
     <div class="form-group">
      <label >Odbiorca:</label>
      
      <br/>
     <select class="form-control" name="nick" size="1">
    <?php foreach($list as $row):?>
    <option><?=$row["user"]?></option>
    <?php endforeach;?>
    </select><br/>
    
      <label >Nagłowek:</label>
      <input type="text" class="form-control" id="" required name="head" placeholder="Wpisz nagłówek">
    </div>
    <div class="form-group">
  <label for="comment">Zawartość:</label>
  <textarea class="form-control" rows="5" name="text" required id="comment"></textarea>
    </div>
    <input type="hidden" name="send_user" value="<?php echo $user['user']?>"/>
    <br/>
    <input type="submit" class="btn btn-success" name="wysli" />
    
    
</form>
