<div class="post-comments <?php if(get_theme_mod('zlotus_post_pagination_hide')) : ?>nopagination<?php endif; ?>" id="comments">
	
	<?php 
		if ( comments_open() ) :
		echo '<h4 class="related-heading">';
		comments_number(esc_html__('No Comments','zlotus'), esc_html__('1 Comment','zlotus'), '% ' . esc_html__('Comments','zlotus') );
		echo '</h4>';
		endif;

		echo "<div class='comments'><ul>";
		
			wp_list_comments(array(
				'avatar_size'	=> 60,
				'style'			=> 'ul',
				'callback'		=> 'zlotus_comments',
				'type'			=> 'all'
			));

		echo "</ul></div>";

		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout
		$aria_req = '';
		$sp_fields =  array(

		  'author' =>
			'<p class="comment-form-author"><input id="author" placeholder="'. esc_html__('Name', 'zlotus') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'email' =>
			'<p class="comment-form-email"><input id="email" placeholder="'. esc_html__('Email', 'zlotus') .'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'url' =>
			'<p class="comment-form-url"><input id="url" placeholder="'. esc_html__('Website', 'zlotus') .'" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></p>',
		);
		
		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> esc_html__('Leave a Reply', 'zlotus'),
			'cancel_reply_link'		=> esc_html__('Cancel Reply', 'zlotus'),
			'label_submit'			=> esc_html__('Post Comment', 'zlotus'),
			'fields' => $sp_fields,
		));
	 ?>


</div> <!-- end comments div -->