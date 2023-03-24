<?php

    class Type extends CoreModel {

        private $id;
        private $name;

        public function findAll() {
            $sql = "SELECT * FROM `type`";
            $pdo = Database::getPDO();

            $pdoStatement = $pdo->query($sql);
            $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
            return $types;
        }

        public function find($id) {
            $sql = "SELECT * FROM `type` WHERE id = $id";
            $pdo = Database::getPDO();
            $pdoStatement = $pdo->query($sql);
            
            $type = $pdoStatement->fetchObject('Type');
            return $type;
        }

        
        public function getId()
        {
                return $this->id;
        }

        
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

       
        public function getName()
        {
                return $this->name;
        }

       
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
    }