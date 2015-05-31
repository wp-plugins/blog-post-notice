<div id="blog-post-notice-preview">
</div>

<textarea name="blog-post-notice-editor">
<?php echo get_post_meta( get_the_ID(), 'blog-post-notice', true ); ?>
</textarea>
<?php wp_nonce_field( 'blog-post-notice-save', 'blog-post-notice-nonce' ); ?>
