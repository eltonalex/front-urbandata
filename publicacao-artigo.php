<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="src/plugins/switchery/dist/switchery.css">
    <!-- steps css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/build/jquery.steps.css">
    <!-- datatables css -->
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
								<h4>Publicação</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Publicação</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>  <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h4 class="text-blue">Artigo</h4>
						<p class="mb-30 font-14">Preencha os campos abaixo:</p>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
                            <!-- Step 1 -->
							<h5>Publicação</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >DOI:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >URL:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Título:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Identificador do Autor:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Data da defesa:</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Orientador:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >URL Lattes:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >E-mail:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Co-orientador:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >URL Lattes:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >E-mail:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button id="add_espacial" class="btn btn-info">+</button>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Instituição:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Sigla:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Departamento, Instituto, Faculdade:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >País :</label>
                                            <select class="custom-select form-control">
                                                <option value="">Select País</option>
                                                <option value="Idioma">País</option>
                                                <option value="Idioma">País</option>
                                                <option value="Idioma">País</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Idioma :</label>
                                            <select class="custom-select form-control">
                                                <option value="">Select Idioma</option>
                                                <option value="Idioma">Idioma</option>
                                                <option value="Idioma">Idioma</option>
                                                <option value="Idioma">Idioma</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Programa :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Programa 100</option>
                                                <option value="101">Programa 101</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Palavras-chaves:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Agência(s) de Fomento:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label >Resumo:</label>
                                            <textarea class="form-control"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label >Abstract:</label>
                                            <textarea class="form-control"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
							<!-- Step 2 -->
							<h5>Área Temática</h5>
							<section>
                                <!-- Export Datatable start -->
                                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                    <div class="clearfix mb-20">
                                        <div class="pull-left">
                                            <h5 class="text-blue">Opções de Áreas Temáticas</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table id="minhaTabela" class="stripe hover multiple-select-row nowrap">
                                            <thead>
                                            <tr>
                                                <th class="table-plus datatable-nosort">#</th>
                                                <th>Título</th>
                                                <th>Definição</th>
                                                <th>Detalhes</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="table-plus">1</td>
                                                <td>Título 1</td>
                                                <td>Definição 1</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">2</td>
                                                <td>Título 2</td>
                                                <td>Definição 2</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">3</td>
                                                <td>Título 3</td>
                                                <td>Definição 3</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">4</td>
                                                <td>Título 4</td>
                                                <td>Definição 4</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">5</td>
                                                <td>Título 5</td>
                                                <td>Definição 5</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">6</td>
                                                <td>Título 6</td>
                                                <td>Definição 6</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">7</td>
                                                <td>Título 7</td>
                                                <td>Definição 7</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">8</td>
                                                <td>Título 8</td>
                                                <td>Definição 8</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">9</td>
                                                <td>Título 9</td>
                                                <td>Definição 9</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>
                                            </tr>
                                            <tr>
                                                <td class="table-plus">10</td>
                                                <td>Título 10</td>
                                                <td>Definição 10</td>
                                                <td><a  href="" target="_blank" data-toggle="modal" data-target="#bd-example-modal-lg" class="btn btn-info">Mais Info</a></td>

                                            </tbody>
                                            <tfoot>

                                            <tr>
                                                <th class="table-plus datatable-nosort">#</th>
                                                <th>Título</th>
                                                <th>Definição</th>
                                                <th>Detalhes</th>
                                            </tr>

                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- Export Datatable End -->
                                <!-- Modal mais informações -->
                                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Detalhes</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar Mudanças</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim modal mais informações -->
							</section>
							<!-- Step 3 -->
							<h5>Referência Espacial</h5>
							<section>
                                <div class="row ref-espacial" >
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>País :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">País 100</option>
                                                <option value="101">País 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>UF :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">UF 100</option>
                                                <option value="101">UF 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Cidade :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Cidade 100</option>
                                                <option value="101">Cidade 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Logradouro :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Localidade :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Latitude :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label >Longitude :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button id="add_espacial" class="btn btn-info">+</button>
							</section>
							<!-- Step 4 -->
							<h5>Referência Temporal</h5>
							<section>
                                <div class="row ref-espacial" >
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Século :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Século 100</option>
                                                <option value="101">Século 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Década :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Década 100</option>
                                                <option value="101">Década 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Ano :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Ano 100</option>
                                                <option value="101">Ano 101</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mês :</label>
                                            <select class="custom-select form-control">
                                                <option value="100">Mês 100</option>
                                                <option value="101">Mês 101</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Eventos :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Períodos :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button id="add_temporal" class="btn btn-info">+</button>
							</section>

						</form>
                        <button id="visualizarDados" class="btn btn-info">Visualizar Dados</button>
					</div>
				</div>  <!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Formulário Públicação</h3>
								<div class="mb-30 text-center"><img src="vendor/images/success.png"></div>
								Sua publicação foi registrada com sucesso.
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- success Popup html End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
    <!-- switchery js -->
    <script src="src/plugins/switchery/dist/switchery.js"></script>
    <!-- steps js -->
    <script src="src/plugins/jquery-steps/build/jquery.steps.js"></script>
    <!-- datatable js -->
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
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
        $('.switch-btn').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        //datatable

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
            
            $('.data-table-export').DataTable({
                scrollCollapse: true,
                autoWidth: false,
                responsive: true,
                columnDefs: [{
                    targets: "datatable-nosort",
                    orderable: false,
                }],
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
                "language": {
                    "info": "_START_-_END_ of _TOTAL_ entries",
                    searchPlaceholder: "Pesquisar"
                },
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'pdf', 'print'
                ]
            });
            var table = $('.select-row').DataTable();
            $('.select-row tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
            var multipletable = $('.multiple-select-row').DataTable();
            $('.multiple-select-row tbody').on('click', 'tr', function () {
                $(this).toggleClass('selected');
            });
        });
    </script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> #title#',
			labels: {
				finish: "Gravar"
			},
			onStepChanged: function (event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function (event, currentIndex) {
				$('#success-modal').modal('show');
			}
		});
	</script>
    <script>
        /**
         Exemplo de como capturar os dados
         **/
        var tabela = document.getElementById("minhaTabela");
        var btnVisualizar = document.getElementById("visualizarDados");

        btnVisualizar.addEventListener("click", function(){
            var selecionados = tabela.getElementsByClassName("selected");
            //Verificar se eestá selecionado
            if(selecionados.length < 1){
                alert("Selecione pelo menos uma linha");
                return false;
            }

            var dados = "";

            for(var i = 0; i < selecionados.length; i++){
                var selecionado = selecionados[i];
                selecionado = selecionado.getElementsByTagName("td");
                dados += "ID: " + selecionado[0].innerHTML + " - Nome: " + selecionado[1].innerHTML + " - Idade: " + selecionado[2].innerHTML + "\n";
            }

            alert(dados);
        });
    </script>
</body>
</html>