
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Bikers Club</title>
        <link rel="icon" type="image/x-icon" href="media/favicon.png" />

        <link href="/<?= CONFIG['site_path']; ?>/assets/css/master.css" rel="stylesheet">

        <!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/switcher.css" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true"  />
        <link rel="alternate stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/color2.css" title="color2" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/color3.css" title="color3" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/color4.css" title="color4" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="/<?= CONFIG['site_path']; ?>/assets/switcher/css/color5.css" title="color5" media="all" />

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <header id="header-top" class="top-header">
            <div class="container">
                <div class="top-header__main wow slideInDown" data-wow-delay="0.7s" data-wow-duration="1.5s">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="social social--top clearfix">
                                <a href="#" class="social__one square">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-pinterest"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="header-contacts clearfix">
                                <div class="header-contacts__one">
                                    <a href="contacts.html" class="header-contacts__phone square">
                                        <span class="fa fa-phone"></span>
                                    </a>
                                    <a href="contacts.html" class="header-contacts__link">0800 123 4567</a>
                                </div>
                                <div class="header-contacts__one">
                                    <a href="contacts.html" class="header-contacts__email square">
                                        <span class="fa fa-envelope"></span>
                                    </a>
                                    <a href="contacts.html" class="header-contacts__link">info@bike.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--top-header-->

        <nav class="top-nav">
            <div class="container">
                <div class="top-nav__main">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <a href="home-main.html" class="logo">
                                <span class="logo__moto">
                                    <img src="/<?= CONFIG['site_path']; ?>/images/svg/logo.svg" alt="logo">
                                </span>
                                <h2 class="logo__title">
                                    BIKER<span>Club</span>
                                </h2>
                            </a>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <div class="main-nav navbar-main-slide">
                                <a href="#" class="btn_header_search main-nav__search no-decoration">
                                    <span class="fa fa-search"></span>
                                </a>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <ul class="collapse navbar-collapse navbar-nav-menu" id="nav">
                                    <li class="dropdown">
                                        <a class="no-decoration dropdown-toggle" data-toggle="dropdown" href="home-main.html">Home</a>
                                        <span class="main-nav__separator"><span></span><span></span><span></span></span>
                                        
                                    </li>
                                    
                                    
                                    <li><a class="no-decoration" href="article.html">Services</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
                                    
                                    <li><a class="no-decoration" href="contacts.html">Contact</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
                                   
                                </ul>
                                <div class="search-form-modal transition">
                                    <form class="navbar-form header_search_form">
                                        <i class="fa fa-times search-form_close"></i>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn_search customBgColor">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav><!--top-nav-->

        <section class="status dark-bg dark-bg--status">
            <div class="container wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                
                <h2 class="title title--page"><span class="title__bold">BikerClub</span> Blog Article</h2>
            </div>
        </section><!--status-->

        <div class="blog-page blog-page--article">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-7">
                        <div class="blog-main">
                            <div class="articles">
                                <div class="article">
                                    <div class="blog-date triangle triangle--big wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <div class="blog-date__num">
                                          Date
                                        </div>
                                        <div class="blog-date__month-year">
                                         <?=  $data['post']['date']; ?>
                                        </div>
                                        <div class="blog-date__month-year">
                                           
                                        </div>
                                    </div>
                                    <div class="article__img wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <img src="/<?= CONFIG['site_path']; ?>/media/blog/blog4.jpg" alt="blog" class="img-responsive" />
                                    </div>
                                    <div class="article__comments-author wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        
                                    </div>
                                    <h3 class="article-title wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s"><?= $data['post']['title']; ?></h3>

                                    <p class="blog-text blog-text--article wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <?= $data['post']['body']; ?> 
                                    </p>
                                    
                                    
                                    
                                    <div class="article__imgs">
                                        <div class="row row--no-padding">
                                            <div class="col-xs-6 wow slideInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s"><img alt="bike" class="img-responsive" src="/<?= CONFIG['site_path']; ?>/media/blog/blog5.jpg" /></div>
                                            <div class="col-xs-6 wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s"><img alt="bike" class="img-responsive" src="/<?= CONFIG['site_path']; ?>/media/blog/blog6.jpg" /></div>
                                        </div>
                                    </div>
                                    
                                    <div class="share clearfix wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <h6>Share This Article</h6>
                                        <div class="share__social"><a class="no-decoration" href="#">Facebook</a></div>
                                        <div class="share__social"><a class="no-decoration" href="#">Twitter</a></div>
                                        <div class="share__social"><a class="no-decoration" href="#">Google+</a></div>
                                        <div class="share__social"><a class="no-decoration" href="#">Pinterest</a></div>
                                    </div>

                                    <div class="article-comments">
                                        <h3 class="blog-title wow slideInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">Post comments : 32<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                        <div class="article-comments__group">
                                             <?php foreach ($data['comments'] as $comment) {
                                                    echo '
                                            <div class="article-comment clearfix wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                                <a href="#" class="article-comment__action triangle triangle--12">
                                                    <span class="fa fa-long-arrow-left"></span>
                                                </a>
                                                <div class="article-comment__author">
                                                    <img class="img-responsive" alt="author" src="/' . CONFIG['site_path'] . '/media/persons/user1.jpg" />
                                                </div>
                                               
                                                
                                                <div class="article-comment__body">



                                                    <h2 class="article-comment__name">' .$comment['name'] . '</h2>
                                                    <div class="article-comment__date">' .$comment['date'] . '</div>
                                                    <p class="blog-text blog-text--article">' . $comment['text'] . '</p>
                                                </div>

                                                   


                                            </div>
                                       ';} ?> 
                                        </div>
                                     
                                    </div>
                                    <form action="/" method="POST" class="comment-form wow slideInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                        <h3 class="blog-title">leave a comment<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="comment-form__input">
                                                    <input type="text" class="search-input" name="name" placeholder="Full Name" />
                                                </div>
                                                <div class="comment-form__input">
                                                    <input type="text" class="search-input" name="email" placeholder="Email" />
                                                </div>
                                                <div class="comment-form__input">
                                                    <input type="text" class="search-input" name="website" placeholder="Website" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <textarea name="message" placeholder="Message" class="comment-textarea search-input"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn button button--red button--main">send comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-5">
                        <aside class="blog-aside">
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">SEARCH<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <form action="/" method="post">
                                    <div class="relative-pos"><input placeholder="Type your keywork" class="search-input" type="text" name="search" /><button type="submit"><span class="fa fa-search"></span></button></div>
                                </form>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">Categories<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <div class="categories">
                                    <div class="categories__one">
                                        <header class="categories__head clearfix">
                                            <h5 class="pull-left"><a class="no-decoration" href="#">Club Membership</a></h5>
                                            <div class="categories__count pull-right">[21]</div>
                                        </header>
                                        <p class="categories__desc">Nunc molestie sapien temp iipsum</p>
                                    </div>
                                    <div class="categories__one">
                                        <header class="categories__head clearfix">
                                            <h5 class="pull-left"><a class="no-decoration" href="#">Sports Motorcycles</a></h5>
                                            <div class="categories__count pull-right">[5]</div>
                                        </header>
                                        <p class="categories__desc">Nunc molestie sapien temp iipsum</p>
                                    </div>
                                    <div class="categories__one">
                                        <header class="categories__head clearfix">
                                            <h5 class="pull-left"><a class="no-decoration" href="#">Club Events</a></h5>
                                            <div class="categories__count pull-right">[12]</div>
                                        </header>
                                        <p class="categories__desc">Nunc molestie sapien temp iipsum</p>
                                    </div>
                                    <div class="categories__one">
                                        <header class="categories__head clearfix">
                                            <h5 class="pull-left"><a class="no-decoration" href="#">Member's Rides</a></h5>
                                            <div class="categories__count pull-right">[3]</div>
                                        </header>
                                        <p class="categories__desc">Nunc molestie sapien temp iipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <div class="aside-tabs">
                                    <div class="aside-tabs__links">
                                        <a href="#" class="no-decoration aside-tabs__active-link js-tab-link" data-for='#block1'>Popular</a>
                                        <a href="#" class="no-decoration js-tab-link" data-for='#block2'>Recent</a>
                                    </div>
                                    <div class="aside-tabs__blocks js-tab-block" id="block1">
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular1.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html">Nunc molestie sapien tempor placerat ...</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular2.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p> <a class="no-decoration" href="article.html">Cras et lectus. Etiam amet turpis diset ...</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular3.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html">Nunc molestie sapien tempor placerat ...</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular4.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html">Amet turpis disce erat Ut proin a ipsum</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-tabs__blocks js-tab-block" id="block2">
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular2.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html"> Cras et lectus. Etiam amet turpis diset ...</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular3.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html">Nunc molestie sapien tempor placerat ...</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aside-tabs__block">
                                            <div class="row row--no-padding">
                                                <div class="col-xs-4">
                                                    <img src="media/72x72/popular4.jpg" alt="moto" class="img-responsive" />
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="aside-tabs__anons">
                                                        <p><a class="no-decoration" href="article.html">Amet turpis disce erat Ut proin a ipsum</a></p>
                                                        <div class="aside-tabs__date">March 30, 2015</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">About club<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <div class="blog-aside__about">
                                    <p class="blog-text">Nunc molestie sapien tempor placerater ras et lectus. Etiam sit amet turpis disce et lerat.   Proin a ipsum vitae orci pords tristiqu nased  Lorem ipsum dolor sit amet consect eturdsb adipisicing elit sed do eiusmod.</p>
                                    <div class="social-blocks">
                                        <div class="row row--no-padding">
                                            <div class="col-xs-4">
                                                <div class="social-blocks__one social-blocks__one--fb">
                                                    <div class="social-blocks__logo">
                                                        <span class="fa fa-facebook"></span>
                                                    </div>
                                                    <a href="#" class="social-blocks__action no-decoration">Like</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="social-blocks__one social-blocks__one--twitter">
                                                    <div class="social-blocks__logo">
                                                        <span class="fa fa-twitter"></span>
                                                    </div>
                                                    <a href="#" class="social-blocks__action no-decoration">Follow</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="social-blocks__one social-blocks__one--google">
                                                    <div class="social-blocks__logo">
                                                        <span class="fa fa-google-plus"></span>
                                                    </div>
                                                    <a href="#" class="social-blocks__action no-decoration">ADD</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">Photos<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <div class="blog-aside__photos">
                                    <div class="row row--small-padding">
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo1.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo2.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo3.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/footer1.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/footer2.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/footer3.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo4.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo5.jpg" /></a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a class="fancyimage" data-fancybox-group="group" href="media/530x360/bike1.jpg"><img alt="bike" class="img-responsive" src="media/80x80/photo6.jpg" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">Tags<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <div class="blog-aside__tags">
                                    <a href="#" class="btn button button--grey button--tag triangle">Latest Bikes</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">Motorcycles</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">SEO</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">Races</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">Club Membership</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">Event</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">Upcoming Events</a>
                                    <a href="#" class="btn button button--grey button--tag triangle">2015 Bikes</a>
                                </div>
                            </div>
                            <div class="blog-aside__block wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <h3 class="blog-title">Latest Models<span class="line line--title line--blog-title"><span class="line__first"></span><span class="line__second"></span></span></h3>
                                <ul class="js-latest-slider enable-bx-slider" data-auto="true" data-auto-hover="true" data-mode="horizontal" data-pager="false" data-pager-custom="null" data-prev-selector="null" data-next-selector="null">
                                    <li>
                                        <div class="latest-model">
                                            <div class="latest-model__img">
                                                <img alt="bike" class="img-responsive" src="media/270x270/latest.jpg" />
                                            </div>
                                            <div class="latest-model__info">
                                                <h5><a class="no-decoration" href="item.html">KTM 1190 RC8 R</a></h5>
                                                <p class="blog-text">Nunc molestie sapien tempor placerater ras et lectus. Etiam sit amet turpis disce le proin
                                                    aipsum vitae orci pords.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="latest-model">
                                            <div class="latest-model__img">
                                                <img alt="bike" class="img-responsive" src="media/270x270/latest.jpg" />
                                            </div>
                                            <div class="latest-model__info">
                                                <h5><a class="no-decoration" href="item.html">KTM 1190 RC8 R</a></h5>
                                                <p class="blog-text">Nunc molestie sapien tempor placerater ras et lectus. Etiam sit amet turpis disce le proin
                                                    aipsum vitae orci pords.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div><!--blog-page-->

        <section class="link">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-12">
                        <div class="row">
                            <div class="col-xs-4 wow zoomInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <div class="link__phone">
                                    <div class="link__square triangle triangle--12">
                                        <span class="fa fa-mobile"></span>
                                    </div>
                                    <h3>PHONE</h3>
                                    <p>(100) 987 6540 <br />0800 123 4567</p>
                                </div>
                            </div>
                            <div class="col-xs-4 wow zoomInUp" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <div class="link__phone">
                                    <div class="link__square triangle triangle--12">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <h3>ADDRESS</h3>
                                    <p>3638 Ground Avenue, Hill Station,<br/>Hollywood CA 00765</p>
                                </div>
                            </div>
                            <div class="col-xs-4 wow zoomInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <div class="link__phone">
                                    <div class="link__square triangle triangle--12">
                                        <span class="fa fa-envelope-o"></span>
                                    </div>
                                    <h3>EMAIL</h3>
                                    <p>sales@bikerclub.com <br/>info@domain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--link-->

        <footer class='map-footer'>
            <div class="footer-contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7 wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
                            <div class="map">
                                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=W-Xpe7AurTrL7tXe8sROgCD2phwBIWEj&amp;width=auto&amp;height=380&amp;lang=en_US&amp;sourceType=constructor"></script>
                            </div>
                        </div>
                        <div class="col-xs-5 wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                            <form action="/" method="post" class="quick-form">
                                <h2 class="title"><span class="title__bold">Quick</span>Contact</h2>
                                <div class="quick-input">
                                    <input type="text" name="text" placeholder="Full Name" />
                                    <div class="triangle-quick-input"></div>
                                </div>
                                <div class="quick-input">
                                    <input type="text" name="phone" placeholder="Phone#" />
                                    <div class="triangle-quick-input"></div>
                                </div>
                                <div class="quick-input">
                                    <textarea placeholder="Message" name="mess"></textarea>
                                    <div class="triangle-quick-input"></div>
                                </div>
                                <button type="submit" class="btn button button--red button--main">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="copyright wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <p>&copy; Copyrights 2015 by <span>Templines</span> | <span>BikerClub. </span> All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="social social--footer pull-right clearfix wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="1.5s">
                                <a href="#" class="social__one square">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-pinterest"></span>
                                </a>
                                <a href="#" class="social__one square">
                                    <span class="fa fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a id="to-top" href="#header-top"><i class="fa fa-chevron-up"></i></a>
        </footer><!--map-footer-->
        <!--Main-->   
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/jquery-1.11.3.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/bootstrap.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/modernizr.custom.js"></script>
        <!--Counter-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/waypoints.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/jquery.easypiechart.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/classie.js"></script>
        <!--Switcher-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/switcher/js/switcher.js"></script>      
        <!--Owl Carousel-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/owl-carousel/owl.carousel.min.js"></script>     
        <!--bxSlider-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/bxslider/jquery.bxslider.min.js"></script>      
        <!-- jQuery UI Slider -->
        <script src="/<?= CONFIG['site_path']; ?>/assets/slider/jquery.ui-slider.js"></script>       
        <!--Isotope-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/isotope/isotope.js"></script>
        <!--Slider-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/slider/jquery.ui-slider.js"></script>       
        <!--Fancybox-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/fancybox/jquery.fancybox.pack.js"></script>
        <!--Theme-->
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/jquery.smooth-scroll.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/wow.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/jquery.placeholder.min.js"></script>
        <script src="/<?= CONFIG['site_path']; ?>/assets/js/theme.js"></script>
    </body>
</html>