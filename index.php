<?php get_header();
//Template name:index
?>

<main id="index">

    <div id="hero" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">

        <div id="texbut">

            <h1>Welcome to  <br>
                Meeting The Stars </h1>
            <h2>Astronomy Blog</h2>

            <a href="#"><button>Last Articles</button></a>

        </div>

    </div>

    <h3>Follow this way</h3> 

</main>

<?php the_content(); ?>


<?php get_footer(); ?>