<?php

require_once './Entidade.php';
require_once './Categoria.php';
require_once './FormaPagamento.php';
require_once './Usuario.php';
require_once './Produto.php';

header('content-Type: text/plain');

echo "=======================================\n";
echo "==== INICIANDO OS TESTES DE MODELS ====\n";
echo "=======================================\n\n";

//1 - CATEGORIA EM FORMA DE PAGAMENTO
echo "1. Criando categoria em forma de pagamento \n\n";
$categoriaEletro = new Categoria(1,'Eletrnicos', 'Dispositivos que encaixa na tomada',true);
$formaPagamento = new FormaPagamento(1,'Carta de Credito','pagamento via cartão',true);
print_r($categoriaEletro);
print_r($formaPagamento);
echo("\n");

// 2 - CRIANDO USUÀRIO (CLIENTE)

echo "1. Criando Usuário (Cliente)\n\n";
$cliente = new Usuario(10, 'joão da silva', 'joao.silva', 'super_senha', 'joao@mail.com','1199889988','132,123,123,12', false, true);
print_r($cliente);
echo("\n");

// 3 PRODUTOS QUE PERTENCEM A UMA CATEGORIA

$produto1 = new Produto(1, 'Relógio', 'relogio digital', 100.50, $categoriaEletro,true);
$produto2 = new Produto(1, 'Celular', 'Novo Modelo', 1000.50, $categoriaEletro,true);
print_r($produto1);
print_r($produto2);
?>