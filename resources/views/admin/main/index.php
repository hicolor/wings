<?php include resource_path('views').'/admin/common/top.php'; ?>

    <!-- BEGIN BREADCRUMBS -->
    <!-- Remove "hide" class from "breadcrumbs hide" DIV and "margin-top-30" class from below "container-fluid container-lf-space margin-top-30" DIV in order to use the page breadcrumbs -->
    <div class="breadcrumbs hide">
        <div class="container-fluid">
            <h2 class="breadcrumbs-title">Dashboard</h2>
            <ol class="breadcrumbs-list">
                <li>
                    <a class="breadcrumbs-item-link" href="#">Home</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Features</a>
                </li>
                <li>
                    <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- END BREADCRUMBS -->
    <!-- BEGIN CONTENT -->
    <div class="container-fluid container-lf-space margin-top-30">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row widget-row">
            <div class="col-md-6 margin-bottom-20">
                <!-- BEGIN WIDGET MAP -->
                <div class="widget-map">
                    <div id="mapplic" class="widget-map-mapplic"></div>
                    <div class="widget-map-body text-uppercase text-center">
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar"></div>
                            <span class="widget-sparkline-title">Canada</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar2"></div>
                            <span class="widget-sparkline-title">Australia</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar3"></div>
                            <span class="widget-sparkline-title">Brasil</span>
                        </div>
                        <div class="widget-sparkline-chart">
                            <div id="widget_sparkline_bar4"></div>
                            <span class="widget-sparkline-title">USA</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET MAP -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET GRADIENT -->
                <div class="clearfix"></div>
                <div id="carousel-example-generic-v1" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic-v1" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v1" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-gradient" style="background: url(/assets/layouts/layout7/img/01.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">Photo of The Day</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 12 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 9 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="widget-gradient" style="background: url(/assets/layouts/layout7/img/02.jpg)">
                                <div class="widget-gradient-body">
                                    <h3 class="widget-gradient-title">500 New Free Photos</h3>
                                    <ul class="widget-gradient-body-actions list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i> 17 </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comment"></i> 8 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET GRADIENT -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET WRAP IMAGE -->
                <div id="carousel-example-generic-v2" class="carousel slide widget-carousel" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-red">
                        <li data-target="#carousel-example-generic-v2" data-slide-to="0" class="circle active"></li>
                        <li data-target="#carousel-example-generic-v2" data-slide-to="1" class="circle"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Mobile Layout</h3>
                                <img class="widget-wrap-img-element img-responsive" src="/assets/layouts/layout7/img/iphone.png" alt=""> </div>
                        </div>
                        <div class="item">
                            <div class="widget-wrap-img widget-bg-color-white">
                                <h3 class="widget-wrap-img-title">New Desktop Look</h3>
                                <img class="widget-wrap-img-element img-responsive" src="/assets/layouts/layout7/img/mac.png" alt=""> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET WRAP IMAGE -->
            </div>
        </div>
        <div class="row widget-bg-color-white no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-quote widget-bg-color-purple">
                    <h2 class="widget-subscribe-title widget-title-color-purple-dark text-uppercase">Subscribe
                        <br/> Steps</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-purple-light">Lorem ipsum dolor sit amet diam
                        <a class="widget-subscribe-subtitle-link" href="#">check out</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe">
                    <span class="widget-subscribe-no">1</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Important
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border">
                    <span class="widget-subscribe-no">2</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Second
                        <br/> Step</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate psum dolor asqudiete sediat dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
            <div class="col-md-3 col-sm-6 no-space">
                <!-- BEGIN WIDGET SUBSCRIBE -->
                <div class="widget-subscribe widget-subscribe-border-top">
                    <span class="widget-subscribe-no">3</span>
                    <h2 class="widget-subscribe-title widget-title-color-gray-dark text-uppercase">Final
                        <br/> Action</h2>
                    <p class="widget-subscribe-subtitle widget-title-color-dark-light">Lorem ipsum dolor asqudiete sit amet dolore diam sediate dolor diam
                        <a class="widget-subscribe-subtitle-link" href="#">learn more</a>
                    </p>
                </div>
                <!-- END WIDGET SUBSCRIBE -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-6 margin-bottom-20">
                <!-- BEGIN WIDGET TAB -->
                <div class="widget-bg-color-white widget-tab">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab"> All Posts </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab"> Designers </a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab"> Developers </a>
                        </li>
                        <li>
                            <a href="#tab_1_4" data-toggle="tab"> Others </a>
                        </li>
                    </ul>
                    <div class="tab-content scroller" style="height: 350px;" data-always-visible="1" data-handle-color="#D7DCE2">
                        <div class="tab-pane fade active in" id="tab_1_1">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_2">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_3">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_4">
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/07.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">San Francisco
                                        <span class="label label-default"> March 10 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="../assets/layouts/layout7/img/04.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">New Workstation
                                        <span class="label label-default"> March 16 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news margin-bottom-20">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/05.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Most Completed theme
                                        <span class="label label-default"> March 12 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="widget-news">
                                <img class="widget-news-left-elem" src="/assets/layouts/layout7/img/03.jpg" alt="">
                                <div class="widget-news-right-body">
                                    <h3 class="widget-news-right-body-title">Wondering anyone did this
                                        <span class="label label-default"> March 25 </span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonumy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET TAB -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet light tasks-widget widget-comments">
                    <div class="portlet-title margin-bottom-20">
                        <div class="caption caption-md font-red-sunglo">
                            <span class="caption-subject theme-font bold uppercase">Quick Email</span>
                        </div>
                    </div>
                    <div class="portlet-body overflow-h">
                        <input type="text" placeholder="To" class="form-control margin-bottom-20">
                        <input type="text" placeholder="Subject" class="form-control margin-bottom-20">
                        <textarea placeholder="Message" class="form-control margin-bottom-20" rows="5"></textarea>
                        <button class="btn red-sunglo pull-right" type="button">Submit</button>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom-20">
                <!-- BEGIN WIDGET PROGRESS -->
                <div class="widget-progress">
                    <div class="widget-progress-element widget-bg-color-blue margin-bottom-25">
                                <span class="widget-progress-title">Application deplyoment
                                    <span class="pull-right">77%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-green margin-bottom-25">
                                <span class="widget-progress-title">Database migration
                                    <span class="pull-right">23%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-red  margin-bottom-25">
                                <span class="widget-progress-title">New UI release
                                    <span class="pull-right">56%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"> </div>
                        </div>
                    </div>
                    <div class="widget-progress-element widget-bg-color-purple">
                                <span class="widget-progress-title">Webserver upgrade
                                    <span class="pull-right">60%</span>
                                </span>
                        <div class="progress">
                            <div class="progress-bar widget-bg-color-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET PROGRESS -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Current Balance</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-green icon-bulb"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Weekly Sales</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-red icon-layers"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
            <div class="col-md-3">
                <!-- BEGIN WIDGET THUMB -->
                <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                    <h4 class="widget-thumb-heading">Average Monthly</h4>
                    <div class="widget-thumb-wrap">
                        <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                        <div class="widget-thumb-body">
                            <span class="widget-thumb-subtitle">USD</span>
                            <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                        </div>
                    </div>
                </div>
                <!-- END WIDGET THUMB -->
            </div>
        </div>
        <div class="row widget-row no-space margin-bottom-20">
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-gray">
                    <h2 class="widget-socials-title widget-title-color-white text-uppercase">Metronic
                        <br/> 6 Layout Admin</h2>
                    <div class="margin-bottom-20">
                        <strong class="widget-socials-paragraph text-uppercase">Platform</strong>
                        <a class="widget-socials-paragraph" href="#">Bootstrap Framework</a>
                    </div>
                    <strong class="widget-socials-paragraph text-uppercase">Supports</strong>
                    <a class="widget-socials-paragraph" href="#">SASS Solution</a>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-gradient" style="background: url(/assets/layouts/layout7/img/03.jpg)"></div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-fb">
                    <i class="widget-social-icon-fb icon-social-facebook"></i>
                    <h3 class="widget-social-subtitle">
                        <a href="#">Follow us
                            <br/> on Facebook</a>
                    </h3>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 no-space">
                <!-- BEGIN WIDGET SOCIALS -->
                <div class="widget-socials widget-bg-color-tw">
                    <i class="widget-social-icon-tw icon-social-twitter"></i>
                    <h3 class="widget-social-subtitle">
                        <a href="#">Follow us
                            <br/> on Twitter</a>
                    </h3>
                </div>
                <!-- END WIDGET SOCIALS -->
            </div>
        </div>
        <div class="row widget-row">
            <div class="col-md-4">
                <!-- BEGIN PORTLET-->
                <div class="portlet light tasks-widget">
                    <div class="portlet-title">
                        <div class="caption caption-md font-red-sunglo">
                            <span class="caption-subject theme-font bold uppercase">Feeds</span>
                            <span class="caption-helper">37 New Supports</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">Friends</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Team</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Company</label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height: 350px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Samantha Stosur</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+7</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Ana Ivanovich</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+4</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">John Doe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Russell Crowe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">John Doe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Russell Crowe</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+12</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-media">
                                <div class="widget-media-elements text-center">
                                    <img class="widget-media-avatar circle margin-bottom-15" src="" alt="">
                                    <a class="widget-btn-default circle" href="#">Follow</a>
                                </div>
                                <div class="widget-media-body">
                                    <h4 class="widget-media-body-title">
                                        <a href="#">Alisa Loy</a>
                                    </h4>
                                    <p class="widget-media-body-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                                    <a class="widget-btn-red circle" href="#">+1</a>
                                    <a class="widget-btn-blue circle" href="#">Like</a>
                                    <a class="widget-btn-default circle pull-right" href="#">
                                        <i class="widget-btn-icon icon-share"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-4">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption caption-md font-blue">
                            <i class="icon-share font-blue"></i>
                            <span class="caption-subject theme-font bold uppercase">Recent Activities</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <label>
                                        <input type="checkbox" /> Finance</label>
                                    <label>
                                        <input type="checkbox" checked="" /> Membership</label>
                                    <label>
                                        <input type="checkbox" /> Customer Support</label>
                                    <label>
                                        <input type="checkbox" checked="" /> HR</label>
                                    <label>
                                        <input type="checkbox" /> System</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="scroller" style="height: 322px;" data-always-visible="1" data-rail-visible="0">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                            <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                            <span class="label label-sm label-warning "> Take action
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right">
                                <a href="#">See All Records</a>
                                <i class="icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- BEGIN WIDGET BLOG -->
                <div class="widget-blog text-center margin-bottom-20 clearfix" style="height: 442px; padding-top: 120px; background-image: url(/assets/layouts/layout7/img/07.jpg);">
                    <div class="widget-blog-heading text-uppercase">
                        <h3 class="widget-blog-title">San Francisco</h3>
                        <span class="widget-blog-subtitle">At dawn</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat commodo consequat. </p>
                    <br/>
                    <a class="btn btn-danger text-uppercase" href="#">Read More</a>
                </div>
                <!-- END WIDGET BLOG -->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT -->


<?php include resource_path('views').'/admin/common/bottom.php'; ?>
