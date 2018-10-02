<!DOCTYPE html>
<html>
<lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Tudo Sobre Google Glass</title>
<link rel="stylesheet"  href="_css/estilo.css"/>
<link rel="stylesheet" href="_css/form.css"/> 

</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<script>
    function calc_total () {
        var qtd = parseInt(document.getElementById('cqtd').value);
        var tot = qtd * 1500;
        document.getElementById('ctot').value = tot;
    }
</script>
<body >

<div id="interface">
<header id="cabecalho">
<hgroup>
<h1>Google Glass</h1>
<h2>A revolução do Google está chegando</h2>
</hgroup>

</header>

<section id="corpo-full">
<article id="noticia-principal">
<header id="cabecalho-artigo">
<hgroup>
<h3>Fale Conosco > Contato</h3>
<h1>Formulário de Contato</h1>
<h2>por Gustavo Guanabara</h2>
<h3 class="direita">Atualizado em 01/Maio/2013</h3>
</hgroup>
</header>

<form method="post"id="fcontato" action="mailto:Gabrielgimenes6@gmail.com" oninput="calc_total();">

<fieldset id="usuario">
<legend>Identificação do Usuário</legend>
    <p><label for="cnome">Nome:</label><INPUT type="text" name="tnome" id="cnome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
    <p><label for="csenha">Senha:</label><input type="password" name="tsenha" id="csenha" size="8" maxlength="8" placeholder="8 Dígitos"</p>
    <p><label for="cmail">E-mail:</label><INPUT type="email" name="tmail" id="cmail" size="20" maxlength="40"/></p>
    <fieldset id="sexo"><legend>Sexo:</legend>
     <input type="radio" name="tsexo" id="cmasc"/><label for="cmasc">Masculino</label><br/>
     <input type="radio" name="tsexo" id="cfem"/><label for="cfem">Feminino</label></fieldset>
    <p><label>Data de Nascimento:</label>
	<input type="date" name="tnasc" id="cnasc"></p>
</fieldset>

<fieldset id="endereco">
<legend>Endereço do Usuário</legend>
    <p><label for="crua">Logradouro:</label>
	<input type="text" name="trua" id="crua" size="13" maxlength="80" placeholder="Rua, Av, Trav,..."/></p>
    <p><label for="cnum">Número:</label>
	<input type="number" name="tnum" id="cnum" s min="0" max="99999"/></p>
    <p><label for="cest">Estado:</label>
	<select name="test" id="cest">
	<optgroup label="Região Sudest">
	<option value="RJ">Rio de Janeiro</option>
	<option value="SP"selected>São Paulo</option>
	<option value="MG">Minas Gerais</option>
	</optgroup>
	<optgroup label="Redião Sul">
	<option value="Pr">Paraná</option>
	<option value="SC">Santa Catarina</option>
	<option value="RS">Rio Grande do Sul</option>
	</optgroup>
	
	</select></P>
	    <p><label for="ccid">Cidade:</label>
		<input type="text" name="tcid" id="ccid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"</p>
		<datalist id="cidades">
		<option value="Rio de Janeiro"></option>
		<option value="Nova Iguaçu"></option>
		<option value="Niterói"></option>
		<option value="Belford Roxo"></option>
		</datalist>
</fieldset>
	<fieldset id="mensagem">
	<legend>Mensagem do Usuário</legend>
		<p><label for="curg">Grau de Urgência:</label>
		Mín<input type="range" name="turg" id="curg" min="0" max="10">Máx</p>
		<p><label for="cmmsg">Mensagem:</label>
		<textarea name="tmsg" id="cmsg" cols="45" rows="5" placeholder="Deixe Aqui sua Mensagem"></textarea></p>
	</fieldset>
	
<fieldset id="pedido"><legend >Quero um Google Glass</legend>
    <p><input type="checkbox" name="tped" id="cped" checked/>
	<label for="cped">Gostaria de adquirir um Google Glass quando disponível</label></p>
    <p><label for="ccor">Cor:</label>
	<input type="color" name="tcor" id="ccor" value="#0000FF"</p>
    <p><label for="cqtd">Quantidade:</label>
	<input type="number" name="tqtd" id="cqtd" min="0" max="5" value="0"</p>
    <p><label for="ctot">Preço Total: R$</label>
	<input type="text" name="ttot" id="ctot" placeholder="Total a Pagar" readonly </p>
</fieldset>


<input type="image" name="tenviar" src="_imagens/botao-enviar.png"/>
</form>

</article>
</section>

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