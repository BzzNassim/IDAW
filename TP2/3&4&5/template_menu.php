
<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(   
        'index' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'projets' => array('Mes Projets')
    );

    echo "<div class='sidebar'><nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if($pageId===$currentPageId)
        echo "id=\"currentpage\" ";
    echo "href='$pageId.php'><span>$pageParameters[0]</span></a></li>";

    }
    echo "</ul></nav></div>";
    }
    ?>