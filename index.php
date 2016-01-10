<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
     
        $game = new Game($squares);
        if ($game->winner('x')){
        echo 'You win.'; }
        else if ($game->winner('o')) {
        echo 'i win'; }
        else {         
            
        echo ' no winner.';
        }
      
        
        function display() {
            echo '<table cols="3" style="font-size:large; font-weight:bold">';
            echo '<tr>';
            for ($pos=0; $pos<9;$pos++) {
                echo '<td>-</td>';
                if ($pos %3 == 2) {echo '</tr><tr>'; }               
            }
            echo '</tr>';
            echo '</table>';   
        }


        ?>
        
        
    </body>
    <?php

        class Game {
            var $position;
            function __construct($squares) {
                $this->position = str_split($squares);
            }
                function winner($token) { 
                    $won = false;
        if (($this->position[0] == $token)  &&
            ($this->position[1] == $token) &&
             ($this->position[2] == $token)) { 
            $won = true;
                  } else if (($this->position[3] == $token)  &&
            ($this->position[4] == $token) &&
             ($this->position[5] == $token)) {
                      $won = true;
                  } else if (($this->position[6] == $token)  &&
            ($this->position[7] == $token) &&
             ($this->position[8] == $token)) {
                      $won = true;
             }
             else if (($this->position[0] == $token)  &&
            ($this->position[3] == $token) &&
             ($this->position[6] == $token)) {
                      $won = true;
             }
             else if (($this->position[1] == $token)  &&
            ($this->position[4] == $token) &&
             ($this->position[7] == $token)) {
             $won = true; } 
             else if (($this->position[2] == $token)  &&
            ($this->position[5] == $token) &&
             ($this->position[8] == $token)) {
             $won = true; }  
             else if (($this->position[0] == $token)  &&
            ($this->position[4] == $token) &&
             ($this->position[8] == $token)) {
             $won = true; }
             else if (($this->position[2] == $token)  &&
            ($this->position[4] == $token) &&
             ($this->position[6] == $token)) {
             $won = true; }    
             
}
        }
        
        
        ?>
</html>



