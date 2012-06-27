
<style type="text/css">
    .slideshow3 {  position:relative; width: 200px; margin: auto; text-align:right; }
    
</style>


    <div class="slideshow3" style="">
    
    <?php foreach($testimonials as $row):?>
    <span style=""><em><?=$row->title?></em> 
    
    <?php
		$is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if ($is_logged_in != 0 && $role == 1) {?>
		
			<a href='<?=base_url()?>admin/edit/<?=$row->content_id?>'>edit</a>
		
		

		<?php } ?>
    
    
    </span>
    <?php endforeach;?>
   </div>


