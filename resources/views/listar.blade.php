<html>
	<head>
		<title>Listagem de Alunos</title>
	</head>
	<body>
		<h3>Listagem de Alunos</h3>
		<a href="/aluno/criar">Adicionar</a>
		<table>
			<tr>
				<th>Matrícula</th>
				<th>Nome</th>
				<th>Curso</th>
				<th>Ações</th>
			</tr>
			<?php foreach ($alunos as $aluno): ?>
			<tr>
				<td><?php echo $aluno->matricula; ?></td>
				<td><?php echo $aluno->nome; ?></td>
				<td><?php echo $aluno->curso_id; ?></td>
				<td>
                    <a href="/aluno/<?php echo $aluno->id; ?>/editar">Editar</a>
                    <a href="/aluno/<?php echo $aluno->id; ?>/remover" onclick="return confirm('Deseja remover aluno?');">Remover</a>
                </td>
			</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>