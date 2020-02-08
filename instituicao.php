<!DOCTYPE html>
<html>
<head>
    <?php include('include/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Instituição</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thesaurus</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Registro Instituição</h4>
                        <p class="mb-30 font-14">Preencha os campos abaixo:</p>
                    </div>
                </div>
                <form>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Instituição</label>
                                <input class="form-control" type="text" placeholder="Instituição">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>País :</label>
                                <select class="custom-select form-control">
                                    <option value="1">País 1</option>
                                    <option value="2">País 2</option>
                                    <option value="3">País 3</option>
                                    <option value="4">País 4</option>
                                    <option value="5">País 5</option>
                                    <option value="6">País 6</option>
                                    <option value="7">País 7</option>
                                    <option value="8">País 8</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo Instituição :</label>
                                <select class="custom-select form-control">
                                    <option value="Tipo Instituição">Tipo Instituição 1</option>
                                    <option value="Tipo Instituição">Tipo Instituição 2</option>
                                    <option value="Tipo Instituição">Tipo Instituição 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <button type="button" class="btn btn-primary">Gravar</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- Default Basic Forms End -->
            <!-- Simple Datatable start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h5 class="text-blue">Instituição</h5>
                        <p class="font-14">Itens listados abaixo: </p>
                    </div>
                </div>
                <div class="row">
                    <table id="minhaTabela" class="data-table stripe hover nowrap">
                        <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Instituição</th>
                            <th>Tipo Instituição</th>
                            <th>País</th>
                            <th>Data</th>
                            <th class="datatable-nosort">Ação</th>
                        </tr>
                        </thead>
                        <tbdy>
                            <tr>
                                <td class="table-plus">Instituição ZZZ</td>
                                <td>Tipo Instituição 4</td>
                                <td>País 6</td>
                                <td>10-11-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição AAA</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 1</td>
                                <td>01-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição BBB</td>
                                <td>Tipo Instituição 2</td>
                                <td>País 2</td>
                                <td>02-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição BBB</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 4</td>
                                <td>02-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição CCC</td>
                                <td>Tipo Instituição 4</td>
                                <td>País 5</td>
                                <td>03-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição CCC</td>
                                <td>Tipo Instituição 2</td>
                                <td>País 6</td>
                                <td>03-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição DDD</td>
                                <td>Tipo Instituição 3</td>
                                <td>País 3</td>
                                <td>04-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição DDD</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 6</td>
                                <td>04-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição EEE</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 6</td>
                                <td>15-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição EEE</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 7</td>
                                <td>22-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição FFF</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 3</td>
                                <td>26-10-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">Instituição GGG</td>
                                <td>Tipo Instituição 1</td>
                                <td>País 8</td>
                                <td>03-11-2019</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> Ver</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Editar</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbdy>
                        <tfoot>
                        <tr>
                            <th class="table-plus datatable-nosort">Instituição</th>
                            <th>Tipo Instituição</th>
                            <th>País</th>
                            <th>Data</th>
                            <th class="datatable-nosort">Ação</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->

        </div>
        <?php include('include/footer.php'); ?>
    </div>
</div>
<?php include('include/script.php'); ?>
<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
<!-- buttons for Export datatable -->
<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
<script>
    $('document').ready(function(){
        $('#minhaTabela').DataTable({
            "language":{
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                },
                "select": {
                    "rows": {
                        "_": "Selecionado %d linhas",
                        "0": "Nenhuma linha selecionada",
                        "1": "Selecionado 1 linha"
                    }
                }
            },
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "datatable-nosort",
                orderable: false,
            }],
            "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
        });

    });
</script>
</body>
</html>