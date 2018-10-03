<!DOCTYPE html>
<html>
<lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Tudo Sobre Google Glass</title>
<link rel="stylesheet"  href="_css/estilo.css"/>
<link rel="stylesheet" href="_css/form.css"/> 
<link rel="stylesheet" href="_css/menu.css">

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
<?php require('components/menu.php'); ?>

</body>
</html>