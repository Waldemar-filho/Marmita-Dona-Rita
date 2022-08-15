<?php
		require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#cardapio" title="Cardapio" alt="cardapio">Cardápio</a></li>
				<li><a href="#" title="quemsomos" alt="quemsomos">Quem Somos</a></li>
				<li><a href="#contato" title="contato" alt="contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você encontra alimento de qualidade produzido com os melhores ingredientes.</h1>
                    </header>
                    <p> Confira nossas opções</p>
                    <p><a href="#cardapio" class="btn">Cardápio</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_pratos">
			<header class="main_pratos_header">
				<h1><a name="cardapio">Cardápio</h1></a>
				<p>Veja todas opções de pratos que temos!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($pratos) && !empty($pratos)){
				foreach($pratos as $key => $value){
			?>
			<article>
				<!-- passar o titulo do prato para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem pratos no momento!!!";
		}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
				<h1><a name="contato">Quer fazer um pedido?</h1>
                    <p>Informe seu nome e telefone no campo ao lado que entraremos em contato!</p>
					<p>Ou ligue para (99)99999-9999</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="telefone" name = "telefone" placeholder="Seu telefone">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
		<p>
            <a href="#cardapio">Cardápio</a>
			<a href="#quemsomos">Quem Somos</a>
			<a href="#contato">Contato</a>
	    </p>
		<br>
           <p>
			Desenvolvido por Rafael Alves Florindo / Waldemar Augusto da Silva Filho R.A 21193692-5
		   </p>    
    </footer>
</body>
</html>