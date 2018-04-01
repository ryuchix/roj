            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
<!--                     <div class="single-sidebar">
                        <form class="search-form" action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> -->
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <?php foreach (page('home')->sidebar_menu()->toStructure() as $sidebar_menu) : ?>
                            <li>
                                <a href="<?php echo $sidebar_menu->link() ?>">
                                    <?php echo $sidebar_menu->menu() ?>
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Recent News</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="recent-post">
                            <?php foreach (page('blog')->children()->visible()->sortBy('date', 'asc')->limit(3) as $news) : ?>
                            <li>
                                <div class="img-holder">
                                    <img src="<?php echo $news->image()->url() ?>" alt="Awesome Image">   
                                </div>
                                <div class="title-holder">
                                    <a href="<?php echo $news->link() ?>" target="_blank">
                                        <h5 class="post-title">
                                            <?php echo $news->title() ?>
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        <?php echo $news->date('M d, Y') ?>
                                    </h6>
                                </div>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar">
                        <div class="singal-sidbar-add">
                            <a href="#">
                                <img src="images/add.jpg" alt="">

                            </a>
                        </div>      
                    </div> 
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  