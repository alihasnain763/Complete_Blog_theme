<?php get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <div class="col-6 col-12-small">
                                <section class="box">
                                    <a href="<?php the_permalink() ?>" class="image featured">
                                        <?php the_post_thumbnail('home-featured') ?>
                                    </a>
                                    <header>
                                        <h3><?php the_title() ?></h3>
                                        <p>Posted on <?php the_date() ?> at <?php the_time() ?></p>
                                    </header>
                                    <?php the_excerpt() ?>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
                                            <li><a href="<?php comments_link() ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number( ) ?> comments</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                    <?php }
                    }
                ?>
                

            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>