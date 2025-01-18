<?php
include "headad.php";
?>
    <main>
        <div class="titl">
        <div class="vhod">Пользователь</div>
        <div class="pole">
            <div class="stoka">
            <label class="label">Логин:</label>
              <input type="text" class="input" placeholder="Логин..." name="nazvanie" ><br>
              <label class="label">Фио:</label>
              <input type="text" class="input" placeholder="Фио..." name="nazvanie"><br>
              <label class="label">Должность:</label>
              <input type="text" class="input" placeholder="Должность..." name="nazvanie"><br>
              <form action="kabinetadmin.php" methood="POST">
              <input type="submit" class="subbot" id="obad" value="Добавить →" onClick="admkab.php"></form>
             <form action="delusad.php" methood="POST">
              <input type="submit" class="subbot" id="obad1" value="Удалить →" onClick="delusad.php"></form></div>
             <div class="slov">
                
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</php>