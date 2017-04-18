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
<body data-spy="scroll" data-target="#myScrollspy" data-offset="0">
<?php $this->beginBody() ?>

    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
            <div class="col-xs-6 col-sm-2">
                <img src="/img/home/logo-3.gif " height="50px">
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
                <h4 class="modal-title">Login </h4>
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
                    <button type="submit" class="btn btn-info btn-sm">登陆</button>
                    <button type="button" class="btn btn-default btn-sm"
                       data-dismiss="modal">取消</button>
                </form>

            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row main-row">
        <nav class="hidden-xs col-sm-3" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="70">
                <li><a>Our History List</a></li>
                <li><a href="#history">Our History</a></li>
                <li><a href="#corporate">Corporate Tablist</a></li>
                <li><a href="#corporate1">Corporate Accordion</a></li>
                <li><a href="#facts">Facts</a></li>
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
