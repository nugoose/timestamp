<html>
    <head>
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- css -->
        <link type='text/css' rel='stylesheet' href='timestamp.css'>
    </head>
    
    <body>
        <div id='mainBody'>
            <h2>timestamp</h2>
            <?php
            $natty = 'null';
            $unixy = 'null';
            $convertMe = explode('/', $_SERVER['REQUEST_URI'])[1];
            if($convertMe != ''){
                $user_input = explode('%20', $convertMe);
                //natural date
                if(count($user_input) > 1){
                    $natty = join(' ', $user_input);
                    $unixy = strtotime($natty);
                }
                //unix timestamp
                else{
                    if($convertMe >= 0 AND ctype_digit($convertMe)){
                        $unixy = $convertMe;
                        $natty = DateTime::createFromFormat( 'U', $unixy);
                        $natty = $natty->format('d F Y H:i:s');    
                    }
                }
                //check if conversions went throught correctly, if not, set values to null
                if($natty == '' OR $unixy == ''){
                    $natty = 'null';
                    $unixy = 'null';
                } 
                
                print("<h4>natural date - <span>$natty</span></h4>");
                print("<h4>unix timestamp - <span>$unixy</span></h4>");
            }
            else{
                print("<h4>we got nothing</h4>");
                print("<h4>natural date - $natty</h4>");
                print("<h4>unix timestamp - $converted</h4>");
            }
            ?>
    
            <h2>made with php, hosted on heroku <3</h2>
        </div>
    </body>
</html>