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
require_once('template_header.php');
?>
      <div class="sidebar">
        <nav class="menu">
        <h2>Navigation</h2>
        <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a id="currentpage" href="projets.php">Projets</a></li>
        </ul>
    </nav>
  </div>
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