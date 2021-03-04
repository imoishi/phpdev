<?php
//start session
    session_start();

    if(isset($_POST['name'])){
    	if (isset($_SESSION['bookmarks'])) {
    		$_SESSION['bookmarks'][$_POST['name']] = $_POST['url'];
    	} else {
    		$_SESSION['bookmarks'] = Array($_POST['name'] => $_POST['url']);
    	}
    }

    if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    	session_unset();
    	session_destroy();
    	header("Location: index.php");
    }

    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    	unset($_SESSION['bookmarks'][$_GET['name']]);
    	header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bookmarker</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.delete{color:white;}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bookmarker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php?action=clear">Clear All</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container pt-4">
  	<div class="row">
  		<div class="col-md-7">
  			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  				<div class="form-group">
  					<label>Website Name</label>
  					<input type="text" class="form-group" name="name">
  				</div>
  				<div class="form-group">
  					<label>Website URL</label>
  					<input type="text" class="form-group" name="url">
  				</div>
  				<input type="submit" name="Submit" class="btn btn-dark">
  			</form>
  		</div>
  		<div class="col-md-5">
  			<?php if(isset($_SESSION['bookmarks'])) : ?>
  				<ul class="list-group">
  					<?php foreach($_SESSION['bookmarks'] as $name => $url) : ?>
  						<li class="list-group-item">
  							<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
  							<a class="delete" href="index.php?action=delete&name=<?php echo $name; ?>">[X]</a>
  						</li>
  					<?php endforeach; ?>	
  				</ul>
  			<?php endif; ?> 	
  		</div>
  	</div>
  </div>
</body>
</html>