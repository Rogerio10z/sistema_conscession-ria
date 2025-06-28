<?php
session_start();
require 'conexao_socars.php';

// Pega todas as marcas para popular o select
$marcas = $pdo->query("SELECT * FROM marca")->fetchAll(PDO::FETCH_ASSOC);

// Pega o filtro da marca pela URL (GET)
$filtroMarca = $_GET['id_marca'] ?? '';


$sql = "SELECT mo.id, mo.nome_modelo, mo.preco, mo.motor, ma.nome_marca, mo.imagem
        FROM modelo mo 
        INNER JOIN marca ma ON ma.id = mo.id_marca
        INNER JOIN categoria c ON c.id = mo.id_categoria
        WHERE c.nome_categoria = 'Hatch'";

// Se tiver filtro, adiciona condição WHERE
$params = [];
if ($filtroMarca) {
    $sql .= " AND ma.id = :id_marca";
    $params[':id_marca'] = $filtroMarca;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$modelos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="modelo.css">
     <link rel="stylesheet" href="carros_admin.css">

    <div class="container nav-container">
        <a href="modelos.php" class="logo"><img src="logo.png" alt="" /></a>
        <ul class="nav-link">
          <li><a href="index.html" style="--i: 1"></a>Inicio</li>
          <li><a href="index.html#Modelos" style="--i: 2">Modelos</a></li>
          <li><a href="carros.php" style="--i: 3">Carros</a></li>
          <li><a href="index.html#Contatos" style="--i: 4">Contatos</a></li>
        </ul>
         <?php if (isset($_SESSION['acesso']) && $_SESSION['acesso'] == 'cliente'): ?>
            <div class="btn-all">
              <a href="logout.php"> <div class="btn-login"><button>Desconectar</button></div></a>
        <?php else: ?>
            <div class="btn-all">
            <a href="login.php"> <div class="btn-login"><button>Login</button></div></a>
            <a href="registro_user.php"><div class="btn-cadastro"><button>Cadastre-se</button></div></a>
        <?php endif;?>
        </div>
      </div>
    </nav>
<div class="titlecarros"><h1>Modelos Hatch</h1></div>
<!-- Formulário para filtro -->
<div class="top-bar">
    
    <form method="GET" action="">
        <label for="marca">Filtrar por marca:</label>
        <select name="id_marca" id="marca" onchange="this.form.submit()">
            <option value="">Todas as marcas</option>
            <?php foreach($marcas as $marca): ?>
                <option value="<?= $marca['id'] ?>" <?= ($marca['id'] == $filtroMarca) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($marca['nome_marca']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</div>

<div class="carros-container">
    <?php foreach ($modelos as $modelo): ?>
    <div class="card">
        <img src="<?php echo htmlspecialchars($modelo['imagem']); ?>" alt="Imagem do modelo" width="200">
        <h3><?php echo htmlspecialchars($modelo['nome_modelo']); ?></h3>
        <p><strong>Preço:</strong> R$ <?php echo htmlspecialchars($modelo['preco']); ?></p>
        <p><strong>Motor:</strong> <?php echo htmlspecialchars($modelo['motor']); ?></p>
        <p><strong>Marca:</strong> <?php echo htmlspecialchars($modelo['nome_marca']); ?></p>
        <a href="modelo_info.php?id=<?php echo $modelo['id']; ?>">
            <button type="button">Ver Mais</button>
        </a>

    </div>
  
<?php endforeach; ?>

</body>
</html>
