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
            <li><a href="#">Browse Solutions</a></li>
            <li><a href="#">Submit a Solution</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="sudokuSubmitBoard.php">Submit a Board</a></li>
            <li><a href="#">Request a Solution</a></li>
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

    <!-- Page Container -->
    <div class="container">

		<!-- Title Row-->
        <div class="row">
        	<!-- Title Column-->
            <div class="col-lg-12 text-center">
              <h1>Sudoku</h1>
              <p class="lead">Submit a Solution</p>
        <!-- /.Title Column -->     
        </div>
        <!-- /.Title Row -->
        </div>
        
        
        <!-- Boards Row-->
        <div class="row">
        		
              <!-- Start Board Column-->
              <div class="col-lg-3 col-lg-offset-3 text-center">
              <!-- Start Board Title-->
              <div class="row">
              <p class="lead">Start Board</p>
              </div>
              <!-- Start Board -->
              <div class="row">
              <div id="puzzle">
<div id="puzzle_wrapper"><div><div><input maxlength="1" type="tel" class="scell topborder leftborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div></div></div></div>

<!-- /.Start Board -->
</div>
</div>

<!-- End Board Column-->
<div class="col-lg-3 text-center">
 <!-- End Board Title-->
              <div class="row">
              <p class="lead">End Board</p>
              </div>
<!-- End Board -->
<div class="row">
              <div id="puzzle2">
<div id="puzzle_wrapper2"><div><div><input maxlength="1" type="tel" class="scell topborder leftborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder "><input maxlength="1" type="tel" class="scell topborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell leftborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell "><input maxlength="1" type="tel" class="scell rightborder "></div><div><input maxlength="1" type="tel" class="scell botborder leftborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder "><input maxlength="1" type="tel" class="scell botborder rightborder "></div></div></div></div>
<!-- /.End Board -->
</div>
</div>
<!-- /.Boards Row -->
</div>
    

<!-- Message+Buttons Row-->
<div class="row">

<!-- Placeholder for responses from server -->
<div id="message"></div>

<!-- Buttons to submit the board or clear it -->
<div class="controls">
<button id="submit_button" onclick="saveBoard()">Submit</button>
<button id="clear_button" onclick="clearBoard()">Clear</button>
</div>

<!-- /.Message+Buttons -->
</div>

	<!-- /.Page Container -->
    </div>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
	function saveBoard() {
		var startBoard = '';
		var endBoard = '';
    	$( "input" ).each( function( index, element ){
			if ($( this ).val() != '') {
				if (index < 81){
    				startBoard = startBoard + $( this ).val();
				}
				else{
					endBoard = endBoard + $( this ).val();
				}
			}
			else {
				if (index < 81){
    				startBoard = startBoard + '0';
				}
				else{
					endBoard = endBoard + '0';
				}
			}
		});
		console.log( startBoard );
		console.log( endBoard );
		$.ajax({ url: 'phpFunctions.php?argument=submitSolution&startBoard=' + startBoard + '&endBoard=' + endBoard});
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
