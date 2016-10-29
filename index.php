<?php get_header(); ?>
<main>
    <?php if (have_posts()):while(have_posts()):the_post(); ?>
        <article>
           <h2>
               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
           </h2>
           <p class="post">
               <?php the_content(); ?>
           </p>
        </article>
    <?php endwhile; else: ?>
        <p><?php _e("На данный момент нет публикаций"); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>