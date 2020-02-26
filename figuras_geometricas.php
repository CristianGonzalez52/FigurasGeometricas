<?php
	echo'<DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Figuras geometricas</title>
  </head>';
  
  
  if(!empty($_POST['radio'])){
	  $radio=$_POST['radio'];
  }else{
	    $radio=50;
  }
	//echo $radio;
  
    if(!empty($_POST['lado'])){
	  $lado=$_POST['lado'];
  }else{
	    $lado=50;
  }


    if(!empty($_POST['base'])){
	  $base=$_POST['base']+50;
  }else{
	    $base=150;
  }

     if(!empty($_POST['altura'])){
	  $altura=150-$_POST['altura'];
  }else{
	    $altura=50;
  }


	
 	
	$area=3.14316*$radio*$radio;
	$peric=2*(3.14316)*$radio;
	
	$areac=$lado*$lado;
	$percuadr=$lado*4;

	 $altura1=150-$altura;
	 $base1=$base-50;

	$areaTri=($base1*$altura1)/2;
	$hipoTri= pow((pow($base1,2)+pow($altura1,2)),0.5);
	$perTri=$base1+$hipoTri+$altura1;
	
	
	
  echo'
  
  
  <table border ="1" align="center">
  	<tr >
		<h1 align="center">Figuras Geometricas</h1>
	</tr>
  	<tr>
  		<td>
 			 <canvas id="Circulo" width="310" height="200"></canvas>
  		</td>
  		<td>
	  		<canvas id="Triangulo"  width="310" height="200"></canvas>
  		</td>
  		<td>
			 <canvas id="Cuadrado" width="310" height="200" "></canvas>
  		</td>
  	</tr>
  	<tr>
  	
  	</tr>
  </table>
  
  <script>
  	var Circulo = document.getElementById("Circulo");
		if (Circulo && Circulo.getContext) {
		var contexto = Circulo.getContext("2d");
			if (contexto) {
					var X = Circulo.width/2;
					var Y = Circulo.height/2;
					var r = '.$radio.'

					contexto.strokeStyle = "#006400";
					contexto.fillStyle = "#6ab150";
					contexto.lineWidth = 5;
					contexto.arc(X,Y,r,0,2*Math.PI);
					contexto.fill();
					contexto.stroke();
			}
		}


		var Cuadrado = document.getElementById("Cuadrado");
		if (Cuadrado && Cuadrado.getContext) {
		var contexto = Cuadrado.getContext("2d");
			if (contexto) {
					 contexto.fillRect(30,50,'.$lado.','.$lado.');
    				// contexto.clearRect(0,45,60,60);
    				//contexto.strokeRect(50,50,50,50);
					contexto.strokeStyle = "#006400";
					contexto.fillStyle = "#6ab150";
					contexto.lineWidth = 5;
					
					contexto.fill();
					contexto.stroke();
			}
		}


		
		
				var canvas = document.getElementById("Triangulo");
				if (canvas && canvas.getContext) {
					var ctx = canvas.getContext("2d");
					if (ctx) {
						
						ctx.fillStyle = "#abcdef";
						ctx.strokeStyle = "#1E90FF";
						ctx.lineWidth = 5;
						ctx.beginPath();
						ctx.moveTo(50,150);
						ctx.lineTo('.$base.','.$altura.');
						 ctx.lineTo('.$base.',150);
						
						ctx.closePath();
						ctx.fill();
						ctx.stroke();
					}
				}			
				
</script>
  <body  >
  
  <table border ="1" align="center">
  	<tr>
  		<td width="310">
	  		<form action="" method="POST">
				<p>Ingrese el Radio</p>
				<input type="number" id="radio" name="radio" min="1" required
		       minlength="4" maxlength="8" size="10">
			   
			   <input type="submit" value="Calcular">
			   
			   <table border ="0">
				<tr>
					<td> 
					<h5>EL AREA DEL CIRCULO ES: '.$area.' </h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5>EL PERIMETRO DEL CIRCULO ES: '.$peric.'</h5>
					</td>
				</tr>
			   </table>
			   
			</form> 
  		</td>
  		<td width="310">
	  		<form action="" method="POST">
			    <p>Ingrese la base del tiangulo Rectangulo</p>
			<input type="number" id="base" name="base"  min="1" required
		       minlength="4" maxlength="8" size="10">

			    <p>Ingrese la altura del tiangulo Rectangulo</p>
			<input type="number" id="altura" name="altura"  min="1" required
		       minlength="4" maxlength="8" size="10">
			   <input type="submit" value="Calcular">



			   <table border ="0">
			   <tr>
					<td> 
					<h5>EL AREA DEL TRIANGULO ES:'.$areaTri.' </h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5>EL PERIMETRO DEL TRIANGULO ES :'.$perTri.'</h5>
					</td>
				</tr>
			   </table>
			   
			</form> 
  		</td>
  		<td width="310">
			<form action="" method="POST">
			   <p>Ingrese el Tamaño del Cuadrado</p>
				<input type="number" id="lado" name="lado" required minlength="4"  min="1"  maxlength="8" size="10">
			   <input type="submit" value="Calcular">
			   
		   	  <table border ="0">
			   <tr>
					<td> 
					<h5>EL AREA DEL CUADRADO ES:'.$areac.' </h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5>EL PERIMETRO DEL CUADRADO ES :'.$percuadr.'</h5>
					</td>
				</tr>
			   </table>

			</form> 
  		</td>
  	</tr>
  	<tr>
  	
  	</tr>
  </table>
  
  </body>
</html>

';
?>
