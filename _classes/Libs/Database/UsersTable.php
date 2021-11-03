<?php
    namespace Libs\Database;
    use PDOException;

    class UsersTable
    {
        private $db = null;

        public function __construct(MySQL $db)
        {
            $this->db = $db->connect();
        }

        public function insert($data)
        {
            try{
                $query = "
                    INSERT INTO users (
                        name,email,phone,password
                    )VALUES (
                        :name, :email, :phone, :password
                    )
                ";

                $statement=$this->db->prepare($query);
                $statement->execute($data);

                return $this->db->lastInsertId();
            }catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
        public function getAll()
        {
            try{
            $statement = $this->db->query("
                SELECT users.* FROM users
            ");
            return $statement->fetchAll();
            }catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
        public function findEmailAndPassword($email,$password)
        {
            $statement = $this->db->prepare("
                SELECT users.* FROM users WHERE users.email = :email AND users.password = :password
            ");
            $statement->execute([
                ':email' => $email,
                ':password'=> $password
            ]
            );

            $row = $statement->fetchAll();
            return $row ?? false;
        }
    }