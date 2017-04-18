<?php
/* @var $this yii\web\View */
use app\assets\HomeAsset;

HomeAsset::register($this);
$this->title = '境象生物 AcebioX';
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="#">Research 科研</a></li>
            <li><a href="#">Application 应用</a></li>
            <li><a href="#">Health 健康</a></li>
            <li><a href="#">Resource 资源</a></li>
            <li><a href="#">Activity 活动</a></li>
            <li><a href="#">About Us 关于我们</a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <div class="col-xs-12">
    <div id="homecarousel" class="carousel slide" data-ride="carousel">

         <!-- Indicators -->
         <ol class="carousel-indicators">
             <li data-target="#homecarousel" data-slide-to="0" class="active"></li>
             <li data-target="#homecarousel" data-slide-to="1"></li>
             <li data-target="#homecarousel" data-slide-to="2"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
             <div class="item active">
                 <img class="img-responsive"
                  src="img/home/home_0.gif" alt="Uthappizza">
                 <div class="carousel-caption">
                 <h2>Uthappizza  <span class="label label-danger">Hot</span> <span class="badge">$14.99</span></h2>
                 <p>A unique combination of Indian Uthappam (pancake) and
                   Italian pizza, topped with Cerignola olives, ripe vine
                   cherry tomatoes, Vidalia onion, Guntur chillies and
                   Buffalo Paneer.</p>
                 <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                 </div>
             </div>
             <div class="item">
                 <img class="media-object img-thumbnail" src="img/home/home_2.gif" alt="Buffet">
                 <div class="carousel-caption">
                 <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                 <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                 <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                 </div>
             </div>
             <div class="item">
                 <img class="media-object img-thumbnail"
                  src="img/home/home_1.gif" alt="Alberto Somayya">
                 <div class="carousel-caption">
                 <p>Award winning three-star Michelin chef with wide
                  International experience having worked closely with
                  whos-who in the culinary world, he specializes in
                   creating mouthwatering Indo-Italian fusion experiences.
                  </p>
                 <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                 </div>
             </div>
         </div>

         <!-- Controls -->
         <a class="left carousel-control" href="#homecarousel" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#homecarousel" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>

     </div>
     </div>
</div>

<div class="row row-content">
    <div class="col-xs-12 col-sm-3">
        <h4>InstantPCR<sup class="fa fa-trademark"></sup></h4>
        <p>qPCR 加样就上机</p>
    </div>
    <div class="col-xs-12 col-sm-3">
        <h4>InstantPCRarray<sup class="fa fa-trademark"></sup></h4>
        <p>高通量qPCR 加样就上机</p>       
    </div>
    <div class="col-xs-12 col-sm-3">
        <h4>InstantPCRservice<sup class="fa fa-trademark"></sup></h4>
        <p>qPCR服务 这样就出结果</p>
    </div>
    <div class="col-xs-12 col-sm-3">
        <h4>AceSNP<sup class="fa fa-trademark"></sup></h4>
        <p>SNP分型，行业最优性价比</p>
    </div>
</div>

<div class="row row-content">
    <div class="col-xs-12 col-sm-4">
        <div class="media">
            <div class="media-heading">
                <i class="fa fa-plus-circle"></i>
                <h4>AcebioX 境象生物</h4>
            </div>
            <div class="media-body">
                <p>5000+验证产品，10000+服务，专业为您</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="media">
            <div class="media-heading">
                <i class="fa fa-support"></i>
                <h4>技术支持</h4>
            </div>
            <div class="media-body">
                <p>7&times;24服务，用心为您</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="media">
            <div class="media-heading">
                <i class="fa fa-comments"></i>
                <h4>与我们互动</h4>
            </div>
            <div class="media-body">
                <p>365天尽我们所能，全新为您</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
            </div>
        </div>
    </div>

</div>
<p>
    <i class="fa fa-google-plus"></i>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
