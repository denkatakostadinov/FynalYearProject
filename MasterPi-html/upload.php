<!DOCTYPE html> <html lang="en" dir="ltr"> <head>
<link rel="icon" type="image/png" href="pi_logo.png" />
<title>Upload page</title>
  <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="log-in.css" type="text/css">
 <div class="wrapper row1"> <div id="hgroup">
<a class="weatherwidget-io" href="https://forecast7.com/en/34d05n118d24/los-angeles/?unit=us" data-label_1="LOS ANGELES" data-label_2="WEATHER" data-font="Times New Roman" data-icons="Climacons Animated" data-days="5" data-theme="fall-leaves" >LOS ANGELES WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>
</div>

   
	
<body>
<a href=""><img src="" alt=""></a>
 <div class="container">
<br></br>
<br></br>
	<section id="content">
<h1>Upload form</h1>
<a href="index.php">Home Page</a>
<br></br>
<form action="upload-action.php" enctype="multipart/form-data" method="post"> 
<input name="file"  multiple type="file"> 
<h1><input name="submit" type="submit" value="Upload File"></h1> 
</form>

<form action="delete_ftp.php">
<h1><input type="submit" value="Delete Image Gallery"></h1>
</form>
</br>

<form action="ipconfig.php" method="post">
    <h1><input type="submit" name="Open" value="IP Configurations"></h1>
</form>
<br></br>

</div><!-- button -->

</section><!-- content --> </div><!-- container --> </body>

</body>
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Prototype 2018</p>
    <p class="fl_right">Version by Viktor Byankov</p>
  </footer> 
</div> 
</html>

