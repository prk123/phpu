<html>
<title> This is php</title>
<meta charset="utf-8">
<body>
 <form method= "GET" >
<input type="text" name="person">
<button>SUBMIT</button>
</form> 
  <p>
<?php  
 $name =$_GET['person'];
 echo $name." is a handsome guy  "."<br>".$name." is have good knowladge of php and he become a php developer ";

    ?> 
  
</body>
</html>