<?php get_header(); ?>
<?php get_sidebar(); ?>
<main>
   <aside>
       <?php get_sidebar(); ?>
   </aside>
    <section>
    <?php if (have_posts()): ?>
       <div class="clear-fix">
        <?php woocommerce_content(); ?>
        </div>
    <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>