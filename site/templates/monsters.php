<?php snippet('header') ?> 

<?php snippet('menu') ?>  










<style type="text/css">

.home .monsters .monster {
	padding: 50px 12px 0 12px;
	box-sizing: border-box;
}

.monster-card {
	background-color: #271505;
	text-align: center;
	padding-bottom: 20px;
	margin-bottom: 60px;
	-webkit-transition: transform 0.2s ease-in-out;
	-moz-transition: transform 0.2s ease-in-out;
	-ms-transition: transform 0.2s ease-in-out;
	-o-transition: transform 0.2s ease-in-out;
	transition: transform 0.2s ease-in-out;
}

.monster-card .images {
	text-align: center;
	position: relative;
	top: -50px;
}

.monster-card .images img {
	-webkit-border-radius: 50%;
	border-radius: 50%;
	background-clip: padding-box;
	border: 4px solid #ffcb70;
}

.b-lazy.b-loaded {
	opacity: 1;
}

.monster-card .name {
	margin-top: -35px;
}

.site-content-page a {
	text-decoration: none;
	color: #ffd87b;
}

.monster-card .stars {
	color: gold;
}

</style>

<div id="blog-area" class="blog-with-sidebar-area blog-single-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<h1 style="margin-bottom: 80px;"><?php echo $page->title() ?></h1>
				<div class="blog-post" style="margin-left: 15px;">
					<div class="single-blog-post">
						<div class="row">

							<?php foreach ($monsters as $monster) : ?>
							<div class="col-sm-6">
								<div class="pure-u-1 pure-u-md-1-4 monster">
									<article class="monster-card" data-route="https://summonerswarskyarena.info/monster-group/harp-magician/">

										<div class="images">
											<?php if($image = $monster->coverimage()->toFile()): ?>
												<img class="b-lazy b-loaded" src="<?php echo $image->url() ?>">
											<?php endif ?>
										</div>

										<div class="name">
											<a href="<?php echo $monster->url() ?>"><h3><?php echo $monster->title() ?></h3></a>
										</div>

										<div class="stars">
											<?php if($monster->grade() == 'one') : ?>
												<i class="fa fa-star">&nbsp;</i>
											<?php elseif($monster->grade() == 'two') : ?>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i> 
											<?php elseif($monster->grade() == 'three') : ?>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i> 
											<?php elseif($monster->grade() == 'four') : ?>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
											<?php elseif($monster->grade() == 'five') : ?>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
												<i class="fa fa-star">&nbsp;</i>
											<?php endif ?>
										</div>

									</article>
								</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<?php snippet('sidebar') ?>
		</div>
	</div>
</div>

<?php snippet('callout') ?>

<?php   snippet('footer') ?>