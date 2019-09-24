<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<head>
<body>
    <? 
    include 'menu.php'; 
    include 'sql.php'; 
    if(!empty($_GET['page'])){
        $pageName = $_GET['page'];
        $filePath = "{$pageName}.php";
        include $filePath;
    }else
     echo"Alege ceva din menu";
    ?>
</body>