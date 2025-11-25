<?php 
require_once('classeVeiculo.php');
$combustiveis = ["Gasolina", "Alcool", "Flex"];
$p = new Veiculo("agencia","localhost","root", "", 3307);

// ----------------------------------------------
// EXCLUIR
// ----------------------------------------------
if (isset($_GET['placa'])) {
    $placa = $_GET['placa'];
    $p->excluirVeiculo($placa);
    header("Location: index.php");
    exit;
}

// ----------------------------------------------
// EDITAR OU CADASTRAR
// ----------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $placa = $_POST['placa'];
    $renavan = $_POST['renavan'];
    $anofabricacao = $_POST['anofabricacao'];
    $marca = $_POST['marca'];
    $cor = $_POST['cor'];
    $combustivel = $_POST['combustivel'] ?? '';
    $placaAntiga = $_POST['placa_up'] ?? "";

    if (!empty($placa) && !empty($renavan) && !empty($anofabricacao) &&
        !empty($marca) && !empty($cor) && !empty($combustivel)) {

        // SE TEM placa_up → é edição
        if (!empty($placaAntiga)) {

            if (!$p->atualizarVeiculo($placaAntiga, $placa, $renavan, $anofabricacao, $marca, $cor, $combustivel)) {
                echo "Essa nova placa já está cadastrada!";
            }

        } else {
            // CADASTRAR
            if (!$p->cadastrarVeiculo($placa, $renavan, $anofabricacao, $marca, $cor, $combustivel)) {
                echo "Placa já está cadastrada!";
            }
        }
    } else {
        echo "Preencha todos os campos";
    }

    header("Location: index.php");
    exit;
}

// ----------------------------------------------
// BUSCAR DADOS PARA EDITAR
// ----------------------------------------------
if (isset($_GET['placa_up'])) {
    $id_update = $_GET['placa_up'];
    $res = $p->buscarDadosPessoa($id_update);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento De Veículos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<section id="esquerda">
    <form method="POST">
        <h2>CADASTRAR VEÍCULO</h2>

        <!-- Usado para saber se está editando -->
        <input type="hidden" name="placa_up" value="<?php if(isset($res)) echo $res['placa']; ?>">

        <label class="block" for="placa">Placa</label>
        <input class="block" type="text" name="placa" id="placa"
               value="<?php if(isset($res)) echo $res['placa']; ?>">

        <label class="block" for="renavan">Renavan</label>
        <input class="block" type="text" name="renavan" id="renavan"
               value="<?php if(isset($res)) echo $res['renavan']; ?>">

        <label class="block" for="anofabricacao">Ano de fabricação</label>
        <input class="block" type="number" name="anofabricacao" id="anofabricacao"
               value="<?php if(isset($res)) echo $res['ano_fabricacao']; ?>">

        <label class="block" for="marca">Marca</label>
        <input class="block" type="text" name="marca" id="marca"
               value="<?php if(isset($res)) echo $res['marca']; ?>">

        <label class="block" for="cor">Cor</label>
        <input class="block" type="text" name="cor" id="cor"
               value="<?php if(isset($res)) echo $res['cor']; ?>">

        <label class="block">Combustível:</label>
        <div>
            <?php foreach ($combustiveis as $c): ?>
                <input type="radio"
                       id="<?= $c ?>"
                       name="combustivel"
                       value="<?= $c ?>"
                    <?php if(isset($res) && $res['combustivel'] == $c) echo "checked"; ?> >
                <label for="<?= $c ?>"><?= $c ?></label>
            <?php endforeach; ?>
        </div>

        <input class="block" type="submit"
               value="<?php echo (isset($res) ? 'Atualizar' : 'Cadastrar'); ?>">
    </form>
</section>

<section id="direita">
    <table>
        <tr id="titulo">
            <td>Placa</td>
            <td>Renavan</td>
            <td>Ano de Fabricação</td>
            <td>Marca</td>
            <td>Cor</td>
            <td>Combustível</td>
            <td>Ações</td>
        </tr>

        <?php 
        $dados = $p->buscarDados();

        if (count($dados) > 0) {
            foreach ($dados as $linha) {

                echo "<tr>";
                foreach ($linha as $v) echo "<td>$v</td>";

                echo "<td>
                        <a href='index.php?placa_up=".$linha['placa']."'>Editar</a> 
                        <a href='index.php?placa=".$linha['placa']."'>Excluir</a>
                     </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Ainda não há veículos cadastrados!</td></tr>";
        }
        ?>
    </table>
</section>
</body>
</html>
