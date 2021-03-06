<?php 
    require_once('config.php');
?>
<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo constant('URL');?>views/aprend/principal/indexapren.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Inicio</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Servicios</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span
                                    class="hide-menu">Empresas</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/aprend/empresa/registrar-empresa.php"
                                        class="sidebar-link"><span class="hide-menu">Registrar empresas
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/aprend/empresa/ver-empresa.php" class="sidebar-link"><span
                                            class="hide-menu">Lista de empresas
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span
                                    class="hide-menu">Auditorias</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/aprend/auditoria/index.php" class="sidebar-link"><span
                                            class="hide-menu">Programar auditor??a
                                        </span></a>
                                </li>
                            
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/aprend/auditoria/ListarAuditoria.php" class="sidebar-link"><span
                                            class="hide-menu">Lista Auditorias
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                                    class="hide-menu">Visitas</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>views/aprend/visita/ver-visitas.php" class="sidebar-link"><span
                                            class="hide-menu">Lista de visitas
                                        </span></a>
                                </li>
                                
                            </ul>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="save" class="feather-icon"></i><span
                                    class="hide-menu">Reportes</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>models/configPDF.php" class="sidebar-link"><span
                                            class="hide-menu">Reporte Usuario
                                        </span></a>
                                </li>
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>models/configPDFficha.php" class="sidebar-link"><span
                                    class="hide-menu">Reporte Ficha</span></a>
                            </li>
                            <li class="sidebar-item"><a href="<?php echo constant('URL');?>models/configPDFempresa.php" class="sidebar-link"><span
                                            class="hide-menu">Reporte Empresa
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo constant('URL');?>models/configPDFauditoria.php" class="sidebar-link"><span
                                            class="hide-menu">Reporte Auditoria
                                        </span></a>
                                </li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->