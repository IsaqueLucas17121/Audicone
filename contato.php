<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - Audicone</title>

    <!-- JavaScript -->
    <script src="src/servicos.js" defer></script>

    <!-- Css -->
    <link rel="stylesheet" href="src/style.css">

    <!-- Icone da Barra -->
    <link rel="shortcut icon" href="img/ImagemSite.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <a class="nav-img" href="index.php"><div class="nav-img">
            <img src="img/ImagemSite.png" alt="Imagem da Audicone Contadores">
            
            <div id="resultado"></div>
            
        </div></a>
        <!-- Botão do menu mobile -->
        <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
        <div id="nav-menu" class="nav-menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </div>

    </header>

    <section>
      <div class="back-diretorio">
        <a href="index.php"><h2>Início</h2></a>
        <i class="bi bi-caret-right"></i>
        <a href="contato.php"><h2>Contato</h2></a>
      </div>
    </section>

    <section>
        <div class='back-pdf'>
            <img src="img\Cartão Digital - Audiocne Contadores.pdf.png" alt="imagem Cartão Audicone">
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

    <div class="footer-section">
      <h4>Link Úteis</h4>
      <ul>
        <li><a target="_blank" href="https://www.gov.br/receitafederal/pt-br">Receita Federal</a></li>
        <li><a target="_blank" href="https://solucoes.receita.fazenda.gov.br/Servicos/cnpjreva/Cnpjreva_Solicitacao.asp?cnpj=">Consuta CNPJ</a></li>
        <li><a target="_blank" href="https://www.gov.br/receitafederal/pt-br/assuntos/agenda-tributaria/2025/julho">Agenda Tributária</a></li>
        <li><a target="_blank" href="https://cfc.org.br">CFC</a></li>
        <li><a target="_blank" href="https://www.crc.org.br/index.asp">CRC-RJ</a></li>      
        <li><a target="_blank" href="https://www.planalto.gov.br/ccivil_03/decreto-lei/del5452.htm">CLT</a></li>     
        <li><a target="_blank" href="https://www.rcpjrj.com.br">RCPJ-RJ</a></li>
        <li><a target="_blank" href="https://www.jucerja.rj.gov.br">Junta Comercial-RJ</a></li>
      </ul>
    </div>

    <div class="footer-section" id="contatos">
      <h4>Contato</h4>
      <p><a target="_blank" href="https://api.whatsapp.com/send?phone=5521983832152"><i class="bi bi-whatsapp" id="whats"></i></a></p>
      <p><a target="_blank" href="https://www.instagram.com/audi.cone_?utm_source=qr&igsh=YXUyanBibDZhNzBw"><i class="bi bi-instagram" id="insta"></i></a></p>
      <p style="display:none;"><a href=""><i class="bi bi-facebook" id="face"></i></a></p>
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

