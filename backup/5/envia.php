<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Fl&aacute;vio Vitoi</title>
		<link rel="stylesheet" type="text/css" href="style.css"/> 
	</head>
	

	<body link="black" vlink="black">
		<table align="center" border="0" width="1200">
		
			<tr><td>
				<div align="center">
					<img src="logo.jpg"/>
				</div>
			</td></tr>
				
			<tr><td> 
				<h2 class="menu">
					<div id="menu">
						<ul>
							<li><a href="index.html">In�cio</a>
							<li><a href="trabalhos.html">Trabalhos</a></li>
							<li><a href="projetos.html">Projetos Futuros</a></li>
							<li><a href="contato.html">Contato</a></li>
							<li><a href="curriculo.html">Curr�culo</a></li>
						</ul>
					</div>
				</h2>
			</td></tr>
				
			<tr><td>
				<?php
					$to = "gerais22@hotmail.com";
					$subject = "Mensagem do Site";
					$message = $_POST['mensagem'];
					$from = $_POST['email'];
					$name = $_POST['nome'];
					$headers = "From: ".$name." <".$from.">\n";
					$headers .= "Reply-To: ".$from;
					mail($to,$subject,$message,$headers);
					echo "<p>E-mail enviado. Aguarde a resposta na sua caixa de entrada.</p>";
				?>
			</td></tr>

			<tr><td>
				<hr size="4" noshade="noshade" color=#000000/>
				<div align="center"><img src="ass.jpg"></p>
			</td></tr>
			
		</table>
	</body>

</html>