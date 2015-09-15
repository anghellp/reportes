
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cliente</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

<div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: right; width: 30%"><strong>#</strong></td>
                                    <td style="text-transform:uppercase;"><?php echo $result->idClientes; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right; width: 30%"><strong>Nombre del Cliente</strong></td>
                                    <td style="text-transform:uppercase;"><?php echo $result->cliente_nombre; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Dirección del Cliente</strong></td>
                                    <td style="text-transform:uppercase;"><?php echo $result->cliente_direccion; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Teléfono del Cliente</strong></td>
                                    <td style="text-transform:uppercase;"><?php echo $result->cliente_telefono; ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Fecha de Registro del Cliente</strong></td>
                                    <td><?php echo date('d/m/Y',  strtotime($result->fechaRegistro)) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn btn-default"><i class="fa fa-arrow-left"></i> Volver</a>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-4 (nested) -->
            </div>
            <!-- /.panel-body-->
        </div>
        <!-- /.row -->