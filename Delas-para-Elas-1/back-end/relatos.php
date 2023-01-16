<?php

class relatos
{
  
    private $titulo;
    private $autora;
    private $relato;
   

    public function __construct($titulo,$autora,$relato)
    {
       
        $this->titulo=$titulo;
        $this->autora=$autora;
        $this->relato=$relato;
      
    }


    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutora($autora){
        $this->autora=$autora;
    }

    public function getAutora(){
        return $this->autora;
    }

    public function setRelato($relato){
        $this->relato=$relato;
    }

    public function getRelato(){
        return $this->relato;
    }

}