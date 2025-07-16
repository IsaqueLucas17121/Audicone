<?php
  if(isset($_REQUEST['a'])){
    $a = $_REQUEST['a'];
  }
  
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Audicone</title>

    <!-- JavaScript -->
    <script src="src/servicos.js" defer></script>

    <!-- Css -->
    <link rel="stylesheet" href="src/style.css">

    <!-- Icone da Barra -->
    <link rel="shortcut icon" href="img/ImagemSite.jpeg" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
      <?php if ($a == "acessoria"): ?>
        setTimeout(function() {
          document.getElementById("buttonserv2").click();
        }, 1200);
      <?php endif; ?>
    </script>
    <style>
      
      <?php
        if($a == "empresa"){
          echo '#empresa{
          animation: selecionado 3s forwards;
          animation-delay: 1s;}';
        }
        else if($a == "departamento"){
          echo '#departamento{
          animation: selecionado 3s forwards;
          animation-delay: 1s;}';
        }
        else if($a == "contabilidade"){
          echo '#contabilidade{
          animation: selecionado 3s forwards;
          animation-delay: 1s;}';
        }
        else if($a == "acessoria"){
          echo '#acessoria{
          animation: selecionado 3s forwards;
          animation-delay: 2s;}';
        }
        else if($a == "legalizacao"){
          echo '#legalizacao{
          animation: selecionado 3s forwards;
          animation-delay: 1s;}';
        }
        else{
          ;
        }
      ?>
    </style>
</head>
<body>
    <header>
        <div class="nav-img">
            <img src="img/ImagemSite.jpeg" alt="Imagem da Audicone Contadores">
            
            <div id="resultado"></div>
            
        </div>
        <div class="hamburger-menu">

        </div>
        <div class="nav-menu">
            <ul>
                <a href="index.php"><li>Início</li></a>
                <a href="servicos.php"><li>Serviços</li></a>
                <a href="sobre.php"><li>Sobre</li></a>
                <a href=""><li>Contato</li></a>
            </ul>
        </div>

    </header>
    <section>
      <div class="back-diretorio">
        <a href="index.php"><h2>Início</h2></a>
        <i class="bi bi-caret-right"></i>
        <a href="servicos.php"><h2>Serviços</h2></a>
      </div>
    </section>

    <section>
        <div class="back-info">
                <div class="box-servinfo">
                    <h1>Todos os nossos serviços a sua disposição</h1>
                    <h2>Nosso Serviços</h2>    
                </div>
                <div class="box-divisoria"></div>
                <div class="box-servinfo2">
                    <article>Você sabia que um contador é mais que alguém que faz impostos? 
                        Ele é o parceiro estratégico que ajuda você a economizar, crescer e tomar decisões certas.
                        <h1>Suporte, segurança e crescimento. Tudo começa com uma contabilidade bem feita.</h1>
                    </article>
                </div>
        </div>
    </section>

    <section>
  <div class="back-servicos">
    <button class="slide-buttonserv" id="buttonsrev1">
      <i class="bi bi-arrow-left"></i>
    </button>

    <div class="slider-container" id="sliderContainer">
      <div class="slider-track" id="sliderTrack">
        <!-- Box 1 -->
        <div class="box-servicos" id="empresa">
          <div class="box-descriserv">
            <i class="bi bi-building-add"></i>
            <h2>Abertura de Empresa</h2>
          </div>
          <article>
            Transforme sua ideia em realidade com quem entende do assunto.
            Cuidamos de toda a parte burocrática: CNPJ, alvarás, enquadramento tributário e muito mais.
            Fale com um contador agora e dê o primeiro passo rumo ao sucesso.
          </article>
          <span onclick="enviarWhatsApp('Olá, gostaria de abrir uma nova empresa!')" >Solicite um Orçamento</span>
        </div>

        <!-- Box 2 -->
        <div class="box-servicos" id="departamento">
          <div class="box-descriserv">
            <i class="bi bi-bar-chart-line"></i>
            <h2>Departamento Pessoal</h2>
          </div> 
          <article>
            Tenha apoio estratégico e evite erros fiscais. Nossa equipe acompanha de perto suas obrigações tributárias.
          </article>
          <span onclick="enviarWhatsApp('Olá, gostaria de solicitar orçamento para departamento pessoal!')">Solicite um Orçamento</span>
        </div>

        <!-- Box 3 -->
        <div class="box-servicos" id="contabilidade">
          <div class="box-descriserv">
            <i class="bi bi-graph-up"></i>
            <h2>Contabilidade Geral</h2>
          </div> 
          <article>
            Controle total do seu negócio com relatórios precisos e suporte constante. Ideal para empresas que querem crescer com segurança.
          </article>
          <span onclick="enviarWhatsApp('Olá, gostaria de fazer um orçamento geral!')" >Solicite um Orçamento</span>
        </div>
        <!-- Box 4 -->
        <div class="box-servicos" id="legalizacao">
          <div class="box-descriserv">
            <i class="bi bi-check-lg"></i>
            <h2>Legalização Societária</h2>
          </div> 
          <article>
            A legalização societária garante que sua empresa esteja em conformidade com as leis desde o início.
            Inclui contratos sociais, registros na Junta Comercial, CNPJ, alvarás e muito mais.
            Evite problemas futuros e comece do jeito certo.
          </article>
          <span onclick="enviarWhatsApp('Olá, gostaria de solicitar uma legalização societária!')">Solicite um Orçamento</span>
        </div>
        <!-- Box 5 -->
        <div class="box-servicos" id="acessoria">
          <div class="box-descriserv">
            <i class="bi bi-clipboard2-data"></i>
            <h2>Acessoria Tributária</h2>
          </div> 
          <article>
            Com a assessoria tributária certa, sua empresa economiza nos impostos e evita multas e riscos fiscais.
            Analisamos seu regime tributário, orientamos sobre obrigações legais e garantimos o cumprimento das normas.
          </article>
          <span onclick="enviarWhatsApp('Olá, gostaria de solicitar orçamento para acessoria tributária!')">Solicite um Orçamento</span>
        </div>
      </div>
    </div>

    <button  class="slide-buttonserv" id="buttonserv2">
      <i class="bi bi-arrow-right"></i>
    </button>
  </div>
</section>

<section>
  <div class="back-from">
    <div class="form-text">      
      <h2>GOSTOU?</h2>
      <h1>ENTRE EM CONTATO CONOSCO</h1>
      <article>
        Após o registro, em menos de 24H um de nossos contadores irá retornar por Email ou via Whatsapp.
      </article>
    </div>
    <div class="form-input">
      <form id="formWhatsApp">
        <label for="nome">Digite seu nome</label>
        <input type="text" minlength="3" maxlength="15" name="nome" id="nome" placeholder="Digite seu nome" required>
        <label for="funcao">Selecione seu segmento</label>
        <select name="funcao" name="funcao" id="funcao" required>
          <option value="Contabilidade Completa">Contabilidade Completa</option>
          <option value="Legalização">Legalização</option>
          <option value="Abertura de Empresa">Abertura de Empresa</option>
          <option value="Gestão Fiscal e Tributária">Gestão Fiscal e Tributária</option>
          <option value="Departamento Pessoal">Departamento Pessoal</option>
        </select>
        <label for="email">Digite seu Email</label>
        <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required>
        <label for="telefone">Digite seu Telefone</label>
        <input type="text" name="telefone" id="telefone" maxlength="15" placeholder="(21)12345-6789" required>
        <input id="buttonSubmit" type="submit" value="Enviar Email">
      </form>
    </div>
  </div>
</section>



    <footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>Audicone Contadores</h3>
      <p>Especialistas em soluções contábeis para sua empresa.</p>
    </div>

    <div class="footer-section">
      <h4>Serviços</h4>
      <ul>
        <li><a href="<?php echo 'servicos.php?a=contabilidade'?>">Contabilidade Geral</a></li>
        <li><a href="<?php echo 'servicos.php?a=legalizacao'?>">Legalização Societária</a></li>
        <li><a href="<?php echo 'servicos.php?a=empresa'?>">Abertura de Empresa</a></li>
        <li><a href="<?php echo 'servicos.php?a=departamento'?>">Departamento Pessoal</a></li>
        <li><a href="<?php echo 'servicos.php?a=acessoria'?>">Acessoria Tributária</a></li>
      </ul>
    </div>

    <div class="footer-section" id="contatos">
      <h4>Contato</h4>
      <p><a target="_blank" href="https://api.whatsapp.com/send?phone=5521983832152"><i class="bi bi-whatsapp" id="whats"></i></a></p>
      <p> <a target="_blank" href="https://www.instagram.com/audi.cone_?utm_source=qr&igsh=YXUyanBibDZhNzBw"><i class="bi bi-instagram" id="insta"></i></a></p>
      <p style="display:none;"><i class="bi bi-facebook" id="face"></i></p>
    </div>
    <div class="footer-section" id="voltar">      
        <h4>Voltar ao Topo</h4>
        <p><a href="#"><i class="bi bi-arrow-up-circle"></i></a></p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Audicone Contadores. Todos os direitos reservados.</p>
  </div>
</footer>


          <!-- VLibras Widget -->
  <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
      </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <!-- Fim VLibras Widget -->
    
</body>
</html>

