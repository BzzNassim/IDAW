<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon site pro</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
  <?php
require_once('template_header.php');
?>

    <div class="page">
  
    <?php
require_once('template_header.php');
?>
    <div class="sidebar">
      <nav class="menu">
      <h2>Navigation</h2>
      <ul>
      <li><a id="currentpage" href="index.php">Accueil</a></li>
      <li><a href="cv.php">CV</a></li>
      <li><a href="projets.php">Projets</a></li>
      </ul>
  </nav>
</div>
    <div class="content">
      <p>Bienvenue sur mon site pro</p>
    </div>
    <?php
require_once('template_footer.php');
?>  </div>
    
    
  </body>
</html>