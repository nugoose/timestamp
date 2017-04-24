<html>
    <head>
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- css -->
        <link type='text/css' rel='stylesheet' href='rhp.css'>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <!-- js -->
        <script type='text/javascript' src='timestamp.js'></script>
    </head>
    
    <body>
        <div id='mainBody'>
            <h2>timestamp</h2>
            
                <h3>current unix timestamp: <?php print("<span id='theTime'>" . time() . "</span>"); ?></h3>
                <h3>that number is the unix timestamp, it's the time (number of seconds) elapsed since 0000 UTC, january 1st 1970</h3>
                <h3>it's used in many unix like operating systems, it helps to track and sort dated information</h3>
                <h3>what is this page for? it converts unix timestamps into dates, and vice versa</h3>
                <h3>just put what you need to convert into the url</h3>
                <h3>for a natural date - <span>https://stormy-eyrie-43498.herokuapp.com/april 19 2017</span></h3>
                <h3>for a unix timestamp - <span>https://stormy-eyrie-43498.herokuapp.com/1321009871</span></h3>
                
            <h2>made with php, hosted on heroku <3</h2>
        </div>
    </body>
</html>