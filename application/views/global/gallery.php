<style>
    /* the overlayed element */
.simple_overlay {
	
	/* must be initially hidden */
	display:none;
	
	/* place overlay on top of other elements */
	z-index:10000;
	
	/* styling */
	background-color:#333;
	
	width:675px;	
	min-height:200px;
	border:1px solid #666;
	
	/* CSS3 styling for latest browsers */
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow: 0 0 90px #000;	
}

/* close button positioned on upper right corner */
.simple_overlay .close {
	background-image:url(<?=base_url()?>/images/overlay/close.png);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}

/* styling for elements inside overlay */
	.details {
		position:relative;
		margin:5px;
		font-size:11px;
		color:#fff;
		width:675px;
	}
	
	.details h3 {
		
		font-size:15px;
		margin:0 0 0px 0px;
        }
	
                
                #triggers img{
                
                float:left;
                margin:15px;
        }
    
</style>
<div id="triggers">
<?php foreach($content as $row):?>

<img class="thumbnails" width="200px" height="133px" src="https://s3-eu-west-1.amazonaws.com/grandgardendesigns/thumb_<?=$row->news_image?>" rel="#img_<?=$row->content_id?>"/>

<?php endforeach; ?>
</div>
<div style="clear:both;">
</div>

<?php foreach($content as $row):?>
<div class="simple_overlay" id="img_<?=$row->content_id?>">

	<!-- large image -->
	<img width="675px" src="https://s3-eu-west-1.amazonaws.com/grandgardendesigns/<?=$row->news_image?>" />

	<!-- image details -->
	<div class="details">
		<h3><?=$row->title?></h3>

		<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->content_id."'>Edit this page</a><br/>";
		}	

?>

		<p><?=$row->content?></p>
	</div>

</div>
<?php endforeach; ?>