<?php get_header();
//Template name:about
?>

<main id="about">

    <div id="heroabout" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">

        <h1>Learn About Us</h1>

    </div>

</main>

<?php the_content(); ?>

<?php get_footer(); ?>