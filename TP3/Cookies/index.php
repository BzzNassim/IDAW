<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <?php
    $style = 'style1';
    if (isset($_COOKIE['style']))
        $style = $_COOKIE['style'];
    if(isset($_GET['css'])){
        $style = $_GET['css'];
        setcookie('style',$style);
    }
    echo "<link rel=\"stylesheet\" href=\"$style.css\" type=\"text/css\"media=\"screen\" title=\"default\" charset=\"utf-8\" />";
    ?>

  </head>
  <body>
    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>


  </body>
</html>

