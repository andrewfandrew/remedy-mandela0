			</div>

			<div class="right" id="sidebar">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				<div class="section">

					<div class="section-title">Search</div>

					<div class="section-content">

						<form method="get" action="<?php bloginfo('url'); ?>">
							<input type="text" id="s" name="s" value="" class="text" size="26" /> <input type="submit" value="Search" class="button" />
						</form>
					
					</div>

				</div>				
							
				<div class="section">

					<div class="section-title">Categories</div>

					<div class="section-content">

						<ul class="nice-list">
							<?php wp_list_categories('title_li=&show_count=1'); ?>
						</ul>
					
					</div>

				</div>

				<div class="section">

					<div class="section-title">Topics</div>

					<div class="section-content">

						<p><?php wp_tag_cloud(array('smallest'=>12, 'largest'=>18, 'unit'=>'px')); ?></p>
					
					</div>

				</div>

				<div class="section">

					<div class="section-title">Archives</div>

					<div class="section-content">

						<ul class="nice-list">
							<?php wp_get_archives('show_post_count=1'); ?> 
						</ul>
					
					</div>

				</div>

				<div class="section">

					<div class="section-title">Authors</div>

					<div class="section-content">

						<ul class="nice-list">
							<?php wp_list_authors('exclude_admin=0&optioncount=1&hide_empty=0'); ?> 
						</ul>
					
					</div>

				</div>

<?php endif; ?>

			</div>