<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="境象生物,基因检测,靶向基因检测,高通量测序,SNP分型">
    <meta name="description" content="上海境象生物科技有限公司，专注于生命科学与研究、基因表达检测、以及人类遗传领域，致力于成为全球领先的基因组学解决方案提供者。">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nav-content">
                        <a href="/"><img src="/img/home/logo-3.gif " height="45px"></a>
                        <b class="hidden-xs text-nowrap">Gene Analysis Expert</b>
                    </div>
                </div>
                <div class="row">
                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-hamburger"></span></a>

                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">New 最新产品</li>                            
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="http://placehold.it/250x150/3498db/f5f5f5/&text=250+x+150" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">49,99 ￥</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://placehold.it/250x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">9,99 ￥</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                                </div><!-- End Item -->
                                                <div class="item">
                                                    <a href="#"><img src="http://placehold.it/250x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                                    <button class="btn btn-primary" type="button">49,99 ￥</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                                </div><!-- End Item -->                                
                                              </div><!-- End Carousel Inner -->
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Research 科研</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Activity 活动</li>
                                            <li><a href="#">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Application 应用</li>
                                            <li><a href="#">Easy to customize</a></li>
                                            <li><a href="#">Glyphicons</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Resource 资源</li>
                                            <li><a href="#">Coloured Headers</a></li>
                                            <li><a href="#">Primary Buttons & Default</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Health 健康</li>
                                            <li><a href="#">Default Navbar</a></li>
                                            <li><a href="#">Lovely Fonts</a></li>
                                            <li><a href="#">Responsive Dropdown </a></li>							
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Subscribe 订阅获取优惠</li>
                                            <form class="form" role="form">
                                              <div class="form-group">
                                                <label class="sr-only" for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email">                                                              
                                              </div>
                                              <button type="submit" class="btn btn-primary btn-block">Subsribe 订阅</button>
                                            </form>                                                       
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="hidden-xs col-sm-5">
                <div class="row">
                   <div class="col-sm-12 nav-content">
                        <form class="nav-form search-form" role="search">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar">
                            <div class="nav-home nav-content">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Research 科研</a></li>
                                    <li><a href="#">Application 应用</a></li>
                                    <li><a href="#">Health 健康</a></li>
                                    <li><a href="#">Resource 资源</a></li>
                                    <li><a href="#">Activity 活动</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="row">
                     <div class="col-sm-12 nav-content">
                        <strong><span class="hidden-xs">免费人工电话 </span>400-1235-5678</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nav-content">
                        <?php if (Yii::$app->user->isGuest): ?>
                        <button type="button" class="btn btn-default btn-md"><a href="/user/security/login"><span class="glyphicon glyphicon-log-in"></span><span class="hidden-xs hidden-sm"> 登 陆</span></a></button>
                        <button type="button" class="btn btn-default btn-md"><a href="/user/registration/register"><span class="glyphicon glyphicon-user"></span><span class="hidden-xs hidden-sm"> 注 册</span></a></button>
                        <?php else: ?>
                        <button type="button" class="btn btn-default btn-md"><a href="/user/settings/profile"><span class="glyphicon glyphicon-user"></span><span class="hidden-xs hidden-sm"> 账 户</span></a></button>
                        <button type="button" class="btn btn-default btn-md"><a href="/user/security/logout" data-method="post"><span class="glyphicon glyphicon-log-out"></span><span class="hidden-xs hidden-sm"> 注 销</span></a></button>
                        <?php endif ?>
                        <?php if (Yii::$app->user->can('super-boss')): ?>
                        <button type="button" class="btn btn-default btn-md"><a href="/user/admin"><span class="glyphicon glyphicon-book"></span><span class="hidden-xs hidden-sm"> 管 理</span></a></button>
                        <?php else: ?>
                        <button type="button" class="btn btn-default btn-md"><a href="/shoppingCart"><span class="glyphicon glyphicon-shopping-cart"></span><span class="hidden-xs hidden-sm"> 购物车</span></a></button>
                        <?php endif ?>
                    </div>

                </div>
            </div>
            <div class="hidden-xs col-sm-1">
                <img src="/img/home/QR.jpg" height="100px">
            </div>
        </div>

       
    </div>
</nav>

    <div class="container">
        <div class="row main-row">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>


        </div>
    </div>

<footer class="footer">
    <div class="container">
        <div class="row foot-row">
            <div class="col-xs-4 col-sm-3 col-sm-push-1">
                <ul class="list-group">
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Get to know us </span>了解我们</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">About AcebioX </span>关于我们</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Career </span>职业机会</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Company News </span>公司新闻</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Contact us </span>联系我们</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Responsbility </span>社会责任</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-3 col-sm-push-1">
                <ul>
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Cooprate with us </span>与我合作</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Business </span>商务合作</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Media/Ads </span>媒体/广告</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Advice </span>意见/建议</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-3 col-sm-push-1">
                <ul>
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Let us help you </span>让我们帮助您</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Your Account </span>账户</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Shipping policies </span>运费政策</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Returns &amp; Replacement </span>退换货政策</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Help </span>帮助</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12">
            <p><span class="fa fa-map-marker"></span> 上海市奉贤区金汇镇金斗路399号金斗产业园6栋-7栋，邮箱：acebiox@acebiox.cn</p>
            <p>Copyright <span class="fa fa-copyright"></span>2017 Acebiox All Rights Reserved，版权所有：上海境象生物科技有限公司</p>
            <p><a href="http://www.miitbeian.gov.cn/">沪ICP备17017100</a></p>
        </div>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
