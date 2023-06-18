<!doctype html>
<html lang="pt-br">
	<head>
		<?php include_once("../meta-tags.php"); ?>

		<title>Agenda para consultório médico | Portfólio | Lígia 'Lilly' Freitas</title>

	</head>
	<body>

<div class="col-xxl-8 mx-auto p-3 ty-md-5">
	<main>

		<?php include_once("../cabecalho.php"); ?>

		<div class="row mt-4 px-4">
			<div class="col">
				<a href="../" class="btn btn-outline-secondary"><i class="bi bi-arrow-left-short"></i> Voltar</a>
			</div>
		</div>

		<div class="row mt-4 px-4">
			<h2>Portfólio - Agenda para consultório médico (LFMED)</h2>

			<p>Sistema para gerenciar agenda de clínica médica de pequeno porte.</p>

			<p>Projeto realizado como trabalho de conclusão do curso de Pós-graduação Lato Sensu (Especialização) em Desenvolvimento de Aplicações Web (PUC-MINAS), em 2018.</p>

			<p><strong class="text-red-500">Desenvolvimento front-end e back-end </strong> com <strong class="text-red-500">PHP 7</strong> (MVC/OO), <strong class="text-red-500">MySQL</strong>, <strong class="text-red-500">Bootstrap 4</strong>. Escrita da <strong class="text-red-500">documentação</strong> contendo os requisitos, diagramas de casos de uso, arquitetura de software e da arquitetura da informação, testes realizados (funcionalidade, marcação HTML e acessibilidade).</p>

			<p><a href="https://github.com/ligiadf/lfmed" title="Veja o projeto no GitHub" class="btn btn-secondary btn-md"><i class="bi-github" role="img" aria-label="GitHub"></i> Código-fonte</a></p>

			<p><strong>Ferramentas utilizadas</strong>: Astah Community, Balsamiq, draw.io, Formulários e Documentos Google.</p>

			<p><strong>Principais funcionalidades</strong>:</p>
			<ul class="ps-5">
				<li>design responsivo;</li>
				<li>cadastro de usuários do sistema (administrador, recepcionista, laboratório de exames), médicos e pacientes;</li>
				<li>acesso mediante senha e controle de permissões conforme perfil do usuário do sistema;</li>
				<li>busca de medicamentos e exames pré-cadastrados;</li>
				<li>agendamento de consultas com verificação de conflito de horário ou indisponibilidade do médico;</li>
				<li>agenda semanal e mensal;</li>
				<li>lista de próximas consultas por data, médico, situação (marcada, realizada, ausente, cancelada);</li>
				<li>lista de consultas por médico e por paciente;</li>
				<li>criação dinâmica de documentos em PDF para o paciente com os dados do sistema: comprovante de comparecimento, atestado médico, requisição de exame e de medicamentos.</li>
			</ul>

			<p>Veja a seguir algumas <strong class="text-red-500">telas do sistema</strong>.</p>
		</div>

		<div class="row mt-4 px-4">
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/ligiafreitas-portfolio-lfmed-1.png"><img src="imagens/ligiafreitas-portfolio-lfmed-1.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Tela de login</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/ligiafreitas-portfolio-lfmed-2.png"><img src="imagens/ligiafreitas-portfolio-lfmed-2.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Agenda semanal com as consultas marcadas</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/ligiafreitas-portfolio-lfmed-3.png"><img src="imagens/ligiafreitas-portfolio-lfmed-3.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Detalhes da consulta com opção para gerar comprovante de comparecimento, atestado, adicionar anotações e gerar requisição de exames e medicamentos.</figcaption>
				</figure>
			</div>
			<div class="col-md-6 my-2">
				<figure class="figure">
					<a href="imagens/ligiafreitas-portfolio-lfmed-4.png"><img src="imagens/ligiafreitas-portfolio-lfmed-4.png" class="figure-img img-fluid rounded border" alt="Captura de tela do sistema"></a>
					<figcaption class="figure-caption">Comprovante de comparecimento em PDF gerado automaticamente com os dados da consulta.</figcaption>
				</figure>
			</div>
		</div>

		<div class="row mt-4 px-4">
			<div class="col">
				<a href="../" class="btn btn-outline-secondary"><i class="bi bi-arrow-left-short"></i> Voltar</a>
			</div>
		</div>

<?php include_once("../rodape.php"); ?>