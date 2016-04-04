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
      <a href="logout.php"><img src="logout.png" style="width:20px; margin-left:490px"/></a>
      <img src="Unbenannt.jpg"/>
      <img src="Download.png"/>
      <div class="rahmen">
        <img src="code.png" style="margin-left:3.5px"/><br/>
        <form name="anfrage" method="post" action="formular.php">
          <input class="eingabe" type="text" name="ean" size="30" maxlength="14" placeholder="Hier die EAN eingeben!">
          <input class="button" type="submit" name="suchen" value="los!">
        </form>

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