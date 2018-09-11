<html>
	<head>
		<title>Cadastrar Aluno</title>
	</head>
	<body>
		<h3>Cadastrar Aluno</h3>
		<form action="/aluno/salvar" method="POST">
			<?php echo csrf_field(); ?>
			<label>Matrícula</label>
			<input type="text" name="matricula" size="10" /><br />
			<label>Nome</label>
			<input type="text" name="nome" size="30" /><br />
			<label>Curso:</label>
			<select name="curso_id">
				<option value="">Selecione um curso</option>
				<?php foreach ($cursos as $curso): ?>
				<option value="<?php echo $curso->id; ?>"><?php echo $curso->nome; ?></option>
				<?php endforeach; ?>
			</select><br />
			<input type="submit" value="Salvar" />
			<a href="/aluno/listar">Desistir</a>
		</form>
	</body>
</html>