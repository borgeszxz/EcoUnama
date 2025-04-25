function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("open");
}

function loadContent(section) {
  // Atualiza conteúdo principal
  const content = document.getElementById("content");
  const sections = {
    dashboard: `
            <div class="form-container">
            <!-- Imagem e Título -->
            <div class="header">
                <img src="../img/simbleRecicle.png" alt="Imagem" class="header-img">
                <span class="header-title">Deposite</span>
            </div>

            <!-- Formulário -->
            <form id="deposit-form" action="seu-endpoint-aqui" method="POST">
                <div class="form-group">
                    <label for="quantity">Quantidade de lixo entregue (kg):</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>

                <div class="form-group">
                    <label for="waste-type">Tipo de lixo entregue:</label>
                    <select id="waste-type" name="waste-type" required>
                        <option value="aluminio">Alumínio</option>
                        <option value="vidro">Vidro</option>
                        <option value="pano">Pano</option>
                        <option value="pet">PET</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Enviar</button>
                </div>
            </form>
        </div>

        <!-- Texto Motivador abaixo do formulário -->
        <div class="motivational-text">
            <h2>Transforme o Mundo com Seus Pequenos Gestos: <span class="verde">Doe Resíduos Recicláveis!</span></h2>
            <p>Cada pequena ação conta e tem o poder de gerar grandes mudanças! Quando você doa seus resíduos recicláveis, está fazendo mais do que simplesmente se desfazer de algo; você está contribuindo para um futuro mais sustentável e saudável para todos. Sua atitude pode ajudar a reduzir a poluição, economizar recursos naturais e promover a economia circular.</p>
            <p>Lembre-se de que cada lata, cada vidro, cada pedaço de papel ou plástico que você separa para reciclagem tem um impacto positivo no meio ambiente. Estamos todos juntos nessa jornada em busca de um planeta mais limpo e mais verde, e sua doação de resíduos recicláveis é um passo fundamental para alcançar esse objetivo.</p>
            <p>Não subestime o poder do seu gesto. Ao doar, você está ajudando a preservar a natureza, proteger os animais e garantir um legado mais sustentável para as gerações futuras. O futuro começa com as nossas escolhas hoje. Vamos transformar nosso mundo com responsabilidade, união e cuidado!</p>
            <p><span class="verde">Junte-se a nós nessa causa e seja parte da solução!</span></p>
        </div>
      `,
    profile: `
      <div class="profile-card">
        <div class="imagem-perfil">
          <img src="https://img.freepik.com/vetores-premium/icone-de-perfil-de-avatar-padrao-imagem-de-usuario-de-midia-social-icone-de-avatar-cinza-silhueta-de-perfil-em-branco-ilustracao-vetorial_561158-3383.jpg?semt=ais_hybrid&w=740" alt="Foto de Perfil">
        </div>
        <div class="profile-info">
          <h2>Kewyn Halex Almeida de Almeida</h2>
          <h5>Matricula: 04160733</h5>
          <p class="last-updated">Atualizado: 19/04/2025</p>
          <div class="profile-actions">
            <button class="btn edit-profile">Editar Perfil</button>
          </div>
        </div>
      </div>
    `
  };
  content.innerHTML = `<div class="content">${sections[section]}</div>`;

  // Muda item ativo
  document.querySelectorAll(".sidebar ul li").forEach(i => i.classList.remove("active"));
  event.currentTarget.classList.add("active");

  if (section === 'dashboard') {
    document.getElementById('deposit-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Impede o envio padrão do formulário

      // Captura os dados do formulário
      const quantity = document.getElementById('quantity').value;
      const wasteType = document.getElementById('waste-type').value;

      // Exibe os dados em um alerta
      alert(`Quantidade de lixo entregue: ${quantity} kg\nTipo de lixo: ${wasteType}`);
    });
  }
}