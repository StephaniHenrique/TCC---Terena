<?php
    header('Content-Type: texthtml; charset=utf-8');
    class Instituicao{
        private $codInstituicao;
        private $nomeInstituicao;
        private $admInstituicao;
        private $modalidadeInstituicao;
        private $portematriculaInstituicao;
        private $totalmatriculaInstituicao;
        private $cepInstituicao;
        private $ufInstituicao;
        private $complementoInstituicao;
        private $cidadeInstituicao;
        private $bairroInstituicao;
        private $municipioInstituicao;
        private $logInstituicao;
        private $numInstituicao;
        private $imgInstituicao;
        private $codFoneInstituicao;
        private $codLoginInstituicao;
        private $codNivel;

        public function getCodInstituicao(){
            return $this->codInstituicao;
        }
        public function getNomeInstituicao(){
            return $this->nomeInstituicao;
        }
        public function getAdmInstituicao(){
            return $this->admInstituicao;
        }
        public function getModalidadeInstituicao(){
            return $this->modalidadeInstituicao;
        }
        public function getPortematriculaInstituicao(){
            return $this->portematriculaInstituicao;
        }
        public function getTotalmatriculaInstituicao(){
            return $this->totalmatriculaInstituicao;
        }
        public function getCepInstituicao(){
            return $this->cepInstituicao;
        }
        public function getUfInstituicao(){
            return $this->ufInstituicao;
        }
        public function getComplementoInstituicao(){
            return $this->complementoInstituicao;
        }
        public function getCidadeInstituicao(){
            return $this->cidadeInstituicao;
        }
        public function getBairroInstituicao(){
            return $this->bairroInstituicao;
        }
        public function getMunicipioInstituicao(){
            return $this->municipioInstituicao;
        }
        public function getLogInstituicao(){
            return $this->logInstituicao;
        }
        public function getNumInstituicao(){
            return $this->numInstituicao;
        }
        public function getImgInstituicao(){
            return $this->imgInstituicao;
        }
        public function getCodFoneInstituicao(){
            return $this->codFoneInstituicao;
        }
        public function getCodLoginInstituicao(){
            return $this->codLoginInstituicao;
        }
        public function getCodNivel(){
            return $this->codNivel;
        }

        //setters

        public function setCodInstituicao($cod){
            $this->codInstituicao = $cod;
        }
        public function setNomeInstituicao($nome){
            $this->nomeInstituicao = $nome;
        }
        public function setAdmInstituicao($adm){
            $this->admInstituicao = $adm;
        }
        public function setModalidadeInstituicao($modalidade){
            $this->modalidadeInstituicao = $modalidade;
        }
        public function setPortematriculaInstituicao($porte){
            $this->portematriculaInstituicao = $porte;
        }
        public function setTotalmatriculaInstituicao($total){
            $this->totalmatriculaInstituicao = $total;
        }
        public function setCepInstituicao($cep){
            $this->cepInstituicao = $cep;
        }
        public function setUfInstituicao($uf){
            $this->ufInstituicao = $uf;
        }
        public function setComplementoInstituicao($compl){
            $this->complementoInstituicao = $compl;
        }
        public function setCidadeInstituicao($cidade){
            $this->cidadeInstituicao = $cidade;
        }
        public function setBairroInstituicao($bairro){
            $this->bairroInstituicao = $bairro;
        }
        public function setMunicipioInstituicao($municipio){
            $this->municipioInstituicao = $municipio;
        }
        public function setLogInstituicao($log){
            $this->logInstituicao = $log;
        }
        public function setNumInstituicao($num){
           $this->numInstituicao = $num;
        }
        public function setImgInstituicao($img){
            $this->imgInstituicao = $img;
        }
        public function setCodFoneInstituicao($fone){
            $this->codFoneInstituicao = $fone;
        }
        public function setCodLoginInstituicao($login){
           $this->codLoginInstituicao = $login;
        }
        public function setCodNivel($nivel){
            $this->codNivel = $nivel;
        }

        
       
 
    }

?>