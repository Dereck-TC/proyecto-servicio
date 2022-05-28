<?php 
headerTienda($data);
$arrServicios = $data['servicios'];
 ?>
<br><br><br>
<hr>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<?php include_once('categorias.php')?>

			<div class="row isotope-grid">
			<?php 
			if(!empty($arrServicios)){
				for ($p=0; $p < count($arrServicios); $p++) { 
					$ruta = $arrServicios[$p]['ruta'];
					if(count($arrServicios[$p]['images']) > 0 ){
						$portada = $arrServicios[$p]['images'][0]['url_image'];
					}else{
						$portada = media().'/images/uploads/product.png';
					}
			 ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?= $portada ?>" alt="<?= $arrServicios[$p]['nombre'] ?>">
							<a href="<?= base_url().'/tienda/servicio/'.$arrServicios[$p]['idservicio'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Servicio
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?= base_url().'/tienda/servicio/'.$arrServicios[$p]['idservicio'].'/'.$ruta; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $arrServicios[$p]['nombre'] ?>
								</a>
								<span class="stext-105 cl3">
									<?= SMONEY.formatMoney($arrServicios[$p]['precio']); ?>
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
								<!-- <a href="#"
								 id="<?= openssl_encrypt($arrServicios[$p]['idservicio'],METHODENCRIPT,KEY); ?>"
								 class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
								 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
								 ">
									<i class="zmdi zmdi-shopping-cart"></i>
								</a> -->
							</div>
						</div>
					</div>
				</div>
			<?php 
				}
			}else{
				?>
			<p>No hay servicios para mostrar <a href="<?= base_url() ?>/tienda"> Ver servicios</a></p>
			<?php 
			} 
			?>
			</div>

			<!-- Load more -->
			<?php 
				if(count($data['servicios']) > 0){
					$prevPagina = $data['pagina'] - 1;
					$nextPagina = $data['pagina'] + 1;
			 ?>
			<div class="flex-c-m flex-w w-full p-t-45">
			<?php if($data['pagina'] > 1){ ?>
				<a href="<?= base_url() ?>/tienda/categoria/<?= $data['infoCategoria']['idcategoria'].'/'.$data['infoCategoria']['ruta'].'/'.$prevPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> <i class="fas fa-chevron-left"></i> &nbsp; Anterior </a>&nbsp;&nbsp;
			<?php } ?>
			<?php if($data['pagina'] != $data['total_paginas']){ ?>
				<a href="<?= base_url() ?>/tienda/categoria/<?= $data['infoCategoria']['idcategoria'].'/'.$data['infoCategoria']['ruta'].'/'.$nextPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> Siguiente &nbsp; <i class="fas fa-chevron-right"></i> </a>
			<?php } ?>
			</div>
			<?php 
				}
			 ?>
		</div>
	</div>
<?php 
	footerTienda($data);
?>