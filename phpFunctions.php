<?php
require $_SERVER['DOCUMENT_ROOT']."/include/database.php";
   
$connectionInfo = array( "UID"=>$uid,                              
                         "PWD"=>$pwd,                              
                         "Database"=>$databaseName);
$conn = NULL;
$stmt = NULL;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $data = json_decode(file_get_contents("php://input"));
  if (strcmp($data->{'argument'}, "submitBoard") == 0)
{     
/* Connect using SQL Server Authentication. */    
$conn = sqlsrv_connect( $serverName, $connectionInfo);    
$boardString = $data->{'boardString'};
if (strcmp($boardString,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
	echo json_encode(array('result' => 'EMPTY'));
}
else{
$tsql = "INSERT INTO Boards (Board) VALUES ('$boardString')";
    
/* Execute the query. */    
    
$stmt = sqlsrv_query( $conn, $tsql);    
    
if ( $stmt )    
{    
     echo json_encode(array('result' => 'SUCCESS'));
}     
else     
{    
     echo "Error in database statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}

}

}
elseif (strcmp($data->{'argument'}, "submitSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);    
	$startBoard = $data->{'startBoard'};
	$endBoard = $data->{'endBoard'};
	if (strcmp($startBoard,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
		echo json_encode(array('result' => 'EMPTY1'));
	}
	else if (strcmp($endBoard,"000000000000000000000000000000000000000000000000000000000000000000000000000000000") == 0){
		echo json_encode(array('result' => 'EMPTY2'));
	}
  	else{
	  	$combination = $startBoard . $endBoard;    
	  	$tsql = "INSERT INTO Boards (Board) VALUES ('$startBoard'); INSERT INTO Solutions (Combination, startBoard, endBoard) VALUES ('$combination','$startBoard','$endBoard')";
	  
	  	/* Execute the query. */    
	  
	  	$stmt = sqlsrv_query( $conn, $tsql);    
	  
	  	if ( $stmt )    
	  	{    
		   	echo json_encode(array('result' => 'SUCCESS'));
	  	}     
	  	else     
	  	{    
		  	echo "Error in database statement execution.\n";    
		  	die( print_r( sqlsrv_errors(), true));    
	  	}
  	}
}
 elseif (strcmp($data->{'argument'}, "firstBoard") == 0)
 {
  /* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Board FROM Boards";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
                 header('Content-Type: application/json; charset=utf-8');
                 echo json_encode(array('result' => 'SUCCESS', 'firstBoard' => sqlsrv_get_field( $stmt, 0)));
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
 }
 elseif (strcmp($data->{'argument'}, "lastBoard") == 0)
 {
  /* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Board FROM Boards ORDER BY Board DESC";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
                 header('Content-Type: application/json; charset=utf-8');
                 echo json_encode(array('result' => 'SUCCESS', 'lastBoard' => sqlsrv_get_field( $stmt, 0)));
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
 }
 elseif (strcmp($data->{'argument'}, "previousBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
        $currentBoard = $data->{'currentBoard'};     
	$tsql = "SELECT lagger.PreviousBoard FROM ( SELECT LAG(Board) OVER (ORDER BY Board) PreviousBoard, Board FROM Boards) lagger WHERE lagger.Board = '$currentBoard'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0);
			if( strcmp($field, "") != 0 ){
		 		echo json_encode(array('result' => 'SUCCESS', 'previousBoard' => $field));
			}
			else{
				echo json_encode(array('result' => 'START'));
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($data->{'argument'}, "nextBoard") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentBoard = $data->{'currentBoard'};      
	$tsql = "SELECT leader.NextBoard FROM ( SELECT LEAD(Board) OVER (ORDER BY Board) NextBoard, Board FROM Boards) leader WHERE leader.Board = '$currentBoard'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0); 
			if( strcmp($field, "") != 0 ){
		 		echo json_encode(array('result' => 'SUCCESS', 'nextBoard' => $field));
			}
			else{
				echo json_encode(array('result' => 'END'));
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($data->{'argument'}, "firstSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Combination FROM Solutions;";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
                 header('Content-Type: application/json; charset=utf-8');
                 echo json_encode(array('result' => 'SUCCESS', 'firstSolution' => sqlsrv_get_field( $stmt, 0)));
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($data->{'argument'}, "lastSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);     
	$tsql = "SELECT TOP 1 Combination FROM Solutions ORDER BY Combination DESC;";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 sqlsrv_fetch( $stmt );
		 header('Content-Type: application/json; charset=utf-8');
                 echo json_encode(array('result' => 'SUCCESS', 'lastSolution' => sqlsrv_get_field( $stmt, 0)));
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($data->{'argument'}, "previousSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
        $currentSolution = $data->{'currentSolution'};     
	$tsql = "SELECT lagger.PreviousSolution FROM ( SELECT LAG(Combination) OVER (ORDER BY Combination) PreviousSolution, Combination FROM Solutions) lagger WHERE lagger.Combination = '$currentSolution'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0);
			if( strcmp($field, "") != 0 ){
		 		echo json_encode(array('result' => 'SUCCESS', 'previousSolution' => $field));
			}
			else{
				echo json_encode(array('result' => 'START'));
			}
		 }
	}     
	else     
	{    
     	echo "Error in database statement execution.\n";    
     	die( print_r( sqlsrv_errors(), true));    
	}
}
elseif (strcmp($data->{'argument'}, "nextSolution") == 0)
{
	/* Connect using SQL Server Authentication. */    
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$currentSolution = $data->{'currentSolution'};      
	$tsql = "SELECT leader.NextSolution FROM ( SELECT LEAD(Combination) OVER (ORDER BY Combination) NextSolution, Combination FROM Solutions) leader WHERE leader.Combination = '$currentSolution'";
    
	/* Execute the query. */    
    
	$stmt = sqlsrv_query( $conn, $tsql);    
    
	if ( $stmt )    
	{    
		 if( sqlsrv_fetch( $stmt ) === true) {
			$field = sqlsrv_get_field( $stmt, 0); 
			if( strcmp($field, "") != 0 ){
		 		echo json_encode(array('result' => 'SUCCESS', 'nextSolution' => $field));
			}
			else{
				echo json_encode(array('result' => 'END'));
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
	echo "Argument does not match any known operation.\n";
}  
}
else
{
	echo "Unrecognized request to phpFunctions.\n";
}  

/* Free statement and connection resources. */
if( $stmt !== NULL ) {
    sqlsrv_free_stmt( $stmt);
}
if( $conn !== NULL ) {
    sqlsrv_close( $conn);
}
?>