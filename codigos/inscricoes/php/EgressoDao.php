<?php

require_once "iModeloCrudDao.php";
require_once "ConexaoPdo.php";

class EgressoDao implements iEgressoCrudDao {
    private $instanciaConexaoPdo;
    private $tabela;

    public function __construct() {
        $this->instanciaConexaoPdo = ConexaoPdo::getInstancia();
        $this->tabela = "egresso";
    }

    public function create($objeto) {
        $idEgresso = $this->getNovoIdEgresso();
        $nomeEgresso = $objeto->getNomeEgresso();
		$cpfEgresso = $objeto->getCpfEgresso();
		$dataNascimentoEgresso = $objeto->getDataNascimentoEgresso();
		$emailEgresso = $objeto->getEmailEgresso();
		$telefoneEgresso = $objeto->getTelefoneEgresso();
		$sexoEgresso = $objeto->getSexoEgresso();
		$whatsappEgresso = $objeto->getWhatsappEgresso();
		$enderecoEgresso = $objeto->getEnderecoEgresso();
		$numeroEnderecoEgresso = $objeto->getNumeroEnderecoEgresso();
		$setorEnderecoEgresso = $objeto->getSetorEnderecoEgresso();
		$complementoEgresso = $objeto->getComplementoEgresso();
		
        $sqlStmt = "INSERT INTO {$this->tabela} (idEgresso, nomeEgresso, cpfEgresso, dataNascimentoEgresso, emailEgresso, telefoneEgresso, sexoEgresso, whatsappEgresso, 
		enderecoEgresso, numeroEnderecoEgresso, setorEnderecoEgresso, complementoEgresso) VALUES (:idEgresso, :nomeEgresso, :cpfEgresso, :dataNascimentoEgresso,
		:emailEgresso, :telefoneEgresso, :sexoEgresso, :whatsappEgresso, :enderecoEgresso, :numeroEnderecoEgresso, :setorEnderecoEgresso, :complementoEgresso)";
        try {
            $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
            $operacao->bindValue(":idEgresso", $idEgresso, PDO::PARAM_INT);
            $operacao->bindValue(":nomeEgresso", $nomeEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":cpfEgresso", $cpfEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":dataNascimentoEgressoEgresso", $dataNascimentoEgresso, PDO::PARAM_STR);
            $operacao->bindValue(":emailEgresso", $emailEgresso, PDO::PARAM_STR);
            $operacao->bindValue(":telefoneEgresso", $telefoneEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":sexoEgresso", $sexoEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":whatsappEgresso", $whatsappEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":enderecoEgresso", $enderecoEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":numeroEnderecoEgresso", $numeroEnderecoEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":setorEnderecoEgresso", $setorEnderecoEgresso, PDO::PARAM_STR);
			$operacao->bindValue(":complementoEgresso", $complementoEgresso, PDO::PARAM_STR);
			
            if($operacao->execute()){
                if($operacao->rowCount() > 0) {
                    $objeto->setID($idEgresso); //OLHAR
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch(PDOException $excecao) {
            echo $excecao->getMessage();
        }
    }

    public function read($idEgresso) {
       $sqlStmt = "SELECT * FROM {$this->tabela} WHERE idEgresso=:idEgresso";
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":idEgresso", $idEgresso, PDO::PARAM_INT);
          $operacao->execute();
          $getRow = $operacao->fetch(PDO::FETCH_OBJ);
          $nomeEgresso = $getRow->nomeEgresso;
		  $cpfEgresso = $getRow->cpfEgresso;
          $dataNascimentoEgresso = $getRow->dataNascimentoEgresso;
		  $emailEgresso = $getRow->emailEgresso;
          $telefoneEgresso = $getRow->telefoneEgresso;
		  $sexoEgresso = $getRow->sexoEgresso;
		  $whatsappEgresso = $getRow->whatsappEgresso;
		  $enderecoEgresso = $getRow->enderecoEgresso;
		  $numeroEnderecoEgresso = $getRow->numeroEnderecoEgresso;
		  $setorEnderecoEgresso = $getRow->setorEnderecoEgresso;
		  $complementoEgresso = $getRow->complementoEgresso;
		  
          $objeto = new Egresso($nomeEgresso, $cpfEgresso, $dataNascimentoEgresso, $emailEgresso, $telefoneEgresso, $sexoEgresso, $whatsappEgresso, 
		  $enderecoEgresso, $numeroEnderecoEgresso, $setorEnderecoEgresso, $complementoEgresso);
          $objeto->setIdEgresso($idEgresso);
          return $objeto;
       } catch(PDOException $excecao){
          echo $excecao->getMessage();
       }
    }
   
    public function update($objeto) {
       $idEgresso = $objeto->getIdEgresso();
       $nomeEgresso = $objeto->getNomeEgresso();
	   $cpfEgresso = $objeto->getCpfEgresso();
	   $dataNascimentoEgresso = $objeto->getDataNascimentoEgresso();
       $emailEgresso = $objeto->getEmailEgresso();
       $telefoneEgresso = $objeto->getTelefoneEgresso();
	   $sexoEgresso = $objeto->getSexoEgresso();
	   $whatsappEgresso = $objeto->getWhatsappEgresso();
	   $enderecoEgresso = $objeto->getEnderecoEgresso();
	   $numeroEnderecoEgresso = $objeto->getNumeroEnderecoEgresso();
	   $setorEnderecoEgresso = $objeto->getSetorEnderecoEgresso();
	   $complementoEgresso = $objeto->getComplementoEgresso();
	   
       $sqlStmt = "UPDATE {$this->tabela} SET nomeEgresso=:nomeEgresso, cpfEgresso=:cpfEgresso, dataNascimentoEgresso=:dataNascimentoEgresso,
	   emailEgresso=:emailEgresso, telefoneEgresso=:telefoneEgresso, sexoEgresso=:sexoEgresso, whatsappEgresso=:whatsappEgresso, enderecoEgresso=:enderecoEgresso,
	   numeroEnderecoEgresso=:numeroEnderecoEgresso, setorEnderecoEgresso=:setorEnderecoEgresso, complementoEgresso=:complementoEgresso WHERE idEgresso=:idEgresso";
	   
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":idEgresso", $idEgresso, PDO::PARAM_INT);
          $operacao->bindValue(":nomeEgresso", $nomeEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":cpfEgresso", $cpfEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":dataNascimentoEgresso", $dataNascimentoEgresso, PDO::PARAM_STR);
          $operacao->bindValue(":emailEgresso", $emailEgresso, PDO::PARAM_STR);
          $operacao->bindValue(":telefoneEgresso", $telefoneEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":sexoEgresso", $sexoEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":whatsappEgresso", $whatsappEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":enderecoEgresso", $enderecoEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":numeroEnderecoEgresso", $numeroEnderecoEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":setorEnderecoEgresso", $setorEnderecoEgresso, PDO::PARAM_STR);
		  $operacao->bindValue(":complementoEgresso", $complementoEgresso, PDO::PARAM_STR);
		  
          if($operacao->execute()){
             if($operacao->rowCount() > 0){
                return true;
             } else {
                return false;
             }
          } else {
             return false;
          }
       } catch (PDOException $excecao)  {
          echo $excecao->getMessage();
       }
    }

    public function delete($idEgresso) {
        $sqlStmt = "DELETE FROM {$this->tabela} WHERE idEgresso=:idEgresso";
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":idEgresso", $idEgresso, PDO::PARAM_INT);
          if($operacao->execute()){
             if($operacao->rowCount() > 0) {
                   return true;
             } else {
                   return false;
             }
          } else {
             return false;
          }
       } catch (PDOException $excecao) {
          echo $excecao->getMessage();
       }
    }
   
    private function getNovoIdContato(){
          $sqlStmt = "SELECT MAX(idEgresso) AS idEgresso FROM {$this->tabela}";
          try {
             $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
             if($operacao->execute()) {
                if($operacao->rowCount() > 0){
                   $getRow = $operacao->fetch(PDO::FETCH_OBJ);
                   $idReturn = (int) $getRow->idEgresso + 1;
                   return $idReturn;
                } else {
                   throw new Exception("Ocorreu um problema com o banco de dados");
                   exit();
                }
             } else {
                throw new Exception("Ocorreu um problema com o banco de dados");
                exit();
              }
          } catch (PDOException $excecao) {
             echo $excecao->getMessage();
          }
       }
    }
?>