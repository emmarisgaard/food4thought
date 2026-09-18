<?php get_header(); ?>


<section class="frontPageHero">

	<video autoplay muted loop playsinline>

		<source src="<?php echo get_theme_file_uri('/img/front-page-hero-video.mp4'); ?>" type="video/mp4">

	</video>


	<div class="frontPageHeroText">

		<h1>
			COOK. SHARE. INSPIRE.
		</h1>

		<p>
			Discover recipes, stories, and kitchen tips from home cooks, passionate amateurs, and professional
			chefs.
		</p>

	</div>


	<div class="frontPageHeroButtons">

		<button>
			+ Add Recipe
		</button>

		<button>
			+ Add Tool Review
		</button>

		<button>
			+ Add Foodstory
		</button>

	</div>

</section>


<section class="relatedRecipesSection">

	<div class="relatedSectionHeader">

		<h2 class="relatedRecipesTitle">
			Recipes by professional cooks
		</h2>

		<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="seeAllButton">
			See all professional recipes
		</a>

	</div>


	<div class="relatedRecipes">

		<?php
		$professionalRecipes = new WP_Query(array(
			'post_type' => 'recipe',
			'posts_per_page' => 5
		));

		if ($professionalRecipes->have_posts()) :
			while ($professionalRecipes->have_posts()) :
				$professionalRecipes->the_post();
		?>

				<a href="<?php the_permalink(); ?>" class="recipeCard">

					<img
						class="recipeCardImage"
						src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
						alt="<?php the_title(); ?>"
					>

					<div class="recipeCardContent">

						<h2 class="recipeCardTitle">
							<?php the_title(); ?>
						</h2>

						<hr class="recipeCardDivider">

						<div class="recipeCardAuthor">

							<span>By <?php the_author(); ?></span>

							<img
								class="recipeCardChefIcon"
								src="<?php echo get_theme_file_uri('/img/chef_hat_24dp_EDEDEA_FILL0_wght400_GRAD0_opsz24.svg'); ?>"
								alt=""
							>

						</div>

						<div class="recipeCardTime">

							<i class="fa-regular fa-clock"></i>

							<span>1 time</span>

						</div>

						<div class="recipeCardActions">

							<div class="recipeCardSave">

								<i class="fa-regular fa-bookmark"></i>

								<span>Save as</span>

							</div>

							<span class="recipeCardView">
								Go to recipe
							</span>

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


<div class="circleSectionHeader">

	<h2 class="relatedRecipesTitle">
		Recipes by category
	</h2>

	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="seeAllButton">
		See all recipes
	</a>

</div>


<section class="toolCategories">

	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/breakfast-circle.jpg'); ?>" alt="Breakfast">

		<p>
			Breakfast
		</p>

	</a>


	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/lunch-circle.jpg'); ?>" alt="Lunch">

		<p>
			Lunch
		</p>

	</a>


	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/dinner-circle.jpg'); ?>" alt="Dinner">

		<p>
			Dinner
		</p>

	</a>


	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/dessert-circle.png'); ?>" alt="Dessert">

		<p>
			Dessert
		</p>

	</a>


	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/snack-circle.png'); ?>" alt="Snacks">

		<p>
			Snacks
		</p>

	</a>


	<a href="<?php echo get_post_type_archive_link('recipe'); ?>" class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/bread-circle.png'); ?>" alt="Bread">

		<p>
			Bread
		</p>

	</a>

</section>


<div class="singleRecipeHr">
	<hr>
</div>


<section class="relatedRecipesSection">

	<div class="relatedSectionHeader">

		<h2 class="relatedRecipesTitle">
			Tool reviews
		</h2>

		<a href="<?php echo get_post_type_archive_link('tool'); ?>" class="seeAllButton">
			See all tool reviews
		</a>

	</div>


	<section class="allToolsToolCards">

		<?php
		$tools = new WP_Query(array(
			'post_type' => 'tool',
			'posts_per_page' => 4
		));

		if ($tools->have_posts()) :
			while ($tools->have_posts()) :
				$tools->the_post();
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

		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

	</section>

</section>


<div class="circleSectionHeader">

	<h2 class="relatedRecipesTitle">
		Tools by category
	</h2>

	<a href="<?php echo get_post_type_archive_link('tool'); ?>" class="seeAllButton">
		See all tools
	</a>

</div>


<section class="toolCategories">

	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/knives-circle.png'); ?>" alt="Knives & Cutting">

		<p>
			Knives & Cutting
		</p>

	</div>


	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/cookware-circle.jpg'); ?>" alt="Cookware">

		<p>
			Cookware
		</p>

	</div>


	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/kitchen-machines-circle.png'); ?>" alt="Kitchen Appliances">

		<p>
			Kitchen Appliances
		</p>

	</div>


	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/baking-circle.jpg'); ?>" alt="Baking & Pastry">

		<p>
			Baking & Pastry
		</p>

	</div>


	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/essantial-circle.png'); ?>" alt="Kitchen essencials">

		<p>
			Kitchen essencials
		</p>

	</div>


	<div class="toolCategori">

		<img src="<?php echo get_theme_file_uri('/img/grill-tools-circle.png'); ?>" alt="Grill & Outdoorcooking">

		<p>
			Grill & Outdoorcooking
		</p>

	</div>

</section>


<?php get_footer(); ?>