<?php
include "headad.php";
?>
    <main>
        <div class="titl">
        <div class="vhod"> Удаление Устройства</div>
        <div class="pole">
            <div class="stoka">
           <div class="deys">Вы действительно хотите удалить это устройство?</div><br>
           <form action="kompadm.php" methood="POST">
            <input type="submit" class="subbot" id="obad" value="← Нет" onClick="kompadm.php"></form>
                <form action="kabinetadmin.php" methood="POST">
             <input type="submit" class="subbot" id="obad1" value="Да →" onClick="kabinetadmin.php"></form></div>
             <div class="slov">
                
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>