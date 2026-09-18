<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php

        $time = get_field('time');
        $ingredients = get_field('ingredients');
        $instructions = get_field('instructions');
        $specifications = get_field('specifications');
        $portionSize = get_field('portion_size');
        $recipeTip = get_field('recipe_tip');

        ?>

<main>
        <section class="recipeHero">

            <section class="singleRecipeInfo">

                <div class="singleRecipeDetails">

                    <div class="singleRecipeTitle">

                        <h1>
                            <?php the_title(); ?>
                        </h1>

                    </div>


                    <div class="singleRecipeProfile">

                        <div class="singleRecipeName">

                            <i class="fa-regular fa-circle-user"></i>
                            <a href="#"><?php the_author(); ?></a>
                            

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


                    <div class="recipeTime">

                        <i class="fa-regular fa-clock"></i>

                        <p>
                            Total time: <?php echo $time['total_time']; ?><br>
                            Prep time: <?php echo $time['prep_time']; ?> |
                            Cook time: <?php echo $time['cook_time']; ?>
                        </p>

                    </div>


                    <div class="singleToolStarsNComments">

                        <div class="singleRecipeStars">

                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>

                            <p>
                                (45 reviews)
                            </p>

                        </div>

                        <a href="#comments">
                            15 Comments
                        </a>

                    </div>


                    <div class="singleRecipeTags">

                        <?php if (!empty($specifications)) : ?>

                            <?php foreach ($specifications as $specificationGroup) : ?>

                                <?php if (is_array($specificationGroup)) : ?>

                                    <?php foreach ($specificationGroup as $tag) : ?>

                                        <?php if (!empty($tag)) : ?>

                                            <div>
                                                <p>
                                                    <?php echo $tag; ?>
                                                </p>
                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </div>


                    <div class="singleToolIcons">

                        <i class="fa-regular fa-bookmark"></i>
                        <i class="fa-solid fa-share"></i>
                        <i class="fa-solid fa-print"></i>

                    </div>

                </div>


                <div>

                    <img
                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                        alt="<?php the_title(); ?>"
                    >
                    <p>Copyright: <a href="https://www.bbc.co.uk/food/recipes">www.bbc.co.uk/food/recipes</a></p>

                </div>

            </section>


            <div class="singleRecipeHr">
                <hr>
            </div>


            <section class="singleRecipeIngredientsNInstructions">


                <div class="singleRecipeIngredients">

                    <h2>
                        Ingredients
                    </h2>


                    <div class="singleRecipePortions">

                        <div class="singleRecipeMinus">
                            <i class="fa-solid fa-minus"></i>
                        </div>

                        <div class="singleRecipePortion">

                            <p>
                                <?php echo $portionSize; ?> Portions
                            </p>

                        </div>

                        <div class="singleRecipePlus">
                            <i class="fa-solid fa-plus"></i>
                        </div>

                    </div>


                    <div class="singleRecipeIngredientList">

                        <?php if (!empty($ingredients)) : ?>

                            <?php foreach ($ingredients as $ingredient) : ?>

                                <?php if (!empty($ingredient['ingredient'])) : ?>

                                    <div class="singleRecipeIngredient">

                                        <input type="checkbox">

                                        <p>
                                            <?php echo $ingredient['amount']; ?>
                                        </p>

                                        <p>
                                            <?php echo $ingredient['unit']; ?>
                                        </p>

                                        <p>
                                            <?php echo $ingredient['ingredient']; ?>
                                        </p>

                                    </div>

                                <?php endif; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </div>

                </div>


                <div class="singleRecipeInstructions">

                    <h2>
                        Instructions
                    </h2>


                    <div class="singleRecipeCookmode">

                        <i class="fa-solid fa-toggle-on"></i>

                        <p>
                            Cookmode ON
                        </p>

                    </div>


                    <ol>

                        <?php if (!empty($instructions)) : ?>

                            <?php foreach ($instructions as $instruction) : ?>

                                <?php if (!empty($instruction)) : ?>

                                    <li>
                                        <?php echo $instruction; ?>
                                    </li>

                                <?php endif; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </ol>

                </div>

            </section>


            <section class="singleRecipeTips">

                <div></div>

                <div class="singleRecipeTip">

                    <h2>
                        Tip
                    </h2>

                    <p>
                        <?php echo $recipeTip; ?>
                    </p>

                </div>

            </section>


            <div class="singleRecipeHr">
                <hr>
            </div>


            <section class="singleRecipeRatingSystem">

                <h2>
                    Your Rating
                </h2>

                <p>
                    Enter your rating of this recipe underneath
                </p>

                <div class="singleRecipeRatingStars">

                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>

                </div>

            </section>


            <div class="singleRecipeHr">
                <hr>
            </div>


            <!-- Related recipes -->

            <section class="relatedRecipesSection">

                <div class="relatedSectionHeader">

                    <h2 class="relatedRecipesTitle">
                        Related Recipes
                    </h2>

                    <a
                        href="<?php echo get_post_type_archive_link('recipe'); ?>"
                        class="seeAllButton"
                    >
                        See all recipes
                    </a>

                </div>


                <div class="relatedRecipes">

                    <?php

                    $relatedRecipes = new WP_Query(array(
                        'post_type' => 'recipe',
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID())
                    ));

                    if ($relatedRecipes->have_posts()) :

                        while ($relatedRecipes->have_posts()) :

                            $relatedRecipes->the_post();

                            $relatedTime = get_field('time');

                    ?>

                            <a href="<?php the_permalink(); ?>" class="recipeCard">

                                <img
                                    class="recipeCardImage"
                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                                    alt="<?php the_title(); ?>"
                                >


                                <div class="recipeCardContent">

                                    <h3 class="recipeCardTitle">
                                        <?php the_title(); ?>
                                    </h3>

                                    <hr class="recipeCardDivider">


                                    <div class="recipeCardAuthor">

                                        <p>
                                            By <?php the_author(); ?>
                                        </p>

                                        <img
                                            class="recipeCardChefIcon"
                                            src="<?php echo get_theme_file_uri('/img/chef_hat_24dp_EDEDEA_FILL0_wght400_GRAD0_opsz24.svg'); ?>"
                                            alt=""
                                        >

                                    </div>


                                    <div class="recipeCardTime">

                                        <i class="fa-regular fa-clock"></i>

                                        <p>
                                            <?php echo $relatedTime['total_time']; ?>
                                        </p>

                                    </div>


                                    <div class="recipeCardActions">

                                        <div class="recipeCardSave">

                                            <i class="fa-regular fa-bookmark"></i>

                                            <p>
                                                Save recipe
                                            </p>

                                        </div>

                                        <div class="recipeCardView">
                                            View recipe
                                        </div>

                                    </div>

                                </div>

                            </a>

                    <?php

                        endwhile;

                        wp_reset_postdata();

                    endif;

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

            </section>

        </section>
                </main>
    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>