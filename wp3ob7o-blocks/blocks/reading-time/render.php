<?php
/**
 * Reading Time — server-side render.
 *
 * Calculates reading time from post content word count.
 * Average reading speed: 200 words per minute.
 *
 * @package wp3ob7o-blocks
 */

$post_id = $block->context['postId'] ?? get_the_ID();
if ( ! $post_id ) {
	return;
}

$content    = get_post_field( 'post_content', $post_id );
$word_count = str_word_count( wp_strip_all_tags( $content ) );
$minutes    = max( 1, (int) ceil( $word_count / 200 ) );

$wrapper_attributes = get_block_wrapper_attributes( array(
	'class' => 'reading-time',
) );
?>
<span <?php echo $wrapper_attributes; ?>>
	<?php
	printf(
		/* translators: %d: number of minutes */
		esc_html( _n( '%d min read', '%d min read', $minutes, 'wp3ob7o-blocks' ) ),
		$minutes
	);
	?>
</span>
