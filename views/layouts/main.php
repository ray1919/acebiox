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
            <div class="col-xs-6 col-sm-2">
                <a href="/"><img src="/img/home/logo-3.gif " height="50px"></a>
            </div>
            <div class="hidden-xs col-sm-5 nav-content">
                <form class="nav-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>

            </div>
            <div class="col-xs-4 col-xs-push-1 col-sm-2 col-sm-push-3 nav-content">
                <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                <a data-toggle="modal" data-target="#loginModal">
                    <span class="glyphicon glyphicon-log-in"></span><span class="hidden-xs"> Login</span></a>
            </div>
            <div class="hidden-xs col-sm-3 col-sm-pull-2 nav-content">
                <strong><span class="glyphicon glyphicon-phone-alt"></span>021-12355678</strong>
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
                <li><a href="#">InstantPCR<sup class="fa fa-trademark"></sup> 加样就上机</a></li>
                <li><a href="#">InstantPCRarray<sup class="fa fa-trademark"></sup> 高通量qPCR 加样就上机</a></li>
                <li class="heading"><a>Research Services 科研服务</a></li>
                <li><a href="#">InstantPCRservice<sup class="fa fa-trademark"></sup> qPCR服务 这样就出结果</a></li>
                <li><a href="#">AceSNP<sup class="fa fa-trademark"></sup> SNP基因分型</a></li>
                <li><a href="#">More Research Services 更多科研服务</a></li>
                <li class="heading"><a>Application Products 应用产品</a></li>
                <li><a href="#">Brand KitA</a></li>
                <li><a href="#">Brand KitB</a></li>
                <li class="heading"><a>Application Services 应用服务</a></li>
                <li><a href="#">Brand ServiceA</a></li>
                <li><a href="#">Brand ServiceB</a></li>
                <li><a href="#">More Application Products &amp; Services 更多应用产品与服务</a></li>
                <li class="heading"><a>Health Products 健康产品</a></li>
                <li class="heading"><a>Health Services 健康服务</a></li>
                <li><a href="#">More Health Products &amp; Services 更多健康产品和服务</a></li>
            </ul>
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
            <div class="col-sm-3">
                <form class="form-group" role="subscribe">
                    <label for="subscribeEmail">订阅优惠推广</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="sub_email" id="sub_email">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-envelope"></i></button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#">了解我们</a></li>
                    <li><a href="#">职业机会</a></li>
                    <li><a href="#">公司新闻</a></li>
                    <li><a href="#">联系我们</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#">商务合作</a></li>
                    <li><a href="#">媒体/广告</a></li>
                    <li><a href="#">意见/建议</a></li>
                    <li><a href="#">社会责任</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul>
                    <li><a href="#">意见/建议</a></li>
                    <li><a href="#">运费政策</a></li>
                    <li><a href="#">退换货政策</a></li>
                    <li><a href="#">赞助</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
