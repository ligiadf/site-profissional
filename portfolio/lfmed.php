<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Agenda para consultório médico | Portfólio | Lígia 'Lilly' Freitas</title>

			<style type="text/css">
				.nav-portfolio { border-bottom: 2px solid #59359A; }
			</style>

	</head>
	<body>

<?php include_once("../navegacao.php"); ?>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<?php include_once("../cabecalho.php"); ?>

		<div class="row mt-4 px-4">
			<h2>Portfólio - Agenda para consultório médico (LFMED)</h2>

			<p>Sistema para gerenciar agenda de clínica médica de pequeno porte.</p>

			<p>Projeto realizado como trabalho de conclusão do curso de Pós-graduação Lato Sensu (Especialização) em Desenvolvimento de Aplicações Web (PUC-MINAS), em 2018.</p>

			<p><strong class="text-purple-500">Desenvolvimento front-end e back-end </strong> com <strong class="text-purple-500">PHP 7</strong> (MVC/OO), <strong class="text-purple-500">MySQL</strong>, <strong class="text-purple-500">Bootstrap 4</strong>. Escrita da <strong class="text-purple-500">documentação</strong> contendo os requisitos, diagramas de casos de uso, arquitetura de software e da arquitetura da informação, testes realizados (funcionalidade, marcação HTML e acessibilidade).</p>

			<p><a href="https://github.com/ligiadf/lfmed" title="Veja o projeto no GitHub" class="btn btn-secondary btn-md"><i class="bi-github" role="img" aria-label="GitHub"></i> Código-fonte</a></p>

			<p><strong>Ferramentas utilizadas</strong>: Astah Community, Balsamiq, draw.io, Formulários e Documentos Google.

			<p><strong>Principais funcionalidades</strong>:</p>
			<ul class="ps-5">
				<li>Design responsivo;</li>
				<li>Cadastro de usuários do sistema (administrador, recepcionista, laboratório de exames), médicos e pacientes;</li>
				<li>Acesso mediante senha e controle de permissões conforme perfil do usuário do sistema;</li>
				<li>Busca de medicamentos e exames pré-cadastrados;</li>
				<li>Agendamento de consultas com verificação de conflito de horário ou indisponibilidade do médico;</li>
				<li>Agenda semanal e mensal;</li>
				<li>Lista de próximas consultas por data, médico, situação (marcada, realizada, ausente, cancelada);</li>
				<li>Lista de consultas por médico e por paciente;</li>
				<li>Criação dinâmica de documentos em PDF para o paciente com os dados do sistema: comprovante de comparecimento, atestado médico, requisição de exame e de medicamentos.</li>
			</ul>

			<p>Veja a seguir algumas <strong class="text-purple-500">telas do sistema</strong>.</p>
		</div>

		<div class="row mt-4 px-4">
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/lfreitas-portfolio-lfmed-1.png"><img src="imagens/lfreitas-portfolio-lfmed-1.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Tela de login</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/lfreitas-portfolio-lfmed-2.png"><img src="imagens/lfreitas-portfolio-lfmed-2.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Agenda semanal com as consultas marcadas</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/lfreitas-portfolio-lfmed-3.png"><img src="imagens/lfreitas-portfolio-lfmed-3.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Detalhes da consulta com opção para gerar comprovante de comparecimento, atestado, adicionar anotações e gerar requisição de exames e medicamentos.</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/lfreitas-portfolio-lfmed-4.png"><img src="imagens/lfreitas-portfolio-lfmed-4.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Comprovante de comparecimento em PDF gerado automaticamente com os dados da consulta.</figcaption>
				</figure>
			</div>
		</div>

		<a href="../portfolio" class="btn btn-outline-secondary"><i class="bi bi-arrow-left-short"></i> Portfólio</a>



<?php include_once("../rodape.php"); ?>