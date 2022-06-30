<?php get_header();
//Template name:blog
?>

<main id="blog">

    <div id="heroblog" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
        <h1>The last articles</h1>
    </div>

    <div id="blogcont">
        <!-- here begins the blog for the sidebar -->
        <section id="rctpstag">

            <h3>Tags</h3>
            <ul>
                <a href="#"></a>
                <li> Goddard Space Flight Center</li>
                <a href="#"></a>
                <li>James Webb Space Telescope</li>
                <a href="#"></a>
                <li>Universe</li>
                <a href="#"></a>
                <li>Solar System</li>
                <a href="#"></a>
                <li>Hubble</li>
                <a href="#"></a>
                <li>Stars</li>
                <a href="#"></a>
                <li>NASA’s</li>
            </ul>
            <h3>Latest Posts</h3>

            <div id="postcont">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php endwhile;
                endif; ?>

                <div>
                    <ul>
                        <?php dynamic_sidebar('blog-sidebar'); ?>
                    </ul>

                </div>
            </div>


        </section>
        <!-- end the sidebar -->

        <section id="allarticles">
            <!-- affiche 8 extraits d'article -->
            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=3');
            ?>

            <!-- fin affiche 8 extraits d'article -->
            <!-- boucle wordpress pour afficher les extraits d'article -->
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">

                <!-- permet d'afficher un extrait d'article -->
                <?php the_excerpt(); ?>
                <!-- fin permet d'afficher un extrait d'article -->
            <?php endwhile; ?>
            <!-- fin boucle wordpress pour afficher les extraits d'article -->

            <!-- this is suposed to make the pagination -->
            <?php kriesi_pagination(); ?>



            <!-- <nav class="navigation pagination" role="navigation">

                <h2 class="screen-reader-text">Navigation des articles</h2>

                <div class="nav-links">
                   
                    <a class="page-numbers" href="https://localhost/final_project/blog/">1</a>
                    <span aria-current="page" class="page-numbers current">2</span>
 
                </div>
            </nav> -->

        </section>
    </div>


</main>

<?php get_footer(); ?>