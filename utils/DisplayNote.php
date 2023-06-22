<?php

class DisplayNote{


    static function getNote($note): string{
        $result = "";
        for($i = 0; $i < 5; $i++){
            if($i < $note){
                $result .= '<i class="fa-solid fa-star"></i>';
            } else {
                $result .= '<i class="fa-regular fa-star"></i>';
            }
        }
        return $result;
        
    }


}


?>