<!DOCTYPE html>
<html>
<lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Aula de Bateria</title>
<stile>
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
<link rel="stylesheet" href="_css/aprenda.css">
</style>
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body >

<div id="interface">
<header id="cabecalho">
<hgroup>
<h1>Aprenda Bateria</h1>

</hgroup>

</header>

<section id="corpo-full">
<article id="noticia-principal">
<header id="cabecalho-artigo">
<hgroup>
<h3>Home > Aprenda > Bateria</h3>


    <h1>Introdução</h1>
    <p>E aí pessoal, beleza??!! A partir desta página, daremos início ao Curso Básico de Bateria, onde terei o imenso prazer em estar abordando assuntos históricos, teóricos, técnicos e práticos, partindo da iniciação, seguindo uma ordem progressiva de desenvolvimento, voltado a esse instrumento maravilhoso, contagiante e inigualável, ritmicamente falando, “a bateria”.
    Qualquer dúvida ou sugestão, por favor, e-mail no garoto! </p>

    <p>Nesta página vamos conhecer um pouco melhor o instrumento, sua história, suas peças, e sua principal ferramenta. Vamos la:</p>

    <h1>A BATERIA</h1>
    
    <p>É um instrumento de percussão, constituídos por várias peças (tambores e pratos) de timbres e tamanhos diferentes, tocados por uma só pessoa.
    A palavra "bateria" refere-se a um conjunto de instrumentos de percussão de uma orquestra (ou de uma escola de samba, por exemplo) tocados por várias pessoas. Com base nisso, foi atribuído o mesmo nome ao conjunto de instrumento tocado por uma só pessoa, a BATERIA.</p>

    <h1>HISTÓRIA</h1>
    <p>Inspirada nos tambores africanos, a bateria surgiu com a invenção do pedal de bumbo e do tripé de sustentação da caixa, pois com isso tornou-se possível agrupar várias peças em um único instrumento. Isso foi nos Estados Unidos, em meados de 1900. Naquela época, usava-se bumbo, caixa, ton-ton e prato. O chimbal só foi introduzido a bateria por volta de 1930.
    Naquela época, a bateria tinha pouca posição de destaque, o máximo que podia fazer era marcar o tempo! Essa concepção só foi mudada, graças a um baterista chamado Gene Krupa, que inovou a forma de se tocar bateria.</p>
 
    <h1>PEÇAS DA BATERIA</h1>
    <p>A bateria é um instrumento modular, podendo conter vários tambores e pratos, além de outros acessórios (agogô, carrilhão, etc). Recomenda-se ao iniciante, uma bateria somente com as peças básicas. Abaixo temos uma figura de uma bateria, com o respectivo nome de cada peça.</p>


    <p>A bateria é basicamente composta por pratos (ataque, chimbal e condução)e por tambores (caixa, ton 1, ton 2, surdo e bumbo).
    Existem ainda outros tipos de pratos e tambores, mas geralmente se tratam de acessórios.</p>


     <h1>AS BAQUETAS </h1>


    <p>São aqueles dois "pauzinhos" que utilizamos para tocar bateria. Elas são as principais ferramentas do baterista. Quando tocamos, as baquetas são como se fosse nossas próprias mãos, ou seja, ela será uma continuação dos braços.
    Existem vários tipos de baquetas, variando em seu tamanho, peso, espessura. Cada tipo geralmente é indicado a um determinado estilo musical. Mas os tipos de baquetas também podem ser escolhidos,levando em conta o gosto pessoal.
          
    Os dois tipos de baquetas mais utilizados são os modelos 5A e 5B.
    As baquetas modelo 5A são as mais utilizadas, não são nem pesadas nem leves. São muitos indicados para iniciantes, e a estilos musicais não muito pesado (pop, rock, country, samba, reggae, etc).
    Já o modelo 5B é um pouco mais pesado. São indicados para práticas de exercícios técnicos e a estilos de música um pouco mais pesada (hard-rock, heavy-metal, etc).
    As baquetas podem ter pontas de nylon ou ponta de madeira. As baquetas com ponta de nylon tem um som mais brilhante, agudo". Já a baquetas com ponto de madeira tem um som mais "macio, aveludado", principalmente quando tocamos nos pratos. A escolha é uma questão de gosto, leva-se em conta também, o fato das baquetas com ponta de nylon durarem mais, além de conservar o instrumento.

    A propósito, se você ainda não tem um par de baquetas, já vá providenciando um, mesmo que ainda não tenha bateria.</p>




</section>
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