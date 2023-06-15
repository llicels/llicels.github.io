<?php error_reporting (E_ALL ^ E_NOTICE); ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Criptografia</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  

    
<div class="position-absolute top-50 start-50 translate-middle">
<form action="criptografia.php" method="post">

<div class="mb-3">

    <label  class="form-label fw-semibold">Texto:</label>
    <input type="text" class="form-control" name="texto" class="col" placeholder="Escreva o texto desejado">
    <br>
    <label  class="form-label fw-semibold">Criptografia:</label>
    <select class="form-select" name="criptografiaDesejada">
        <option selected>Escolha a criptografia desejada</option>
        <option value="1">Base 64</option>
        <option value="2">MD5</option>
        <option value="3">SHA-1</option>
        <option value="4">Password Hash</option>
    </select>

</div>
<button type="submit" class="btn btn-primary">Criptografar</button>
</form>

<?php
    $textonaocriptografado = $_POST['texto'];
    $criptografia = $_POST['criptografiaDesejada'];
    
    if (!empty($textonaocriptografado) && !empty($criptografia))
    {

    if($criptografia == 1)
    {
        echo "<br><br><p class='fw-semibold'>Resultado:</p>".base64_encode($textonaocriptografado); 
    }
    else if ($criptografia == 2)
    {
        echo "<br><br><p class='fw-semibold'>Resultado:</p>".md5($textonaocriptografado); 
    }
    else if ($criptografia == 3)
    {
        echo "<br><br><p class='fw-semibold'>Resultado:</p>".sha1($textonaocriptografado);
    }
    else if ($criptografia == 4)
    {
        echo "<br><br><p class='fw-semibold'>Resultado:</p>".password_hash($textonaocriptografado, PASSWORD_DEFAULT);
    }
    else
    {
        echo "<br><br>Selecione uma opção válida!";
    }

    }
else
{
    echo "<br><br>Insira um texto!";
}
?>
</div>

    
</body>
</html>

