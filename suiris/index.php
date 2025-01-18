<?php 
include "headreg.php";
?>
    <main>
        <div class="titl">
        <div class="vhod"> Вход</div>
        <div class="pole">
            <div class="stoka">
            <label class="label">Логин:</label>
              <input type="text" class="input" placeholder="Введите логин..." name="nazvanie" ><br>
              <label class="label">Пароль:</label>
              <input type="text" class="input" placeholder="Введите пароль..." name="nazvanie"><br></div>
              <div class="sub">
                <form action="main.php" methood="POST">
             <input type="submit" class="subbot" value="Войти в систему →" onClick="main.php"></form></div>
             <div class="slov">
                <a class="slov1">Нет аккаунта?</a><br>
                <a class="slov2" href="reg.php">Подайте заявку!</a>
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</php>