
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cliente - Editar</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Agregar
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="<?php echo current_url(); ?>" id="formCliente" method="post" name="adicionarCliente">
                                    <div class="form-group">
                                        <label>Nombre del Cliente</label>
                                        <input class="form-control "id="cliente_nombre" type="text" name="cliente_nombre" value="<?php echo set_value('cliente_nombre'); ?>"  autofocus/>
                                    </div>
                                    <div class="form-group">
                                        <label>Dirección del Cliente</label>
                                        <input class="form-control "id="cliente_direccion" type="text" name="cliente_direccion" value="<?php echo set_value('cliente_direccion'); ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Teléfono del Cliente</label>
                                        <input class="form-control "id="cliente_telefono" type="text" name="cliente_telefono" value="<?php echo set_value('cliente_telefono'); ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Correo del Cliente</label>
                                        <input class="form-control "id="cliente_correo" type="text" name="cliente_correo" value="<?php echo set_value('cliente_correo'); ?>" />
                                    </div>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Agregar</button>
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

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-home"></i>
                </span>
                <h5>Editar Habitación</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formHabitacion" method="post" class="form-horizontal" name="editarHabitacion">

                <body onload = "document.editarHabitacion.habitacion.focus()">

                    <div class="control-group">
                        <?php echo form_hidden('idHabitaciones',$result->idHabitaciones) ?>
                        <label for="habitacion" class="control-label">Habitación<span class="required">*</span></label>
                        <div class="controls">
                            <input id="habitacion" type="text" name="habitacion" value="<?php echo $result->habitacion; ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Piramide*</label>
                        <div class="controls">
                            <select name="piramide" id="piramide">
                                <?php 

                                if($result->piramide == "1")
                                
                                {
                                    $uno = 'selected'; $dos = ''; $tres = ''; $cuatro = ''; $cinco = '';
                                } 

                                elseif($result->piramide == "2")
                                {
                                    $dos = 'selected'; $uno = ''; $tres = ''; $cuatro = ''; $cinco = '';
                                }

                                elseif($result->piramide == "3")
                                {
                                    $tres = 'selected'; $uno = ''; $dos = ''; $cuatro = ''; $cinco = '';
                                }

                                elseif($result->piramide == "4")
                                {
                                    $cuatro = 'selected'; $uno = ''; $dos = ''; $tres = ''; $cinco = '';
                                }

                                elseif($result->piramide == "5")
                                {
                                    $cinco = 'selected'; $uno = ''; $dos = ''; $tres = ''; $cuatro = '';
                                }

                                ?>

                                <option value="1" <?php echo $uno; ?>>1</option>
                                <option value="2" <?php echo $dos; ?>>2</option>
                                <option value="3" <?php echo $tres; ?>>3</option>
                                <option value="4" <?php echo $cuatro; ?>>4</option>
                                <option value="5" <?php echo $cinco; ?>>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Piso*</label>
                        <div class="controls">
                            <select name="piso" id="piso">
                                <?php 

                                if($result->piso == "0")
                                
                                {
                                    $cero = 'selected'; $uno = ''; $dos = ''; $tres = ''; $cuatro = '';
                                    $cinco = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "1")
                                
                                {
                                    $uno = 'selected'; $cero = ''; $dos = ''; $tres = ''; $cuatro = '';
                                    $cinco = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "2")
                                {
                                    $dos = 'selected'; $cero = ''; $uno = ''; $tres = ''; $cuatro = '';
                                    $cinco = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "3")
                                {
                                    $tres = 'selected'; $cero = ''; $uno = ''; $dos = ''; $cuatro = '';
                                    $cinco = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "4")
                                {
                                    $cuatro = 'selected'; $cero = ''; $uno = ''; $dos = ''; $tres = '';
                                    $cinco = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "5")
                                {
                                    $cinco = 'selected'; $cero = ''; $uno = ''; $dos = ''; $tres = '';
                                    $cuatro = ''; $seis = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "6")
                                {
                                    $seis = 'selected'; $cero = ''; $uno = ''; $dos = ''; $tres = '';
                                    $cuatro = ''; $cinco = ''; $siete = ''; $ocho = '';
                                }

                                if($result->piso == "7")
                                {
                                    $siete = 'selected'; $cero = ''; $uno = ''; $dos = ''; $tres = '';
                                    $cuatro = ''; $cinco = ''; $seis = ''; $ocho = '';
                                }

                                if($result->piso == "8")
                                {
                                    $ocho = 'selected'; $cero = ''; $uno = ''; $dos = ''; $tres = '';
                                    $cuatro = '';  $cinco = ''; $seis = ''; $siete = '';
                                }

                                ?>

                                <option value="0" <?php echo $cero; ?>>0</option>
                                <option value="1" <?php echo $uno; ?>>1</option>
                                <option value="2" <?php echo $dos; ?>>2</option>
                                <option value="3" <?php echo $tres; ?>>3</option>
                                <option value="4" <?php echo $cuatro; ?>>4</option>
                                <option value="5" <?php echo $cinco; ?>>5</option>
                                <option value="6" <?php echo $seis; ?>>6</option>
                                <option value="7" <?php echo $siete; ?>>7</option>
                                <option value="8" <?php echo $ocho; ?>>8</option>
                            </select>
                        </div>
                    </div>

                   <div class="control-group">
                        <label  class="control-label">Vista*</label>
                        <div class="controls">
                            <select name="vista" id="vista">
                                <?php 

                                if($result->vista == "Mar")
                                
                                {
                                    $mar = 'selected'; $laguna = '';
                                } 

                                elseif($result->vista == "Laguna")
                                {
                                    $laguna = 'selected'; $mar = '';
                                }

                                ?>

                                <option value="Mar" <?php echo $mar; ?>>Mar</option>
                                <option value="Laguna" <?php echo $laguna; ?>>Laguna</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Modificar</button>
                                <a href="<?php echo base_url() ?>index.php/habitaciones" id="" class="btn"><i class="icon-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formHabitacion').validate({
            rules :{
                  piramide:{ required: true},
                  piso:{ required: true},
                  habitacion:{ required: true},
                  vista:{ required: true}
            },
            messages:{
                  piramide :{ required: 'Campo Requerido.'},
                  piso :{ required: 'Campo Requerido.'},
                  habitacion:{ required: 'Campo Requerido.'},
                  vista:{ required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>

