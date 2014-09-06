<?php
/*
Template Name: Full width no title
*/
get_header(); ?>

  <section class="section-wide" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article <?php post_class("article article-pages"); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php the_content(); ?>

      <?php echo ace_get_link_pages() ?>

      <?php comments_template('/comments.php',true); ?>

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

<?php get_footer(); ?>