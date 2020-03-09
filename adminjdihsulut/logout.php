<?php
    session_start();
?>
<html>
    <head>
        <title></title>
    </head>
    <body>  
        <?php
            $session = $_SESSION['login88'];
            echo $session;
        	$_SESSION['idq'] = 0;
        	$_SESSION['login88'] = 0;
        	$_SESSION['userq'] = 0;
        	$_SESSION['passq'] = 0;
        ?>
        <script type="text/javascript">
          window.location.href = "loginform.php";
        </script>
    </body>
</html>


		