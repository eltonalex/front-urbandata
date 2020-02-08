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
                            <h4>Pesquisa</h4>
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
                        <h4 class="text-blue">Pesquisa</h4>
                        <p class="mb-30 font-14">Preencha os campos abaixo:</p>
                    </div>
                </div>
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Palavra-chave</label>
                                <input class="form-control" type="text" placeholder="Título">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Parâmetros</label>
                                <select class="custom-select col-12">
                                    <option selected="">Escolha...</option>
                                    <option value="1">Área Temática</option>
                                    <option value="2">Artigos</option>
                                    <option value="3">Dissertações</option>
                                    <option value="4">Livros</option>
                                    <option value="5">Referência Espacial</option>
                                    <option value="6">Referência Temporal</option>
                                    <option value="7">Teses</option>
                                    <option value="0">Todos</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <button type="button" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- Default Basic Forms End -->
            <!-- Simple Datatable start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h5 class="text-blue">Resultados</h5>
                        <p class="font-14">Itens listados abaixo: </p>
                    </div>
                </div>
                <div class="row">
                    <table id="minhaTabela" class="data-table stripe hover nowrap">
                        <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Título</th>
                            <th>Autor</th>
                            <th>Instituição</th>
                            <th>Data</th>
                            <th class="datatable-nosort">Ação</th>
                        </tr>
                        </thead>
                        <tbdy>
                            <tr>
                                <td class="table-plus">Termo ZZZ</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo AAA</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo BBB</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo BBB</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo CCC</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo CCC</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo DDD</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo DDD</td>
                                <td>Autor</td>
                                <td>Instituição</td>
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
                                <td class="table-plus">Termo EEE</td>
                                <td>Autor</td>
                                <td>Instituição</td>
                                <td>05-10-2019</td>
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
                                <td class="table-plus">Termo EEE</td>
                                <td>Autor</td>
                                <td>Instituição</td>
                                <td>05-10-2019</td>
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
                                <td class="table-plus">Termo FFF</td>
                                <td>Autor</td>
                                <td>Instituição</td>
                                <td>06-10-2019</td>
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
                                <td class="table-plus">Termo GGG</td>
                                <td>Autor</td>
                                <td>Instituição</td>
                                <td>06-10-2019</td>
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
                            <th class="table-plus datatable-nosort">Termo</th>
                            <th>Autor</th>
                            <th>Instituição</th>
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