<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php foreach($blogs as $blog): 
					$sr = strtotime($blog['dtou']);
					?>
				<!-- Blog Post -->
				<div class="blog_post">
					<div class="blog_post_image"><img src="<?= $blog['link'];?>" alt=""></div>
					<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
						
						<div class="date_day"><?= date("d",$sr);?></div>
						<div class="date_month"><?= date("F",$sr);?></div>
						<div class="date_year"><?= date("Y",$sr);?></div>
					</div>
					<div class="blog_post_title"><a href="#"><?= $blog['title'];?></a></div>
					<!-- <div class="blog_post_info">
						<ul class="d-flex flex-row align-items-center justify-content-center">
							<li>by <a href="#">Dr. James Smith</a></li>
							<li>in <a href="#">Surgery</a></li>
							<li><a href="#">2 Comments</a></li>
						</ul>
					</div> -->
					<div class="blog_post_text text-center">
						<p><?= $blog['comment'];?></p>
					</div><!-- 
					<div class="blog_post_button text-center"><div class="button button_1 ml-auto mr-auto"><a href="#">read more</a></div></div> -->
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>