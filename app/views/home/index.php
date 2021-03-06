<!-- === START CONTENT === -->
    <div class="content">
        <!-- === START SLIDER SECTION === -->
        <section class="slider-section" id="slider-section">
            <div class="slider" data-theme-plugin="slider" data-theme-item=".slide" data-theme-next=".slide-right" data-theme-prev=".slide-left" data-theme-container=".slide-wrapper">
                <ul class="slider-arrows">
                    <li class="slide-left"><i class="fa fa-angle-left"></i></li>
                    <li class="slide-right"><i class="fa fa-angle-right"></i></li>
                </ul>
                <div class="bg-cover"></div>
                <ul class="slide-wrapper">
                    <?php foreach ($this->homepage[0]['images'] as $image){?>
                        <li class="slide">
                            <div class="slide-text">
                                <h4 class="wow rollIn" data-wow-delay="1s"></h4>
                                <h2 class="wow fadeInDown" data-wow-delay="1s">Iron Workshop</h2>
                                <h5 class="wow bounceInRight" data-wow-delay="1s"><?php echo $this->homepage[0]['title']?></h5>
                            </div>
                            <img src="/assets/uploads/homepages/<?php echo $image['image']?>" alt="<?php echo $image['title']?>" style = "width:1920px">
                        </li>
                    <?php } ?>
                </ul>

                <ul class="slider-dots" data-theme-plugin="bullets">
                    <?php foreach ($this->homepage[0]['images'] as $image){?>
                        <li class="d-border-c-h"></li>
                    <?php }?>
                </ul>
            </div>
        </section>
        <!-- === END SLIDER SECTION === -->


        <!-- === START INFO SECTION === -->
        <div class="info-section" style = "padding-bottom: 40px;">
            <div class="container">
                <div class="col-md-4">
                    <div class="info-details d-bg-c wow bounceInLeft">
                        <h4>Opening hours</h4>
                        <ul class="ul-time">
                            <?php if(!empty($this->about[0])){?>
                                <li>Monday <?php echo $this->about[0]['monday']?></li>
                                <li>Tuesday <?php echo $this->about[0]['tuesday']?></li>
                                <li>Wednesday <?php echo $this->about[0]['wednesday']?></li>
                                <li>Thursday <?php echo $this->about[0]['thursday']?></li>
                                <li>Friday <?php echo $this->about[0]['friday']?></li>
                                <li>Saturday <?php echo $this->about[0]['saturday']?></li>
                                <li>Sunday <?php echo $this->about[0]['sunday']?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="under-button wow bounceInUp">
                        <span></span>
                        <a href="#about-section" data-anchor="about-section" class="d-border-c d-bg-c-h d-text-c">about us</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-details info-details-center d-bg-c wow flipInX">
                        <h4>Membership</h4>
                        <div class="info-image"><img src="/assets/uploads/homepages/<?php echo $this->about[0]['image1']?>" alt="<?php echo $this->about[0]['image1']?>" /></div>
                        <ul class="ul-calendar">
                            <?php if(!empty($this->about[0]['pricing'])){?>
                                <li>
                                    <?php echo $this->about[0]['pricing']?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="under-button wow bounceInUp">
                        <span></span>
                        <a href="/stores/" class="d-border-c d-bg-c-h d-text-c">shop</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-details d-bg-c wow bounceInRight">
                        <h4>Contact info</h4>
                        <ul class="ul-contact">
                            <?php if(!empty($this->contact[0]['location'])){?>
                                <li class="ul-contact-1">
                                    <p><?php echo $this->contact[0]['location'];?></p>
                                </li>
                            <?php } ?>
                            <?php if(!empty($this->contact[0]['phone'])){?>
                                <li class="ul-contact-2">
                                    <p><?php echo $this->contact[0]['phone'];?></p>
                                </li>
                            <?php } ?>
                            <?php if(!empty($this->contact[0]['email'])){?>
                                <li class="ul-contact-3"><a href="mailto:<?php echo $this->contact[0]['email'];?>"><?php echo $this->contact[0]['email'];?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="under-button wow bounceInUp">
                        <span></span>
                        <a href="#contact-section" data-anchor="contact-section" class="d-border-c d-bg-c-h d-text-c">Find us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END INFO SECTION === -->

        <!-- START SOCIAL MEDIA -->
        <div class="pricing-section grey" id="shop-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow bounceInLeft">
                        <div class="pricing-table">
                            <div class="pricing-table-price d-bg-c"><span>Facebook</span></div>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIron-Workshop-1479599665631954&tabs=timeline&width=5000&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden;margin-left:25px; " scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </div>
                    <!--                    <div class="col-md-6 wow fadeInDown">-->
                    <!--                        <div class="pricing-table popular-table d-bg-c">-->
                    <!--                            <div class="pricing-table-price d-text-c"><span>Twitter</span></div>-->
                    <!--                            <a class="twitter-timeline" href="https://twitter.com/gwam831" data-widget-id="740072657144696833"  width="500" height="500" style = "margin-left:25px;">Tweets by @gwam831</a>-->
                    <!--                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><!--                            <ul class="pricing-table-stuff">-->
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <div class="col-md-6 wow fadeInDown">
                        <div class="pricing-table popular-table d-bg-c">
                            <div class="pricing-table-price d-text-c"><span>Instagram</span></div>
                            <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 0 auto; max-width:420px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BBki1S7DXc0/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A photo posted by Iron Workshop Ltd (@ironworkshopgym)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-02-09T15:44:40+00:00">Feb 9, 2016 at 7:44am PST</time></p></div></blockquote>
                            <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SOCIAL MEDIA -->


        <!-- === START ABOUT === -->
        <div class="about-section" id="about-section" style = "padding-bottom: 40px;">
            <div class="container">
                <div class="site-title wow fadeInDown">
                    <p>A few words about us</p>
                    <h1>get to know us</h1>
                    <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow bounceInLeft">
                        <div class="img-box"><img src="/assets/uploads/homepages/<?php echo $this->about[0]['image2']?>" alt="<?php echo $this->about[0]['image2']?>" /></div>
                    </div>
                    <div class="col-md-6">
                        <div class="services-mark-1">
<!--                            <div class="one-service wow bounceInRight">-->
<!--                                <img src="/assets/images/class-1.png" alt="class" />-->
<!--                                <h4>YOGA CLASSES</h4>-->
<!--                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>-->
<!--                            </div>-->
                            <div class="one-service wow bounceInRight">
                                <img src="/assets/images/class-2.png" alt="class" />

<!--                                <h4>POWER LIFTING</h4>-->

                                <p><?php echo $this->about[0]['text']?></p>

                            </div>
<!--                            <div class="one-service wow bounceInRight">-->
<!--                                <img src="/assets/images/class-3.png" alt="class" />-->
<!--                                <h4>SHAPING</h4>-->
<!--                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END ABOUT === -->

        <!-- === START BLOG POSTS === -->
        <div class="blog-post-section carousel grey" id="blog-section" data-theme-plugin="carousel" data-theme-container=".carousel-items" data-theme-item="&gt;div" data-theme-rotate="false" data-theme-autoplay="false" data-theme-hide-effect="false">
            <div class="container">
                <div class="site-title wow bounceInRight">
                    <p>Our thoughts</p>
                    <h1>Latest News</h1>
                    <div class="site-dots d-text-c carousel-arrows"><i class="fa prev fa-angle-left"></i> <i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> <i class="fa next fa-angle-right"></i></div>
                    <a href="/news/" class="button-box d-border-c d-bg-c-h d-text-c">View More</a>
                </div>

                <?php if (isset($data['image']) && !empty($data['image'])){?>
                    <img src="/assets/uploads/galleries/<?php echo $data['image']?>" alt="<?php echo $data['title']?>" style ="width:300px; height:300px"/>
                <?php }elseif(isset($data['video']) && !empty($data['video'])) {?>
                    <?php $link = explode('v=', $data['video'])?>
                    <img src="http://img.youtube.com/vi/<?php echo $link[1]?>/mqdefault.jpg" alt="<?php echo $data['title']?>" style ="width:300px; height:300px">
                <?php }?>

                <div class="row carousel-items">
                    <?php $count = 0?>
                    <?php foreach($this->news as $news){?>
                        <?php if ($count == 0){$class = "bounceInLeft";}else{$class = "bounceInRight";}?>
                        <div class="col-md-6">
                            <div class="blog-entry wow <?php echo $class?>">
                                <div class="entry-date"><span class="d-text-c"><?php echo date('d', strtotime($news['date']))?></span> <?php echo date('M', strtotime($news['date']))?></div>
                                <div class="entry-cover">
                                    <?php if (isset($news['image']) && !empty($news['image'])){?>
                                        <a href="/news/view/<?php echo $news['slug']?>/"><img src="/assets/uploads/news/<?php echo $news['image']?>" alt="<?php echo $news['title']?>" style = "width:495px;" ></a>
                                    <?php }elseif(isset($news['video']) && !empty($news['video'])) {?>
                                        <?php $link = explode('v=', $news['video'])?>
                                        <a href="/news/view/<?php echo $news['slug']?>/"><img src="http://img.youtube.com/vi/<?php echo $link[1]?>/mqdefault.jpg" alt="<?php echo $news['title']?>" style ="width:495px; height:575px"></a>
                                    <?php }?>
                                </div>
                                <div class="entry-hover d-bg-c">
                                    <img src="/assets/images/photo-format.png" alt="photo" />
                                    <h2><a href="/news/view/<?php echo $news['slug']?>/"><?php echo $news['title']?></a></h2>
                                    <p><?php echo ucfirst(str_replace(',', ' / ', $news['categories']))?></p>
                                </div>
                            </div>
                        </div>
                        <?php $count++;?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- === END BLOG POSTS === -->

        <!-- === START TRAINERS === -->
        <div class="trainers-section carousel" id="trainers-section" data-theme-plugin="carousel" data-theme-container=".carousel-items" data-theme-item="&gt;div" data-theme-rotate="false" data-theme-autoplay="false" data-theme-hide-effect="false">
            <div class="container">
                <div class="site-title wow fadeInDown">
                    <p>Take a look at</p>
                    <h1>our trainers</h1>
                    <div class="site-dots d-text-c carousel-arrows"><i class="fa prev fa-angle-left"></i> <i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> <i class="fa next fa-angle-right"></i></div>
                </div>
                <div class="row carousel-items">
                    <?php foreach ($this->trainers as $key => $trainer){?>
                        <?php $class = "fadeInUp";?>
                        <?php if ($key == 0){$class = "bounceInLeft";}?>
                        <?php if ($key == 1){$class = "fadeInDown";}?>
                        <?php if ($key == 2){$class = "bounceInRight";}?>
                        <div class="col-md-4">
                            <div class="trainer wow <?php echo $class?>">
                                <ul class="socials d-bg-c wow fadeInUp">
                                    <?php if(!empty($trainer['facebook'])){?>
                                        <li><a href="http://<?php echo $trainer['facebook'];?>" target = _blank><i class="fa fa-facebook"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['twitter'])){?>
                                        <li><a href="<?php echo $trainer['twitter'];?>" target = _blank><i class="fa fa-twitter"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['instagram'])){?>
                                        <li><a href="https://www.instagram.com/<?php echo $trainer['instagram'];?>" target = _blank><i class="fa fa-instagram"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['google'])){?>
                                        <li><a href="<?php echo $trainer['google'];?>" target = _blank><i class="fa fa-google-plus"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['email'])){?>
                                        <li><a href = "mailto:<?php echo $trainer['email'];?>"><i class="fa fa-envelope-o"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['website'])){?>
                                        <li><a href = "<?php echo $trainer['website'];?>" target = _blank><i class="fa fa-globe"></i></a></li>
                                    <?php } ?>

                                    <?php if(!empty($trainer['phone'])){?>
                                        <li><a href = "tel:<?php echo $trainer['phone'];?>"><i class="fa fa-phone"></i></a></li>
                                    <?php } ?>
                                </ul>

                                <a href = "/trainers/view/<?php echo $trainer['slug'];?>"/>
                                <img src="/assets/uploads/trainers/<?php echo $trainer['hero_image'][0]['image']?>" alt="<?php echo $trainer['hero_image'][0]['title']?>" />

                                <div class="trainer-info">
                                    <h4><?php echo $trainer['name']?></h4>
                                    <p><?php echo substr($trainer['text'], 0, 50)?>...</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- === END TRAINERS === -->

        <!-- === Results === -->
        <div class="results-section wow fadeInDown carousel" id="results-section" data-theme-plugin="carousel" data-theme-container=".carousel-items" data-theme-item="&gt;div" data-theme-rotate="false" data-theme-autoplay="false" data-theme-hide-effect="false">
            <div class="bg-cover">
                <div class="container">
                    <div class="site-title wow bounceInLeft">
                        <p>Take a look at</p>
                        <h1>our Results</h1>
                        <div class="site-dots d-text-c carousel-arrows"><i class="fa prev fa-angle-left"></i> <i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> <i class="fa next fa-angle-right"></i></div>
                        <a href="/results/" class="button-box d-border-c d-bg-c-h d-text-c">View More</a>

                    </div>
                    <div class="row carousel-items">
                        <?php foreach ($this->results as $key => $result){?>
                            <?php $class = "fadeInUp";?>
                            <?php if ($key == 0){$class = "bounceInLeft";}?>
                            <?php if ($key == 1){$class = "fadeInDown";}?>
                            <?php if ($key == 2){$class = "bounceInRight";}?>

                            <div class="col-md-4">
                                <div class="trainer wow <?php echo $class?>">
                                    <a href = "/results/view/<?php echo $result['id'];?>"/>

                                        <img src="/assets/uploads/results/<?php echo $result['image']?>" alt="<?php echo $result['image']?>" />

                                        <div class="trainer-info">
                                            <p><?php echo $result['text']?></p>
                                            <?php if(isset($result['name']) && !empty($result['name'])){?>
                                                <p>Trained By: <?php echo $result['name'];?></p>
                                            <?php } ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END PURCHASE === -->

        <!-- === Gallery === -->
        <div class="gallery-section wow fadeInDown carousel" id="gallery-section" data-theme-plugin="carousel" data-theme-container=".carousel-items" data-theme-item="&gt;div" data-theme-rotate="false" data-theme-autoplay="false" data-theme-hide-effect="false">
            <div class="bg-cover">
                <div class="container">
                    <div class="site-title wow bounceInLeft">
                        <p>Take a look at</p>
                        <h1>our Gallery</h1>
                        <div class="site-dots d-text-c carousel-arrows"><i class="fa prev fa-angle-left"></i> <i class="fa fa-times-2"></i><i class="fa fa-times-2"></i> <i class="fa next fa-angle-right"></i></div>
                        <a href="/galleries/" class="button-box d-border-c d-bg-c-h d-text-c">View More</a>

                    </div>
                    <div class="row carousel-items">
                        <?php foreach ($this->galleries as $key => $gallery){?>
                            <?php $class = "fadeInUp";?>
                            <?php if ($key == 0){$class = "bounceInLeft";}?>
                            <?php if ($key == 1){$class = "fadeInDown";}?>
                            <?php if ($key == 2){$class = "bounceInRight";}?>

                            <div class="col-md-4">
                                <div class="trainer wow <?php echo $class?>">
                                    <a href = "/galleries/view/<?php echo $gallery['id'];?>"/>

                                    <img src="/assets/uploads/galleries/<?php echo $gallery['image']?>" alt="<?php echo $gallery['image']?>" />

<!--                                    <div class="trainer-info">-->
<!--                                        <p>--><?php //echo $gallery['text']?><!--</p>-->
<!--                                        --><?php //if(isset($gallery['name']) && !empty($gallery['name'])){?>
<!--                                            <p>Trained By: --><?php //echo $gallery['name'];?><!--</p>-->
<!--                                        --><?php //} ?>
<!--                                    </div>-->
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END PURCHASE === -->

        <!-- === START SHOP === -->
        <div class="statistics-section" id="store-section">
            <div class="container">
                <div class="site-title wow bounceInLeft">
                    <p>Take a look at</p>
                    <h1>our shop</h1>
                    <a href="/stores/" class="button-box d-border-c d-bg-c-h d-text-c">View More</a>
                </div>

                <div class="row">
                    <div class="col-md-4 wow bounceInLeft">
                        <?php if (!empty($this->stores[0]['hero_image'])){?>
                            <a href = "/stores/view/<?php echo $this->stores[0]['slug']?>">
                                <div class="statistic" style = "background: url('/assets/uploads/store/<?php echo $this->stores[0]['hero_image'][0]['image'] ?>') top right no-repeat; background-size: cover;">
                                    <div class="bg-cover"></div>
                                    <div class="statistic-cut"></div>
                                    <h3 class="d-text-c"><span style = "font-size: 50px;">&pound;<?php echo $this->stores[0]['price'] ?></span></h3>
                                    <h6><?php echo $this->stores[0]['title'] ?></h6>
                                </div>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="col-md-4 wow fadeInUp">
                        <?php if (!empty($this->stores[1]['hero_image'])){?>
                            <a href = "/stores/view/<?php echo $this->stores[1]['slug']?>">
                                <div class="statistic" style = "background: url('/assets/uploads/store/<?php echo $this->stores[1]['hero_image'][0]['image'] ?>') top right no-repeat; background-size: cover;">
                                    <div class="bg-cover"></div>
                                    <div class="statistic-cut"></div>
                                    <h3 class="d-text-c"><span style = "font-size: 50px;">&pound;<?php echo $this->stores[1]['price'] ?></span></h3>
                                    <h6><?php echo $this->stores[1]['title'] ?></h6>
                                </div>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="col-md-4 wow bounceInRight">
                        <?php if (!empty($this->stores[2]['hero_image'])){?>
                            <a href = "/stores/view/<?php echo $this->stores[2]['slug']?>">
                                <div class="statistic" style = "background: url('/assets/uploads/store/<?php echo $this->stores[2]['hero_image'][0]['image'] ?>') top right no-repeat; background-size: cover;">
                                    <div class="bg-cover"></div>
                                    <div class="statistic-cut"></div>
                                    <h3 class="d-text-c"><span style = "font-size: 50px;">&pound;<?php echo $this->stores[2]['price'] ?></span></h3>
                                    <h6><?php echo $this->stores[2]['title'] ?></h6>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END SHOP === -->

        <div class="faq-section" id="faq-section">
            <div class="container">
                <div class="site-title wow bounceInRight">
                    <p>Have a question?</p>
                    <h1>FAQ</h1>
                    <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <?php foreach($this->faqs as $key => $faq){?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo ($key+1)?>">
                                                <?php echo $faq['question']?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-<?php echo ($key+1)?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php echo $faq['answer']?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START CONTACT SECTION -->
        <div class="contact-section" id="contact-section">
            <div class="container">
                <div class="site-title wow bounceInRight">
                    <p>Get in touch with us</p>
                    <h1>Contact</h1>
                    <div class="site-dots d-text-c"><i class="fa fa-times-2"></i><i class="fa fa-times-2"></i></div>
                </div>
                <form class="contact-form d-bg-c wow bounceInLeft">
                    <input type="text" name="contact-name" class="d-border-c-f contact-form-line" placeholder="Name">
                    <input type="text" name="contact-email" class="d-border-c-f contact-form-line" placeholder="Email Address">
                    <input type="text" name="contact-website" class="d-border-c-f contact-form-line" placeholder="Subject">
                    <textarea name="contact-message" class="d-border-c-f contact-form-area" placeholder="Message"></textarea>
                    <p class="align-center"><input type="submit" value="Submit" class="form-send"></p>
                </form>
            </div>

            <div class="map-location" id = "map-location" data-title = "<?php echo $this->contact[0]['text']?>" data-location = "<?php echo $this->contact[0]['location']?>" data-lat = "<?php echo $this->contact[0]['lat']?>" data-lang = "<?php echo $this->contact[0]['lang']?>">
            </div>
        </div>
        <!-- END CONTACT SECTION -->