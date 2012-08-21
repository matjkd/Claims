
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<?= $this->load->view('template/claims/header') ?>

</head>

<body>



	<!-- Primary Page Layout
        ================================================== -->



	<div class="container" id="main-container">

	
	<!--[if lt IE 8 ]>
	
	<div class="sixteen columns" id="adminMenu">
			WARNING. Your web browser is <strong>outdated</strong>. This may cause you security issues,
			 and your experience will be greatly reduced on many modern websites.<br/> 
			 If you are running Windows Vista or later you can upgrade to IE9+ 
			 <a href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home" target="_blank">here</a>. <br/>
			 Alternatively you can
			 try other browsers such as <a href="https://www.google.com/chrome">Google Chrome</a>,
			  or <a href="http://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a>. 
			 

		</div>
	<![endif]-->

		<!--Admin Menu
        ================================================== -->
		<?php
		$is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if ($is_logged_in != 0 && $role == 1) {?>
		<div class="sixteen columns" id="adminMenu">
			<a href="<?=base_url()?>admin">Admin</a>

		</div>

		<?php } ?>
		<!-- end of Admin Menu -->

		<div class="sixteen columns" id="top_heading">
			<h2 class="remove-bottom">
				<a href="<?=base_url()?>">accident claims + advice</a>
			</h2>

		</div>
		<div class="sixteen columns" id="big_menu">
			<div class="four columns">
				<div class="main_links">
					<h1>
						<a href="<?=base_url()?>accident" id="bigtitle1">Accident</a>
					</h1>
					<img src="<?= base_url() ?>images/icons/selector.png" />
				</div>
			</div>
			<div class="three columns">
				<div class="main_links">
					<h1>
						<a href="<?=base_url()?>advice" id="bigtitle2">Advice</a>
					</h1>
					<img src="<?= base_url() ?>images/icons/selector.png" />
				</div>
			</div>
			<div class="six columns">
				<div class="main_links">
					<h1>
						<a href="<?=base_url()?>compensation" id="bigtitle3">Compensation</a>
					</h1>
					<img src="<?= base_url() ?>images/icons/selector.png" />
				</div>
			</div>
			<div class="three columns">
				<div class="main_links">
					<h1>
						<a href="<?=base_url()?>claim" id="bigtitle4">Claim</a>
					</h1>
					<img src="<?= base_url() ?>images/icons/selector.png" />
				</div>
			</div>

		
		</div>

	<div class="sixteen columns mega" id="accident_mega" style="display: none;">
				<?=$this->load->view('global/claims/accident_menu')?>
			</div>
			<div class="sixteen columns mega" id="advice_mega" style="display: none;">
				<?=$this->load->view('global/claims/advice_menu')?>
			</div>
			<div class="sixteen columns mega" id="compensation_mega" style="display: none;">
				<?=$this->load->view('global/claims/compensation_menu')?>
			</div>
			<div class="sixteen columns mega" id="claim_mega" style="display: none;">
				<?=$this->load->view('global/claims/claim_menu')?>
			</div>


		<div class="sixteen columns" id="big_heading">
			<div class="four columns" id="slideshow">
				<?=$this->load->view('slideshow/slideshow')?>
			</div>
			<div class="twelve columns">
				<h2>Welcome to our personal injury claim website. This is part of
					kenneth elliott + rowe solicitors</h2>
				<p>Everything you need to know about making a no win, no fee
					personal injury claim is here. Please click on one of the links
					above to find what you are looking for.</p>
			</div>
		</div>


		<div class="four columns" id="greybox">
			<h3>Client Comments</h3>
			<div id="openquote">
				<img src="<?= base_url() ?>images/icons/open-quote.png" />
			</div>
			<div id="quote">
				<?=$this->load->view('slideshow/testimonials')?>
			</div>
			<div id="closequote">
				<img src="<?= base_url() ?>images/icons/close-quote.png" />
			</div>
			<?=$this->load->view('slideshow/name')?>
		</div>
		<div class="twelve columns">


			<?= $this->load->view($main_content) ?>
		</div>
		<div class="four columns">&nbsp;</div>
		<div class="twelve columns" id="greybox">
			<div class="four columns">
				<h2>What makes us better?</h2>
			</div>
			<?=$this->load->view('global/claims/makesUsBetter')?>
		</div>
		<div class="sixteen columns" id="footer_block">&nbsp;</div>

	</div>
	<!-- container -->


	<?= $this->load->view('template/claims/footer') ?>

	<!-- End Document
        ================================================== -->
</body>
</html>
