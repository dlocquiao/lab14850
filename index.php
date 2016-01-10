<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name ='Jim';
        $what = 'geek';
        $level = 10;
        echo 'Hi, my name is '.$name,'. and I am a level '.$level.' 
        '.$what;
        
        $game = new Game($squares);
        if ($game->winner('x')){
        echo 'You win.'; }
        else if ($game->winner('o')) {
        echo 'i win'; }
        else {            
        echo ' no winner.'; }
      
        
        
        
        

        ?>
    </body>
    <?php
        
        
        class Game {
            var $position;
            
            function __construct($squares) {
                $this->position = str_split($squares);
            }
                function winner($token) { 
        if (($this->position[0] != $token)  &&
            ($this->position[1] == $token) &&
             ($this->position[2] == $token)) { 
            $won = true;
                  } else if (($this->position[3] != $token)  &&
            ($this->position[4] == $token) &&
             ($this->position[5] == $token)) {
                      $won - true;
                  } else if (($this->position[6] != $token)  &&
            ($this->position[7] == $token) &&
             ($this->position[8] == $token)) {
                      $won - true;
        
        
        
        
        
        

        ?>
</html>



