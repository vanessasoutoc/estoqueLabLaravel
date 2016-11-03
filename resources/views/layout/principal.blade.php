<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">

		<title>Controle de estoque</title>
	</head>
	<body>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/produtos">
							Estoque Laravel
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/produtos">Listagem</a></li>
						<li><a href="/produtos/novo">Novo</a></li>
					</ul>
				</div>
			</nav>


			@yield('conteudo')


			<footer class="footer">
				<p>© Livro de Laravel da Casa do Código.</p>
			</footer>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>