<?php

if( post_password_required() ){
	return;
}

?>


<!-- Comments============================================= -->
<div id="comments" class="clearfix">
	<?php

	if( have_comments() ){
		?>
		<h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

		<!-- Comments List
		============================================= -->
		<ol class="commentlist clearfix">

			<?php

			foreach( $comments as $comment ){
				?>
				<li class="comment even thread-even depth-1" id="li-comment-1">
					<div id="comment-1" class="comment-wrap clearfix">
						<div class="comment-meta">
							<div class="comment-author vcard">
							<span class="comment-avatar clearfix">
								<?php echo get_avatar( $comment, 60 ); ?>
							</span>
							</div>
						</div>

						<div class="comment-content clearfix">
							<div class="comment-author">
								<?php comment_author(); ?>
								<span><a href="#" title="Permalink to this comment"><?php comment_date(); ?></a></span>
							</div>
							<?php comment_text(); ?>
						</div>

						<div class="clear"></div>

					</div>

				</li>
				

				<?php
			}

			the_comments_pagination();

			?>

		</ol><!-- .commentlist end -->
		<?php
	}

	?>

	<div class="clear"></div>

	<!-- Comment Form
	============================================= -->
	<div class="comment-area">

		<?php

		comment_form(array(
			'comment_field'     =>  '
            <div class="col-sm-12 acurate" data-aos="fade-down" data-aos-duration="1200">
            <div>
                <label for="comment">' . __( 'Comment', 'landing' ) . '</label>
                <textarea name="comment" cols="40" rows="10" tabindex="4" class="textarea form-control" id="msg"></textarea>
            </div>
             </div>',
			'fields'            =>  array(
				'author'        =>
					'<div class="col-sm-6 padding-left" data-aos="fade-down" data-aos-duration="1200">
					  <div class="form-group">
                <label for="author">' . __( 'Name', 'landing' ) . '</label>
                <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control" id="name" />
                  </div>
                </div>',
				'email'         =>
					'<div class="col-sm-6 padding-right" data-aos="fade-down" data-aos-duration="1200">
					    <div class="form-group">
                <label for="email">' . __( 'E-mail', 'landing' ) . '</label>
                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control" />
                   </div>
                </div>',

				//'url'           =>
					///'<div class="col_one_third col_last">
                //<label for="url">' . __( 'Website', 'udemy' ) . '</label>
                //<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
               // </div>'
			),
			'class_submit'      =>  'btn-send data-aos="fade-down" data-aos-duration="1200"',
			'label_submit'      =>  __( 'SUBMIT COMMENT' , 'landing' ),
			'title_reply'       =>  __( '<h4>Leave a comment</h4>', 'udemy' )

		));

		?>

	</div><!-- #respond end -->

</div><!-- #comments end -->