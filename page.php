<?php

get_header();

if (have_posts()) :
    while(have_posts()) : the_post(); ?>

<article class="post page">
    
    <?php

        $args = array(
            'child_of' => $post->ID
        );

    ?>

    <?php wp_list_pages(); ?>
    
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    
</article>
<?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer();
?>