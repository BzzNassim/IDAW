<?php
/**
 * Plugin Name:       Mon super slider
 * Description:       Permet de gérer un joli slider en homepage
 * Version:           0.1
 * Author:            Nassim Bouaziz
 */

add_action('init','monsuperslider_init');
function monsuperslider_init(){
    $labels=array(
        'name' => 'Slide',
        'singular_name' => 'Slide',
        'add_new' => 'Editer un Slide',
        'add_new_item' => 'Ajouter un nouveau Slide',
        'edit_item' => 'Nouvelle Slide',
        'view_item' => 'voir l\'Slide',
        'search_items' => 'Recherche un Slide',
        'not_found' => 'Aucun Slide',
        'not_found_in_trash' => 'Aucun Slide dans la corbeille',
        'parent_view_item_colon' => '',
        'menu_name' => 'Slides',

    );
      register_post_type('slide', array(
            'public'=>true,
            'publicly_queryable'=>'false',
            'labels'=>$labels,
            'capability_type'=>'post',
            'supports'=> array('title','thumbnail'),
            
    ));
    add_image_size('slider',1000,300,true);
}

function monsuperslider_show($limit=10){
    echo 'ceci est un slider';
    wp_enqueue_script('nivoslider','C:\MAMP\htdocs\IDAW\Wordpress\wp-content\plugins\mon-super-slider\js\jquery.nivo.slider.pack.js',array('jquery'),'5.6.4',true);
    add_action('wpfooter','monsuperslider_script',30);
    
    $slides=new WP_query("post_type=slide&posts_per_page=$limit");
    echo '<div id="monsuperslider"';
    while($slides->have_posts()){
        $slides->the_post();
        global $post;
        the_post_thumbnail('slider');
    }
    echo '</div>';
}
function monsuperslider_script(){
    ?>
    <script type="text/javascript">
        (function($){
            $('#monsuperslider').nivoSlider();
        })(jQuery);
    </script>
    <?php
}

?>