<html>
	<head>
		<title>Fly Banana</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<style>
		.bg-lightgray
		{
			background-color:LightGray;
		}
		</style>
	</head>
	<body>
		<div id="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="main">Fly banana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="services">Team</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="portfolio">Portflio</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contacts">Contacts</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="jumbotron">
		<?php include 'application/views/'.$content_view; ?>
	</div>
	
<footer class="container-fluid text-center bg-lightgray fixed-bottom">

        <div class="copyrights" style="margin-top:25px;">
            <p>Zhytomyr state tecnological univercity © 2018
                <br>
                <span>Made by Illya Knoznoferov, PI-54</span></p>
            <p><a href="https://www.facebook.com/profile.php?id=100013008078910" target="_blank">Facebook<i class="fa fa-facebook-square" aria-hidden="true"></i> </a></p>
        </div>
</footer>		
	</body>
</html>