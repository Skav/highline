<?php   
  if($rank['r_all'] == 'yes' || $rank['r_au'] == 'yes'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>


        <div class="container-fluid">
    <span style="color:brown"><h2>Witaj <?php echo $user['user']; ?>!</h2></span>
    <h3><span style="color:darkcyan">
    Znajdujesz sie na stronie administratora!<br/>
    Możesz tutaj dodawać użytkowników!
    </h3></span>
        </div>
    
     <h3>
    <form action="" method="post">
        <div class="col-sm-3">
            Nick<input  class="form-control" type="text" required name="user" value="" />
         
            Hasło<input  class="form-control" type="text" required name="pass" value="" />
      
            Ranga<input  class="form-control" type="text" required name="ranga" value="" />

            Pieniadze<input  class="form-control" type="number" required name="kasa" value="" />

            Cieżarówka<input  class="form-control" type="text" required name="tir" value="" />

            Moc silnika<input  class="form-control" type="number" required name="moc" value="" />

            Rejestracja<input  class="form-control" type="text" required name="rej" value="" />

            Zamontowane cześci tuningowe<input  class="form-control" type="text" required name="tune" value="" />


                    
     
        <input type="submit" name="Dodaj" class="btn btn-danger btn-lg" value="Dodaj" />
        </h3>
    
     </div>
    </form>
