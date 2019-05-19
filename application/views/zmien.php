<?php   
  if($user['ranga'] == 'Szef'){}
                else{
                    header('Location: /kohana/index/dane');
                    exit;
                }
 ?>

   <div class="container-fluid">
    <span style="color:darkcyan"><h1>
    Witaj w ustawieniach konta!
    Tutaj możesz zmienic hasło
    </h1></br></br>
    </span>
    
   <h3>
   <form class="pure-form" method="post">
  <fieldset>
    <legend>Wprowadz dane</legend>

    <input type="password"  class="form-control" placeholder="Hasło" id="password" name="npass" required><br/>
    <input type="password"  class="form-control" placeholder="Potwierdz hasło" id="confirm_password" required><br/>

    <input type="submit" class="btn btn-danger" name="Zapisz" value="Zmień">
    <div>
    <script>
       var password = document.getElementById("password"); 
       var confirm_password = document.getElementById("confirm_password");

       function validatePassword(){
        if(password.value != confirm_password.value) {
             confirm_password.setCustomValidity("Haslo nieprawidłowe!");
        } else {
             confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

       </script>
     </fieldset>
</form>
    </h3>

