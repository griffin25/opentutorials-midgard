<html>
        <body>
                Current time is
<?php  
    echo date('G:i:s');
?> (by php) <br />
        <script type="text/javascript">
                var d = new Date();
                var curr_hour = d.getHours();
                var curr_min = d.getMinutes();
                var curr_sec = d.getSeconds();
                document.write('Current time is '+curr_hour+":"+curr_min+":"+curr_sec+" (by javascript)");
        </script>
        	
        <body>
</html>