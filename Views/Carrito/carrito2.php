<!-- <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table id="tblCarrito" class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Servicio</th>
									<th class="column-2"></th>
									<th class="column-3">Precio</th>
									<th class="column-4">Cantidad</th>
									<th class="column-5">Total</th>
								</tr>
                                <?php 
								foreach ($_SESSION['arrCarrito'] as $servicio) {
									$totalServicio = $servicio['precio'] * $servicio['cantidad'];
									$subtotal += $totalServicio;
									$idServicio = openssl_encrypt($servicio['idservicio'],METHODENCRIPT,KEY);
								
							 ?>
								<tr class="table_row <?= $idServicio ?>">
									<td class="column-1">
										<div class="how-itemcart1" idpr="<?= $idServicio ?>" op="2" onclick="fntdelItem(this)" >
											<img src="<?= $servicio['imagen'] ?>" alt="<?= $servicio['servicio'] ?>">
										</div>
									</td>
									<td class="column-2"><?= $servicio['servicio'] ?></td>
									<td class="column-3"><?= SMONEY.formatMoney($servicio['precio']) ?></td>
									<td class="column-4">
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
									</td>
									<td class="column-5"><?= SMONEY.formatMoney($totalServicio) ?></td>
								</tr>
							<?php } ?>

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
				</div> -->