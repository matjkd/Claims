<?php foreach($content as $row):?>


<?php  $id = $row->content_id;?>


<?=form_open_multipart("admin/edit_content/$row->content_id")?> 
<p>
Title* <br/><?=form_input('title', $row->title)?><br/>
</p>


<p>
    Menu link:<br/>
    <?=form_input('menu', $row->menu) ?>
</p>


<p>
    Category:<br/>
    <input type="text" name="category"  value="<?=$row->category?>"  disable="disabled" onFocus="this.blur();"><br/>
</p>

<p>
    Sub-Category:<br/>
    
     <?php
        $subcatoptions = array(
        		'none' => 'none',
            'road_traffic_accidents' => 'Road Traffic Accidents',
            'accidents_at_work' => 'Accidents at Work',
            'slipping_and_tripping' => 'Slipping and Tripping'
        );
        ?>
    <?= form_dropdown('subcategory', $subcatoptions, $row->subcategory) ?>
    
    
</p>


 <?php if($row->news_image != NULL) { ?>
<img src="https://s3-eu-west-1.amazonaws.com/kerclaims/<?=$row->news_image?>" style="padding:10px 10px 10px 0;" width="150px">
<?php } ?>
<p class="Image">
    <?= form_label('Image') ?><br/>

<?= form_upload('file') ?>
</p>

<?php if ($row->category == "gallery") { ?>

    <p>
        Gallery:<br/>

        <?php
        $options = array(
            'driveways' => 'driveways',
            'landscapes' => 'Landscapes',
            'outdoor_buildings' => 'Outdoor Buildings',
            'patios' => 'Patios',
            'ponds_and_pools' => 'Ponds and Pools',
            'wallsgatesrailings' => 'Walls Gates Railings',
            'artists_impressions' => 'Artists Impressions',
        );
        ?>
    <?= form_dropdown('gallery', $options, $row->gallery) ?>
    </p>

<?php } ?>




<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->content?></textarea>
<br/>

Meta Description<br/>
<textarea  cols=65 rows=2 name="meta_desc"><?=$row->meta_desc?></textarea>
<br/>
Meta Keywords<br/>
<textarea  cols=65 rows=2 name="meta_keywords"><?=$row->meta_keywords?></textarea>
<br/>
Meta Title<br/>
<textarea  cols=65 rows=2 name="meta_title"><?=$row->meta_title?></textarea>
<br/>

Extra: 
<br/><?=form_input('extra', $row->extra)?><br/>
Sidebox:
<br/><?=form_input('sidebox', $row->sidebox)?><br/>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>