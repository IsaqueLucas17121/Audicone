<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Audicone</title>

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
        <a href="sobre.php"><h2>Sobre</h2></a>
      </div>
    </section>

    <section>
        <div class="back-sobre">
          <div class="fill-sobre">
            <div class="sobre-text">
                <h1>Bem-Vindo à Audicone</h1>
                <span>Conte conosco para transformar sua gestão contábil em uma base sólida para o sucesso.</span>
                <article>
                    Na Audicone, acreditamos que a contabilidade vai muito além dos números. 
                    Nosso compromisso é ser um parceiro estratégico no crescimento do seu negócio, oferecendo soluções personalizadas, eficientes e em conformidade com a legislação.
                </article>
            </div>
          </div>     
        </div>
        <div class="back-sobre2">
          <div class="back-visao">
            <h1>Nossa Visão</h1>
            <article>
              Ser reconhecida como referência em contabilidade consultiva no Brasil, destacando-se pela inovação, confiança e qualidade no atendimento. 
              Queremos transformar a forma como empresas enxergam a contabilidade: não como obrigação, mas como oportunidade.
            </article>
          </div>
          <div class="back-missao">
            <h1>Nossa Missão</h1>
            <article>
              Oferecer serviços contábeis com excelência, ética e comprometimento, auxiliando empresas e empreendedores a alcançarem estabilidade financeira, segurança fiscal e crescimento sustentável. 
              Atuamos como parceiros estratégicos, simplificando processos e promovendo decisões assertivas.
            </article>
          </div>
        </div>
    </section>

    <section>
      <div class="back-sobre3">
        <h1>Porque escolher a Audicone como seu contador?</h1>
        <article>
          Escolher um contador é mais do que delegar tarefas fiscais — é confiar a gestão do seu negócio a quem entende e se importa com o seu crescimento. 
          Na Audicone, unimos experiência, tecnologia e atendimento personalizado para oferecer muito mais do que obrigações cumpridas: entregamos tranquilidade e resultados.
        </article>
        <article>
          Porque aqui, contabilidade é levada a sério — com agilidade, clareza e foco em soluções que realmente fazem diferença no seu dia a dia.
          Na Audicone, você não é apenas mais um cliente: você tem um parceiro ao seu lado, pronto para orientar, organizar e impulsionar seu negócio com segurança.
        </article>
        <span>
          Não somos apenas um escritório de contabilidade. Somos parceiros do seu sucesso.
        </span>
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
        <p><a href="https://api.whatsapp.com/send?phone=5521983832152"><i class="bi bi-whatsapp" id="whats"></i></a></p>
        <p><i class="bi bi-instagram" id="insta"></i></p>
        <p><i class="bi bi-facebook" id="face"></i></p>
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