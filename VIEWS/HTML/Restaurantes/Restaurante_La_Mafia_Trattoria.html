<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>La Mafia Trattoria</title>
  <link rel="stylesheet" href="../../CSS/Geral.css">
  <link rel="icon" type="image/png" href="https://i.ibb.co/vx2Dzj9v/image.png">
</head>
<body>

  <!-- Cabeçalho com menu, login e logo -->
  <header>
    <div class="wrapper">

      <!-- Top Header -->
      <div class="top-header">
        <div class="menu-icon">☰</div>
        <div class="user-header">
          <span>👤</span> Visitante
        </div>
      </div>
  
      <div id="menuContainer1"></div>

      <!-- Logo -->
      <div class="header">
        <div class="header-img">
          <a href="../Paginas_principais/Entrada.html">
          <img src="https://i.ibb.co/Q7T008b1/image.png" alt="Logo" />
          </a>
        </div>
      </div>
  </header>

  <main class="grid-container">
    <div class="pilastra-verde"></div>
    <div class="conteudo">
      <!-- Seção do destino principal -->
      <section class="destino">
        <h1>La Mafia Trattoria</h1>
        <img src="../IMAGENS/Banner_La Mafia Trattoria.png" alt="Restaurante Terral" />
        <div class="estrelas">★★★★</div>
      </section>
  
      <!-- Seção sobre o destino -->
      <section class="sobre">
        
        <h2>Informações Gerais</h2>
                <!-- Localização com ícone -->
<div class="info-localizacao">
    <p>📍R. Watslaf Nieradka, 195 - Centro, Foz do Iguaçu - PR</p>
    <p>📞Telefone:  +55 4598418-1194</p>
    <p>🕒Horário de funcionamento: Segunda a Sábado das 18:45 ás  23:00 horas.</p>
</div>
        <h2> Sobre</h2>
        <p> A La Mafia Trattoria, em Foz do Iguaçu, é um restaurante italiano aconchegante e sofisticado, que oferece pratos tradicionais da culinária italiana com um toque especial. O cardápio inclui massas frescas, risotos e deliciosas sobremesas, preparados com ingredientes de alta qualidade e sabor autêntico. Com um ambiente elegante e acolhedor, a La Mafia Trattoria é ideal para quem busca uma refeição deliciosa em um local agradável e com atendimento impecável.</p>  
      <!-- Galeria de imagens secundárias -->
      <section class="imagens-secundarias">
        <img src="../IMAGENS/Prato1-La Mafia Trattoria.png" alt="foto 1">
        <img src="../IMAGENS/Prato2-La Mafia Trattoria.png" alt="foto 2">
      </section>
  
      <!-- Comentários de visitantes -->
      <section class="comentarios">
        <h2>Comentários <span>(3.751 avaliações)</span></h2>
        <div class="comentario">
            <h3>Ana Vitória <span>★★★★★</span></h3>
            </p>A experiência na La Mafia Trattoria foi muito boa! Os pratos são saborosos, com massas frescas e ingredientes de alta qualidade. O ambiente é agradável e acolhedor, mas o serviço poderia ser um pouco mais ágil. No geral, uma excelente opção para quem quer saborear a culinária italiana em Foz do Iguaçu!</p>    
        </section>
  
      <!-- Seção de feedback -->
      <section class="feedback">
        <p>Gostou? Deixe sua avaliação!</p>
        <button>Enviar feedback</button>
      </section>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="footer">
    <div class="footer-top">
      <a href="https://www.bellaavventura.com.br/">
        <img src="https://i.ibb.co/j9vGknyy/image.png" alt="image" border="0">
      </a>
    </div>
    <div class="footer-bottom">
      <div class="footer-left">
        <a href="mailto:bella.avventura@gmail.com">📧 bella.avventura@gmail.com</a>
      </div>
      <div class="footer-center">© 2025 Bella Avventura</div>
      <div class="footer-right">
        <a href="../Paginas_principais/Termos_Condicoes.html">Termos e condições</a>
      </div>
    </div>
  </footer>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Verifica autenticação
      checkAuth();

      // Configura menu
      setupMenu();

      // Verifica mensagem de sucesso
      const urlParams = new URLSearchParams(window.location.search);
      const msg = urlParams.get('msg');

      if (msg === 'login') {
        showNotification('Login realizado com sucesso!', 'success');
      } else if (msg === 'cadastro') {
        showNotification('Cadastro realizado com sucesso!', 'success');
      }
    });

    function checkAuth() {
      const userData = JSON.parse(localStorage.getItem('currentUser'));

      if (userData) {
        // Atualiza header
        document.querySelector('.user-header').innerHTML = `
                <span>👤</span> ${userData.firstName}
            `;

        // Carrega menu logado
        loadMenu('Menu_Logado.html');
      } else {
        // Carrega menu não logado
        loadMenu('Menu_Nao_Logado.html');
      }
    }

    function loadMenu(menuFile) {
      fetch(menuFile)
        .then(res => res.text())
        .then(html => {
          document.getElementById('menuContainer').innerHTML = html;
          setupMenu();
        });
    }

    function setupMenu() {
      const menuIcon = document.querySelector('.menu-icon');
      const menu = document.querySelector('.menu-box');

      if (menu && menuIcon) {
        menuIcon.addEventListener('click', () => {
          menu.classList.toggle('hidden');
          menu.classList.toggle('visible');
        });
      }

      // Configura logout se existir
      const logoutBtn = document.getElementById('logout-link');
      if (logoutBtn) {
        logoutBtn.addEventListener('click', function (e) {
          e.preventDefault();
          localStorage.removeItem('currentUser');
          window.location.href = '../Paginas_principais/Entrada.html';
        });
      }
    }

    function showNotification(message, type) {
      const notif = document.createElement('div');
      notif.className = `notification ${type}`;
      notif.textContent = message;
      document.body.appendChild(notif);

      setTimeout(() => {
        notif.classList.add('show');
      }, 10);

      setTimeout(() => {
        notif.classList.remove('show');
        setTimeout(() => notif.remove(), 300);
      }, 3000);
    }
  </script>
</body>
</html>