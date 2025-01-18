<?php
include "headad.php";
?>
    <main>
        <div class="titl">
        <div class="vhod"> Удаление Пользователя</div>
        <div class="pole">
            <div class="stoka">
        <div class="deys">Вы действительно хотите удалить этого пользователя?</div><br>
           <form action="redpozad.php" methood="POST">
            <input type="submit" class="subbot" id="obad" value="← Нет" onClick="redpozad.php"></form>
                <form action="userbdad.php" methood="POST">
             <input type="submit" class="subbot" id="obad1" value="Да →" onClick="userbdad.php"></form></div>
             <div class="slov">
                
             </div>
        </div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>