<?php
    namespace Libs\Database;
    use PDOException;
    use Helpers\Auth;
    class TasksTable
    {
        private $db = null;

        public function __construct(MySQL $db)
        {
            $this->db = $db->connect();
        }

        public function insert($task)
        {
            try{
                $query = "
                    INSERT INTO tasks (
                        user_id,title,description,deadline,created_at
                    )VALUES (
                        :user_id, :title, :description,:deadline,NOW()
                    )
                ";

                $statement=$this->db->prepare($query);
                $statement->execute($task);
                return $this->db->lastInsertId();
            }catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
        public function getTasks()
        {   $auth = Auth::check();
            $auth_id = $auth[0]->id;
            $statement = $this->db->prepare("
            SELECT tasks.* FROM tasks LEFT JOIN users ON user_id = users.id WHERE user_id = :auth_id
            ");
            $statement->execute([
                ':auth_id'=> $auth_id
            ]);
            return $statement->fetchAll();
        }
        public function delete($id){
            $statement = $this->db->prepare("
                DELETE FROM tasks WHERE id = :task_id
            ");
            $statement->execute([':task_id' => $id]);
        }
        public function complete($id){
            $statement = $this->db->prepare("
                UPDATE tasks SET completed = 1,updated_at = NOW()  WHERE id = :task_id
                ");
                $statement->execute([
                    ':task_id' => $id
                ]);
        }
        public function expired(){
            $statement = $this->db->prepare("
                UPDATE tasks SET expired = 1
            ");
            $statement->execute();
        }
        public function taskEdit($updateTitle,$updateDescription,$updateDeadline,$taskId){
            $statement = $this->db->prepare("
                UPDATE tasks SET title = :updateTitle,description = :updateDescription, deadline = :updateDeadline
                WHERE tasks.id = :taskId
            ");
            $statement->execute([
             ':updateTitle' => $updateTitle,
             ':updateDescription' => $updateDescription,
             ':updateDeadline' => $updateDeadline,
             ':taskId' => $taskId
            ]);
        }
    }        