<?php
class Egresso {
    private $idEgresso = null;
    private $nomeEgresso;
    private $cpfEgresso;
    private $dataNascimentoEgresso;
	private $emailEgresso;
	private $telefoneEgresso;
	private $sexoEgresso;
	private $whatsappEgresso;
	private $enderecoEgresso;
	private $numeroEnderecoEgresso;
	private $setorEnderecoEgresso;
	private $complementoEgresso;
	private $cidade;

    public function __construct($nomeEgresso, $cpfEgresso, $dataNascimentoEgresso, $emailEgresso, $telefoneEgresso, $sexoEgresso, $whatsappEgresso, $enderecoEgresso, $numeroEnderecoEgresso, $setorEnderecoEgresso, $complementoEgresso) {
        $this->nomeEgresso = $nomeEgresso;
        $this->cpfEgresso = $cpfEgresso;
		$this->dataNascimentoEgresso = $dataNascimentoEgresso;
		$this->emailEgresso = $emailEgresso;
		$this->telefoneEgresso = $telefoneEgresso;
		$this->sexoEgresso = $sexoEgresso;
        $this->whatsappEgresso = $whatsappEgresso;
		$this->enderecoEgresso = $enderecoEgresso;
		$this->numeroEnderecoEgresso = $numeroEnderecoEgresso;
		$this->setorEnderecoEgresso = $setorEnderecoEgresso;
		$this->complementoEgresso = $complementoEgresso;
    }

    public function getIdEgresso() {
        return $this->idEgresso;
    }

    public function getNomeEgresso() {
        return $this->nomeEgresso;
    }
	
	public function getCpfEgresso() {
        return $this->cpfEgresso;
    }
	
	public function getDataNascimentoEgresso() {
        return $this->dataNascimentoEgresso;
    }

    public function getEmailEgresso() {
        return $this->emailEgresso;
    }

    public function getTelefoneEgresso() {
        return $this->telefoneEgresso;
    }
	
	public function getSexoEgresso() {
        return $this->sexoEgresso;
    }

	public function getWhatsappEgresso() {
        return $this->whatsappEgresso;
    }

	public function getEnderecoEgresso() {
        return $this->enderecoEgresso;
    }
	
	public function getNumeroEnderecoEgresso() {
        return $this->numeroEnderecoEgresso;
    }
	
	public function getSetorEnderecoEgresso() {
        return $this->setorEnderecoEgresso;
    }
	
	public function getComplementoEgresso() {
        return $this->complementoEgresso;
    }

	public function setIdEgresso($idEgresso) {
        $this->idEgresso = $idEgresso;
    }

    public function setNomeEgresso($nomeEgresso) {
        $this->nomeEgresso = $nomeEgresso;
    }
	
	public function setCpfEgresso($cpfEgresso) {
        $this->cpfEgresso = $cpfEgresso;
    }
	
	public function setDataNascimentoEgresso($dataNascimentoEgresso) {
        $this->dataNascimentoEgresso = $dataNascimentoEgresso;
    }

    public function setEmailEgresso($emailEgresso) {
        $this->emailEgresso = $emailEgresso;
    }

    public function setTelefoneEgresso($telefoneEgresso) {
        $this->telefoneEgresso = $telefoneEgresso;
    }
	
	public function setSexoEgresso($sexoEgresso) {
		$this->sexoEgresso = $sexoEgresso;
    }

	public function setWhatsappEgresso($whatsappEgresso) {
        $this->whatsappEgresso = $whatsappEgresso;
    }

	public function setEnderecoEgresso($enderecoEgresso) {
        $this->enderecoEgresso = $enderecoEgresso;
    }
	
	public function setNumeroEnderecoEgresso($numeroEnderecoEgresso) {
        $this->numeroEnderecoEgresso = $numeroEnderecoEgresso;
    }
	
	public function setSetorEnderecoEgresso($setorEnderecoEgresso) {
        $this->setorEnderecoEgresso = $setorEnderecoEgresso;
    }
	
	public function setComplementoEgresso($complementoEgresso) {
        $this->complementoEgresso = $complementoEgresso;
    }

}
?>