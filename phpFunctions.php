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

$whichOperation = htmlspecialchars($_POST["argument"]);

if (strcmp($whichOperation, "submitBoard") == 0)
{     
/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo);    
$boardString = htmlspecialchars($_POST["boardString"]);
if (strcmp($boardString,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
	echo "Empty board - Not submitted.";
}
else{
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

}
elseif (strcmp($whichOperation, "submitSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);    
	$startBoard = htmlspecialchars($_POST["startBoard"]);
	$endBoard = htmlspecialchars($_POST["endBoard"]);
	if (strcmp($startBoard,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
		echo "Empty start board - Not submitted.";
	}
	else if (strcmp($endBoard,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
		echo "Empty end board - Not submitted.";
	}
  	else{
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
}
elseif (strcmp($whichOperation, "firstBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Board FROM Boards";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
		 echo "SUCCESS - FirstBoard:" . sqlsrv_get_field( $stmt, 0);    
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "lastBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Board FROM Boards ORDER BY Board DESC";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
		 echo "SUCCESS - LastBoard:" . sqlsrv_get_field( $stmt, 0);    
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "previousBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentBoard = htmlspecialchars($_POST["currentBoard"]);     
	$tsql = "SELECT lagger.PreviousBoard FROM ( SELECT LAG(Board) OVER (ORDER BY Board) PreviousBoard, Board FROM Boards) lagger WHERE lagger.Board = '$currentBoard'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
    	 echo "Database statement executed.<br>\n";
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0);
			if( strcmp($field, "") != 0 ){
		 		echo "SUCCESS - PreviousBoard:" . $field;
			}
			else{
				echo "START - Reached start of database!";
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "nextBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentBoard = htmlspecialchars($_POST["currentBoard"]);      
	$tsql = "SELECT leader.NextBoard FROM ( SELECT LEAD(Board) OVER (ORDER BY Board) NextBoard, Board FROM Boards) leader WHERE leader.Board = '$currentBoard'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
    	 echo "Database statement executed.<br>\n";
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0); 
			if( strcmp($field, "") != 0 ){
		 		echo "SUCCESS - NextBoard:" . $field;
			}
			else{
				echo "END - Reached end of database!";
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "firstSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Combination FROM Solutions;";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
		 echo "SUCCESS - FirstSolution:" . sqlsrv_get_field( $stmt, 0);    
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "lastSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Combination FROM Solutions ORDER BY Combination DESC;";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
		 echo "SUCCESS - LastSolution:" . sqlsrv_get_field( $stmt, 0);    
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "previousSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentSolution = htmlspecialchars($_POST["currentSolution"]);     
	$tsql = "SELECT lagger.PreviousSolution FROM ( SELECT LAG(Combination) OVER (ORDER BY Combination) PreviousSolution, Combination FROM Solutions) lagger WHERE lagger.Combination = '$currentSolution'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
    	 echo "Database statement executed.<br>\n";
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0);
			if( strcmp($field, "") != 0 ){
		 		echo "SUCCESS - PreviousSolution:" . $field;
			}
			else{
				echo "START - Reached start of database!";
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($whichOperation, "nextSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentSolution = htmlspecialchars($_POST["currentSolution"]);      
	$tsql = "SELECT leader.NextSolution FROM ( SELECT LEAD(Combination) OVER (ORDER BY Combination) NextSolution, Combination FROM Solutions) leader WHERE leader.Combination = '$currentSolution'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
    	 echo "Database statement executed.<br>\n";
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0); 
			if( strcmp($field, "") != 0 ){
		 		echo "SUCCESS - NextSolution:" . $field;
			}
			else{
				echo "END - Reached end of database!";
			}
		 }
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