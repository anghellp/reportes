
        <div class="row">
            <div class="col-lg-12"><h1 class="page-header">Clientes - 
                <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'aCliente')){ ?>
                    <a href="<?php echo base_url();?>index.php/clientes/adicionar" class="btn btn-success"><i class="fa fa-plus icon-white"></i> Nuevo Cliente</a>    
                <?php } ?> </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <?php
            if(!$results){?>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">Ningún Cliente Registrado</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-4 (nested) -->
            </div>
            <!-- /.panel-body-->
        </div>
        <!-- /.row -->

        <?php } else { ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php foreach ($results as $r) {
                                        echo '<tr>';
                                        echo '<td>'.$r->idClientes.'</td>';
                                        echo '<td>'.$r->cliente_nombre.'</td>';
                                        echo '<td>'.$r->cliente_direccion.'</td>';
                                        echo '<td>'.$r->cliente_telefono.'</td>';
                                        echo '<td>'.$r->cliente_correo.'</td>';
                                        echo '<td>';
                                        if($this->permission->checkPermission($this->session->userdata('permiso'),'vCliente')){
                                            echo '<a href="'.base_url().'index.php/clientes/visualizar/'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-default btn-circle" title="Ver más detalles"><i class="fa fa-eye"></i></a>'; 
                                        }
                                        if($this->permission->checkPermission($this->session->userdata('permiso'),'eCliente')){
                                            echo '<a href="'.base_url().'index.php/clientes/editar/'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-info btn-circle" title="Editar Cliente"><i class="fa fa-pencil"></i></a>'; 
                                        }
                                        if($this->permission->checkPermission($this->session->userdata('permiso'),'dCliente')){
                                            echo '<a href="#modal-excluir" role="button" data-toggle="modal" Cliente="'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-danger btn-circle" title="Eliminar Cliente"><i class="fa fa-remove"></i></a>'; 
                                        }
 
                                        echo '</td>';
                                        echo '</tr>';
                                    }?>
                                    <tr>
                                        
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-4 (nested) -->
            </div>
            <!-- /.panel-body-->
        </div>
        <!-- /.row -->


        <?php echo $this->pagination->create_links();

        }?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Eliminar Habitación</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idCliente" name="id" value="" />
    <h5 style="text-align: center">¿Realmente deseas eliminar este Cliente y los datos asociados con él?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Eliminar</button>
  </div>
  </form>
</div>