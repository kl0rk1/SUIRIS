<?php
    include "head.php";
    include "bd.php";
    ?>
    <main>
        <div class="kab">
        <?php
      $sqll = mysqli_query($conn, "SELECT `number`,`wifi`,`namelink` FROM `cabinet` " );
      while ($result = mysqli_fetch_array($sqll)) {
        echo 
             "<a href={$result['namelink']}.php>".
             "<div class=kabin id=fot>".
             "<img src=assets/asd.png class=img>".
                 "<div class=naz>".
                 "<a class='kabnn'> Кабинет {$result['number']} </a> <a href='?red_id={$result['id']}'><img class='minus'  src='minus.png'> </a> </div>".
             "</div></a>";
      }
      ?>
        
        

        
    </div>
    <div class="admpnl"><a class="ad" href="admain.php">Админ-Панель→</a></div>
    </main>
    
    <footer>
        
    </footer>
</body>
</html>