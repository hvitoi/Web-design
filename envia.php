<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--Site produzido por Henrique Abrantes Vitoi - hvitoi@gmail.com-->
<html>
	<head>
		<title>Fl&aacute;vio Vitoi</title>
		<link rel="stylesheet" type="text/css" href="style.css"/> 
	</head>
	
	<body>
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
							<li><a href="index.html">In&iacute;cio</a>
							<li><a href="trabalhos.html">Trabalhos</a></li>
							<li><a href="projetos.html">Projetos Futuros</a></li>
							<li><a href="contato.html">Contato</a></li>
							<li><a href="curriculo.html">Curr&iacute;culo</a></li>
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
					echo "<p>E-mail enviado. Por favor, aguarde a resposta em sua caixa de entrada.</p>";
				?>
			</td></tr>

			<tr><td>
				<hr size="3" noshade="noshade" color=#000000 />
				<div align="center"><img src="assinatura.gif"></p>
			</td></tr>
			
		</table>
	</body>

</html>