<?php

require_once "Egresso.php";
require_once "EgressoDao.php";
require_once "iEgressoCrudDao.php";

// Instancia um novo objeto Egresso, conforme a classe descrita no arquivo Egresso.php
//$pais = new Pais("Brasil")
//$estado = new Estado("Goiás", "GO", $pais)
//$cidade = new Cidade("Ceres", $estado);
$c1 = new Egresso("Luciano Cianim Delas Carvalho Borba", "05523799130", "1997-01-15", "cianim@delas.com.br", "629987654321", "2", "62999999999", "Avenida 1",
 "24", "Vila Nova", "Perto das Melancias"//, $cidade/);

// Instancia um novo objeto EgressoDao.php
$egressoDao = new EgressoDao();

// Executa o método 'create' que foi escrito na classe EgressoDao.php conforme implementação 
// estabelecida na interface IEgressoCrudDao.php
// Esse método gera um novo 'idEgresso' para o egresso e executa o INSERT no banco.
$egressoDao->create($c1);

// Carrega os dados do egresso já cadastrado no banco e que possui o valor 1 como 'idEgresso'.
// Os dados são carregados no objeto $c2 (criado e retornado dentro do próprio método 'read')
$c2 = $egressoDao->read(1);

// Define novos valores para os atributos 'nomeEgresso' e 'emailEgresso' utilizando os métodos 'set' definidos na
// classe Egresso.
$c1->setNomeEgresso("Ciclano Detal");
$c1->setEmailEgresso("ciclano@teste.com.br");

// Atualiza o egresso.
$egressoDao->update($c1);

// Deleta o egresso que possui o valor 1 para o campo 'idEgresso'.
// Lembrete: se você deletar o registro com 'idEgresso' 1, não poderá mais carrega-lo na linha 20.
$egressoDao->delete(1)
?>