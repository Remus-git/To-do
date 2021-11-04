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
                            INSERT INTO tasks(title,description,deadline)
                            VALUES(:title,:description,:deadline)
                ";
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }