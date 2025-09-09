<?php
     class playerModel extends connection
     {
        protected $name;
        protected $from;
        protected $role;

        protected function findAll()
     {
        $sql = "SELECT * FROM player";
        $result = $this->connect()->query($sql);
        if ($result->num_row> 0)
        {
            while ($data = mysqli_fetch_assoc($result)) {
                $player[] = $data;
            }
            return $player;
        }

     }
     }
?>