<?php
require __DIR__ . '/../data/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $quantidade = $_POST['quantity'];
    $tipo = $_POST['waste-type'];
    $turma = $_POST['class'];
    $curso = $_POST['course'];
    $semestre = $_POST['semester'];
    $turno = $_POST['shift'];
    $unidade = $_POST['unit'];
    
    if ($quantidade && $tipo && $turma && $curso && $semestre && $turno && $unidade) {
        $envio = $conection->prepare("
            INSERT INTO registro_residuos 
            (quantidade_kg, tipo_residuo, turma, curso, semestre, turno, unidade)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");
        $envio->execute([$quantidade, $tipo, $turma, $curso, $semestre, $turno, $unidade]);
        echo "OK";
        exit;
    }

    echo "ERRO";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOOTSTRAP ICONS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ===== BOOTSTRAP ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../styles/cadLixo.css">
    <link rel="stylesheet" href="../styles/perfil.css">
    <link rel="stylesheet" href="popup.css">
    <script src="pageREcicla.js"></script>
    <title>SerRecicla</title>
</head>

<body>

    <div id="popupHistorico" class="popup-overlay" style="display: none;">
        <div class="popup-content">
            <button class="close-btn" onclick="fecharPopup()" title="Fechar">
                <i class="bi bi-x-lg"></i>
            </button>
            <h4><i class="bi bi-clock-history me-2"></i>Histórico de Reciclagem</h4>
            <div id="dadosHistorico">Carregando...</div>
        </div>
    </div>


    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </div>
        <div class="logo">
        </div>
        <div class="profile">
            <div class="profile-img">
                <img src="https://img.freepik.com/vetores-premium/icone-de-perfil-de-avatar-padrao-imagem-de-usuario-de-midia-social-icone-de-avatar-cinza-silhueta-de-perfil-em-branco-ilustracao-vetorial_561158-3383.jpg?semt=ais_hybrid&w=740"
                    alt="Foto de Perfil">
            </div>
            <span class="username">Aluno</span>
        </div>
        <ul>
            <li class="active" onclick="loadContent('dashboard')"><i class="bi bi-recycle"></i><span
                    class="label">Reciclagens</span></li>
        </ul>

        <!-- Ícones isolados no fundo -->
        <div class="sidebar-footer">
            <a class="sidebar-btn" href="../index.php">
                <i class="bi bi-house-door"></i>
            </a>
            <a class="sidebar-btn" href="#">
                <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="main">
        <div id="content" class="content">
            <div class="form-container hidden-down">
                <!-- Imagem e Título -->
                <div class="header">
                    <img src="../img/simbleRecicle.png" alt="Imagem" class="header-img">
                    <span class="header-title">Deposite</span>
                </div>

                <form id="deposit-form" action="" method="POST">
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
                        <label for="class">Turma:</label>
                        <input type="text" id="class" name="class" required>
                    </div>

                    <div class="form-group">
                        <label for="course">Curso:</label>
                        <input type="text" id="course" name="course" required>
                    </div>

                    <div class="form-group">
                        <label for="semester">Semestre:</label>
                        <input type="text" id="semester" name="semester" required>
                    </div>

                    <div class="form-group">
                        <label for="shift">Turno:</label>
                        <select id="shift" name="shift" required>
                            <option value="manha">Manhã</option>
                            <option value="tarde">Tarde</option>
                            <option value="noite">Noite</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="unit">Unidade:</label>
                        <select id="unit" name="unit" required>
                            <option value="unama-alcindo">Unama Alcindo Cacela</option>
                            <option value="unama-ananindeua">Unama Ananindeua</option>
                            <option value="outra">Outra</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="envio" class="btn" id="submit-btn">Enviar</button>
                    </div>

                    <div class="form-group">
                        <button type="button" onclick="abrirPopup()" style="background-color: grey;"
                            class="btn">Histórico de Reciclagem</button>
                    </div>
                </form>
            </div>


            <!-- Texto Motivador abaixo do formulário -->
            <div class="motivational-text hidden-up">
                <h2>Transforme o Mundo com Seus Pequenos Gestos: <span class="verde">Doe Resíduos Recicláveis!</span>
                </h2>
                <p>Cada pequena ação conta e tem o poder de gerar grandes mudanças! Quando você doa seus resíduos
                    recicláveis, está fazendo mais do que simplesmente se desfazer de algo; você está contribuindo para
                    um futuro mais sustentável e saudável para todos. Sua atitude pode ajudar a reduzir a poluição,
                    economizar recursos naturais e promover a economia circular.</p>
                <p>Lembre-se de que cada lata, cada vidro, cada pedaço de papel ou plástico que você separa para
                    reciclagem tem um impacto positivo no meio ambiente. Estamos todos juntos nessa jornada em busca de
                    um planeta mais limpo e mais verde, e sua doação de resíduos recicláveis é um passo fundamental para
                    alcançar esse objetivo.</p>
                <p>Não subestime o poder do seu gesto. Ao doar, você está ajudando a preservar a natureza, proteger os
                    animais e garantir um legado mais sustentável para as gerações futuras. O futuro começa com as
                    nossas escolhas hoje. Vamos transformar nosso mundo com responsabilidade, união e cuidado!</p>
                <p><span class="verde">Junte-se a nós nessa causa e seja parte da solução!</span></p>
            </div>
        </div>
    </div>
    <script src="../scripts/dashboard.js"></script>
    <script src="../scripts/efeitoScroll.js"></script>
</body>

</html>
