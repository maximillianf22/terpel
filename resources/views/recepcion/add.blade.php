@extends('layout.index')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Recepcion de Muestras</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="#" class="tab-wizard wizard-circle">
				 <h6>Ingreso<br><small>Código de Vehículo</small></h6>
					<section>
						<div class="row mb-3">
							<div class="col-8">
								<div class="input-group">
					                <input type="text" class="form-control" placeholder="Buscar">
					                    <span class="input-group-btn">
					                      <button type="button" class="btn btn-info"><i class="fa fa-search"></i></button>
					                    </span>
					              </div>
							</div>
							<div class="col-1"></div>
							<div class="col-3">
								<button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Crear Nuevo</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstName1">Equipo</label>
									<input type="text" class="form-control" id="firstName1" required>
								</div>
							</div>
							<div class="col-md-6">
								<a data-toggle="modal" data-target="#modalClientes">
									<div class="form-group">
										<label for="lastName1">Cliente</label>
										<input type="text" class="form-control" id="orderCustomer" required>
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailAddress1">Flota</label>
									<input type="email" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="shortDescription1">Descripcion</label>
									<textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
								</div>
							</div>
						</div>
					</section>
					<!-- Step 2 -->
					<h6>Localización <br><small>del Componente</small></h6>
					<section>
						<div class="row mb-4">
							<div class="col-2"></div>
							<div class="col-4">
								<h5><strong>Codigo:</strong> 165721 </h5>
								<h5><strong>Cliente:</strong> NASA </h5>
							</div>
							<div class="col-4 text-right">
								<h5><strong>Flota:</strong> Apollo 1</h5>
								<button class="btn btn-success"><i class="fa fa-plus"></i>Nuevo Componente</button>
							</div>
							<div class="col-2"></div>
						</div>
						<div class="container bg-white border">
							<div class="col-12">
							  <div class="box-deck mt-4">
								<div class="col-md-4 col-lg-3">
						            <div class="box">
									  <div class="box-header with-border">
										<h4 class="box-title">Componente <br> <strong>Motor</strong></h4>
									  </div>
						              <div class="box-footer flexbox">					 
										  <input type="checkbox" id="basic_checkbox_1">
										  <label for="basic_checkbox_1">Seleccionar</label>
						                <div class="text-right flex-grow">
						                  <button class="btn btn-sm btn-primary">Editar</button>
						                </div>
						              </div>
						            </div>
						         </div>
						         <div class="col-md-4 col-lg-3">
						            <div class="box">
									  <div class="box-header with-border">
										<h4 class="box-title">Componente <br><strong>Sistema Hidraulico</strong></h4>
									  </div>
						              <div class="box-footer flexbox">					 
										  <input type="checkbox" id="basic_checkbox_1">
										  <label for="basic_checkbox_1">Seleccionar</label>
						                <div class="text-right flex-grow">
						                  <button class="btn btn-sm btn-primary">Editar</button>
						                </div>
						              </div>
						            </div>
						         </div>
						         <div class="col-md-4 col-lg-3">
						            <div class="box">
									  <div class="box-header with-border">
										<h4 class="box-title">Componente <br><strong>Ruedas</strong></h4>
									  </div>
						              <div class="box-footer flexbox">					 
										  <input type="checkbox" id="basic_checkbox_1">
										  <label for="basic_checkbox_1">Seleccionar</label>
						                <div class="text-right flex-grow">
						                  <button class="btn btn-sm btn-primary">Editar</button>
						                </div>
						              </div>
						            </div>
						         </div>
						         <div class="col-md-4 col-lg-3">
						            <div class="box">
									  <div class="box-header with-border">
										<h4 class="box-title">Componente <br><strong>Diferencial</strong></h4>
									  </div>
						              <div class="box-footer flexbox">					 
										  <input type="checkbox" id="basic_checkbox_1">
										  <label for="basic_checkbox_1">Seleccionar</label>
						                <div class="text-right flex-grow">
						                  <button class="btn btn-sm btn-primary">Editar</button>
						                </div>
						              </div>
						            </div>
						         </div>
						         <div class="col-md-4 col-lg-3">
						            <div class="box">
									  <div class="box-header with-border">
										<h4 class="box-title">Componente <br><strong>Convertidor</strong></h4>
									  </div>
						              <div class="box-footer flexbox">					 
										  <input type="checkbox" id="basic_checkbox_1">
										  <label for="basic_checkbox_1">Seleccionar</label>
						                <div class="text-right flex-grow">
						                  <button class="btn btn-sm btn-primary">Editar</button>
						                </div>
						              </div>
						            </div>
						         </div>
						       </div>
							</div>
						</div>
					</section>
					<!-- Step 3 -->
					<h6>Recepción <br><small>de Muestras</small></h6>
					<section>
						<div class="row mb-4">
							<div class="col-2"></div>
							<div class="col-4">
								<h5><strong>Codigo:</strong> 165721 </h5>
								<h5><strong>Cliente:</strong> NASA </h5>
							</div>
							<div class="col-4 text-right">
								<h5><strong>Flota:</strong> Apollo 1</h5>
							</div>
							<div class="col-2"></div>
						</div>
					<div class="container">
						<div class="row">
							<div class="container ">
							</div>
							<div class="col-5">
					            <div class="box">
					              <div class="box-header with-border">
					                <h5 class="box-title">Muestrad ID: <strong>443</strong></h5>
					              </div>
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-2">
								<h2 class="text-center"><i class="fa fa-arrow-right fa-2x text-center"></i></h2>
							</div>
							<div class="col-5">
					            <div class="box">
					              <div class="box-header with-border">
					                <h5 class="box-title">Muestrad ID: <strong>444</strong></h5>
					              </div>
					              <table class="table table-sm">
					                  <tr>
					                    <th>Componente</th>
					                     <td><input type="text" class="form-control"></td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td><input type="date" class="form-control" id="date1"></td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td><input type="text" class="form-control"></td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td><input type="text" class="form-control" value="200 H"></td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	<input type="checkbox" id="basic_checkbox_1">
					                     	<label for="basic_checkbox_1">Si / No</label>	
						          		</td>
					                  </tr>
					              </table>
					              <div class="box-footer">
					                <button class="btn btn-default">Limpiar</button>
					                <button class="btn btn-warning pull-center">Guardar</button>
					                <button class="btn btn-info pull-right">Repetir</button>
					              </div>
					            </div>
							</div>
						</div>
					</div>
					</section>
					<!-- Step 4 -->
					<h6>Revision <br><small>de Muestras</small></h6>
					<section>
						<div class="row">
						<div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>443</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="box-deck">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>444</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>445</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>446</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>447</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>448</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>449</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>450</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-6 col-lg-4">
				            <div class="box box-slided-up">
				              <div class="box-header with-border">
				                <h5 class="box-title">Muestrad ID: <strong>451</strong></h5>
				                <ul class="box-controls pull-right">
				                  <li><a class="box-btn-close" href="#"></a></li>
				                  <li><a class="box-btn-slide" href="#"></a></li>
				                </ul>
				              </div>
				              <div class="box-content">
				                <div class="row">
					            <div class="box">
					              <table class="table table-sm">
					              	<tr>
					                    <th>Componente</th>
					                     <td>Motor</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Recepcion</th>
					                     <td>15/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Fecha de Muestra</th>
					                     <td>12/07/2020</td>
					                  </tr>
					                  <tr>
					                    <th>Tipo de Aceite</th>
					                     <td>Aceite Mineral</td>
					                  </tr>
					                  <tr>
					                    <th>Horometro</th>
					                     <td>200 H</td>
					                  </tr>
					                  <tr>
					                    <th>Lote</th>
					                     <td>448</td>
					                  </tr>
					                  <tr>
					                    <th>Cliente</th>
					                     <td>Jaime Snow</td>
					                  </tr>
					                  <tr>
					                    <th>Cambio de Aceite</th>
					                     <td>
					                     	Si
						          		</td>
					                  </tr>
					              </table>
					            </div>
					            <div class="box">
					            	<a data-toggle="modal" data-target="#modalEtiqueta">
							            <div class="box-body">
							            	<div class="col-12">
							            		<h6 class="text-center"><small>Para previsualizar la etiqueta haga click en la imagen</small><br>
								            	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras-1024x398.jpg" class="model_img img-fluid" style="width: 70%">
								            	</h6>
							            	</div>
										</div>
									</a>
								</div>
							   </div>
				              </div>
				            </div>
				          </div>
				          </div>
				          <div class="container">
				          	<div class="col-2">&nbsp;</div>
				          	<div class="col-8">
				          		<button class="btn btn-block btn-primary"><i class="fa fa-file-pdf"></i>Generar Etiquetas</button>
				          	</div>
				          	<div class="col-2">&nbsp;</div>
				          </div>
					</section>
				</form>
        	</div>
		</div>
	</section>
   <!-- /.box -->
   <div class="modal fade" id="modalClientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Buscar cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Crear cliente</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-8">
                      <input type="text" class="form-control inputSearchCliente" placeholder="Nombre del cliente">
                    </div>
                    <div class="form-group col-4">
                      <button class="btn btn-info btn-block buscarCliente">Buscar</button>
                    </div>
                  </div>
				  <table class="table">
					  <thead>
						  <tr>
							  <th>Razon social</th>
							  <th>NIT</th>
							  <th>Telefono</th>
						  </tr>
					  </thead>
					  <tbody class="resClientes">
						<!-- lista de clientes -->
					  </tbody>
				  </table>
                </div>
              </div>
              <button class="btn btn-block btn-success btnSelectCliente">Seleccionar</button>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="formCreateCliente" autocomplete="off" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label>Identificacion *</label>
                    <input type="text" name="identificacion" placeholder="Identificacion" class="form-control" required>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Nombre Del Usuario</label>
                        <input type="text" name="nameUser" class="form-control" placeholder="Nombre Cliente" required>
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Apellidos Del Usuario</label>
                        <input type="text" name="lastnameUser" class="form-control" placeholder="Nombre Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="number" name="celularUser" class="form-control" placeholder="Celular ">
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="emailUser" class="form-control" placeholder="Email Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 ">
                      <button type="submit" class="btn btn-info btn-block">Crear cliente</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalEmpleados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Buscar Empleado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Crear Empleado</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-8">
                      <input type="text" class="form-control inputNameCliente" placeholder="Nombre del cliente">
                    </div>
                    <div class="form-group col-4">
                      <button class="btn btn-info btn-block buscarCliente">Buscar</button>
                    </div>
                  </div>
                  <div class="resClientes">
                  	<h4><a>Jaime Snow</a></h4>
                  	<h4><a>Maximillian Comander</a></h4>
                  	<h4><a>Lina Targaryen</a></h4>
                  	<h4><a>Angelo Lanister</a></h4>
                  </div>
                </div>
              </div>
              <button class="btn btn-block btn-success btnSelectCliente">Seleccionar</button>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form id="formCreateCliente" autocomplete="off" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label>Identificacion *</label>
                    <input type="text" name="identificacion" placeholder="Identificacion" class="form-control" required>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Nombre Del Usuario</label>
                        <input type="text" name="nameUser" class="form-control" placeholder="Nombre Cliente" required>
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Apellidos Del Usuario</label>
                        <input type="text" name="lastnameUser" class="form-control" placeholder="Nombre Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="number" name="celularUser" class="form-control" placeholder="Celular ">
                      </div>
                    </div>
                    <div class="col-lg-6 ">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="emailUser" class="form-control" placeholder="Email Cliente">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 ">
                      <button type="submit" class="btn btn-info btn-block">Crear Empleado</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalEtiqueta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Descargar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Imprimir</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  	<div class="border">
                   		<img src="{{ asset('assets/images/etiqueta.png')}}">
                   </div>
                </div>
            </div>
             <div class="card-footer" style="margin-top: 20px">
                  <button type="submit" class="btn btn-info btn-block">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
@endsection