<?php 
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
$arrComentarios = $data['comentarios'];

 ?>
<script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<!-- <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= $banner ?>);">
	<h2 class="ltext-105 cl0 txt-center">
		Contacto
	</h2>
</section> -->

<?php
	if(viewPage($idpagina)){	
 ?>
<!-- Content page -->
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
						<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="emailContacto" name="emailContacto" placeholder="Correo electrónico">
						<img class="how-pos4 pointer-none" src="<?= media() ?>/tienda/images/icons/icon-email.png" alt="ICON">
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
							<input type="radio" name="rating-star" class="rating__control screen-reader" id="rc5" value=5>
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
						for ($p=0; $p < count($arrComentarios) ; $p++) {
							
					?>
					<div class="">
						
						<b><?= $arrComentarios[$p]['nombre']; ?> </b>. <span><?= $arrComentarios[$p]['datecreated'];?></span>&nbsp&nbsp&nbsp <b><?= $arrComentarios[$p]['valoracion'];?><i class="fa fa-star" aria-hidden="true"></i></b>
					
						<!-- <p><?= $arrComentarios[$p]['email'];?></p> -->
						<p><?= $arrComentarios[$p]['mensaje'];?></p>
					</div>
					<?php } ?>												
				</div>
			
			</div>
		</div>
	</div>
</section>	
<?php 
		// echo $data['page']['contenido'];
	}else{
?>
<div>
	<div class="container-fluid py-5 text-center" >
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
<?php 
	}
	footerTienda($data);
?>