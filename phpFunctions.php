<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$serverName = "gamesolver-server.database.windows.net";   
$uid = "gamesolveradmin";     
$pwd = "65obddzdGFnX3aSe";    
$databaseName = "gamesolver-db";
   
$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);   
    
/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo);    
$boardString = htmlspecialchars($_GET["argument"]);    
$tsql = "INSERT INTO Boards VALUES ('$boardString', 0, 0, 0, 0, 0, 0)";
    
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
    
/* Iterate through the result set printing a row of data upon each iteration.*/    
    
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))    
{    
     echo "Col1: ".$row[0]."\n";    
     echo "Col2: ".$row[1]."\n";    
     echo "Col3: ".$row[2]."<br>\n";    
     echo "-----------------<br>\n";    
}    
    
/* Free statement and connection resources. */    
sqlsrv_free_stmt( $stmt);    
sqlsrv_close( $conn);    
?>
</body>
</html>