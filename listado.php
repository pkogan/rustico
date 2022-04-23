<head> 
    <title>Flisol Uncoma2022</title> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="index.css">
  </head> 
  <body> 
    <script type="text/javascript" src="index.js"> 
    </script> 
        <div id="console">
            <h1>Listado Random FLISoL 2022</h1>
            <p>lxs que eligieron la pastilla azul</p>
            .......
            <p>lxs que eligieron la pastilla roja</p>
<?php
$redis=new Redis();
$redis->connect('127.0.0.1', 6379); 
// Get the stored keys and print it 
$arList = $redis->keys("*");
shuffle($arList);
foreach ($arList as $key => $value) {
    echo $key.','.$value.','.$redis->get($value).'<br/>';
  
}

?>
</div> 
  </body> 
</html> 

