<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_page' );
	?>
</article><!-- #post-## -->

<?php 

$about_title = get_field('about_title');
if ($about_title != "")
{
	echo "<h2>";
	echo $about_title;
	echo "</h2>";
}

$about_text = get_field('about_text');
if ($about_text != "")
{
	echo "<p>";
	echo $about_text;
	echo "</p>";
}

$about_image = get_field('about_image');
if ($about_image != "")
{
	echo "<img src='";
	echo $about_image;
	echo "'/>";
}



?>

