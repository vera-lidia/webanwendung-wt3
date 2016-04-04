<?php
session_start();
if(isset($_SESSION["username"])){
?>

<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vegan</title>
    <link rel="stylesheet" href="vegan.css">
  </head>

  <body>
    <div class="wrapper">
      <a href="logout.php"><img src="img/logout.png" style="width:20px; margin-left:490px"/></a>
      <img src="img/Unbenannt.jpg"/>
      <img src="img/Download.png"/>
      <div class="rahmen">
        <img src="img/code.png" style="margin-left:3.5px"/><br/>
        <form name="anfrage" method="post" action="formular.php">
          <input class="eingabe" type="text" name="ean" size="30" maxlength="14" placeholder="Hier die EAN eingeben!">
          <input class="button" type="submit" name="suchen" value="los!">
        </form>
<!--erster Schritt: URl in Variable-->
<!-- zweiter Schritt: Query ausprobieren (Bild) / limit-->
<!-- dritter Schritt: id des Containers, AJAX/JQuery / innerhtml-->
        <?php
          $url ="http://pod.opendatasoft.com/api/datasets/1.0/search/?q=";
        ?>

      </div>
      <div class="kreise">
        <hr/>
        <hr id="hr2"/>
        <div id="kreis1">
        </div>
        <div id="kreis2">
        </div>
        <div id="kreis3">
        </div>
     </div>
    </div>
  </body>

</html>

<?php
}  else {
?>
Bitte erst einloggen <a href="index2.php">hier</a>
<?php
}
?>