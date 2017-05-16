<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:32 PM
 */
    $banners = Yii::$app->getImageByGroup('banner1');
?>

<section id="banner">
<!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
          <?php foreach($banners as $item) { ?>
            <li>
              <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>" alt="$item->keywords">
              <div class="flex-caption">
                  <h3><?=$item->keywords?></h3> 
                  <p><?=$item->description?></p> 
              </div>
            </li>
          <?php } ?>
        </ul>
    </div>
<!-- end slider -->
</section> 

<section id="call-to-action-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9">
                <h3>Best Business consulting</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti</p>
            </div>
            <div class="col-md-2 col-sm-3">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</section>

<section id="content">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Our Services</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                <br/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in">
                    <h3>Consulting</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Strategy</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>Analysis</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>Investment</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>Creative</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-html5"></i>
                <div class="info-blocks-in">
                    <h3>24/7 Support</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Our Organization</h2>
                    <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-text">
                    <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                    <ul class="withArrow">
                        <li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
                        <li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
                        <li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
                        <li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="img/about.png" alt="About Images">
                </div>
            </div>
        </div>
    </div>
</section>	  
	
<div class="about home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                    <h3><span>Programes</span></h3>
                </div>
                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br><br>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
            </div>
            <div class="col-md-4">
                <div class="block-heading-two">
                    <h3><span>Latest News</span></h3>
                </div>		
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                    <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                    <div class="panel">	
                        <!-- Panel heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                                    <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne-alt3" class="panel-collapse collapse">
                            <!-- Panel body -->
                            <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                                    <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo-alt3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                                    <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree-alt3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                                    <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour-alt3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion ends -->
            </div>

            <div class="col-md-4">
                <div class="block-heading-two">
                    <h3><span>Testimonials</span></h3>
                </div>	
                <div class="testimonials">
                    <div class="active item">
                        <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                        <div class="carousel-info">
                            <img alt="" src="img/team4.jpg" class="pull-left">
                            <div class="pull-left">
                                <span class="testimonials-name">Marc Cooper</span>
                                <span class="testimonials-post">Technical Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
