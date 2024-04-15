<?php
get_header();

if ( have_posts() ) {
    
    while ( have_posts() ) {
        the_post();
        
        the_title('<h2>', '</h2>');
        
        
        if ( has_post_thumbnail() ) {
            echo '<div class="post-thumbnail">';
            the_post_thumbnail();
            echo '</div>';
        }
        
        
        the_content();
    }
}


get_footer();
?>
