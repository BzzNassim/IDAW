
<?php
function renderMenuToHTML($currentPageId,$currentLang) {
    $mymenu = array(   
        'accueil' => array( 'Accueil','Welcome' ),
        'cv' => array( 'CV','CV' ),
        'projets' => array('Mes Projets','My Projects'),
        'contact' => array('Contact','Contact')
    );
    if($currentLang=='fr'){
        $lang=0;
    }
    else{
        $lang=1;
    }
    
    echo "<div class='sidebar'><nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if($pageId===$currentPageId)
        echo "id=\"currentpage\" ";
    echo "href='index.php?page=$pageId&lang=$currentLang'><span>$pageParameters[$lang]</span></a></li>";

    }
    if($currentLang=='fr'){
        echo "<li><a href=\"index.php?page=$currentPageId&lang=en\"><span>English</span></a></li>";
        $_GET['lang']='en';
    }
    else{
        echo "<li><a href=\"index.php?page=$currentPageId&lang=fr\"><span>Français</span></a></li>";
        $_GET['lang']='fr';
    }

    echo "</ul></nav></div>";
    }
    ?>