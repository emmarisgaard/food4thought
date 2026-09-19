<!-- Henter header.php og indsætter her -->
<?php get_header(); ?>

<main>
<!-- Bruger the loop til at hente tool -->
<?php

while (have_posts()) {

    the_post();

    // Henter ACF felterne fra tool
    $review = get_field('review');
    $introText = get_field('intro_text');
    $buy = get_field('buy');
    $mainText = get_field('main_text');

?>

<section class="singleToolInfo">

    <div class="singleToolDetails">

        <div class="singleToolTitle">

            <span class="recommendationBox">
                <?php echo $review; ?>
            </span>

            <i class="fa-regular fa-square-check"></i>

            <h1>
                <?php the_title(); ?>
            </h1>

        </div>


        <div class="singleToolProfile">

            <div class="singleToolName">

                <i class="fa-regular fa-circle-user"></i>

                <p>
                    <?php the_author(); ?>
                </p>

                <div class="profileHats">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                </div>

            </div>


            <div class="singleToolDate">

                <i class="fa-regular fa-calendar"></i>

                <p>
                    <?php echo get_the_date('d/m/Y'); ?>
                </p>

            </div>

        </div>


        <div class="singleToolLikesNComments">

            <div class="line">
                <i class="fa-regular fa-heart"></i>  
                <p>100 Likes</p>
            </div>

            <a href="#comments">
                15 Comments
            </a>
         

        </div>


        <div class="singleToolShortDescription">

            <p>
                <?php echo $introText; ?>
            </p>

        </div>


        <!-- Viser kun købsinformation hvis buy feltet er udfyldt -->
        <?php if ($buy) { ?>

            <div class="singleToolPrice">

                <div>

                    <p>
                        Bought at
                    </p>

                    <p class="singleToolColored">
                        <?php echo $buy['shop']; ?>
                    </p>

                    <p>
                        for
                    </p>

                    <p class="singleToolColored">
                        <?php echo $buy['price']; ?> $
                    </p>

                </div>

            </div>

        <?php } ?>


        <div class="singleToolIcons">

            <i class="fa-regular fa-bookmark"></i>
            <i class="fa-solid fa-share"></i>
            <i class="fa-solid fa-print"></i>
   
            <div class="line">
           
                   <img class= "ai-hand" src="<?php echo get_theme_file_uri('/img/ai.jpg'); ?>" alt="">
                   <p>Written by AI</p>
               </div>
            
        </div>

    </div>


    <img
    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
    alt="<?php the_title(); ?>"
    >
  
    
</section>


<section class="singleToolDescription">

    <p class="tekstContainer">

        <?php echo $mainText; ?>

    </p>

</section>


<div class="singleRecipeHr">
    <hr>
</div>


<!-- Related tools -->
<section class="relatedTools">

    <div class="relatedSectionHeader">

        <h2>
            Related Tools
        </h2>

        <a href="<?php echo get_post_type_archive_link('tool'); ?>" class="seeAllButton">
            See all tools
        </a>

    </div>


    <div class="relatedToolCards">

        <!-- Bruger custom query til at hente related tools -->
        <?php

        $relatedTools = new WP_Query(array(
            'post_type' => 'tool',
            'posts_per_page' => 4,
            'post__not_in' => array(get_the_ID())
        ));

        while ($relatedTools->have_posts()) {

            $relatedTools->the_post();

        ?>

            <a href="<?php the_permalink(); ?>" class="toolCard">

                <img
                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
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

                                <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                                <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                                <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

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

        <?php
        // Nulstiller post data efter custom query
        wp_reset_postdata();
        ?>

    </div>

</section>


<div class="singleRecipeHr">
    <hr>
</div>


<section class="commentSection" id="comments">

    <div class="commentsHeader">

        <i class="fa-regular fa-message"></i>

        <h2>
            Comments
        </h2>

        <p>
            15 Comments
        </p>

    </div>


    <div class="commentArea">

        <p>
            Max 350 characters
        </p>

        <div class="commentInput">

            <textarea maxlength="350"></textarea>

            <button>
                Comment
            </button>

        </div>

    </div>


    <div class="otherComments">

        <div class="otherComment">

            <div class="toolCardProfile">

                <i class="fa-regular fa-circle-user"></i>

                <p>
                    By Emma Risgaard
                </p>

                <div class="profileHats">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                </div>

            </div>

            <div class="timeStamp">

                <p>
                    20/09-2026, 16:03
                </p>

            </div>

            <hr>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Eos soluta mollitia blanditiis magni reiciendis qui sapiente
                consequatur sequi dolore recusandae. Error natus repudiandae
                velit et enim ullam nam excepturi nulla.
            </p>

            <p class="reply">
                Reply
            </p>

        </div>


        <div class="otherComment">

            <div class="toolCardProfile">

                <i class="fa-regular fa-circle-user"></i>

                <p>
                    By Emma Risgaard
                </p>

                <div class="profileHats">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                </div>

            </div>

            <div class="timeStamp">

                <p>
                    20/09-2026, 16:03
                </p>

            </div>

            <hr>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Eos soluta mollitia blanditiis magni reiciendis qui sapiente
                consequatur sequi dolore recusandae. Error natus repudiandae
                velit et enim ullam nam excepturi nulla.
            </p>

            <p class="reply">
                Reply
            </p>

        </div>


        <div class="otherComment">

            <div class="toolCardProfile">

                <i class="fa-regular fa-circle-user"></i>

                <p>
                    By Emma Risgaard
                </p>

                <div class="profileHats">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                    <img class="Recipe-card-icon-cook" src="<?php echo get_theme_file_uri('/img/chef-hat.svg'); ?>" alt="">

                </div>

            </div>

            <div class="timeStamp">

                <p>
                    20/09-2026, 16:03
                </p>

            </div>

            <hr>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Eos soluta mollitia blanditiis magni reiciendis qui sapiente
                consequatur sequi dolore recusandae. Error natus repudiandae
                velit et enim ullam nam excepturi nulla.
            </p>

            <p class="reply">
                Reply
            </p>

        </div>

    </div>


    <div class="seeMore">

        <p>
            See more...
        </p>

    </div>

</section>

<?php } ?>
</main>
<?php get_footer(); ?>