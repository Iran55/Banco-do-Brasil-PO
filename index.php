<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário</title>
    <link rel="shortcut icon" href="img/azulBB.png" type="image/icon" />
</head>

<body>

    <div class="barra">
        <h2>
            Formulário de Histórias
        </h2>
    </div>

    <div class="container-formulario">
        <form action="salva_mensagem.php" method="post">
            <div class="form">
                <div class="title">
                    <h3>Dados adicionais: Histórias</h3>
                </div>

                <div class="campos">
                    <label for="codigo">Número da História:</label>
                    <input type="text" id="codigo" name="codigo" required />
                </div>


                <div class="campos">
                    <label for="acompanhamento">Tem acompanhamento da DIEMP?</label>
                    <select id="acompanhamento" name="acompanhamento">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Sim</option>
                        <option value="standard">Não</option>
                    </select>
                </div>
                <div class="campos">
                    <label for="prioridade">É priorizada?</label>
                    <select id="prioridade" name="prioridade">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Sim</option>
                        <option value="standard">Não</option>
                    </select>
                </div>

                <div class="campos">
                    <label for="nivelprioridade">Qual o nível de prioridade?</label>
                    <select id="nivelprioridade" name="nivelprioridade">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Alta</option>
                        <option value="standard">Média</option>
                        <option value="standard">Baixa</option>
                    </select>
                </div>

                <div class="campos">
                    <label for="origem">Qual a origem?</label>
                    <select id="origem" name="origem">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Negocial</option>
                        <option value="standard">Mandatória</option>
                    </select>
                </div>

                <div class="campos">
                    <label for="cronograma">Qual o cronograma?</label>
                    <select id="cronograma" name="cronograma">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Programado</option>
                        <option value="standard">Não programado</option>
                    </select>
                </div>

                <div class="campos" name="tipohistoria">
                    <label for="tipohistoria">Tipo da História?</label>
                    <select id="acom_comite">
                        <option value="standard" data-default disabled selected></option>
                        <option value="standard">Nova</option>
                        <option value="standard">Retrabalho</option>
                    </select>
    </div>

    <div class="botao">
        <input type="submit"  id="submit" name="submit" class="botao">
    </div>
    </div>
    </div>

    </div>

</body>

</html>