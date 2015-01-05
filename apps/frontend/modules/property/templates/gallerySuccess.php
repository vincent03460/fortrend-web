<?php
use_helper('I18N');
?>
<section class="property-banner" id="page-banner">
	<img src="/images/page-property-banner.jpg" alt="" class="img-responsive">
</section>
		
<section id="content">
	<div class="row"  id="gallery">
		<div class="col-md-3">
			<div class="sidebar-menu">
				<div class="sidebar-title">
					<h2><?php echo __("Property") ?></h2>
				</div>
				<?php include_component('component', 'leftmenu', array("module" => $sf_context->getModuleName(), "action" => $sf_context->getActionName())) ?>
			</div>
		</div>
		<div class="col-md-9" id="page-content">
			<h2><?php echo __("Gallery") ?></h2>
			<div class="divider"></div>
			
			<div class="row">
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-01.jpg" class="img-responsive img-styled mb10">
				</div>
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-02.jpg" class="img-responsive img-styled mb10">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-03.jpg" class="img-responsive img-styled mb10">
				</div>
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-04.jpg" class="img-responsive img-styled mb10">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-05.jpg" class="img-responsive img-styled mb10">
				</div>
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-06.jpg" class="img-responsive img-styled mb10">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-07.jpg" class="img-responsive img-styled mb10">
				</div>
				<div class="col-xs-6">
					<img src="/images/gallery/gallery-08.jpg" class="img-responsive img-styled mb10">
				</div>
			</div>
		</div>
	</div>
</section>