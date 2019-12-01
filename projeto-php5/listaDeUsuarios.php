<?php
    $conteudoJson = file_get_contents("json/usuarios.json");
    $arrayUsuarios = json_decode($conteudoJson, true);

?>
<!DOCTYPE html>
<html lang="en">
    <?php $title = "Lista de Usuários"; ?>
    <?php require_once("inc/head.php"); ?>



<body>
    <?php require_once("inc/header.php"); ?>
    <div class="container pt-3">
    <h1>Formulário de cadastro!!!</h1>

            <table class="table">
            <thead>
                <tr>

                    <th scope="col">Avatar</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
                <tbody>
                    <?php foreach($arrayUsuarios["usuarios"] as $usuario): ?>
                        <tr>
                            <td scope="row"><?= $usuario["nome"]; ?></td>
                            <td><?= $usuario["nome"]; ?></td>
                            <td><?= $usuario["email"]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</body>
</html>