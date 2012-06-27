
    
     <div id="wordcloud" >
     
     
     <?php foreach($accidents as $row):?>
     <a href="<?=base_url()?>welcome/home/<?=$row->menu?>" rel="<?=$row->weight?>"><?=$row->title?></a>
     
     <?php endforeach;?>
     
     </div>