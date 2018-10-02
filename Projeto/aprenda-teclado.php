<!DOCTYPE html>
<html>
<lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Tudo Sobre Google Glass</title>
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
<link rel="stylesheet" href="_css/aprenda.css">
<link rel="stylesheet" href="_css/teclado.css">
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body >

<div id="interface">
<header id="cabecalho">
<hgroup>
<h1>Teclado</h1>

</hgroup>

</header>

<section id="corpo-full">
<article id="noticia-principal">
<header id="cabecalho-artigo">
<hgroup>
<h3>Home > Aprenda > teclado</h3></br>

	

<h3>Formando acordes maiores</h3>
<p>Uma vez conhecendo as escalas é possível formar qualquer tipo de acorde, baseando-se em suas regras.
Um acorde maior é formado pelas 1ª, 3ª e 5ª notas da escala, sem nenhuma alteração.
Vamos pegar como exemplo o acorde de C (dó maior):
Sabemos que esta escala é formada porDó, Ré, Mi, Fá, Sol, Lá, Si, Dó
Vimos acima que um acorde é formado pelas 1ª, 3ª e 5ª notas do acorde, que, nesse caso:</p></br>

<p>DóMi eSol</p></br>

<p>Temos aí o acorde de Dó maior, representado pelo símbolo C.
Veja logo abaixo um exemplo.
Este mesmo procedimento é usado para os demais acordes.
Escala de Dó com acorde</p>

<div id="tecla"></div>

<?php require('components/rodape.php'); ?>
</div>
</body>
<style>

/* 2a. Etapa */

@charset "UTF-8";

/* HTML5 display-role reset for older browsers */

body {
	line-height: 1;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* Fim CSS Reset */
/* =GERAL */
*, html, body {
	margin:0;
	padding:0;
	}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.cf:before,
.cf:after {content: " ";display: table;}
.cf:after {clear: both;}
.cf {*zoom: 1;}
body {
	margin-left:55px;
	font:  62.5%/1.2 Arial, sans-serif;
	}
/* Fim 2a. Etapa */
/* 3a. Etapa */
#lateral {
	padding:0 50px 0 0;
	-moz-transition: all 0.5s ease;
		-webkit-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
				transition: all 0.5s ease;
	font-size:1.2em;
	background:rgb(44,62,80);
	background-image: -moz-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
			background-image: -webkit-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
					background-image: -o-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
							background-image: -ms-linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
								background-image: linear-gradient( 135deg, rgb(3,8,12), rgb(16,57,79) );
	height:100%;
	overflow:hidden;
	width:370px; 
	position:fixed;
	top:0;
	left:-320px;
	}


#lateral:hover, #lateral:focus,  #lateral:active  {
	overflow-y:scroll;
	-moz-transform: translate(320px, 0);
		-webkit-transform: translate(320px, 0);
			-o-transform: translate(320px, 0);
				transform: translate(320px, 0);
	padding-right:0;
	}	
/* Fim 3a. Etapa */
/* 4a. Etapa */

#lateral h3 {
	display:inline-block;
	font-weight:bold;
	font-size:1.6em;
	font-style:normal;
	padding-bottom:0.2em;
	margin: 2em 0 2em 0.81em;
	color:rgb(255,255,255);
	border-bottom: 4px solid rgb(155,155,155);
	}
#menu {
	font-style:italic;
	position:relative;
	font-size:1.0em;
	margin:1em 0 1em -1em;
	padding:0;
	}
#menu li  {margin:0;padding:0;}
#menu li a,  #menu li a:link {
	font-size:1.2em;
	color:rgb(255,255,255);
	text-decoration: none;
	padding: 0.8em 0 0.8em 1em;
	display: block;
	-moz-transition: all 1.2s ease;
			-webkit-transition: all 1.2s ease;
				-o-transition: all 1.2s ease;
					transition: all 1.2s ease;
	}
#menu li a:hover {
	color:rgb(255,255,255);
	background-color:rgba(255,255,255,0.2);
	-moz-transition: all 0.5s ease;
			-webkit-transition: all 0.5s ease;
				-o-transition: all 0.5s ease;
					transition: all 0.5s ease;
	}
/* Fim 4a. Etapa */
/* 5a. Etapa */
@media (max-width: 500px) {
body {margin-left:0;background-size:100% 28em!important;}
#lateral {
	padding:0;
	-moz-transition: all 0.5s ease;
		-webkit-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
				transition: all 0.5s ease;
	font-size:1.2em;
	height:100%;
	overflow:auto;
	width:100%; 
	position:static;
	top:0;
	left:0;
	}
#lateral:before {
	z-index:1000;
	width:0;
	text-align:center;
	content: "";
	font-size:0;
	color:white;
	position:static;
	top:0;
	left:0;
	display:inline-block; 
	}
#lateral:hover, #lateral:focus {
	overflow:scroll;
	-moz-transform: none;
		-webkit-transform: none;
			-o-transform:none;
				transform:none;
	}
#menu li a {border-bottom:1px solid #ccc;}
#menu li:first-child a {border-top:1px solid #ccc;}	
}
/* Fim 5a. Etapa */



body {
	font-size: 20px;
}
div#menu{
margin-left:6px;

}

#menu ul{
	padding: 0; 
}

#menu ul li:hover > ul{
	display:block;
}

#menu ul ul{
	display: none;
}

</style>

<?php require('components/menu.php'); ?>

</body>
</html>