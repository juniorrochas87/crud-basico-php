<?php
require_once("config/conecta.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Página de Listar Usuários</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <ul class="container nav">
            <li class="nav-item">
                <a class="nav-link active" href="cadastrar.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista.php">Listar</a>
            </li>
        </ul>