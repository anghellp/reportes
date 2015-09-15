<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Datos de Habitaciones</a></li>
            <li><a data-toggle="tab" href="#tab2">Ordenes de Servicio</a></li>
            <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permiso'),'eHabitacion')){
                        echo '<a title="Editar" class="btn btn-mini btn-info" href="'.base_url().'index.php/habitaciones/editar/'.$result->idHabitaciones.'"><i class="icon-pencil icon-white"></i> Editar</a>'; 
                        echo ' <a title="Volver" class="btn btn-mini btn" href="'.base_url().'index.php/habitaciones"><i class="icon-arrow-left icon-white"></i> Volver</a>'; 
                    } ?>
                    
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Habitación</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>#</strong></td>
                                                    <td><?php echo $result->idHabitaciones ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Habitación</strong></td>
                                                    <td><?php echo $result->habitacion ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Vista</strong></td>
                                                    <td><?php echo $result->vista ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Fecha de Registro</strong></td>
                                                    <td><?php echo date('d/m/Y',  strtotime($result->fechaRegistro)) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Piramide</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGThree">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Piramide</strong></td>
                                                    <td><?php echo $result->piramide ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Piso</strong></td>
                                                    <td><?php echo $result->piso ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



          
        </div>


        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                
                        <table class="table table-bordered " cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Fecha Inicial</th>
                                    <th>Fecha Final</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Ninguna OS Registrada</td>
                                </tr>
                            </tbody>
                        </table>
                
                <?php } else { ?>

                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Fecha Inicial</th>
                                    <th>Fecha Final</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                foreach ($results as $r) {
                    $fechaInicial = date(('d/m/Y'), strtotime($r->fechaInicial));
                    $fechaFinal = date(('d/m/Y'), strtotime($r->fechaFinal));
                    echo '<tr>';
                    echo '<td>' . $r->idOs . '</td>';
                    echo '<td>' . $fechaInicial . '</td>';
                    echo '<td>' . $fechaFinal . '</td>';
                    echo '<td>' . $r->observaciones . '</td>';

                    echo '<td>';
                    if($this->permission->checkPermission($this->session->userdata('permiso'),'vOs')){
                        echo '<a href="' . base_url() . 'index.php/os/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn" title="Ver mas detalles"><i class="icon-eye-open"></i></a>'; 
                    }
                    if($this->permission->checkPermission($this->session->userdata('permiso'),'eOs')){
                        echo '<a href="' . base_url() . 'index.php/os/editar/' . $r->idOs . '" class="btn btn-info" title="Editar OS"><i class="icon-pencil icon-white"></i></a>'; 
                    }
                    
                    echo  '</td>';
                    echo '</tr>';
                } ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
            

            <?php  } ?>

        </div>
    </div>
</div>