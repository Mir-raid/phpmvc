<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<? $i = 0;
							foreach($slider as $item){?>
							<div class="item <? if ($i == 0){echo 'active';}?>">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2><?=$item['title']?></h2>
									<p><?=$item['text']?> </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=THEME?>images/home/<?=$item['img']?>" class="girl img-responsive" alt="" />
									<img src="<?=THEME?>images/home/<?=$item['sticker']?>"  class="pricing" alt="" />
								</div>
							</div>
							<?$i++;}?>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->