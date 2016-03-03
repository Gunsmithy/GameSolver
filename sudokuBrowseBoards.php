<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game Solver by Dylan Kauling</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    <link href="css/gamesolver.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Game Solver</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sudoku</a>
                        <ul class="dropdown-menu">
            <li><a href="#">Browse Boards</a></li>
            <li><a href="sudokuBrowseSolutions.php">Browse Solutions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="sudokuSubmitBoard.php">Submit a Board</a></li>
            <li><a href="sudokuSubmitSolution.php">Submit a Solution</a></li>
          </ul>
                    </li>
                    <li>
                        <a href="#" id="kakuroDropdown"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kakuro</a>
                    </li>
                    <li>
                        <a href="#" id="kenkenDropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KenKen</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

<!-- Page Row -->
<div class="row">

<div class="col-lg-4">
</div>

<!-- Board Column -->
<div class="col-lg-4 text-center">
		<!-- Title Row -->
        <div class="row">
              <h1>Sudoku</h1>
              <p class="lead">Browse Boards</p>
              <!-- /.Title Row -->
        </div>
              
              <!-- Board Row -->
              <div class="row">
              <!-- Sudoku Board -->
              <div id="puzzle">
<div id="puzzle_wrapper"><div><div><input maxlength="1" type="tel" class="scell topborder leftborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div></div></div></div>
<!-- /.Board Row -->
</div>

<!-- Alerts Row -->
              <div class="row">
<!-- Placeholder for responses from server -->
<div id="alerts"></div>
<!-- /.Alerts Row -->
</div>

<!-- Buttons Row -->
<div class="row">
<!-- Buttons to go to previous or next board -->
<div class="controls">
<button id="previous_button" onclick="previousBoard()">Previous</button>
<button id="next_button" onclick="nextBoard()">Next</button>
<!-- /.Buttons-->
</div>
<!-- /.Buttons Row -->
</div>

<!-- Buttons Row 2-->
<div class="row">
<!-- Buttons to go to first or last board -->
<div class="controls">
<button id="first_button" onclick="firstBoard()">First</button>
<button id="last_button" onclick="lastBoard()">Last</button>
<!-- /.Buttons 2-->
</div>
<!-- /.Buttons Row 2-->
</div>
 
<!-- /.Board Column -->
</div>

<div class="col-lg-4">
</div>

<!-- /.Page Row -->
</div>
       
<!-- /.container -->
</div>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
	function firstBoard() {		
		$.ajax({
			url: "phpFunctions.php",
			data: {
				argument: "firstBoard"
			},
			type: "POST",
			dataType: "text",
			success: function(text) {
				if (text.search('SUCCESS') != -1){
				  $('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>First Board Received</span></div>');
				  var boardIndex = text.search("FirstBoard:");
				  if (boardIndex != -1){
					  var boardString = text.substr(boardIndex+11, 81);
					  console.log( boardString );
					  $( "input" ).each( function( index, element ){
						  if (boardString.charAt(index) != '0') {
							  $( this ).val(boardString.charAt(index));
						  }
						  else {
							  $( this ).val('');
						  }
					  });
				  }
				  else{
				  }
				}
			},
			error: function(xhr, status, errorThrown){
				alert( "Sorry, there was a problem!" );
        		console.log( "Error: " + errorThrown );
        		console.log( "Status: " + status );
        		console.dir( xhr );
				$('#alerts').html('<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><span>'+text+'</span></div>');
			},
			complete: function(xhr, status){
			}
			});
	}
	</script>
    
    <script>
	function lastBoard() {		
		$.ajax({
			url: "phpFunctions.php",
			data: {
				argument: "lastBoard"
			},
			type: "POST",
			dataType: "text",
			success: function(text) {
				if (text.search('SUCCESS') != -1){
				$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>Last Board Received</span></div>');
				var boardIndex = text.search("LastBoard:");
				if (boardIndex != -1){
				var boardString = text.substr(boardIndex+10, 81);
				console.log( boardString );
    	$( "input" ).each( function( index, element ){
			if (boardString.charAt(index) != '0') {
    			$( this ).val(boardString.charAt(index));
			}
			else {
				$( this ).val('');
			}
		});
				}
				else{
				}
				}
			},
			error: function(xhr, status, errorThrown){
				alert( "Sorry, there was a problem!" );
        		console.log( "Error: " + errorThrown );
        		console.log( "Status: " + status );
        		console.dir( xhr );
				$('#alerts').html('<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><span>'+text+'</span></div>');
			},
			complete: function(xhr, status){
			}
			});
	}
	</script>
    
    <script>
	function previousBoard() {
		var currentBoard = '';
    	$( "input" ).each( function( index, element ){
			if ($( this ).val() != '') {
    		currentBoard = currentBoard + $( this ).val();
			}
			else {
				currentBoard = currentBoard + '0';
			}
		});
		console.log( currentBoard );
				
		$.ajax({
			url: "phpFunctions.php",
			data: {
				argument: "previousBoard",
				currentBoard: currentBoard
			},
			type: "POST",
			dataType: "text",
			success: function(text) {
				if (text.search('SUCCESS') != -1){
				$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>Previous Board Received</span></div>');
				var boardIndex = text.search("PreviousBoard:");
				if (boardIndex != -1){
				var boardString = text.substr(boardIndex+14, 81);
				console.log( boardString );
    	$( "input" ).each( function( index, element ){
			if (boardString.charAt(index) != '0') {
    			$( this ).val(boardString.charAt(index));
			}
			else {
				$( this ).val('');
			}
		});
				}
				else{
				}
				}
				else if(text.search('START') != -1){
					$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>Reached start of database!</span></div>');
				}
			},
			error: function(xhr, status, errorThrown){
				alert( "Sorry, there was a problem!" );
        		console.log( "Error: " + errorThrown );
        		console.log( "Status: " + status );
        		console.dir( xhr );
				$('#alerts').html('<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><span>'+text+'</span></div>');
			},
			complete: function(xhr, status){
			}
			});
	}
	</script>
    
    <script>
	function nextBoard() {		
		var currentBoard = '';
    	$( "input" ).each( function( index, element ){
			if ($( this ).val() != '') {
    		currentBoard = currentBoard + $( this ).val();
			}
			else {
				currentBoard = currentBoard + '0';
			}
		});
		console.log( currentBoard );
		
		$.ajax({
			url: "phpFunctions.php",
			data: {
				argument: "nextBoard",
				currentBoard: currentBoard
			},
			type: "POST",
			dataType: "text",
			success: function(text) {
				if (text.search('SUCCESS') != -1){
				$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>Next Board Received</span></div>');
				var boardIndex = text.search("NextBoard:");
				if (boardIndex != -1){
				var boardString = text.substr(boardIndex+10, 81);
				console.log( boardString );
    	$( "input" ).each( function( index, element ){
			if (boardString.charAt(index) != '0') {
    			$( this ).val(boardString.charAt(index));
			}
			else {
				$( this ).val('');
			}
		});
				}
				else{
				}
				}
				else if(text.search('END') != -1){
					$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>Reached end of database!</span></div>');
				}
			},
			error: function(xhr, status, errorThrown){
				alert( "Sorry, there was a problem!" );
        		console.log( "Error: " + errorThrown );
        		console.log( "Status: " + status );
        		console.dir( xhr );
				$('#alerts').html('<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><span>'+text+'</span></div>');
			},
			complete: function(xhr, status){
			}
			});
	}
	</script>
    
    <script>
	function clearBoard() {
    	$( "input" ).each( function( index, element ){
    		$( this ).val('')
		});
	}
	</script>
    
    <script>
    $( document ).ready(function() {
    	$( "input" ).prop( "disabled", true );
		firstBoard();
	});
	</script>
    

</body>

</html>
