<?php
session_start();

if (empty($_SESSION)) {
    header("Location: ./entrar.php");
    exit();
}

require_once "./src/backend/db-config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CONFIG - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT-AWESOME CONFIG - ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MATERIALS GOOGLE CONFIG - ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- CSS CONFIG  -->
    <link rel="stylesheet" href="./src/css/global.css">

    <title>Formulário de inscrição - Sarau 2024</title>
</head>

<body>

    <div class="container text-primary">
        <!-- Barra de busca -->
        <div class="d-flex justify-content-between align-items-center my-3">
            <input type="text" class="form-control w-50" name="search" id="search" placeholder="Pesquisar participante...">
            <a class="d-flex justify-content-center align-items-center text-danger" href="./src/backend/logout-control.php">
                Sair
                <span class="material-symbols-outlined ms-1">
                    logout
                </span>
            </a>
        </div>

        <!-- Título da tabela -->
        <div class="my-3">
            <h3 class="text-dark">Lista de participantes</h3>
        </div>

        <!-- Tabela responsiva -->
        <div class="table-responsive">
            <table id="participantsTable" class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Série</th>
                        <th>Telefone</th>
                        <th>Grupo</th>
                        <th>Integrantes</th>
                        <th>Convidado</th>
                        <th>Integrantes convidados</th>
                        <th>Detalhes</th>
                        <th>Música</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM inscricoes";
                    $resultSql = mysqli_query($connect, $sql);

                    foreach ($resultSql as $linhaSql) {
                        $id = $linhaSql['id'];
                        $name = $linhaSql['name'];
                        $serie = $linhaSql['serie'];
                        $telefone = $linhaSql['telefone'];
                        $grupo = $linhaSql['grupo'];
                        $integrantes = $linhaSql['integrantes'];
                        $convidado = $linhaSql['convidado'];
                        $integrantes_convidados = $linhaSql['integrantes_convidados'];
                        $detalhes = $linhaSql['detalhes'];
                        $musica = $linhaSql['musica'];
                    ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $serie ?></td>
                            <td><?= $telefone ?></td>
                            <td><?= $grupo ?></td>
                            <td><?= $integrantes ?></td>
                            <td><?= $convidado ?></td>
                            <td><?= $integrantes_convidados ?></td>
                            <td><?= $detalhes ?></td>
                            <td class="text-truncate" style="max-width: 200px;" data-bs-toggle="tooltip" title="<?= $musica ?>">
                                <button class="btn btn-primary btn-sm" onclick="copyToClipboard('<?= $musica ?>')">
                                    <span class="material-symbols-outlined"> content_copy </span>
                                </button>
                                <a href="<?= $musica ?>" target="_blank">
                                    <?= $musica ?>
                                </a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

    <script src="./src/js/cellular-adjustment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Escuta as mudanças no campo de busca
        document.getElementById("search").addEventListener("keyup", function() {
            // Pega o valor da pesquisa e converte para minúsculo
            var searchValue = this.value.toLowerCase();

            // Seleciona todas as linhas da tabela (tbody tr)
            var rows = document.querySelectorAll("#participantsTable tbody tr");

            // Itera sobre as linhas
            rows.forEach(function(row) {
                // Seleciona o conteúdo de cada célula dentro da linha
                var rowText = row.textContent.toLowerCase();

                // Verifica se o texto da linha contém o valor da busca
                if (rowText.includes(searchValue)) {
                    // Mostra a linha se a busca corresponder
                    row.style.display = "";
                } else {
                    // Esconde a linha se não corresponder
                    row.style.display = "none";
                }
            });
        });

        // Inicializa o tooltip para as células com texto truncado
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(elem) {
            new bootstrap.Tooltip(elem);
        });

        function copyToClipboard(text) {
            // Cria um elemento de input temporário
            const tempInput = document.createElement('input');
            tempInput.value = text;
            document.body.appendChild(tempInput);

            // Seleciona o texto
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // Para dispositivos móveis

            // Copia o texto para a área de transferência
            document.execCommand('copy');

            // Remove o elemento temporário
            document.body.removeChild(tempInput);

        }
    </script>

</body>


</html>