<?php
include "headad.php";
?>
    <main>
        <div class="titl">
        <div class="vhod"> Кабинет</div>
        <div class="pole">
            <form action="admkab.php" methood="GET">
            <div class="stoka">
            <label class="label">Номер:</label>
              <input type="text" class="input" placeholder="Номер кабинета..." name="number" ><br>
              <label class="label">Сеть:</label>
              <input type="text" class="input" placeholder="Сеть ..." name="wifi"><br>
              <label class="label">НАзвание ссылки:</label>
              <input type="text" class="input" placeholder="Сеть ..." name="namelink"><br>
                
             <input type="submit" class="subbot" id="obad" value="Добавить →" onClick="admkab.php"></form></div>
             <div class="slov">
                
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</php>