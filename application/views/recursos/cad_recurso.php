
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= base_url("img/favicon.ico")?>" />
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>" />
		<link rel="stylesheet" type="text/css" href="<?= base_url("css/style.css")?>" media="all" />
    <title>Sistema de Reservas Mandacaru Lab</title>
	</head>
	<body>

		<div id="logo_mandacaru" align="center">
	 		<img src ="<?= base_url("img/lab_mandacaru.png")?>" width="200" height="200" >
	 	</div>
	 		<div align="center"><h1>Cadastrar Novo Recurso</h1></div>
		<div class="container">
			<form action="index.php/Recrusos/novoRecurso" method="post">

            <label class="NameInput" for="">ID</label>
            <input class="form-control inputSmall" type="text" name="id" value="" disabled="">

            <label for="selectRecurso">Nome Recruso</label>
            <input class="form-control" id="recursoInput" type="text" name="recursoName" value="">

            <label class="NameInput" for="">Descrição</label>
            <textarea class="form-control" id="descricaoInput" name="descricao" cols="50" rows="5" placeholder="Especificação"></textarea>

            <button class="css_btn_class_equipamento" style="position:relative;float: left; margin-left: 350px; width: 200px" type="submit">Cadastrar</button>
		   </form>
		</div>
	</body>
</html>
