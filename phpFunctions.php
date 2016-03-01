<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require $_SERVER['DOCUMENT_ROOT']."/include/database.php";
   
$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   

$whichOperation = htmlspecialchars($_GET["argument"]);

if (strcmp($whichOperation, "submitBoard") == 0)
{     
/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo);    
$boardString = htmlspecialchars($_GET["boardString"]);    
$tsql = "INSERT INTO Boards (Board) VALUES ('$boardString')";
    
/* Execute the query. */    
    
$stmt = sqlsrv_query( $conn, $tsql);    
    
if ( $stmt )    
{    
     echo "Database statement executed.<br>\n";    
}     
else     
{    
     echo "Error in database statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}

}
elseif (strcmp($whichOperation, "submitSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo);    
$startBoard = htmlspecialchars($_GET["startBoard"]);
$endBoard = htmlspecialchars($_GET["endBoard"]);
$combination = $startBoard . $endBoard;    
$tsql = "INSERT INTO Boards (Board) VALUES ('$startBoard'); INSERT INTO Solutions (Combination, startBoard, endBoard) VALUES ('$combination','$startBoard','$endBoard')";
    
/* Execute the query. */    
    
$stmt = sqlsrv_query( $conn, $tsql);    
    
if ( $stmt )    
{    
     echo "Database statement executed.<br>\n";    
}     
else     
{    
     echo "Error in database statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}
}
else
{
	echo "Unrecognized request to phpFunctions.\n";
	echo "Request was:" . $whichOperation . "\n";
}  
    
/* Free statement and connection resources. */    
sqlsrv_free_stmt( $stmt);    
sqlsrv_close( $conn);    
?>
</body>
</html>