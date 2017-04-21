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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="/"><img src="/img/home/logo-3.gif " height="50px"></a>
                        <b class="hidden-xs text-nowrap">Gene Analysis Expert</b>
                    </div>
                </div>
                <div class="row">
                    <div class="hidden-xs col-sm-12">
                        <p style="padding:15px;"></p>
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
                        <strong><i class="hidden-xs">免费人工电话 </i><span class="glyphicon glyphicon-phone-alt"></span>400-12355678</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nav-content">
                        <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#registerModal">
                            <span class="glyphicon glyphicon-user"></span><span class="hidden-xs hidden-sm"> 注 册</span></button>
                        <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#loginModal">
                            <span class="glyphicon glyphicon-log-in"></span><span class="hidden-xs hidden-sm"> 登 陆</span></button>
                        <button type="button" class="hidden btn btn-info btn-md"><span class="glyphicon glyphicon-shopping-cart"></span><span class="hidden-sm"> 购物车</span></button>
                    </div>
                </div>
            </div>
            <div class="hidden-xs col-sm-1">
                <img src="/img/home/QR.jpg" height="100px">
            </div>
        </div>
    </div>
</nav>

        <!-- Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">登陆</h4>
            </div>
            <div class="modal-body">

                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <p></p>
                    <div class="form-group">
                    <button type="submit" class="btn btn-info btn-sm">登陆</button>
                    <button type="button" class="btn btn-default btn-sm"
                       data-dismiss="modal">取消</button>
                    </div>
                    <div class="text-right">
                        <label class="text-info">还没有账号，点击注册</label>
                        <button type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#registerModal">注册</button>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </div>

    <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">注册</h4>
            </div>
            <div class="modal-body">

                <form class="form-inline">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="re-password">Repeat Password</label>
                        <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Repeat Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 订阅我们的优惠信息
                        </label>
                    </div>
                    <p></p>
                    <div class="form-group">
                    <button type="submit" class="btn btn-info btn-sm">注册</button>
                    <button type="button" class="btn btn-default btn-sm"
                       data-dismiss="modal">取消</button>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row main-row">
        <nav class="hidden-xs col-sm-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="heading"><a>Research Products 科研产品</a></li>
                <li><a href="#">InstantPCR <sup class="fa fa-trademark"></sup> qPCR加样就上机</a></li>
                <li><a href="#">InstantPCRarray <sup class="fa fa-trademark"></sup> 高通量qPCR，加样就上机</a></li>
                <li class="heading"><a>Research Services 科研服务</a></li>
                <li><a href="#">InstantPCRservice <sup class="fa fa-trademark"></sup> qPCR服务，这样就出结果</a></li>
                <li><a href="#">AceSNP <sup class="fa fa-trademark"></sup> SNP基因分型，最优性价比</a></li>
                <li><a href="#">More Research Services 更多科研产品与服务</a></li>
                <li class="heading"><a>Application Products 应用产品</a></li>
                <li><a href="#">Brand KitA</a></li>
                <li><a href="#">Brand KitB</a></li>
                <li class="heading"><a>Application Services 应用服务</a></li>
                <li><a href="#">Brand ServiceA</a></li>
                <li><a href="#">Brand ServiceB</a></li>
                <li><a href="#">More Application Products &amp; Services 更多</a></li>
                <li class="heading"><a>Health Products 健康产品</a></li>
                <li class="heading"><a>Health Services 健康服务</a></li>
                <li><a href="#">More Health Products &amp; Services 更多</a></li>
            </ul>
            <p style="padding:5px;"></p>
                <form class="form-group" role="subscribe">
                    <label for="subscribeEmail"><span class="hidden-xs">Subscribe for special offers </span>订阅获取优惠</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="sub_email" id="sub_email">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-envelope"></i> Submit 提交</button>
                    </div>
                  </div>
                </form>
        </nav>

        <div class="col-xs-12 col-sm-9">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>

        </div>
    </div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
            </div>
            <div class="col-xs-4 col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Get to know us </span>了解我们</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">About AcebioX </span>关于我们</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Career </span>职业机会</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Company News </span>公司新闻</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Contact us </span>联系我们</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Responsbility </span>社会责任</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-3">
                <ul>
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Cooprate with us </span>与我合作</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Business </span>商务合作</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Media/Ads </span>媒体/广告</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Advice </span>意见/建议</a></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-3">
                <ul>
                    <li class="list-group-item disabled"><strong><span class="hidden-xs">Let us help you </span>让我们帮助您</strong></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Your Account </span>账户</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Shipping policies </span>运费政策</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Returns &amp; Replacement </span>退换货政策</a></li>
                    <li class="list-group-item"><a href="#"><span class="hidden-xs">Help </span>赞助</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
