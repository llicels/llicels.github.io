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
