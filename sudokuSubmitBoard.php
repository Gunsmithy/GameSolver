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
            <li><a href="sudokuBrowseBoards.php">Browse Boards</a></li>
            <li><a href="sudokuBrowseSolutions.php">Browse Solutions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Submit a Board</a></li>
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
              <p class="lead">Submit a Board</p>
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
<!-- Buttons to submit the board or clear it -->
<div class="controls">
<button id="submit_button" onclick="saveBoard()">Submit</button>
<button id="clear_button" onclick="clearBoard()">Clear</button>
<!-- /.Buttons-->
</div>
<!-- /.Buttons Row -->
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
	function saveBoard() {
		var boardString = '';
    	$( "input" ).each( function( index, element ){
			if ($( this ).val() != '') {
    		boardString = boardString + $( this ).val();
			}
			else {
				boardString = boardString + '0';
			}
		});
		console.log( boardString );
		
		$.ajax({
			url: "phpFunctions.php",
			data: {
				argument: "submitBoard",
				boardString: boardString
			},
			type: "POST",
			dataType: "text",
			success: function(text) {
				$('#alerts').html('<div class="alert alert-info text-center"><a class="close" data-dismiss="alert">×</a><span>'+text+'</span></div>');
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

</body>

</html>
