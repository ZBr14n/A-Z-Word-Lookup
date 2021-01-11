<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// import bootstrap 
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true );


// import custom JS here:
wp_enqueue_script('my-custom-scripts', get_stylesheet_directory_uri().'/assets/js/transitionContainer.min.js');
wp_enqueue_script('my-custom-scripts2', get_stylesheet_directory_uri().'/assets/js/toTop.min.js');
wp_rig()->print_styles( 'wp-rig-content' );

function add_new_definitions(){
	$the_word = $_POST['the_word'];
	$the_meaning = $_POST['the_meaning'];

	$fields = array(
		'word' => $the_word,
		'meaning' => $the_meaning
	);

	// get post id
	$new_id = pods('definition')->add($fields);


	// add post title
	$this_post = array(
		'ID' => $new_id,
		'post_title' => $the_word
	);
	wp_update_post( $this_post );

	
	return $new_id;
}

function populate_words_by_alphabets(){
	
}

if ( isset( $_POST['the_word']) && isset($_POST['the_meaning']) ){
	add_new_definitions();
}


?>
	<main id="primary" class="site-main">
		
		

		<?php
		// if ( have_posts() ) {

		// 	get_template_part( 'template-parts/content/page_header' );

		// 	while ( have_posts() ) {
		// 		the_post();

		// 		get_template_part( 'template-parts/content/entry', get_post_type() );
		// 	}

		// 	if ( ! is_singular() ) {
		// 		get_template_part( 'template-parts/content/pagination' );
		// 	}
		// } else {
		// 	get_template_part( 'template-parts/content/error' );
		// }



		?>

		
			<!-- displays A-Z horizontally -->
		<section class="letters__container">
			<?php for($i = 65; $i <= 90; $i++): ?>
				
				<a onclick="TransitionContainer('<?= chr($i) ?>');" class="letters__populate" href="<?= '#' . chr($i) ?>" rel="noopener noreferrer"> <?= chr($i) ?> </a>
				
			<?php endfor; ?>
		</section>


				<!-- A-Z side by side with any words that match respective letters -->
		<section class="letters-words__container">
			<article>
				
				<aside>
					<?php for($i = 65; $i <= 90; $i++): ?>
						
						<div class="letters-words__wrapper" id="<?= chr($i) ?>" style="display:flex;"> 
							<div class="the-letter-wrapper">
								<div class="the-letter"><?= chr($i) ?></div>
							</div>
							
							<div style="padding:20px;"></div>

							<div class="the-words-wrapper">
								<div class="the-words<?= chr($i) ?>">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis cumque consequatur tempore dicta eligendi nisi temporibus fugiat maiores nam quia, unde dolorum rerum iure aperiam repellat mollitia deserunt minima explicabo repudiandae esse. Reiciendis, illo beatae mollitia minus, doloribus totam, deleniti dolor enim explicabo deserunt cum nesciunt ratione laboriosam nihil quod accusamus porro? Veritatis aperiam animi hic officia cumque! Neque dolores eum at molestias aperiam non placeat minus, nam reprehenderit totam. Commodi in maxime quisquam nisi, voluptate recusandae sit? Consequatur!</div>
							</div>

							
							<!-- <div class="to-top"></div> -->
							<!-- get_template_part( 'template-parts/content/page_header' ); -->
							<!-- get_template_part( 'template-parts/content/form_submission.php' ); -->
							<div>
								<div class="container">
									<form method="POST">
										<div class="form-group row">
											<div class="col">
												<input name="the_word" type="text" placeholder="Enter Word Here" class="form-control text-center">
											</div>
										</div>

										<div class="form-group">
											<textarea name="the_meaning" class="form-control" rows="3" placeholder="e.g. Economy means the management of household or private affairs and especially expenses"></textarea>
										</div>

										<div class="form-group row">
											<div class="col text-center">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>


						</div>
						
					<?php endfor; ?>
				</aside>
				
			</article>
			
		</section>

		
				
	</main><!-- #primary -->
<?php
// get_sidebar();
get_footer();


