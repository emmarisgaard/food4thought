<!-- footer laves med html og indsættes med php -->
<footer>

		<h1 class="logoFooter">

			<a href="<?php echo home_url(); ?>">
				FOOD4THOUGHT
			</a>

		</h1>


		<ul class="footerNav">

			<li>
				<a href="#">
					Support
				</a>
			</li>

			<li>
				<a href="#">
					Cookie Policy
				</a>
			</li>

			<li>
				<a href="#">
					Copyright
				</a>
			</li>

		</ul>


		<ul class="footerNav">

			<li>
				<a href="<?php echo get_post_type_archive_link('recipe'); ?>">
					Recipes
				</a>
			</li>

			<li>
				<a href="<?php echo get_post_type_archive_link('story'); ?>">
					Foodstories & tips
				</a>
			</li>

			<li>
				<a href="<?php echo get_post_type_archive_link('tool'); ?>">
					Tools & Recommendations
				</a>
			</li>

			<li>
				<a href="#">
					Profile
				</a>
			</li>

		</ul>


		<div class="footerSearch">

			<i class="fa-solid fa-magnifying-glass"></i>

		</div>

	</footer>
		<?php wp_footer(); ?>
</body>

</html>