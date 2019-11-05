<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <?php
  
  include_once("conexao.php");
  
  if(isset($_SESSION['login']) && (isset($_SESSION['senha']))){
    header("Location: ./../dashboard.php");exit;
  }
  if(isset($_POST['logar'])){
    $login = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));

    $buscausuario = "SELECT * FROM `tab_usuario` WHERE login = :login and senha = :senha";
    
    try{
        $resultado = $conn->prepare($buscausuario);
        $resultado->bindParam(':login', $login, PDO::PARAM_STR);
        $resultado->bindParam(':senha', $senha, PDO::PARAM_STR);
        $resultado->execute();

        $contar = $resultado->rowCount();
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        
        if($contar>0){
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            ?>
              <section class="generic-banner relative">
                <div class="container pt-30">
                    <div class="row align-items-center justify-content-center">
                      <h2 class="text-white text-center">Aguarde</h2>
                    </div>
                    <div class="row generic-banner-content align-items-center justify-content-center">
                      <div class='lds-ellipsis'>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                      </div>
                    </div>
                </div>
            </section>
            <?php
            header("Refresh: 2, ./../dashboard.php"); exit;
        }else{
          ?>
              <section class="generic-banner relative">
                <div class="container pt-30">
                    <div class="row align-items-center justify-content-center">
                      <h2 class="text-white text-center">Dados incorretos</h2>
                    </div>
                </div>
            </section>
            <?php
         header("Refresh: 2, ./../login.php"); exit;
        }
      }catch(PDOException $e){
        echo $e;
      }
    }
?>

</body>

</html>