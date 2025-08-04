<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços Tecnico Audicone Ltda.</title>
    <meta name="description" content="Aplicamos metodologias modernas para ajudar nossos clientes a alcançarem seus objetivos com segurança, parceria e qualidade nos serviços contábeis.">


    <!-- JavaScript -->
    <script src="src/script.js" defer></script>

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
        <div class="slide-back">

            <button class="slide-button" id="button1">
                <i class="bi bi-arrow-left"></i>
            </button>

            <div id="slide-allimg" class="slide-img">
                <img id="slide1" src="img/slide1.jpg" alt="Foto do Slide 1">
                <img src="img/slide2.jpg" alt="Foto do Slide 2">
                <img src="img/slide3.jpg" alt="Foto do Slide 3">
            </div>
            <div class="slide-text">
                <article class="slide-box show" id="slide-text0">Planejamento financeiro exige atenção aos detalhes: impostos, investimentos e metas bem definidas. Organização é a chave do sucesso contábil.</article>
                <article class="slide-box" id="slide-text1">Confiança e parceria para impulsionar seus resultados. Conte com a nossa contabilidade para decisões seguras e sólidas.</article>
                <article class="slide-box" id="slide-text2">Acompanhamos nossos clientes no crescimento e desenvolvimento de sua empresa.</article>
            </div>

            <button class="slide-button" id="button2">
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
    </section>

    <section>
        <div class="box-back">
            <h1>Serviços da Audicone Contadores</h1>
            <div class="section-box">
                <div class="box-cards" id="box-card1">
                    <h2>CONTABILIDADE</h2>
                    <article>
                        Contabilidade através de plataforma digital. Levantamento e apuração de balancetes mensais, trimestrtais, semestrais ou anuais. 
                        Demonstração do Resultado do Exercício (DRE). Relatórios gerenciais dentro da necessidade do cliente.
                    </article>
                </div>
                <div class="box-cards" id="box-card2">
                    <h2>LEGALIZAÇÃO SOCIETÁRIA</h2>
                    <article>
                        Preparação de contratos sociais, distratos. Registro em Junta Comercial, RCPJ, Sefaz-Estado, Prefeitura e Receita Federal.
                        Licenças e registros: Corpo de Bombeiros, Vigilância Sanitária, CNES-Saude, Conselhos de Classe e Alvará.
                    </article>
                </div>
            </div>
            <div class="section-box">
                <div class="box-cards" id="box-card3">
                <h2>DEPARTAMENTO PESSOAL</h2>
                <article>
                    Especializado na gestão dos colaboradores dos nossos clientes, desde a contratação até a demissão. 
                    Gerenciando as atividades especificas do quadro de pessoal (funcionários e autônomos). 
                    Executamos os processos de folhas de pagamento, 13º salário, férias, com a emissão das respectivas guias de encargos sociais (Inss, Fgts, Irrf etc). 
                    Preparamos e cumprimos a agenda fiscal trabalhista entre a empresa e o Governo (E-Social, gfip, caged, dirf, rais).
                </article>
                </div>
                <div class="box-cards" id="box-card4">
                    <h2>ASSESSORIA TRIBUTÁRIA</h2>
                    <article>
                        Planejamento fiscal visando o enquadramento da empresa em regime tributário mais vantajoso e que proporcione maior economia de impostos. 
                        Apuração mensal e trimestral de impostos municipaL, estaduaL e federal. 
                        Preparação e entrega das obrigações tributárias como DCTF, Rais, Gfip, E-social, Sped Contribuições, Sped Contabil Digital, Sped Fiscal, Sped Reinf. Parcelamentos de dividas de FGTS, INSS, ISS e Imposto Federais.
                        Assessoria tributária a pessoas físicas, declaração de imposto renda.
                    </article>
                </div>
            </div>
            
            
        </div>
        
    </section>
    <section>
        <div class="box-back2">
            <h2>Ja decidiu?</h2><h1>Podemos começar?</h1>
            <button onclick="enviarWhatsApp('Olá, gostaria de abrir uma nova empresa!')" id="loja">Abrir empresa</button>
            <a href="https://api.whatsapp.com/send?phone=5521983832152" target="_blank"><button id="especial">Fale com um especialista</button></a>
        </div>   
    </section>
    <section>
        <div class="back-mapa">
            <div class="box-mapa">
                <h1>Nos atendemos em todo <span>Rio de Janeiro</span></h1>
                <article>Com a Audicone Contadores, basta nos contatar e aproveitar todos os beneficios de ser um cliente da <span>Audicone</span></article>
                <img src="img/Brasil.png" alt="Mapa do Brasil">
            </div>
            <div class="box-mapa2">
                <h1>Você não precisa sair de casa</h1>
                <article>Nos da Audicone cuidamos de tudo, basta ligar e descrever seu problema que faremos o resto</article>
                <span>Atendimento de Segunda a Sexta (9:00 até 17:00)</span>
                <a href="https://api.whatsapp.com/send?phone=5521983832152" target="_blank"><button>Ligue Agora</button></a>
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