<?php 
 if($user['ranga'] == 'Szef'){}
                else{
                   header('Location: /kohana/index/dane');
                    exit;
                }
 ?>

<li class="dropdown">
          <ul class="dropdown-menu">
            <li><a >Panel</a></li>
            <li><a >Dodaj użytkownika</a></li>
            <li><a >Usun użytkowniak</a></li>
            <li><a >Zmiana danych użytkowników</a></li>
            <li><a >Akceptacja kursów</a></li>
          </ul>
        </li>
        
<select name="jezyk" size="1">
<option>Polski</option>
<option>Angielski</option>
<option>Niemiecki</option>
<option>Francuski</option>
</select>
        <?php echo $rank['r_all'];?>