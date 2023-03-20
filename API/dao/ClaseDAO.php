<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class ClaseDAO extends Factory implements DAO{
        public function findAll(){
            $sql = "select * from clase"
        }

        public function findById($id){

        }

        public function insert(){

        }

        public function update(){

        }

        public function delete(){

        }
    }
?>