<?php get_header();
//Template name:contact
?>
<main id="contact">

<div id="herocontact" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');"></div>

<?php the_content(); ?>
    
</main>


<?php get_footer(); ?>
