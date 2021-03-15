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
      require_once('template_menu.php');
      $currentPageId = 'accueil';
      if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
      }
      renderMenuToHTML( $currentPageId);
     ?>
     <div class="content">
      <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
         require_once($pageToInclude);
        else
          require_once("error.php");
      ?>

    </div>
      <?php
      require_once('template_footer.php');
      ?>
    </div>
    
    
  </body>
</html>