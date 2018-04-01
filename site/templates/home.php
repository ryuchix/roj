<?php snippet('header') ?> 

<?php snippet('menu') ?>  

<div id="blog-area" class="blog-with-sidebar-area blog-single-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" >
        <h2 style="margin-bottom: 80px;">LATEST GAME UPDATES</h2>
        <div class="blog-post">
          <div class="single-blog-post">
           <div class="row">
            <?php foreach ($articles as $news) : ?>
            <div class="col-md-6 col-sm-6" style="">
              <div class="single-our-service">
                <figure class="img-box" style="margin-top: 50px; margin-bottom: 10px;">
                  <a href="<?php echo $news->link() ?>" target="_blank"><img src="<?php echo $news->image()->url() ?>" alt="Awesome Image"></a>
                </figure>
                <a href="<?php echo $news->link() ?>" target="_blank"><h4><?php echo $news->title() ?></h4></a>
                <?php echo $news->content()->kt() ?>
              </div>
            </div>
          <?php endforeach ?>
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