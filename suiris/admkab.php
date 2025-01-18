
<?php
include 'bd.php';
if ( ($_SERVER["REQUEST_METHOD"] == "GET")){
        
    $numb = ($_GET["number"]);
    $wifi = ($_GET["wifi"]);
    $namelink = ($_GET["namelink"]);
    $sql = "INSERT INTO `cabinet` ( `number`, `wifi`, `namelink` ) VALUES ('$numb', '$wifi', '$namelink');";
    if ($conn->query($sql)) {
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_GET['red_id'])) {
    $sqlq = mysqli_query($conn, "SELECT  `number`, `wifi`,`namelink` FROM `cabinet` WHERE `id`={$_GET['red_id']}");
    $product = mysqli_fetch_array($sqlq);
  }
include "headad.php";
?>
    <main>
        <div class="kab">
        <?php
      $sqll = mysqli_query($conn, "SELECT `number`,`wifi`,`namelink` FROM `cabinet` " );
      while ($result = mysqli_fetch_array($sqll)) {
        echo 
             "<a href={$result['namelink']}.php>".
             "<div class=kabinad id=fot>".
             "<img src=assets/asd.png class=img>".
                 "<div class=naz>".
                 "<a class='kabnn'> Кабинет {$result['number']} </a> <a href='?red_id={$result['id']}'><img class='minus'  src='minus.png'> </a> </div>".
             "</div></a>";
      }
    ?>
        <a class="dobad" href="dobkabad.php">
            <div class="kabinad" id="fot">
               <div class="dobad"> Добавить<br>кабинет</div>
                <div class="naz">
                    <a href="dobkabad.php"><img class="minus"  src="plus.png"></a>
            </div></a>
        <div>
    </div>
    </main>
    <footer>
        
    </footer>
</body>
</php>