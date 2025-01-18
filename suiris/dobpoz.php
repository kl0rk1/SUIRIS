<?php
include "headad.php";
?>

    <main>
        <div class="titl">
        <div class="vhod">Добавление Пользователя</div>
        <div class="pole">
        <form name="form1" action="userbdad.php" methood="GET">
            <div class="stoka">
            <label class="label">Логин:</label>
              <input type="text" class="input" placeholder="Логин..." name="nazvanie" ><br>
              <label class="label">Фио:</label>
              <input type="text" class="input" placeholder="Фио..." name="fio"><br>
              <label class="label">Должность:</label>
              <input type="text" class="input" placeholder="Должность..." name="job"><br>
              <label class="label">Доступ к АП:</label>
              <input type="text" class="input" placeholder="Да или нет..." name="AP"><br>
              
              
              <input type="submit" class="subbot" value="Добавить →">
        </form>
            </div>
             <div class="slov">
                
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</php>