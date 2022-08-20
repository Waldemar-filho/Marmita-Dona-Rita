<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.main_pratos img{
    width: 30%;
}

.main_pratos p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_pratos h3{
    font-size: 0.9em;
}

.main_pratos article{
    flex-basis: 100%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
	<header>
		<nav>
			<ul>
			    <li><a href="index.php" title="home" alt="Cardapio">Home</a></li>
				<li><a href="#cardapio" title="Cardápio" alt="Cardapio">Cardápio</a></li>
				<li><a href="#quemsomos" title="Quem somos" alt="Quem somos">Quem Somos</a></li>
				<li><a href="#contato" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>	
		<section class="main_pratos">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					$id = $_GET['id'];//validar o recebimento do id
					foreach($pratos as $key => $value){
						if($value['id'] == $id){
			?>
						<header class="main_pratos_header">
							<h1><?=$value['titulo'];?></h1>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<div class="p">
						</div>		
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
		<section>
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					$id = $_GET['id'];//validar o recebimento do id
					foreach($pratos as $key => $value){
						if($value['id'] == $id){
			?>
			        <div>
						<h2><?=$value['descricao'];?></h2>
						<h2><?=$value['preco'];?></h2>
					</div>
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_pratos">
			<header class="main_pratos_header">
				<h1>Outras opções do Cardápio</h1>
			</header>
			<?php
			$id = 0;
				foreach($pratos as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>



		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer fazer um pedido?</h1>
                    <p>Informe seu nome e telefone no campo ao lado e clique em ok que entraremos em contato!</p>
					<p>Ou ligue para (99)99999-9999</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="telefone" placeholder="Seu telefone">
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