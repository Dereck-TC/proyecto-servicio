<?php 
headerTienda($data);
?>
 <br><br><br>
<hr>
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url() ?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				<?= $data['page_title'] ?>
			</span>
		</div>
	</div>

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" >
		<div class="container">
			<div class="row">
				<div class="">
					<div class="">
						<div class="wrap-table-shopping-cart">
							<table id="tblCarrito" class="table-shopping-cart">
								<tr class="table_head" style="background-color: #242323;">
									<th class="column-1"></th>
									<th class="column-2">Servicio</th>
									<th class="column-3">Detalle</th>
									<!-- <th class="column-4">Cantidad</th> -->
									<!-- <th class="column-5">Precio</th> -->
								</tr>
							
								<tr class="table_row <?= $idServicio ?>">
									<td class="column-1">
										<!-- <div class="how-itemcart1" idpr="<?= $idServicio ?>" op="2" onclick="fntdelItem(this)" >
											<img src="<?= $servicio['imagen'] ?>" alt="<?= $servicio['servicio'] ?>">
										</div> -->
									</td>
									<!--  /** SMONEY.formatMoney($servicio['precio']) */?> -->
									<td class="column-2">
										<!-- <div class="" idpr="<?= $idServicio ?>" op="2" onclick="fntdelItem(this)"  >
											<img src="<?= $servicio['imagen'] ?>" alt="<?= $servicio['servicio'] ?>" style="width: 100xp; height: 200px">
										</div>  -->IMAGEN
									<td class="column-3"><b>Servicio: </b> Nombre de servicio</br><b> Duracion:</b> 1 mes </br><b> Precio: </b>S/. 100</td>
									<!-- <td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m"
											idpr="<?= $idServicio ?>">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?= $servicio['cantidad'] ?>" idpr="<?= $idServicio ?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"
											idpr="<?= $idServicio ?>">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td> -->
									<!-- <td class="column-5"><?= SMONEY.formatMoney($totalServicio) ?></td> -->
								</tr>
							

							</table>
						</div>
						<!-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
						</div> -->
					</div>
				</div>
				<!-- <div styles="background-color: #393838">						 -->
					<div class="" >
						<div class=" p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm" style="background-color: #242323; border-radius: 10px;">
							<h4 class="mtext-109 cl7 p-b-30">
								RESUMEN DE COSTO
							</h4>

							<div class="flex-w flex-t  p-b-13">
								<div class="size-208">
									<span class="stext-110 cl7">
										Precio:
									</span>
								</div>

								<div class="size-209">
									<!-- <span id="subTotalCompra" class="mtext-110 cl7">
										<?= SMONEY.formatMoney($subtotal) ?>
									</span> -->
								</div>
								</br></br>
								<div class="size-208">
									<span class="stext-110 cl7">
										Cargos adicionales:
									</span>
								</div>

								<div class="size-209">
									<!-- <span class="mtext-110 cl7">
										<?= SMONEY.formatMoney(COSTOENVIO) ?>
									</span> -->
								</div>
							</div>
							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl7">
										Total:
									</span>
								</div>

								<div class="size-209 p-t-1">
									<!-- <span id="totalCompra" class="mtext-110 cl7">
										<?= SMONEY.formatMoney($subtotal + COSTOENVIO) ?>
									</span> -->
								</div>
							</div>
							<a href="<?= base_url() ?>/carrito/procesarpago" id="btnComprar" class="btn btn-primary pointer">
								Procesar pago
							</a>
						</div>
					</div>
				<!-- </div> -->
			</div>
		</div>
	</form>

<br>
<!-- <div class="container">
	<p>No hay servicio en el carrito <a href="<?= base_url() ?>/tienda"> Ver servicios</a></p>
</div> -->
<br>
<?php 

	footerTienda($data);
 ?>
	