<?php
// connect to a database
        class DataBase
        {
        public $connection;
        public $statement;
        public function __construct($config){

          
           $dsn='mysql:' . http_build_query($config,'',';');

           
            $this->connection=new PDO($dsn,'root','',[
               PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
            ]);

        }
        public function query($query, $params = []) {
            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            return $this;
        }

    public function get(){
        return $this->statement->FetchAll();
    } 
        
            public function find(){
                return $this->statement->fetch();

            }
            public function findorfail()
            {
                $result=$this->find();
                if(!$result){
                    abort();
                }
                return $result;
            }
        }




        // public function get(){
        //     return $this->statement->FetchAll();
        // } need to understand the implication of "$this" more 