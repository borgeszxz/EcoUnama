<?php
require __DIR__ . '/../data/database.php';

$dados = [];
$resultado = $conection->query("SELECT * FROM registro_residuos ORDER BY data_registro DESC");

if ($resultado && $resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        $dados[] = $linha;
    }
}

echo "<table class='table table-bordered table-striped'>";
echo "<thead><tr>
        <th>Data</th>
        <th>Tipo</th>
        <th>KG</th>
        <th>Turma</th>
        <th>Curso</th>
        <th>Semestre</th>
        <th>Turno</th>
        <th>Unidade</th>
      </tr></thead><tbody>";

foreach ($dados as $linha) {
    echo "<tr>
        <td>" . date("d/m/Y H:i", strtotime($linha['data_registro'])) . "</td>
        <td>" . htmlspecialchars($linha['tipo_residuo']) . "</td>
        <td>" . htmlspecialchars($linha['quantidade_kg']) . "</td>
        <td>" . htmlspecialchars($linha['turma']) . "</td>
        <td>" . htmlspecialchars($linha['curso']) . "</td>
        <td>" . htmlspecialchars($linha['semestre']) . "</td>
        <td>" . htmlspecialchars($linha['turno']) . "</td>
        <td>" . htmlspecialchars($linha['unidade']) . "</td>
    </tr>";
}

echo "</tbody></table>";
