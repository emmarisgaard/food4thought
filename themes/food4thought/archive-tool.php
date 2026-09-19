<!-- Henter header.php og indsætter her -->
<?php get_header(); ?>

<!-- Header/hero section -->
<section class="headerImageSection">

    <img
        src="<?php echo get_theme_file_uri('/img/tool-card.webp'); ?>"
        alt=""
        class="headerImage"
    >

    <h1>
        Tools Reviews
    </h1>

    <div class="headerButtons">

        <input type="search" placeholder=" Search here...">

        <button>
            + Add Tool review
        </button>

    </div>

</section>

<main>
<!-- Tool category circles -->
<section class="toolCategories">

    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/knives-circle.webp'); ?>" alt="">

        <p>
            Knives & Cutting
        </p>

    </div>


    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/cookware-circle.webp'); ?>" alt="">

        <p>
            Cookware
        </p>

    </div>


    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/kitchen-machines-circle.png'); ?>" alt="">

        <p>
            Kitchen Appliances
        </p>

    </div>


    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/baking-circle.jpg'); ?>" alt="">

        <p>
            Baking & Pastry
        </p>

    </div>


    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/essantial-circle.webp'); ?>" alt="">

        <p>
            Kitchen Essentials
        </p>

    </div>


    <div class="toolCategori">

        <img src="<?php echo get_theme_file_uri('/img/grill-tools-circle.webp'); ?>" alt="">

        <p>
            Grill & Outdoor Cooking
        </p>

    </div>

</section>

<!-- Tool cards -->
<section class="allToolsToolCards allToolsPadding">

    <!-- Bruger the loop til at hente alle tools og få dem vist med vores html cards -->
    <?php

    while (have_posts()) {

        the_post();

    ?>

            <a href="<?php the_permalink(); ?>" class="toolCard">


                <img
                    src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                    alt="<?php the_title(); ?>"
                    class="toolCardImg"
                >


                <div class="toolCardInfo">

                    <div>

                        <h1>

                            <i class="fa-regular fa-square-check"></i>

                            <?php the_title(); ?>

                        </h1>


                        <div class="toolCardProfile">

                            <p>
                                By <?php the_author(); ?>
                            </p>


                            <div class="profileHats">

                                <img
                                    class="Recipe-card-icon-cook"
                                    src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>"
                                    alt=""
                                >

                                <img
                                    class="Recipe-card-icon-cook"
                                    src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>"
                                    alt=""
                                >

                                <img
                                    class="Recipe-card-icon-cook"
                                    src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>"
                                    alt=""
                                >

                            </div>

                        </div>

                    </div>


                    <hr>


                    <div class="toolCardButtons">

                        <div class="saveNlike">

                            <i class="fa-regular fa-bookmark"></i>


                            <div class="totalLikes">

                                <i class="fa-regular fa-heart"></i>

                                <p>
                                    1000 likes
                                </p>

                            </div>

                        </div>


                        <span>
                            Go to tool
                        </span>

                    </div>

                </div>

            </a>

    <?php } ?>

</section>
</main>


<?php get_footer(); ?>