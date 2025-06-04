<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário no HTML5 pro PHP8</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php 
        $name = $_POST['phpname'] ?? "Caro";
        $sbname = $_POST['phpsbname'] ?? "Convidado";
        $idade = $_POST['phpyear'] ?? "Sem idade mencionada";
        $color = $_POST['phpclr'] ?? "Nenhuma cor selecionada";
    ?>
    <main>
        <?="<h2>Olá, $name $sbname seja bem-vindo(a)!</h2>";?>
        <?php 
            echo "<p>Seu <strong>nome</strong> é: $name</p>";
            echo "<p>Seu <strong>sobrenome</strong> é: $sbname</p>";
            echo "<p>Seu <strong>nome completo</strong> é: $name $sbname</p>";
            echo "<p>$name, você tem essa <strong>idade</strong>: $idade anos</p>";
            echo "<p>A <strong>cor escolhida foi (em código hexadecimal)</strong>: $color</p>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar à página anterior</button>
    </main>
</body>
</html>