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

.note {
	top: -15px;
	position: relative;
}

.nav-tabs { border-bottom: 2px solid #DDD; }
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #666; }
.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
.nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
body{ background: #EDECEC; padding:50px}
</style>

<div id="blog-area" class="blog-with-sidebar-area blog-single-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<h1 style="margin-bottom: 80px;"><?php echo $page->title() ?></h1>
				<div class="blog-post" style="margin-left: 15px;">
					<div class="single-blog-post">
						<div class="row">



							<div class="col-md-12">
								<!-- Nav tabs --><div class="card">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#wing" aria-controls="home" role="tab" data-toggle="tab">Wing Calculator</a></li>
										<li role="presentation"><a href="#halo" aria-controls="profile" role="tab" data-toggle="tab">Halo Calculator</a></li>

									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="wing"><strong>LEGENDS:</strong>
											<table class="table table-bordered table-hover table-responsive">
												<tbody>
													<tr>
														<td>Feather Cost</td>
														<td>3</td>
													</tr>
													<tr>
														<td>Composition Charm</td>
														<td>40</td>
													</tr>
												</tbody>
											</table>
											<strong>COST BASED ON MARKET VALUE</strong>
											<table class="table table-bordered table-hover table-responsive">
												<thead>
													<tr>
														<th>Level</th>
														<th>Multiplier</th>
														<th>Feathers</th>
														<th>Charms</th>
														<th>Diamonds</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Level 1 Wing</td>
														<td>1</td>
														<td>7</td>
														<td>1</td>
														<td>64</td>
													</tr>
													<tr>
														<td>Level 2 Wing</td>
														<td>3</td>
														<td>21</td>
														<td>3</td>
														<td>183</td>
													</tr>
													<tr>
														<td>Level 3 Wing</td>
														<td>9</td>
														<td>63</td>
														<td>9</td>
														<td>549</td>
													</tr>
													<tr>
														<td>Level 4 Wing</td>
														<td>27</td>
														<td>189</td>
														<td>27</td>
														<td>1647</td>
													</tr>
													<tr>
														<td>Level 5 Wing</td>
														<td>54</td>
														<td>378</td>
														<td>54</td>
														<td>3294</td>
													</tr>
													<tr>
														<td>Level 6 Wing</td>
														<td>108</td>
														<td>756</td>
														<td>108</td>
														<td>6588</td>
													</tr>
													<tr>
														<td>Level 7 Wing</td>
														<td>216</td>
														<td>1512</td>
														<td>216</td>
														<td>13176</td>
													</tr>
													<tr>
														<td>Level 8 Wing</td>
														<td>432</td>
														<td>3024</td>
														<td>432</td>
														<td>26352</td>
													</tr>
												</tr>
												<tr>
													<td>Level 9 Wing</td>
													<td>864</td>
													<td>6048</td>
													<td>864</td>
													<td>52704</td>
												</tr>
												<tr>
													<td>Level 10 Wing</td>
													<td>1728</td>
													<td>12096</td>
													<td>1728</td>
													<td>105408</td>
												</tr>
											</tbody>
										</table>
										<strong>CHARMS -> DIAMONDS</strong>	
										<table class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>Level</th>
													<th>Charms</th>
													<th>Diamonds</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 1 Wing</td>
													<td>1</td>
													<td>40</td>
												</tr>
												<tr>
													<td>Level 2 Wing</td>
													<td>3</td>
													<td>120</td>
												</tr>
												<tr>
													<td>Level 3 Wing</td>
													<td>9</td>
													<td>360</td>
												</tr>
												<tr>
													<td>Level 4 Wing</td>
													<td>27</td>
													<td>1080</td>
												</tr>
												<tr>
													<td>Level 5 Wing</td>
													<td>54</td>
													<td>2160</td>
												</tr>
												<tr>
													<td>Level 6 Wing</td>
													<td>108</td>
													<td>4320</td>
												</tr>
												<tr>
													<td>Level 7 Wing</td>
													<td>216</td>
													<td>8640</td>
												</tr>
												<tr>
													<td>Level 8 Wing</td>
													<td>432</td>
													<td>17280</td>
													</tr
												</tr>
												<tr>
													<td>Level 9 Wing</td>
													<td>864</td>
													<td>34560</td>
												</tr>
												<tr>
													<td>Level 10 Wing</td>
													<td>1728</td>
													<td>69120</td>
												</tr>
											</tbody>
										</table>
										<em class="note">Feathers are dropped on world auto</em>
										<br>	
										<strong>WING STATS</strong>	
										<table class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>Level</th>
													<th>Physical Attack</th>
													<th>Magical Attack</th>
													<th>Physical Attack %</th>
													<th>Magical Penetration</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 1 Wing</td>
													<td>24</td>
													<td>24</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 2 Wing</td>
													<td>42</td>
													<td>42</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 3 Wing</td>
													<td>72</td>
													<td>72</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 4 Wing</td>
													<td>150</td>
													<td>150</td>
													<td>3</td>
													<td>2</td>
												</tr>
												<tr>
													<td>Level 5 Wing</td>
													<td>200</td>
													<td>200</td>
													<td>6</td>
													<td>4</td>
												</tr>
												<tr>
													<td>Level 6 Wing</td>
													<td>300</td>
													<td>300</td>
													<td>9</td>
													<td>6</td>
												</tr>
												<tr>
													<td>Level 7 Wing</td>
													<td>400</td>
													<td>400</td>
													<td>12</td>
													<td>8</td>
												</tr>
												<tr>
													<td>Level 8 Wing</td>
													<td>600</td>
													<td>600</td>
													<td>15</td>
													<td>12</td>
													</tr
												</tr>
												<tr>
													<td>Level 9 Wing</td>
													<td>800</td>
													<td>800</td>
													<td>18</td>
													<td>16</td>
												</tr>
												<tr>
													<td>Level 10 Wing</td>
													<td>1000</td>
													<td>1000</td>
													<td>21</td>
													<td>20</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div role="tabpanel" class="tab-pane" id="halo">
										<strong>LEGENDS:</strong>
										<table class="table table-bordered table-hover table-responsive">
											<tbody>
												<tr>
													<td>Fragment</td>
													<td>2</td>
												</tr>
												<tr>
													<td>Cost to Craft</td>
													<td>2</td>
												</tr>
											</tbody>
										</table>
										<strong>COST BASED ON MARKET VALUE</strong>
										<table class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>Level</th>
													<th>Multiplier</th>
													<th>Fragments</th>
													<th>Diamonds</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 1 Halo</td>
													<td>1</td>
													<td>3</td>
													<td>8</td>
												</tr>
												<tr>
													<td>Level 2 Halo</td>
													<td>3</td>
													<td>9</td>
													<td>26</td>
												</tr>
												<tr>
													<td>Level 3 Halo</td>
													<td>9</td>
													<td>27</td>
													<td>80</td>
												</tr>
												<tr>
													<td>Level 4 Halo</td>
													<td>27</td>
													<td>81</td>
													<td>242</td>
												</tr>
												<tr>
													<td>Level 5 Halo</td>
													<td>81</td>
													<td>243</td>
													<td>728</td>
												</tr>
												<tr>
													<td>Level 6 Halo</td>
													<td>243</td>
													<td>729</td>
													<td>2186</td>
												</tr>
												<tr>
													<td>Level 7 Halo</td>
													<td>729</td>
													<td>2187</td>
													<td>6560</td>
												</tr>
												<tr>
													<td>Level 8 Halo</td>
													<td>2187</td>
													<td>6561</td>
													<td>19682</td>
												</tr>
											</tr>
											<tr>
												<td>Level 9 Halo</td>
												<td>6561</td>
												<td>19683</td>
												<td>59048</td>
											</tr>
											<tr>
												<td>Level 10 Halo</td>
												<td>19683</td>
												<td>59049</td>
												<td>177146</td>
											</tr>
										</tbody>
									</table>
									<em class="note">We assume the cost of the fragment is 2 diamond</em>
									<br>	
										<strong>HALO STATS</strong>	
										<table class="table table-bordered table-hover table-responsive">
											<thead>
												<tr>
													<th>Level</th>
													<th>Physical Attack</th>
													<th>Magical Attack</th>
													<th>Physical Attack %</th>
													<th>Magical Attack %</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 1 Halo</td>
													<td>2</td>
													<td>2</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 2 Halo</td>
													<td>6</td>
													<td>6</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 3 Halo</td>
													<td>18</td>
													<td>18</td>
													<td>0</td>
													<td>0</td>
												</tr>
												<tr>
													<td>Level 4 Halo</td>
													<td>30</td>
													<td>30</td>
													<td>3</td>
													<td>2</td>
												</tr>
												<tr>
													<td>Level 5 Halo</td>
													<td>50</td>
													<td>50</td>
													<td>6</td>
													<td>4</td>
												</tr>
												<tr>
													<td>Level 6 Halo</td>
													<td>150</td>
													<td>150</td>
													<td>9</td>
													<td>6</td>
												</tr>
												<tr>
													<td>Level 7 Halo</td>
													<td>400</td>
													<td>400</td>
													<td>2</td>
													<td>2</td>
												</tr>
												<tr>
													<td>Level 8 Halo</td>
													<td>500</td>
													<td>500</td>
													<td>6</td>
													<td>6</td>
													</tr
												</tr>
												<tr>
													<td>Level 9 Halo</td>
													<td>600</td>
													<td>600</td>
													<td>20</td>
													<td>20</td>
												</tr>
												<tr>
													<td>Level 10 Halo</td>
													<td>800</td>
													<td>800</td>
													<td>35</td>
													<td>35</td>
												</tr>
											</tbody>
										</table>
								</div>

							</div>
						</div>
					</div>

















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