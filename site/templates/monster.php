<?php snippet('header') ?> 

<?php snippet('menu') ?>  



<style type="text/css">
#overview-anchor {
  margin-left: 15px;
}
.details-box-overlay {
  position: absolute;
  z-index: 1;
  background: rgba(0,0,0,.81);
  width: 99%;
  height: 100%;
}
#blog-area .detail-label {
  width: 100px;
  position: absolute;
  font-size: 14px;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #fff;
}

#blog-area .section-titles {
  position: relative;
  font-size: 20px;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #fff;
  text-align: left;
  padding-bottom: 20px;
}

#blog-area .detail-item {
  width: 100%;
  position: relative;
  padding: 0;
}

#blog-area .detail-content {
  font-family: Asap,sans-serif;
  font-size: 13px;
  padding-left: 120px;
  color: #fff;
  display: block;
}

.details-box {
  position: relative;
  z-index: 2;
  padding: 20px;
}

#blog-area {
  position: relative;
  font-size: 13px;
  word-wrap: break-word;
}

.single-blog-post {
  margin-bottom: 0px !important;
}

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
        <div class="blog-post">
          <div class="single-blog-post">
           <div class="row">
            <div class="details-box">
              <div class="pure-u-1 pure-u-md-1-4 monster">
                <article class="monster-card" data-route="https://summonerswarskyarena.info/monster-group/harp-magician/">

                  <div class="images">
                    <?php if($image = $page->coverimage()->toFile()): ?>
                      <img class="b-lazy b-loaded" src="<?php echo $image->url() ?>">
                    <?php endif ?>
                  </div>

                  <div class="name">
                    <a href="<?php echo $page->url() ?>"><h3><?php echo $page->title() ?></h3></a>
                  </div>

                  <div class="stars">
                    <?php if($page->grade() == 'one') : ?>
                      <i class="fa fa-star">&nbsp;</i>
                    <?php elseif($page->grade() == 'two') : ?>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i> 
                    <?php elseif($page->grade() == 'three') : ?>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i> 
                    <?php elseif($page->grade() == 'four') : ?>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                    <?php elseif($page->grade() == 'five') : ?>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                      <i class="fa fa-star">&nbsp;</i>
                    <?php endif ?>
                  </div>


              <div class="details-wrapper" style="text-align: left; padding: 50px">
                <div class="section-titles">Overview</div>
                <div class="detail-item">
                  <span class="detail-label">Name</span>
                  <span class="detail-content"><p><?php echo $page->title()->upper() ?></p> </span>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Grade</span>
                  <?php if($page->grade() == 'one') : ?>
                    <span class="detail-content"><p>★</p> </span>
                  <?php elseif($page->grade() == 'two') : ?>
                    <span class="detail-content"><p>★★</p> </span>  
                  <?php elseif($page->grade() == 'three') : ?>
                    <span class="detail-content"><p>★★★</p> </span>  
                  <?php elseif($page->grade() == 'four') : ?>
                    <span class="detail-content"><p>★★★★</p> </span>  
                  <?php elseif($page->grade() == 'five') : ?>
                    <span class="detail-content"><p>★★★★★</p> </span>  
                  <?php endif ?>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Property</span>
                  <span class="detail-content"><p><?php echo $page->property() ?></p> </span>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Race</span>
                  <span class="detail-content"><p><?php echo $page->race() ?></p> </span>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Size</span>
                  <span class="detail-content"><p><?php echo $page->size() ?></p> </span>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Skills</span>
                  <span class="detail-content"><p><?php echo $page->skills() ?></p> </span>
                </div>
                <div class="detail-item">
                  <span class="detail-label">Location</span>
                  <span class="detail-content"><p><?php echo $page->location() ?></p> </span>
                </div>

              </div>

                </article>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    <?php   snippet('sidebar') ?>
  </div>
</div>
</div>

<div class="call-out2">
  <div class="container">
    <div class="clearfix">
<!--       <div class="float_left">
        <h4>Have any question or need any business consultation?</h4>
      </div>
      <div class="float_right">
        <a href="contact.html" class="thm-btn bg-clr2">Request Quote</a>
      </div> -->
    </div>

  </div>
</div>


<!-- <div class="brand-logo sec-padd">
  <div class="container">
    <ul class="brand-carousel">
      <li><a href="#"><img src="images/brand/1.png" alt=""></a></li>
      <li><a href="#"><img src="images/brand/2.png" alt=""></a></li>
      <li><a href="#"><img src="images/brand/3.png" alt=""></a></li>
      <li><a href="#"><img src="images/brand/4.png" alt=""></a></li>
      <li><a href="#"><img src="images/brand/5.png" alt=""></a></li>
      <li><a href="#"><img src="images/brand/6.png" alt=""></a></li>
    </ul>
  </div>
</div> -->

<?php   snippet('footer') ?>