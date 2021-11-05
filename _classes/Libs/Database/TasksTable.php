<?php
    namespace Libs\Database;
    use PDOException;

    class TasksTable
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
                    INSERT INTO tasks (
                        user_id,title,description,deadline,created_at
                    )VALUES (
                        40, :title, :description,:deadline,NOW()
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
    }        