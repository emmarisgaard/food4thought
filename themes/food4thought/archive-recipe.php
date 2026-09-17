<?php get_header(); ?>
<section class="headerImageSection">

		<img src="<?php echo get_theme_file_uri('/img/snack-circle.png'); ?>" alt="" class="headerImage">

		<h1>All Recipes</h1>

		<div class="headerButtons">
			<input type="search">
			<button>+ Add Recipe</button>
		</div>

	</section>

	<div class="allRecipesLayout">

		<aside>

			<div class="recipeFilters">

				<div class="recipeFilter">

					<label>Meal Type</label>

					<label>
						<input type="checkbox" name="mealType" value="all">
						All
					</label>

					<label>
						<input type="checkbox" name="mealType" value="breakfast" checked>
						Breakfast
					</label>

					<label>
						<input type="checkbox" name="mealType" value="lunch">
						Lunch
					</label>

					<label>
						<input type="checkbox" name="mealType" value="dinner">
						Dinner
					</label>
					<label>
						<input type="checkbox" name="mealType" value="dessert">
						Dessert
					</label>

					<label>
						<input type="checkbox" name="mealType" value="snack">
						Snack
					</label>

				</div>


				<div class="recipeFilter">

					<label>Allergies</label>

					<label>
						<input type="checkbox" name="allergies" value="all">
						All
					</label>

					<label>
						<input type="checkbox" name="allergies" value="gluten" checked>
						Gluten Free
					</label>

					<label>
						<input type="checkbox" name="allergies" value="dairy">
						Dairy-free
					</label>

					<label>
						<input type="checkbox" name="allergies" value="nuts">
						Nut-free
					</label>

					<label>
						<input type="checkbox" name="allergies" value="egg">
						Egg-free
					</label>

				</div>


				<div class="recipeFilter">

					<label>Preferences</label>

					<label>
						<input type="checkbox" name="preferences" value="all">
						All
					</label>

					<label>
						<input type="checkbox" name="preferences" value="vegetarian">
						Vegetarian
					</label>

					<label>
						<input type="checkbox" name="preferences" value="vegan">
						Vegan
					</label>

					<label>
						<input type="checkbox" name="preferences" value="high-protein">
						High Protein
					</label>

				</div>


				<div class="recipeFilter">

					<label>Made By</label>

					<label>
						<input type="checkbox" name="madeBy" value="chef">
						Professional Chefs
					</label>

					<label>
						<input type="checkbox" name="madeBy" value="user">
						Amateur Cooks
					</label>

					<label>
						<input type="checkbox" name="madeBy" value="restaurant">
						Home Cooks
					</label>

				</div>

			</div>

		</aside>


		<section class="allRecipesMain">

			<div class="recipeResultsHeader">

				<div class="singleRecipeTags">

					<div>
						<p>X Gluten Free</p>
					</div>

					<div>
						<p>X Breakfast</p>
					</div>

					<p>(Showing 8 results)</p>


				</div>


				<div class="orderBy">

					<span>Order by</span>

					<i class="fa-solid fa-chevron-down"></i>

				</div>

			</div>


			<div class="allRecipesGrid">

    <?php

    $recipeQuery = new WP_Query(array(
        'post_type' => 'recipe',
        'posts_per_page' => -1
    ));

    if ($recipeQuery->have_posts()) :

        while ($recipeQuery->have_posts()) :

            $recipeQuery->the_post();

            $time = get_field('time');

    ?>

        <a href="<?php the_permalink(); ?>" class="recipeCard">

            <img
                class="recipeCardImage"
                src="<?php echo get_the_post_thumbnail_url(); ?>"
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
                        <?php echo $time['total_time']; ?>
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

    else :

    ?>

        <p>No recipes found.</p>

    <?php endif; ?>

</div>
		</section>

	</div>
