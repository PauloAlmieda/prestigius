<div class="all">


	<div class="col_12"></div>
	<div class="col_6"></div>
	<div class="col_6"><div class="icones_redes"><?php foreach ($contatos as $cont) {
				# code...
	}{ ?>
		<i class="fa fa-phone"></i><label style="margin-right: 50px; color:#DC143C "><?php echo $cont['tel1'] ?></label><a href="<?php echo $cont['facebook']; ?>"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="<?php echo $cont['twitter']; ?>"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		<a href="<?php echo $cont['youtube']; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> <?php } ?></div>
	</div>
	<div class="col_12"></div>
	<div class="col_2" style="margin-left:100px;"><h1>LOGO</h1>.</div>
	<div class="col_9" style="margin-top: 50px;">
		
		
		<ul class="menu">
			<li><a href="<?php echo BASE_URL; ?>home">HOME</a>|</li>
			<li><a href="<?php echo BASE_URL; ?>empresa">EMPRESA</a>|</li>
			<li><a href="<?php echo $basedir; ?>fotos">GASTRONOMIA</a>|</li>
			<li><a href="<?php echo $basedir; ?>fotos">SERVIÇOS</a>|</li>
			<li><a href="<?php echo $basedir; ?>fotos">FALE CONOSCO</a></li>

		</ul>

		
	</div>
	<div class="clear"></div>
	<div class="banner">
		<ul class="slideshow">
			<?php foreach ($banner as $b): ?>
				<li><img src="<?php echo BASE_URL;?>banner/<?php echo $b['img'];?>"><span><?php echo $b['frase']; ?></span></li>

			<?php endforeach; ?>
		</ul>
	</div>


	<div  class="quadro">
		<label id="domeio">FOTOS</label>

		<div class="gallery">
			<a href="http://placehold.it/600x450/4D99E0/ffffff.png&text=600x450"><img src="<?php echo BASE_URL; ?>img_home/<?php echo $centro[0]['imagem']; ?>" width="200" height="250" /></a>
			<a href="http://placehold.it/600x450/75CC00/ffffff.png&text=600x450"><img src="<?php echo BASE_URL; ?>img_home/<?php echo $centro[1]['imagem']; ?>" width="200" height="250" /></a>
			<a href="http://placehold.it/600x450/E49800/ffffff.png&text=600x450"><img src="<?php echo BASE_URL; ?>img_home/<?php echo $centro[2]['imagem']; ?>" width="200" height="250" /></a>

		</div>
	</div>

		<div class="clear" style="height:451px;"></div>
		<div class="grid">
		<div class="col_12 center"><img class="vejamais" src="<?php echo BASE_URL; ?>fotos/vejamais.png" alt=""></div>
		<div class="col_6 center"><img class="minilogo" src="<?php echo BASE_URL; ?>fotos/esquerdo.png" alt=""></div>
		<div class="col_6 center">KKKK</div>
	    </div>
         

	




</div>
