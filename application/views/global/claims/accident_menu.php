
<script type="text/javascript">
     var word_list = new Array(
     <?php foreach($accidents as $row):?>
        {text: "<?=$row->title?>", weight:<?=$row->weight?>, link: "<?=base_url()?>welcome/home/<?=$row->menu?>"},
        <?php endforeach;?>
        {text: "", weight: 2, link: ""}
      
      );
    
    </script>
    
     <div id="wordcloud" ></div>