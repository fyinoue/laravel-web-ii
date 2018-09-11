<html>
	<head>
		<title>Editar Aluno</title>
	</head>
	<body>
		<h3>Editar Aluno</h3>
		<form action="/aluno/salvar" method="POST">
			<?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo $aluno->id ?>" />
			<label>Matrícula</label>
			<input type="text" name="matricula" size="10" value="<?php echo $aluno->matricula ?>" />
			<label>Nome</label>
			<input type="text" name="nome" size="30" value="<?php echo $aluno->nome ?>" />
			<label>Curso:</label>
			<select name="curso_id">
				<option value="">Selecione um curso</option>
				<?php foreach ($cursos as $curso): ?>
				<option value="<?php echo $curso->id; ?>"><?php echo $curso->nome; ?></option>
				<?php endforeach; ?>
			</select>
			<input type="submit" value="Salvar" />
			<a href="/aluno/listar">Desistir</a>
		</form>
	</body>
</html>