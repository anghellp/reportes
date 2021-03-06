
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cliente</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <?php if ($custom_error != '') {
                                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                                } ?>

                                <form role="form" action="<?php echo current_url(); ?>" id="formCliente" method="post" name="editarCliente">
                                    <div class="form-group">
                                        <?php echo form_hidden('idClientes',$result->idClientes) ?>
                                        <label>Nombre del Cliente</label>
                                        <input class="form-control "id="cliente_nombre" type="text" name="cliente_nombre" value="<?php echo $result->cliente_nombre; ?>" autofocus/>
                                    </div>
                                    <div class="form-group">
                                        <label>Dirección del Cliente</label>
                                        <input class="form-control "id="cliente_direccion" type="text" name="cliente_direccion" value="<?php echo $result->cliente_direccion; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Teléfono del Cliente</label>
                                        <input class="form-control "id="cliente_telefono" type="text" name="cliente_telefono" value="<?php echo $result->cliente_telefono; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Correo del Cliente</label>
                                        <input class="form-control "id="cliente_correo" type="text" name="cliente_correo" value="<?php echo $result->cliente_correo; ?>" />
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Modificar</button>
                                    <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn btn-default"><i class="fa fa-arrow-left"></i> Volver</a>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->