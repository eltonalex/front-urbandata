<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
								<h4>Usuário</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Usuario</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Cadastro</h4>
							<p class="mb-30 font-14">Preencha os campos abaixo:</p>
						</div>
					</div>
					<form>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="text" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Re-Password</label>
                                    <input class="form-control" type="text" placeholder="Re-Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ORCID</label>
                                    <input class="form-control" type="text" placeholder="ORCID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lattes</label>
                                    <input class="form-control" type="text" placeholder="Lattes">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input class="form-control date-picker" placeholder="Selecione a Data" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>País de Nascimento</label>
                                    <select class="custom-select col-12">
                                        <option selected="">Escolha...</option>
                                        <option value="1">País 1</option>
                                        <option value="2">País 2</option>
                                        <option value="3">Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select col-12">
                                        <option selected="">Escolha...</option>
                                        <option value="1">Feminino</option>
                                        <option value="2">Masculino</option>
                                        <option value="3">Outro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Palavras-chaves</label>
                                    <input class="form-control" type="text" placeholder="Palavras-chaves da área de pesquisa">
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

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>