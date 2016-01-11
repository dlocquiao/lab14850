<!DOCTYPE html>
<html>
    <head>      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //A00888565 Derrick Locquiao Set A Lab 1
        
        //see if board if board parameter was passed
        if (!isset($_GET['board'])) {
            echo "No board given. New game started. <br>";
            $squares = "---------";
        } else
            $squares = $_GET['board'];

        $game = new Game($squares);
        //main logic to decide winner
        if ($game->winner('x')) {
            echo 'You win. Lucky guesses!';
        } else if ($game->winner('o')) {
            echo 'I win. Muahahahaha';
        } else {
            $game->pick_move();
            echo 'No winner yet, but you are losing.';
        }
        //calls display method so we can actually see the noard
        $game->display();
        //button to reload game in this case reset the game
        echo "<br> <a href='?'>Reset</a> <br>";
        ?>
        
    </body>
    
    <?php
    
    class Game {
            //board position property
            var $position;

            //constructor which takes a position parameter
            function __construct($squares) {
                $this->position = str_split($squares);
            }

            //winner method
            function winner($token) {
                $won = false;
                if (($this->position[0] == $token) &&
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

            //generates a HTML table with three rows
            function display() {
                echo '<table width="500" height="500" cols="3" style="font-size:large; font-weight:bold" border="1" bgcolor="#01FF00">';
                echo '<tr>'; // open the first row
                for ($pos = 0; $pos < 9; $pos++) { 
                    echo $this->show_cell($pos); //to display tokens at respective position
                    if ($pos % 3 == 2) {
                        echo '</tr><tr>'; //start a new row for the next square
                    }                   
                }
                echo '</tr>'; //close the last row
                echo '</table>';
            }

            function show_cell($which) {              
                $token = $this->position[$which];
                //if value not a dash, display it
                if ($token <> '-') {
                    return '<td>' . $token . '</td>';
                }
                //if value is a dash, make it so that once it's clicked
                //it will show up either as an 'x' or 'o'
                $this->newposition = $this->position;
                $this->newposition[$which] = 'x';
                $move = implode($this->newposition); //make a string from the board array
                $link = '?board=' . $move; //makes the link update with the corresponding board after each move                
                return '<td><a href=' . $link . '>-</a></td>'; //returns cell with an anchor and showing a hyphen
            }

            //represents another player playing against you
            function pick_move() {
                //randomly picks a open square
                $fill = false;
                do {
                    $next = rand(0, 8);
                    if ($this->position[$next] == '-') { //if it's empty...
                        $this->position[$next] = 'o'; //set it!
                        $fill = true;
                    }
                } while (!$fill); //keep picking until a legal move is found
            }
        }
    ?>
</html>

