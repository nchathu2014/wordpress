
<?php get_header()?>
		
<div style="width:20%;float:left;">
	<?php get_sidebar()?>
</div>

<div style="width:80%;float:right;">
	<!-- Begin Content-->
 			<div id="content">
 				
 				<?php if(have_posts()) :?>
 					<?php while(have_posts()):the_post()?>
 						<div class="post_snippet">
 							<h2>
 								<a href=<?php the_permalink()?> title=<?php the_title_attribute()?>>
 								  <?php the_title()?>
 								</a>
 							</h2>
 							<p><?php the_content()?></p>
 							
 						</div>
 					<?php endwhile?>
 					<p><?php previous_posts_link("Previous Entries")?><?php next_posts_link("Next Entries")?></p>
 					<?php else :?>
 					<h2>Sorry.Cannot find any posts</h2>
 				<?php endif;?>


 			</div>
 		<!-- End Content-->

<?php get_footer() ?> 	