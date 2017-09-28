<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Book extends Model
    {
        protected $kloksnelheid;
        protected $merk;
        protected $cores;
        protected $schermgroote;
        protected $opslag;
        protected $ssd;
        protected $user;
        
        protected function __construct()
        {
            
        }

        protected static function newModel($obj) 
        {
            return true;
        }
        
        function    getUser()
    {
        return $this->hasMany("User");
    
    }
    public static function createForm()
    {
        $form = new Form();
        $form->addField( new FormField("merk", "text", "merk"));
        $form->addField( new FormField("cores", "text", "cores"));
        $form->addField( new FormField("kloksnelheid", "text", "kloksnelheid (Ghz)"));
        $form->addField( new FormField("geheugen", "text", "geheugen GB"));
        $form->addField( new FormField("schermgroote", "text", "schermgroote"));
        $form->addField( new FormField("opslag", "text", "opslag (GB)"));
        $form->addField( new FormField("ssd", "checkbox", "ssd"));
        return $form;        
    }
    
    function getKloksnelheid() {
        return $this->kloksnelheid;
    }
    function getGeheugen() {
        return $this->geheugen;
    }

    function getMerk() {
        return $this->merk;
    }

    function getCores() {
        return $this->cores;
    }

    function getSchermgroote() {
        return $this->schermgroote;
    }

    function getOpslag() {
        return $this->opslag;
    }

    function getSsd() {
        return $this->ssd;
    }


    
   }
        