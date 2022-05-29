<?php 
headerTienda($data);
$arrServicio = $data['servicio'];
$arrServicios = $data['servicios'];
$arrImages = $arrServicio['images']; 
$rutacategoria = $arrServicio['categoriaid'].'/'.$arrServicio['ruta_categoria'];
$urlShared = base_url()."/tienda/servicio/".$arrServicio['idservicio']."/".$arrServicio['ruta'];
$arrComentarios = $data['comentarios'];
 ?>
<br><br><br>
<hr>
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url(); ?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<a href="<?= base_url().'/tienda/categoria/'.$rutacategoria; ?>" class="cl8">
				<?= $arrServicio['categoria'] ?>
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				<?= $arrServicio['nombre'] ?>
			</span>
		</div>
	</div>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<!-- <div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div> -->

							<div class="slick3 gallery-lb">
							<?php 
								if(!empty($arrImages)){
									for ($img=0; $img < count($arrImages) ; $img++) { 
										
							 ?>
								<div class="item-slick3" data-thumb="<?= $arrImages[$img]['url_image']; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrServicio['nombre']; ?>">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= $arrImages[$img]['url_image']; ?>">
											<!-- <i class="fa fa-expand"></i> -->
										</a>
										
									</div>
								</div>
							<?php 
									}
								} 
							?>
							</div>
						</div>
					</div>
					<!-- <a href="<?= base_url() ?>/contacto" class="btn btn-warning">
					Ver comentarios -->
					<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<!-- <div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div> <?= openssl_encrypt($arrServicio['idservicio'],METHODENCRIPT,KEY); ?> js-addcart-detail
									</div> <?= openssl_encrypt($arrServicio['idservicio'],METHODENCRIPT,KEY); ?> js-addcart-detail-->

									<button id="<?= openssl_encrypt($arrServicio['idservicio'],METHODENCRIPT,KEY); ?>" class="btn btn-primary js-addcart-detail">
										Comprar
									</button> &nbsp &nbsp
									<a href="<?= base_url() ?>/carrito" class="btn btn-success">
										Ver Carrito
									</a> 
									
								</div>
							</div>	
						</div>
				</a>
				</div>
				
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
					
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?= $arrServicio['nombre']; ?>
						</h4>
						<span class="mtext-106 cl2">
							<?= SMONEY.formatMoney($arrServicio['precio']); ?>
						</span>

						<h5 class="mtext-10 cl2 p-t-23">Descripción</h5>

						<p class="stext-102 cl3"></p>
						<?= $arrServicio['descripcion']; ?>
						
						<p class="stext-102 cl3"></p>
						<span class="mtext-10 cl2 p-t-23">Duración: </span>
						<?= $arrServicio['stock']; ?><span> mes(es)</span>
						<!-- <div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								Compartir en:
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook"
								onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $urlShared; ?> &t=<?= $arrServicio['nombre'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"
								>
								<i class="fa fa-facebook"></i>
							</a>

							<a href="https://twitter.com/intent/tweet?text=<?= $arrServicio['nombre'] ?>&url=<?= $urlShared; ?>&hashtags=<?= SHAREDHASH; ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="https://api.whatsapp.com/send?text=<?= $arrServicio['nombre'].' '.$urlShared ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="WhatsApp">
								<i class="fab fa-whatsapp" aria-hidden="true"></i>
							</a>
						</div> -->
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<div class="containerRT">
								<div class="innerRT">
									<div class="ratingRT">
										<span id="ratingAverage" class="rating-numRT">4.0</span>
										<div class="rating-starsRT" id="starsRatingAverage">
											<span><i class="active icon-star"></i></span>
											<span><i class="icon-star"></i></span>
											<span><i class="icon-star"></i></span>
											<span><i class="icon-star"></i></span>
											<span><i class="icon-star"></i></span>
										</div>
										<div class="rating-users"><i class="icon-user"></i> <span id="people"><?= empty($arrComentarios) ? 0 : count($arrComentarios) ?></span> total</div>
									</div>
								
									<div class="histoRT">
										<div class="five histo-rateRT">
										<span class="histo-starRT"><i class="active icon-star"></i> 5 </span>
										<span class="bar-blockRT">
											<span id="bar-five" class="barRT"> <span id="fiveStars">
												<?php 
													if(empty($arrComentarios)){
														echo '0';
													}else{
														// cantidad de valoracion = 5
														$count = 0;
														foreach($arrComentarios as $comment){
															if($comment['valoracion'] == 5){
																$count++;
															}
														}
														echo $count;
													}
												?>
											</span>&nbsp; </span>
										</span>
										</div>
								
										<div class="four histo-rateRT">
										<span class="histo-starRT"><i class="active icon-star"></i> 4 </span>
										<span class="bar-blockRT">
											<span id="bar-four" class="barRT"> <span id="fourStars">171,298</span>&nbsp; </span>
										</span>
										</div>
								
										<div class="three histo-rateRT">
										<span class="histo-starRT"> <i class="active icon-star"></i> 3 </span>
										<span class="bar-blockRT">
											<span id="bar-three" class="barRT"> <span id="threeStars">94,940</span>&nbsp; </span>
										</span>
										</div>
								
										<div class="two histo-rateRT">
										<span class="histo-starRT"> <i class="active icon-star"></i> 2 </span>
										<span class="bar-blockRT">
											<span id="bar-two" class="barRT"> <span id="twoStars">44,525</span>&nbsp; </span>
										</span>
										</div>
								
										<div class="one histo-rateRT">
										<span class="histo-starRT"> <i class="active icon-star"></i> 1 </span>
										<span class="bar-blockRT">
											<span id="bar-one" class="barRT"> <span id="oneStar">136,457</span>&nbsp; </span>
										</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<section class="bg0 p-t-104 p-b-116">
			<div class="container">
				<div class="flex-w flex-tr">
					<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
						<form id="frmContacto">
							<h4 class="mtext-105 cl2 txt-center p-b-30">
								Comentar Servicio
							</h4>

							<!-- <div class="bor8 m-b-20 how-pos4-parent">
								<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo">
								<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-name.png" alt="ICON" style="width: 28px;">
							</div> -->

							<div class="bor8 m-b-20 how-pos4-parent">
								<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="hidden" id="idservicio" name="idservicio" placeholder="Correo electrónico" value="<?= $arrServicio['idservicio'];?>">

							</div>

							<div class="bor8 m-b-30">
								<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" id="mensaje" name="mensaje" placeholder="Escribe tu comentario aquí!"></textarea>
							</div>
							<div class="page__group">
								<div class="rating">
									<!-- <select>
										<option type="radio" name="rating-star" class="rating__control screen-reader" id="rc1" value=1></option>
									</select> -->
									<input type="radio" name="rating-star" class="rating__control screen-reader" id="rc1" value=1>
									<input type="radio" name="rating-star" class="rating__control screen-reader" id="rc2" value=2>
									<input type="radio" name="rating-star" class="rating__control screen-reader" id="rc3" value=3>
									<input type="radio" name="rating-star" class="rating__control screen-reader" id="rc4" value=4>
									<input checked type="radio" name="rating-star" class="rating__control screen-reader" id="rc5" value=5>
									<label for="rc1" class="rating__item">
									<svg class="rating__star">
										<use xlink:href="#star"></use>
									</svg>
									<span class="screen-reader">1</span>
									</label>
									<label for="rc2" class="rating__item">
									<svg class="rating__star">
										<use xlink:href="#star"></use>
									</svg>
									<span class="screen-reader">2</span>
									</label>
									<label for="rc3" class="rating__item">
									<svg class="rating__star">
										<use xlink:href="#star"></use>
									</svg>
									<span class="screen-reader">3</span>
									</label>
									<label for="rc4" class="rating__item">
									<svg class="rating__star">
										<use xlink:href="#star"></use>
									</svg>
									<span class="screen-reader">4</span>
									</label>
									<label for="rc5" class="rating__item">
									<svg class="rating__star">
										<use xlink:href="#star"></use>
									</svg>
									<span class="screen-reader">5</span>
									</label>
								</div>
								<!-- <button type="submit" class="btn btn-primary" onclick="valorar()">valorar</button>
								<button class="btn btn-primary  btn-sm" onClick="valorar(this,'.$arrData[$i]['idservicio'].')" title="Editar servicio">Valorar</button> -->
								
							</div>
								
							<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
								<symbol id="star" viewBox="0 0 26 28">
									<path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z" />
								</symbol>
							</svg>
							<button class="btn btn-primary pointer">
								COMENTAR
							</button>
						</form>
					</div>

					<div id="coments" class="size-210 bor10 flex-w flex-col-m p-lr-30 p-tb-30 p-lr-15-lg w-full-md">
						<div class="">
							<div class="">
								<p>COMENTARIOS</p>
							</div>
							<?php 
							//var_dump($_SESSION['userData']);
							if(!empty($arrComentarios)){							
								for ($p=0; $p < count($arrComentarios) ; $p++) {						
							?>
							<div class="">
								
								<b><?= $arrComentarios[$p]['nombre']; ?> </b>. <span><?= $arrComentarios[$p]['datecreated'];?></span>&nbsp&nbsp&nbsp <b><?= $arrComentarios[$p]['valoracion'];?><i class="fa fa-star" aria-hidden="true"></i></b>
							
								<!-- <p><?= $arrComentarios[$p]['email'];?></p> -->
								<p><?= $arrComentarios[$p]['mensaje'];?></p>
							</div>
							<?php 
							}	
						} else{ ?>
							<span class="text-secondary">No hay comentarios aquí, ingresa uno!</span>
						<?php
						}
						
						?>												
						</div>
					
					</div>
				</div>
			</div>
		</section>	

		<!-- <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<h3>Servicios Relacionados</h3>
		</div>-->
	</section> 

	<!-- Related Products -->
	<!-- <section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			
			<div class="wrap-slick2">
				<div class="slick2">

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
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="<?= $portada ?>" alt="<?= $arrServicios[$p]['nombre'] ?>">

								<a href="<?= base_url().'/tienda/servicio/'.$arrServicios[$p]['idservicio'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Ver servicio
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
									<a href="#"
									 id="<?= openssl_encrypt($arrServicios[$p]['idservicio'],METHODENCRIPT,KEY); ?>"
									 pr="1"
									 class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
									 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
									 ">
										<i class="zmdi zmdi-shopping-cart"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php 
						}
					}	
				 ?>

				</div>
			</div>
		</div>
	</section> -->
<?php 
	footerTienda($data);
?>
