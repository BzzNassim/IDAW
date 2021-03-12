<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon site pro</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>


    <div class="page">
  
    <?php
    require_once('template_header.php');
    ?>
    
      <?php
      require_once('template_menu.php');
      renderMenuToHTML('index');
      ?>
    
    <div class="content">
      <p>Bienvenue sur mon site pro</p>
    </div>
      <?php
      require_once('template_footer.php');
      ?>
    </div>
    
    
  </body>
</html>