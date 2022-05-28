<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h3><?= $data['page_title']; ?></h3>
				</div>

				<!-- <div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						&nbsp;&nbsp;
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Categoría &nbsp;
					</div>
				</div> -->

				<!-- Filter -->
				<div class="">
					<div class="">
						<div class="">
							<!-- <div class="">
								Categorías
							</div> -->

							<div class="flex-w p-t-4 m-r--5">
								<?php 
									if(count($data['categorias']) > 0){
										foreach ($data['categorias'] as $categoria) {										
								 ?>
								<a href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'].'/'.$categoria['ruta'] ?>" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									<?= $categoria['nombre'] ?> <span> &nbsp;<!--(/** $categoria['cantidad'] *)--></span>
								</a>
								<?php 
										}
									}
								 ?>
							</div>
						</div>
					</div>
				</div>
			</div>