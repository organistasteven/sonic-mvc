<?php
    class Character extends CoreModel {

       

        private $id;
        private $name;
        private $description;
        private $picture;
        private $type_id;

        public function findAll() {
            $sql = "SELECT * FROM `character` ORDER BY `name`";
            $pdo = Database::getPDO();



            $pdoStatement = $pdo->query($sql);
            $characters = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Character');
            return $characters;
        }

       
        public function find($id) {
            $sql = "SELECT * FROM `character `WHERE id = $id ORDER BY  `name` ";
            $pdo = Database::getPDO();
            $pdoStatement = $pdo->query($sql);
            $character = $pdoStatement->fetchObject('Character');
            return $character;
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

        
        public function getDescription()
        {
                return $this->description;
        }

       
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        
        public function getPicture()
        {
                return $this->picture;
        }

       
        public function setPicture($picture)
        {
                $this->picture = $picture;

                return $this;
        }

         public function getType_id()
        {
                return $this->type_id;
        }

       
        public function setType_id($type_id)
        {
                $this->type_id = $type_id;

                return $this;
        }
        }