
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
	 		<div align="center"><h1>Cadastrar Equipamentos</h1></div>
		<div class="container">
			<form action="index.php/Equipamentos/novoEquipamento" method="get">

            <label class="NameInput" for="">ID</label>
            <input class="form-control inputSmall" type="text" name="id" value="" disabled="">

            <label for="selectRecurso">Recruso</label>
            <select class="form-control" id="selectRecurso" name="recurso" onchange="change()">
              <?php foreach ($recursos as $recurso) : ?>
                <option value="<?= $recurso['idRecurso'] ?>"><?= $recurso['nome'] ?></option>
              <?php endforeach ?>
            </select>

            <label for="">Laboratório</label>
            <select class="form-control" id="selectLab" name="laboratorio">
              <?php foreach ($labs as $lab) : ?>
                <option value="<?= $lab['idlaboratorio'] ?>"><?= $lab['nome'] ?></option>
              <?php endforeach ?>
            </select>

            <label class="NameInput" for="">Modelo</label>
            <input class="form-control" id="modeloInput" type="text" name="modelo" placeholder="Modelo">

            <label class="NameInput" for="">Especificação</label>
            <textarea class="form-control" id="especificacoesInput" name="especificacoes" cols="50" rows="5" placeholder="Especificação"></textarea>

            <button class="css_btn_class_equipamento" style="position:relative;float: left; margin-left: 350px; width: 200px" type="submit">Cadastrar</button>
		   </form>
		</div>
	</body>

	<script type="text/javascript">

	function change() {
		var selectBox = document.getElementById("selectRecurso");
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var recruso = document.getElementById("trRecurso");
		var descricao = document.getElementById("trDescricao");
    if(selected === '0'){
        recruso.style.display = "block";
				descricao.style.display = "block"
    }
    else{
        recruso.style.display = "none";
				descricao.style.display = "none";
    }
	}

	</script>


</html>
