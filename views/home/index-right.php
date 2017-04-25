<?php
/* @var $this yii\web\View */
use app\assets\HomeAsset;

HomeAsset::register($this);
$this->title = '境象生物 AcebioX';
?>

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
                 <h2>Gene Expression PCR Array <span class="label label-danger">Hot</span> <span class="badge">$14.99</span></h2>
                 <p>楚天生物基因表达PCR芯片同时对88个与某一主题相关的基因进行表达分析。产品采用SYBR实时荧光PCR方法。基因专一性引物已分别固定在96孔PCR板中。</p>
                 <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                 </div>
             </div>
             <div class="item">
                 <img class="media-object img-thumbnail" src="img/home/home_2.gif" alt="Buffet">
                 <div class="carousel-caption">
                 <h2>SNP分型 <span class="label label-danger label-xs">New</span></h2>
                 <p>楚天生物SNP分型产品采用限制性内切酶片段多样性(RFLP)原理进行SNP分型。该法常用于由于SNP的存在导致限制性内切酶图谱发生变化的SNP分型。</p>
                 <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                 </div>
             </div>
             <div class="item">
                 <img class="media-object img-thumbnail"
                  src="img/home/home_1.gif" alt="Alberto Somayya">
                 <div class="carousel-caption">
                 <h2>表达谱PCR芯片 <span class="label label-danger">Hot</span></h2>
                 <p>每一个PCR芯片设有6个参比基因（看家基因）对照，以方便您选择在您的实验或生理条件下稳定表达的参比基因，用于基因表达相对定量。
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

<!-- We will make a simple accordian with hover effects 
The markup will have a list with images and the titles
http://bootsnipp.com/snippets/33Q1o -->
<div class="row">
    <div class="hidden-xs col-sm-12">
        <div class="accordian">
    <ul>
		<li>
			<div class="image_title">
				<a href="#"><h4>InstantPCR<sup class="fa fa-trademark"></sup></h4>
                    <p>qPCR，加样就上机</p>
                </a>
			</div>
			<a href="#">
				<img src="/img/home/index/slider1.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#"><h4>InstantPCRarray<sup class="fa fa-trademark"></sup></h4>
                    <p>高通量qPCR，加样就上机</p>
                </a>
			</div>
			<a href="#">
				<img src="/img/home/index/slider2.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#"><h4>InstantPCRservice<sup class="fa fa-trademark"></sup></h4>
                    <p>qPCR服务，这样就出结果</p>
                </a>
			</div>
			<a href="#">
				<img src="/img/home/index/slider3.jpg"/>
			</a>
		</li>
		<li>
			<div class="image_title">
				<a href="#"><h4>AceSNP<sup class="fa fa-trademark"></sup></h4>
                    <p>SNP分型，行业最优性价比</p>
                </a>
			</div>
			<a href="#">
				<img src="/img/home/index/slider4.jpg"/>
			</a>
		</li>
	</ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <h4>InstantPCR<sup class="fa fa-trademark"></sup></h4>
        <p>qPCR 加样就上机</p>
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <h4>InstantPCRarray<sup class="fa fa-trademark"></sup></h4>
        <p>高通量qPCR 加样就上机</p>       
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <h4>InstantPCRservice<sup class="fa fa-trademark"></sup></h4>
        <p>qPCR服务 这样就出结果</p>
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
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
                <p>7&times;24小时服务，用心为您</p>
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
                <p>365天尽我们所能，全心为您</p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
            </div>
        </div>
    </div>

</div>
