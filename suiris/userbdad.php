<?php
include 'bd.php';
if ( ($_SERVER["REQUEST_METHOD"] == "GET")){
    if (isset($_GET["nazvanie"]) && isset($_GET["fio"])) {
        if (isset($_GET["job"])){
         if (isset($_GET["AP"])) {
    $a = ($_GET["nazvanie"]);
    $b = ($_GET["fio"]);
    $c = ($_GET["job"]);
    $S = ($_GET["AP"]);
    $sql = "INSERT INTO users (login, fio, job, AP) VALUES ('$a', '$b', '$c', '$S' );";
    if ($conn->query($sql)) {
        
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }}}}}
if (isset($_GET['del_id'])) { 
    $sql = mysqli_query($conn, "DELETE FROM `users` WHERE `id` = {$_GET['del_id']}");
    if ($sql) { 
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($conn) . '</p>';
    }
  }
if (isset($_GET['red_id'])) {
    $sl = mysqli_query($conn, "SELECT `ID`, `nazvanie`, `author`,`date`,`vid`,`mnenie` FROM `knij` WHERE `ID`={$_GET['red_id']}");
    $product = mysqli_fetch_array($sl);
  }


include "headad.php";
?>
    <main>
        <div class="kabinet" id="adins">Пользователи</div>
        <div class="maint">
        <div class="rar">
        <div class="taeble" id="bu">
            <div class="tabl" id="d"><a id="ma">ID</a></div>
            <div class="tabl"  id="d"><a id="ma">Логин</a></div>
            <div class="tabl"  id="d"><a id="ma">Фио</a></div>
            <div class="tabl"  id="d"><a id="ma">Должность</a></div>
            <div class="tabl"  id="d"><a id="ma">Доступ к АП</a></div>
            <div class="tabl"  id="c"><a href="dobpoz.php" id="none">+</a></div>
            <div class="tabl"  id="c"> </div>
        </div>
        <?php
      $sqll = mysqli_query($conn, "SELECT `id`,`login`,`fio`,`job`,`AP`  FROM `users` " );
      while ($result = mysqli_fetch_array($sqll)) {
        echo ' <div class="taeble">' .
             " <div class=tabl id=admins><a id=admins>{$result['id']}</a></div>" .
             "<div class= tabl id=admins><a id=admins>{$result['login']}</a></div>" .
             "<div class= tabl id=admins><a id=admins>{$result['fio']} </a></div>" .
             "<div class= tabl id=admins><a id=admins>{$result['job']} </a></div>" .
             "<div class= tabl id=admins><a id=admins>{$result['AP']}</a> </div>" .
             "<div class= tabl id=admins><a class=slk id=admins href=redpozad.php ><img class=pen src=kar1.png href='?red_id={$result['id']}'></a></div>" .
             "<div class= tabl id=admins><a id=admins href='?del_id={$result['id']}' >Удалить</a> </div>" .
             '</div>';
      }
    ?>
        
    <footer>
        
    </footer>
    
</body>
</php>