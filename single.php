<?php get_header();?>

<main id="actu">
<!-- boucle wordpress -->

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article>
<h3><?php the_title(); ?></h3>
<!-- affiche le contenu -->
<?php the_content(); ?>
<!-- fin affiche le contenu -->
<!-- affiche l'image mise en avant --
<!-- fin affiche l'image mise en avant -->
<span><?php the_author();?></span>
<span> <?php the_category();?></span>
<span><?php the_time('j F, Y'); ?></span>

</article>

<?php endwhile; ?>
<?php endif; ?>

<!-- fin boucle wordpress -->

<?php comments_template(); ?>
<!-- // Par ici les commentaires -->

</main>

<?php get_footer(); ?>