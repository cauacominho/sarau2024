<?php

require_once "./src/backend/db-config.php"; // Arquivo de conexão com o banco de dados

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

<body class="body">

    <div class="container text-primary">
        <div class="d-flex justify-content-start align-items-center my-3">
            <a href="javascript:history.back()" class="text-primary mx-3">
                <i class="fas fa-arrow-left fs-5"></i>
            </a>
            <input type="text" class="form-default" name="search" id="search" placeholder="Pesquisar participante...">
        </div>

        <div class="my-3">
            <h3>Lista de participantes</h3>
        </div>

        <table id="participantsTable" class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Serie</th>
                    <th>Integrantes</th>
                    <th>Convidados</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM inscricoes";
                $resultSql = mysqli_query($connect, $sql);

                foreach ($resultSql as $linhaSql) {
                    echo "<tr>";
                    echo "<td>" . $linhaSql['name'] . "</td>";
                    echo "<td>" . $linhaSql['serie'] . "</td>";
                    echo "<td>" . $linhaSql['integrantes'] . "</td>";
                    echo "<td>" . $linhaSql['convidado'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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
    </script>

</body>

</html>