<!-- Henter header.php og indsætter her -->
<?php get_header(); ?>

<!-- Header/hero section -->
<section class="headerImageSection">

		<img src="<?php echo get_theme_file_uri('/img/snack-circle.webp'); ?>" alt="" class="headerImage">

		<h1>All Recipes</h1>

		<div class="headerButtons">
			<input type="search" placeholder=" Search here...">
			<button>+ Add Recipe</button>
		</div>

	</section>

	<!-- Main indhold section -->
	 <main>
	<div class="allRecipesLayout">

	<!-- Aside med filter. Accordion med js -->
		<aside>

			<div class="recipeFilters">

				<div class="recipeFilter">

					<label>Meal Type</label>

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
					<label>
						<input type="checkbox" name="mealType" value="bread">
						Bread
					</label>

				</div>


				<div class="recipeFilter">

					<label>Allergies</label>

					<label>
						<input type="checkbox" name="allergies" value="gluten" checked>
						Gluten-free
					</label>

					<label>
						<input type="checkbox" name="allergies" value="lactose">
						Lactose-free
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
						<input type="checkbox" name="allergies" value="shellfish">
						Shellfish-free
					</label>

				</div>


				<div class="recipeFilter">

					<label>Preferences</label>

					<label>
						<input type="checkbox" name="preferences" value="vegetarian">
						Vegetarian
					</label>

					<label>
						<input type="checkbox" name="preferences" value="vegan">
						Vegan
					</label>

					<label>
						<input type="checkbox" name="preferences" value="pescetarian">
						Pescetarian
					</label>

					<label>
						<input type="checkbox" name="preferences" value="keto">
						Keto
					</label>
					<label>
						<input type="checkbox" name="preferences" value="low-carb">
						Low-carb
					</label>
					<label>
						<input type="checkbox" name="preferences" value="high-protein">
						High-protein
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

<!-- Recipes section -->
		<section class="allRecipesMain">

			<div class="recipeResultsHeader">

				<div class="singleRecipeTags">

					<div>
						<p>X Gluten Free</p>
					</div>

					<div>
						<p>X Breakfast</p>
					</div>

					<p>(Showing 9 results)</p>


				</div>


				<div class="orderBy">

					<span>Order by</span>

					<i class="fa-solid fa-chevron-down"></i>

				</div>

			</div>


			<div class="allRecipesGrid">

	<!-- Bruger the loop til at hente alle recipes og få dem vist med vores html cards -->
    <?php

        while (have_posts()) {

            the_post();

			// Henter acf felt time, så det indsættes i vores html
            $time = get_field('time');

    ?>
<!-- For hver recipe laves der et card, som henter oplysninger fra wordpress og indsætter dynamisk -->
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

<?php } ?>

</div>
		</section>

	</div>
</main>

    <?php get_footer(); ?>