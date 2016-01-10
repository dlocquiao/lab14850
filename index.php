<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" Content="text/html" charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
        echo 'Welcome! Tic-Tac-Toe';
       $game = new Game($squares);
        if($game->winner('x'))
                echo 'You win!';
                else if ($game->winner('o'))
                    echo 'I win!';
                else
                    echo 'No Winner yet, but you are losing.';
                
               

        class Game {
            var $position;
            function __construct($squares) {
                $this->position = str_split($squares);
            }
            
            function winner($token) {
                $won = false;
                if(($this->position[0] == $token) &&
                   ($this->position[1] == $token) &&
                   ($this->position[2] == $token)) {
                    $won = true;
                } else if (($this->position[3] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[5] == $token)) {
                    $won = true;
                } else if (($this->position[6] == $token) &&
                        ($this->position[7] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[0] == $token) &&
                        ($this->position[3] == $token) &&
                        ($this->position[6] == $token)) {
                    $won = true;
                } else if (($this->position[1] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[7] == $token)) {
                    $won = true;
                } else if (($this->position[2] == $token) &&
                        ($this->position[5] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[0] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[2] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[6] == $token)) {
                    $won = true;
                }
            
            return $won;
        }
        
        function show_cell($which) {
            $token = $this->position[$which]; // deal with the easy case
            if ($token <> '-') return '<td>'.$token.'</td>';
            $this->newposition = $this->position;
            $this->newposition[$which] = 'o'; 
            $move = implode($this->newposition);
            $link = '/?board='.$move;
            
            return '<td><a href="'.$link.'">-</a></td>';
        }
         function display() {
                    echo '<table cols="3" style="font-size:large; font-weight:bold">';
                    echo '<tr>'; // open the first row
                    for ($pos=0; $pos<9; $pos++) {
                        echo $this->show_cell($pos);
                        if ($pos %3 == 2) echo '</tr><tr>'; // start a new row for the next square
                    }
                echo '</tr>'; // close the last row
                echo '</table>';
               }
        
                
        }

        
        ?>
    </body>
    
</html>