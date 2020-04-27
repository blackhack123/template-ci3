

	<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">Administrar Usuarios</h3>
		            </div>
		            <div class="box-body">
		        		<div class="row">
		        			<div class="col-md-2">
		        				 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
		        					<i class="fa fa-user-plus"></i>
		        					Crear Usuario
		        				</button>
		        			</div>
		        			<div class="col-md-2">
		        				<a href="#" class="btn btn-block btn-success">
		        					<i class="fa fa-file-excel-o"></i>
		        					Reporte Excel
		        				</a>
		        			</div>
		        		</div>
		        		<div class="row" style="margin-top: 15px;">
		        			<div class="col-xs-12">
						    	<div class="table-responsive"> 
							        <table id="example" class="table table-striped table-hover dt-responsive display nowrap" cellspacing="0">
							            <thead>
							            <tr>
							                <th>Name</th>
							                <th>Position</th>
							                <th>Office</th>
							                <th>Extn.</th>
							                <th>Start date</th>
							                <th>Salary</th>
							            </tr>
							            </thead>
							        </table>
						        </div>
		        			</div>
		        		</div>
		            </div>
	          	</div>
			</div>
		</div>
	</section>
	</div>


    <div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
			  	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			      	<span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Crear Usuario</h4>
				</div>
			  	<div class="modal-body">

			  	</div>
			  	<div class="modal-footer">
			    	<button type="button" class="btn btn-primary">
			    		<i class="fa fa-floppy-o"></i>
			    		Grabar Datos
			    	</button>
			    	<button type="button" class="btn btn-danger" data-dismiss="modal">
			    		<i class="fa fa-close"></i>
			    		Cancelar
			    	</button>
			  	</div>
			</div>
		</div>
	</div>
	<!-- /.modal -->

<script src="<?=base_url('assets/modules/usuarios.js')?>"></script>