<?php

get_header();
&nbsp
if (have_posts()) :
    while(have_posts()) : the_post(); ?>

<div class="card">
<article class="post">
    
    <strong><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></strong>
    <p><?php the_content(); ?></p>
    
</article>
</div>
<?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer();
?>