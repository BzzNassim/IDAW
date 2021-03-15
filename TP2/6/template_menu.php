
<?php
function renderMenuToHTML($currentPageId) {
    $mymenu = array(   
        'accueil' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'projets' => array('Mes Projets'),
        'contact' => array('Contact')
    );

    echo "<div class='sidebar'><nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if($pageId===$currentPageId)
        echo "id=\"currentpage\" ";
    echo "href='index.php?page=$pageId'><span>$pageParameters[0]</span></a></li>";

    }
    echo "</ul></nav></div>";
    }
    ?>