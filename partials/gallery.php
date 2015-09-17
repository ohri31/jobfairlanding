<!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



    <div class='header'>
		Galerija
	</div>
	<div class="gallery-all" >
         <?php
            $dirname = "../img/gallery";
            $files = scandir($dirname);
            $out = array_shift($files);
            $out = array_shift($files);
            $imenagalerija= array($files[0] => "Day 1",$files[1] => "neki tekst",$files[2] => "neki malo duzi tekst",$files[3] => "nei malo duziiiii tekstinjovic maliii ali duzi tekst",$files[4] => "zzZZzzzz pcelica",$files[5] => "zomg");

        ?>
       <?php $i = 0; foreach($files as $directoryname):?>
        <div class="gallery-part">
            <div onclick="opengallery(<?php echo $i; ?>)" onmouseover="galleryhover(<?php echo $i;?>)"  onmouseout="gallerynohover(<?php echo $i;?>)" id="gallery-pic" class="<?php echo 'gallery-pic'.$i; ?>">
                <div  class="<?php echo 'overlay'.$i; ?>">
                   <div class="gallery-text"><?php echo $imenagalerija[$directoryname]; ?></div>
                   <div class="gallery-text-line"></div>
                </div>
                <a href="javascript:;">
                <img src="<?php echo 'img/gallery/'.$files[$i]."/tab.jpg"; ?>" class="<?php echo "gallery".$i;?>"  alt="">
                </a>
                <div>&nbsp;&nbsp;&nbsp;</div>
            </div>
        </div>
        <div style="height:180px; width:20px; float:left;" >
            &nbsp;&nbsp;
        </div>
    <?php $i = $i+1; endforeach;?>

	</div>
