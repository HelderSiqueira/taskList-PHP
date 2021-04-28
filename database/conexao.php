<?php

//declaramos os informações de conexão
const HOST = "localhost";
const USER = "root";
const PASSWORD = "bcd127";
const DATABASE = "tasklist";

//fazendo a conexão com o mysql
$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$minhaNovaVariável = "Abobrinha";
