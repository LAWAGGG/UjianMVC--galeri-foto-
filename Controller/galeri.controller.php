<?php 
    class GaleriController extends GaleriModel{
        public function getAll(){
            return $this->findAll();
        }

        public function getOne(){
            if(!isset($_GET['id'])){
                return;
            }
            $onlyId = preg_split('/\D/', '', $_GET['id']);
            if($onlyId !== ''){
                return $this->findOne($_GET['id']);
            }
        }
    }
?>