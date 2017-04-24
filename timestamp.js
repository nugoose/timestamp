$(document).ready(function(){
    var updateMe = parseInt(document.getElementById('theTime').innerHTML);
    
    setInterval(theUpdater, 1000);
    
    function theUpdater(){
        updateMe += 1;
        document.getElementById('theTime').innerHTML = updateMe;
    }
   
});
