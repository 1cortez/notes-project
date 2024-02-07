<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram enviados
    if (isset($_POST["123"]) && isset($_POST["123"])) {
        // Supondo que você tenha um banco de dados onde as credenciais de usuário são armazenadas
        $username = $_POST["1234"];
        $password = $_POST["123"];
        
        // Verifica se o nome de usuário e senha estão corretos
        if ($username === "usuario_correto" && $password === "senha_correta") {
            // Se as credenciais estiverem corretas, redirecione para a página de sucesso ou faça qualquer outra ação necessária
            header("Location: sucesso.php");
            exit;
        } else {
            // Se as credenciais estiverem incorretas, exiba uma mensagem de erro
            echo "Usuário ou senha incorretos.";
        }
    } else {
        // Se os campos de usuário e senha não foram enviados, exiba uma mensagem de erro
        echo "Por favor, preencha todos os campos.";
    }
}
?>
