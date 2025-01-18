<?php
include "headad.php";
?>
    <main>
        <div class="titl">
        <div class="vhod"> Устройство</div>
        <div class="pole">
            <div class="stoka">
            <label class="label">Имя:</label>
              <input type="text" class="input" placeholder="Имя устройтсва..." name="nazvanie" ><br>
              <label class="label">Тип:</label>
              <input type="text" class="input" placeholder="Тип устройства ..." name="nazvanie"><br>
              <label class="label">Ip-адресс:</label>
              <input type="text" class="input" placeholder="Ip-адресс..." name="nazvanie"><br>
                <form action="kabinetadmin.php" methood="POST">
             <input type="submit" class="subbot" id="obad" value="Добавить →" onClick="admkab.php"></form>
            <form action="deldead.php" methood="POST">
             <input type="submit" class="subbot" id="obad1" value="Удалить →" onClick="deldead.php"></form>
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