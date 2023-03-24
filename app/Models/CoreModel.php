<?php
   

    class CoreModel {

        
        protected $created_at;
        protected $updated_at;

        protected $className;
        protected $tableName;



        public function findAll() {
                $sql = "SELECT * FROM {$this->tableName}";
                $pdo = Database::getPDO();

                $pdoStatement = $pdo->query($sql);
                $entities = $pdoStatement->fetchAll(PDO::FETCH_CLASS, $this->className);
                return $entities;
        }

        public function find($id) {
                $sql = "SELECT * FROM {$this->tableName} WHERE id = $id ORDER BY `name`";
                $pdo = Database::getPDO();
                $pdoStatement = $pdo->query($sql);
                
                $entity = $pdoStatement->fetchObject($this->className);
                return $entity;
        }
        

      
        public function getCreated_at()
        {
                return $this->created_at;
        }

         
        public function setCreated_at($created_at)
        {
                $this->created_at = $created_at;

                return $this;
        }

        
        public function getUpdated_at()
        {
                return $this->updated_at;
        }

       
        public function setUpdated_at($updated_at)
        {
                $this->updated_at = $updated_at;

                return $this;
        }

    }