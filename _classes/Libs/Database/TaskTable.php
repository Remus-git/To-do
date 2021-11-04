<?
    namespace Libs\Database;
    use PDOException;

    class TasksTable{
        private $db = null;

        public function __construct(MySQL $db)
        {
            $this->db = $db->connect();
        }
        public function insert($data){
            try{
                $query = "
                            INSERT INTO tasks(title,description,deadline,role_id)
                            VALUES(:title,:description,:deadline,36)
                ";
                $statement = $this->db->prepare($query);
                $statement->execute($data);

                return $this->db->lastInsertId();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }