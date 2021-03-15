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
      
      $currentLang='fr';
      if(isset($_GET['lang'])) {
        $currentLang=$_GET['lang'];
      }
      if($currentLang=='fr')
        require_once('template_header.php');
      else
        require_once('template_header_en.php');
      require_once('template_menu.php');
      $currentPageId = 'accueil';
      if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
      }
      renderMenuToHTML( $currentPageId,$currentLang);
     ?>
     <div class="content">
      <?php
        $pageToInclude = $currentLang.'/'.$currentPageId . ".php";
        if(is_readable($pageToInclude))
         require_once($pageToInclude);
        else
          require_once("$currentLang/error.php");
      ?>

    </div>
      <?php
      if($currentLang=='fr')
        require_once('template_footer.php');
      else
        require_once('template_footer_en.php');
      ?>
    </div>
    
    
  </body>
</html>