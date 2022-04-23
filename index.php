<?php session_start();?><html> 
  <head> 
    <title>Flisol Uncoma2022</title> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="index.css">
  </head> 
  <body> 
    <script type="text/javascript" src="index.js"> 
    </script> 
    <script type="text/javascript">
        <?php
        $contenido='inicio.txt';
        if(isset ($_SESSION['mail'])){
            
          $contenido='agenda.txt';
        }elseif(isset($_POST['nombre'])&&$_POST['nombre']!=''&&$_POST['mail']!=''){
          $_SESSION['mail']=$_POST['mail'];
            $redis= new Redis();
            $redis->connect('localhost', 6379);
            $redis->set($_POST['mail'],$_POST['nombre']);
          $contenido='agenda.txt';
        }
        
        ?>
        Typer.file = '<?=$contenido?>';
        Typer.init();
    </script>
    <div id="console"></div> 
    <form method="post"></form>
  </body> 
</html> 
