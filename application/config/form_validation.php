<?php
$config = array('clientes' => array(array(
                                	'field'=>'cliente_nombre',
                                	'label'=>'Nombre del Cliente',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'cliente_direccion',
                                	'label'=>'Dirección del Cliente',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'cliente_telefono',
                                	'label'=>'Teléfono del Cliente',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'cliente_correo',
                                	'label'=>'Correo del Cliente',
                                	'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'servicios' => array(array(
                                    'field'=>'nombre',
                                    'label'=>'Nombre',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descripcion',
                                    'label'=>'Descripción',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'productos' => array(array(
                                    'field'=>'marca',
                                    'label'=>'Marca',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'modelo',
                                    'label'=>'Modelo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'aps' => array(array(
                                    'field'=>'nombre',
                                    'label'=>'Nombre Access Point',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'ip',
                                    'label'=>'IP Address',
                                    'rules'=>'trim|valid_ip|xss_clean'
                                ),
                                array(
                                    'field'=>'macWifi',
                                    'label'=>'MAC WiFi',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'macEth',
                                    'label'=>'MAC Ethernet',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'sn',
                                    'label'=>'N° Serial',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descripcion',
                                    'label'=>'Descripción',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nombre',
                                    'label'=>'Nombre',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'apellido',
                                    'label'=>'Apellido',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'user',
                                    'label'=>'Usuario',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'pass',
                                    'label'=>'Contraseña',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'trim|valid_email|xss_clean'
                                ),
                                array(
                                    'field'=>'telefono',
                                    'label'=>'Telefono',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,      
                'os' => array(array(
                                    'field'=>'fechaInicial',
                                    'label'=>'Fecha Inicial',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fechaFinal',
                                    'label'=>'Fecha Final',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'checkIn',
                                    'label'=>'Check-In',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'checkOut',
                                    'label'=>'Check-Out',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'horaInicial',
                                    'label'=>'Hora Inicial',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'horaFinal',
                                    'label'=>'Hora Final',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estatus',
                                    'label'=>'Estatus',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'observaciones',
                                    'label'=>'Observaciones',
                                    'rules'=>'trim|xss_clean'
                                ),

                                array(
                                    'field'=>'cliente',
                                    'label'=>'Cliente',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'reportaInicial',
                                    'label'=>'Reporto Inicial',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'reportaFinal',
                                    'label'=>'Reporto Final',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'abrioReporte',
                                    'label'=>'Abrio Reporte',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'senal',
                                    'label'=>'Señal',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'habitaciones_id',
                                    'label'=>'habitaciones_id',
                                    'rules'=>'trim|xss_clean|required'
                                ))

                  ,
				'tiposUsuario' => array(array(
                                	'field'=>'nombreTipo',
                                	'label'=>'NombreTipo',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'estado',
                                	'label'=>'Estado',
                                	'rules'=>'required|trim|xss_clean'
                                ))
		);
			   