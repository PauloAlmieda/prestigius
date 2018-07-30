<div class="all">

	<div class="clear" style="height: 100px;"></div>
	<div class="col_6"></div>
	<div class="col_6"><div class="icones_redes"><?php foreach ($contatos as $cont) {
				# code...
	}{ ?>
		<i class="fa fa-phone"></i><label style="margin-right: 50px; color:#DC143C "><?php echo $cont['tel1']; ?></label><a href="<?php echo $cont['facebook']; ?>"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="<?php echo $cont['twitter']; ?>"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		<a href="<?php echo $cont['youtube']; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> <?php } ?></div>
	</div>


<div

