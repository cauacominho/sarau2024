<?php

require_once "db-config.php"; // Arquivo de conexão com o banco de dados

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores do formulário
    $apresentacaoGrupo = isset($_POST['apresentacaoGrupo']) && $_POST['apresentacaoGrupo'] == 'sim' ? 'sim' : 'não';
    $controlNome = isset($_POST['controlNome']) ? $_POST['controlNome'] : '';
    $controlCurso = isset($_POST['controlCurso']) ? $_POST['controlCurso'] : '';
    $controlSerie = isset($_POST['controlSerie']) ? $_POST['controlSerie'] : '';
    $controlTelefone = isset($_POST['controlTelefone']) ? $_POST['controlTelefone'] : '';
    $convidados = isset($_POST['convidados']) ? $_POST['convidados'] : '';
    $controlNameConvidados = isset($_POST['controlNameConvidados']) ? $_POST['controlNameConvidados'] : '';
    $controlDetails = isset($_POST['controlDetails']) ? $_POST['controlDetails'] : '';
    $controlMusica = isset($_POST['controlMusica']) ? $_POST['controlMusica'] : '';
    $controlNameConvidadosGrupal = isset($_POST['controlNameConvidadosGrupal']) ? $_POST['controlNameConvidadosGrupal'] : '';

    // Prepara a query SQL para inserir os dados na tabela "inscricoes"
    $sql = "INSERT INTO inscricoes (name, serie, telefone, grupo, integrantes, convidado, integrantes_convidados, detalhes, musica)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara a execução da query
    if ($stmt = $connect->prepare($sql)) {
        // Vincula os parâmetros
        $stmt->bind_param(
            "sssssssss",
            $controlNome,
            $serie,
            $controlTelefone,
            $apresentacaoGrupo,
            $controlNameConvidadosGrupal,
            $convidados,
            $controlNameConvidados,
            $controlDetails,
            $controlMusica
        );

        // Concatena o curso e série
        $serie = $controlSerie . ' - ' . $controlCurso;

        // Executa a query
        if ($stmt->execute()) {
            header("Location: ../../sucesso.html");
        } else {
            echo "Erro ao realizar a inscrição: " . $stmt->error;
        }

        // Fecha o statement
        $stmt->close();
    } else {
        echo "Erro na preparação da query: " . $connect->error;
    }

    // Fecha a conexão
    $connect->close();
}
