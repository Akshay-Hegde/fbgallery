<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
alert($);
});
</script>
<!-- theme header -->
<div class="pt_banner">
	<h3 class="pt_heading">Events <strong>Gallery</strong></h3>
	<div class="speedbar">
		<nav>
			<ul>
				<li><a href="<?=site_url()?>">Back to Homepage</a></li>
			{{navigation:links group="events"}}
                <li>l</li>
				<li class="{{class}}"><a href="{{url}}">{{title}}</a></li>
			{{/navigation:links}}
			
            </ul>
		</nav>
	</div>
</div>
<!-- theme header -->
<h1>
	<strong><?php echo $album[0]->name ?></strong>
</h1>


<div id="gallery_main">
  <div id="gallery_full" class="gallery_right">
    <ul>
      <?php foreach($photos as $photo){?>
      <li> <a href="<?php echo $photo->source ?>" rel="prettyPhoto[gallery]"> <img src="<?php echo $photo->picture ?>" class="photo"  />
        <div class="img_div"> <img src="<?php echo ADDONPATH."modules/".$this->module ?>/img/zoom.png" class="search_img" /> </div>
        </a> </li>
      <?php }?>
    </ul>
  </div>
</div>

