<?php 
headerTienda($data);

$subtotal = 0;
$total = 0;
foreach ($_SESSION['arrCarrito'] as $servicio) {
	$subtotal += $servicio['precio'] * $servicio['cantidad'];
}
$total = $subtotal + COSTOENVIO;

// $tituloTerminos = !empty(getInfoPage(PTERMINOS)) ? getInfoPage(PTERMINOS)['titulo'] : "";
// $infoTerminos = !empty(getInfoPage(PTERMINOS)) ? getInfoPage(PTERMINOS)['contenido'] : "";


?>
<script
    src="https://www.paypal.com/sdk/js?client-id=<?= IDCLIENTE ?>&currency=<?= CURRENCY ?>">
</script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: <?= $total; ?>
          },
          description: "Compra de artículos en <?= NOMBRE_EMPESA ?> por <?= SMONEY.$total ?> ",
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
      		let base_url = "<?= base_url(); ?>";
	        let dir = document.querySelector("#txtDireccion").value;
	        let ciudad = document.querySelector("#txtCiudad").value;
	        let inttipopago = 1; 
	        let request = (window.XMLHttpRequest) ? 
	                    new XMLHttpRequest() : 
	                    new ActiveXObject('Microsoft.XMLHTTP');
			let ajaxUrl = base_url+'/Tienda/procesarVenta';
			let formData = new FormData();
		    formData.append('direccion',dir);    
		   	formData.append('ciudad',ciudad);
			formData.append('inttipopago',inttipopago);
		   	formData.append('datapay',JSON.stringify(details));
		   	request.open("POST",ajaxUrl,true);
		    request.send(formData);
		    request.onreadystatechange = function(){
		    	if(request.readyState != 4) return;
		    	if(request.status == 200){
		    		let objData = JSON.parse(request.responseText);
		    		if(objData.status){
		    			window.location = base_url+"/tienda/confirmarpedido/";
		    		}else{
		    			swal("", objData.msg , "error");
		    		}
		    	}
		    }
      });
    }
  }).render('#paypal-btn-container');
</script>

<!-- Modal -->
<div class="modal fade" id="modalTerminos" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= $tituloTerminos ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="page-content">
        		<?= $infoTerminos  ?>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
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
<?php 
$subtotal = 0;
$total = 0;
if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
 ?>		
	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" >
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart" style=" border-radius: 10px;">
							<table id="tblCarrito" class="table-shopping-cart" >
								<tr class="table_head" style="background-color: #242323;">
									<th class="column-1"><h4 class="mtext-109 cl7 p-b-3">Servicio</h4></th>
									<th class="column-2"></th>
									<th class="column-3" style="width: 250px;"><h4 class="mtext-109 cl7 p-b-3">Detalle</h4></th>
									<!-- <th class="column-4">Cantidad</th>
									<th class="column-5">Total</th> -->
								</tr>
							<?php 
								foreach ($_SESSION['arrCarrito'] as $servicio) {
									$totalServicio = $servicio['precio'] * $servicio['cantidad'];
									$subtotal += $totalServicio;
									$idServicio = openssl_encrypt($servicio['idservicio'],METHODENCRIPT,KEY);
								
							 ?>
								<tr class="table_row <?= $idServicio ?>">
									<td class="column-1">
										<div class="" idpr="<?= $idServicio ?>" op="2" onclick="fntdelItem(this)" >
											<img src="<?= $servicio['imagen'] ?>" alt="<?= $servicio['servicio'] ?>" style="width: 100xp; height: 200px">
										</div>
									</td>
									<td class="column-2"> ></td>
									<td class="column-3">
										<?= $servicio['servicio'] ?></br>
										<?= SMONEY.formatMoney($servicio['precio']) ?>	
										</td>
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
						</div>  -->
					</div>
				</div>
				

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm" style="background-color: #242323; border-radius: 10px;">
						<h4 class="mtext-109 cl7 p-b-30">
							Totales
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl7">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span id="subTotalCompra" class="mtext-110 cl7">
									<?= SMONEY.formatMoney($subtotal) ?>
								</span>
							</div>

							<div class="size-208">
								<span class="stext-110 cl7">
									Envío:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl7">
									<?= SMONEY.formatMoney(COSTOENVIO) ?>
								</span>
							</div>
							<div class="flex-w flex-t p-t-27 ">
								<div class="size-209">
								<label for="tipopago">Dirección de envío</label>
									<div class="bor8 bg0 m-b-12" style="width: 300px;">
										<input id="txtDireccion" class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="Dirección de envío">
									</div>
									<div class="bor8 bg0 m-b-22" style="width: 300px;">
										<input id="txtCiudad" class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Ciudad / Estado">
									</div>
								</div>
							</div>
							
						</div>
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl7">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span id="totalCompra" class="mtext-110 cl7">
									<?= SMONEY.formatMoney($subtotal + COSTOENVIO) ?>
								</span>
							</div>
						</div>
						<!-- <a href="<?= base_url() ?>/tienda/confirmarpedido/" id="btnComprar" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Procesar pago
						</a> -->
						<!-- <button type="submit" id="btnComprar" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Procesar pedido</button> -->
						<!-- <div class="divmetodpago">
							<div>
								<label for="paypal">
									<input type="radio" id="paypal" class="methodpago" name="payment-method" checked="" value="Paypal">
									<img src="<?= media()?>/images/img-paypal.jpg" alt="Icono de PayPal" class="ml-space-sm" width="74" height="20">
								</label>
							</div>
							<div>
								<label for="contraentrega">
									<input type="radio" id="contraentrega" class="methodpago" name="payment-method" value="CT">
									<span>Contra Entrega</span>
								</label>
							</div>
							<div id="divtipopago" class="notblock" >
								<label for="listtipopago">Tipo de pago</label>
								<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<select id="listtipopago" class="js-select2" name="listtipopago">
									<?php 
										if(count($data['tiposPago']) > 0){ 
											foreach ($data['tiposPago'] as $tipopago) {
												if($tipopago['idtipopago'] != 1){
										?>
										<option value="<?= $tipopago['idtipopago']?>"><?= $tipopago['tipopago']?></option>
									<?php
												}
											}
										} ?>
									</select>
									<div class="dropDownSelect2"></div>
								</div>
								<br>
								<button type="submit" id="btnComprar" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Procesar pedido</button>
							</div>
							<div id="divpaypal">
								<div>
									<p>Para completar la transacción, te enviaremos a los servidores seguros de PayPal.</p>
								</div>
								<br>
								<div id="paypal-btn-container"></div>
							</div>
						</div> -->
						<div id="divMetodoPago" class="notblock">
						<div id="divCondiciones">
							<input type="checkbox" id="condiciones" >
							<label for="condiciones"> Aceptar </label>
							<a href="#" data-toggle="modal" data-target="#modalTerminos" > Términos y Condiciones </a>
						</div>
						<div id="optMetodoPago" class="notblock">	
							<hr>					
							<h4 class="mtext-109 cl2 p-b-30">
								Método de pago
							</h4>
							<div class="divmetodpago">
								<!-- <div>
									<label for="paypal">
										<input type="radio" id="paypal" class="methodpago" name="payment-method" checked="" value="Paypal">
										<img src="<?= media()?>/images/img-paypal.jpg" alt="Icono de PayPal" class="ml-space-sm" width="74" height="20">
									</label>
								</div> -->
								<div>
									<label for="contraentrega">
										<input type="radio" id="contraentrega" class="methodpago" name="payment-method" value="CT">
										<span>Contra Entrega</span>
									</label>
								</div>
								<div id="divtipopago" class="#" >
									<label for="listtipopago">Tipo de pago</label>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select id="listtipopago" class="js-select2" name="listtipopago">
										<?php 
											if(count($data['tiposPago']) > 0){ 
												foreach ($data['tiposPago'] as $tipopago) {
													if($tipopago['idtipopago'] != 1){
										 ?>
										 	<option value="<?= $tipopago['idtipopago']?>"><?= $tipopago['tipopago']?></option>
										<?php
													}
												}
										 } ?>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
									<br>
									<!-- <button type="submit" id="btnComprar" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Procesar pedido</button> -->
									<a href="#" id="btnComprar" class="btn btn-primary">
										Procesar pago
									</a>
								</div>
								<div id="divpaypal">
									<div>
										<p>Para completar la transacción, te enviaremos a los servidores seguros de PayPal.</p>
									</div>
									<br>
									<div id="paypal-btn-container"></div>
								</div>
							</div>
						</div>
					</div>	
				</div>
				</div>
			</div>
		</div>
	</form>
<?php }else{ ?>
<br>
<div class="container">
	<p>No hay servicio en el carrito <a href="<?= base_url() ?>/tienda"> Ver servicios</a></p>
</div>
<br>
<?php 
	}
	footerTienda($data);
 ?>