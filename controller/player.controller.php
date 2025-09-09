<?php
    class playerController extends playerModel
    {
        public function getPlayers()
        {
            return $this->findAll();
        }

        public function getPlayerBY()
        {
            
        }
    }
?>