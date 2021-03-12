<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projets</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
      <div class="page">
      <?php
      require_once('template_menu.php');
      renderMenuToHTML('projets');
      ?>
      <?php
require_once('template_menu.php');
?>
      <div class="content">
      <h1>Mes projets</h1>
        <p>Liste de mes projets :</p>
      </div>
     <?php
require_once('template_footer.php');
?>
    </div>
  </body>
</html>