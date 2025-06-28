<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Concessionária</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  
  <body>
    <nav>
      <div class="container nav-container">
        <a href="" class="logo"><img src="logo.png" alt="" /></a>
        <ul class="nav-link">
          <li><a href="index.html"></a>Inicio</li>
          <li><a href="#modelos" style="--i: 2">Modelos</a></li>
          <li><a href="carros.php" style="--i: 3">Carros</a></li>
          <li><a href="#Contatos" style="--i: 5">Contatos</a></li>
        </ul>
        <div class="btn-all">
          <a href="logout.php"><div class="btn-cadastro"><button>Desconectar</button></div></a>
        </div>
      </div>
    </nav>

    <header>
      <div class="container header-container">
        <div class="header-left">
          <h1>SOCARS</h1>
          <h3>Dirija seu sonho</h3>
          <p>
            Descubra os melhores modelos zero km com conforto, tecnologia e design. <br> 
            Na SOCARS Automotivo, você compara categorias, explora detalhes e escolhe <br>
             com confiança. Seu próximo carro está aqui — com praticidade e transparência.
          </p>
          <a href="carros.php" class="btn">Ver Mais</a>
        </div>
        <div class="header-right">
          <div class="sq-box">
            <a href="#"><img src="imagensHome/imagebannerhome.png" alt="" /></a>
        
          </div>
        </div>
      </div>
      <div class="sq-box2"></div>
    </header>
    <div class="text" id="Modelos">
      <h1>Categorias</h1>
    </div>
    <div class="container">
      <div class="cards">
        <div class="card1">
          <a href="modelo_SUV.php"><img src="imagensHome/Card1SUV.png" alt="" /></a>
          
          <h1>SUV</h1>
        </div>
        <div class="card2">
          <a href="modelo_Sedan.php"> <img src="imagensHome/Card2Sedan.png" alt="" /></a>
          <h1>Sedan</h1>
        </div>
        <div class="card3">
          <a href="modelo_Hatch.php"> <img src="imagensHome/Card3Hatch.png" alt="" /></a>
          <h1>Hatch</h1>
        </div>
      </div>
    </div>
    <div class="banner2"></div>
  </body>
  <div class="texthistoria">
      <h1>Quem somos?</h1>
    </div>
    <div class="cont">
      <div class="ban-left">
       
        <p>
         Somos a SOCARS Automotivo, uma plataforma moderna e confiável para <br>
          quem busca carros novos com qualidade e procedência garantida. <br>
          Nosso propósito é tornar a sua busca pelo carro ideal mais simples, <br>
           transparente e segura, reunindo em um só lugar todas as informações <br>
           que você precisa para decidir com confiança. <br> <br>
           Oferecemos uma navegação intuitiva e prática, para que você possa <br>
           explorar nossos veículos com riqueza de detalhes, comparar modelos <br>
            e categorias, e conhecer o que torna cada carro uma escolha única. <br>
            Nosso compromisso é garantir excelência no atendimento, credibilidade <br>
           nas informações e segurança em todo o processo de compra, seja <br>
           presencialmente ou com o suporte direto da nossa equipe. <br>
           Na SOCARS Automotivo, seu próximo carro começa aqui.
        </p>
      </div>
      <div class="ban-right">
        <img src="imagensHome/banner2.png" alt="" />
      </div>
    </div>
   <footer class="footer" id="Contatos">
  <div class="container footer-container">
    <div class="footer-section">
      <h3>SOCARS Automotivo</h3>
      <p>Rua das Bocadas, 155 - Centro<br>São Paulo - SP, 01000-000</p>
      <p>Telefone: (11) 98765-4321<br>Email: contato@socars.com.br</p>
    </div>

    <div class="footer-section">
      <h3>Redes Sociais</h3>
      <div class="social-icons">
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-section">
      <h3>Horário de Funcionamento</h3>
      <p>Seg a Sex: 8h às 18h<br>Sáb: 8h às 13h<br>Dom: Fechado</p>
    </div>
  </div>
</footer>

    </div>
  </body>
</html>
