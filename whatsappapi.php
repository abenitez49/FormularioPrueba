<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario Whatsapp</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<style>

		.image-icon-whatsapp{
			position: fixed;
			bottom: 20px;
			right: 20px;
			cursor: pointer;
			transition: all 0.2s;
		}

		.image-icon-whatsapp:hover{
			transform: scale(0.9);
		}

		.image-icon-whatsapp:active{
			transform: scale(0.8);
		}

		.formulariowtsp{
			width: 220px;
			height: 280px;
			background:orange;
			border-radius: 5px;
			position: absolute;
			bottom: 90px;
			right: 60px;
			box-shadow: 0 2px 20px 0 rgba(0,0,0,0.22);
			background:white;
			padding: 5px 10px;
			display: none;
		}

		.inputwts{
			width: 100%;
			box-sizing: border-box;
			padding: 5px;
			font-family: arial;
			font-size: 13px;
			border-radius: 5px;
			border:1px solid rgba(0,0,0,0.19);
			color: #666;


		}

		.inputwts:focus{
			outline: none;
		}

		.textareawts{
			width: 100%;
			min-width: 100%;
			box-sizing: border-box;
			height: 140px;
			max-height: 140px;
			min-height: 140px;
			font-family: arial;
			font-size: 13px;
			border-radius: 5px;
			padding: 5px;
			border:1px solid rgba(0,0,0,0.19);
			color: #666;


		}

		.textareawts:focus{
			outline: none;
		}

		.newmessagewts{
			font-family: arial;
			display: block;
			text-align: center;
			width: 100%;
			box-sizing: border-box;
			line-height: 10px;
		}
		.btnwtsp{
			width: 100%;
			border: none;
			padding: 5px;
			background: #00a82d;
			border-radius: 5px;
			color: white;
			cursor: pointer;
		}

		label{
			font-family: arial;
			font-size: 14px;
			color: #333333;
		}

		.entrarysalir{
			display: block;
		}
		.closemodal{
			position: absolute;
			top: 0;
			right: 0;
			padding: 5px;
			background: #00a82d;
			width: 15px;
			height: 15px;
			border-radius: 100%;
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 10px;
			line-height: 15px;
			cursor: pointer;
		}


	</style>
</head>
<body>
  
	<div>
		<div>
			<form id="formulariowtsp" action="" class="formulariowtsp">
				<p class="newmessagewts">Sugerencias si lo desea</p> <span class="closemodal">x</span>
				<label for="">Nombre</label>
				<input id="inputname" class="inputwts" type="text" required="" placeholder="Nombre" autocomplete="off">
				<label for="">Mensaje</label>
				<textarea id="inputmensaje" name="" id="" cols="30" rows="10" class="textareawts" required=""></textarea>
				<button type="submit" id="sendbttn" class="btnwtsp">Enviar mensaje</button type="submit">
			</form>
		</div>
		<img id="icon-whatsapp" class="image-icon-whatsapp" src="img/whatsapp.webp" alt="" width="70">
	</div>

	<script>
		var IconWhatsapp = document.querySelector('#icon-whatsapp');
		var formulariowtsp = document.getElementById('formulariowtsp');
		var closemodal = document.querySelector('.closemodal');
		var sendbttn = document.querySelector('#sendbttn');

		
		IconWhatsapp.addEventListener('click' , function(){
			formulariowtsp.classList.toggle('entrarysalir')
		})

		closemodal.addEventListener('click' , function(){
			formulariowtsp.classList.remove('entrarysalir')
		})

		sendbttn.addEventListener('click' , EnviarMensaje)

		function EnviarMensaje(){


			let name = document.querySelector('#inputname').value;
			let mensaje = document.querySelector('#inputmensaje').value;
		
			let url = "https://api.whatsapp.com/send?phone=595973661406&text=Nombre: %0A" + name + "%0A%0AMensaje: %0A" + mensaje + "%0A";
			window.open(url);

		}

	</script>
</body>
</html>