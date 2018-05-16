<html>
<head><title>discussion</title>
</head>
<body>

  <?php


//  define('GW_UPLOADPATH','images/');

//  define('DB_Host',PUT_YOUR_HOSTNAME_HERE);

//  define('DB_USER',PUT_YOUR_USRNAME_HERE);

//  define('DB_PASSWORD',PUT_YOUR_PASSWORD_HERE);

//  define('DB_NAME',PUT_YOUR_DATABASENAME_HERE);

  $dbc=mysqli_connect("localhost","root"," ","presitalks") or die('Unable to connect to MySQL server') or die('Error connecting to MySQL server');


  $query = "select * from topics";


  $result = mysqli_query($dbc, $query) or die('Error querying database');


  ?>

  <textarea rows="4" cols="50">

  <?php

  while($row = mysqli_fetch_array($result))

  {

      echo "<tr>";

      echo $row['topic'];

  }


  mysqli_close($dbc);

  ?>


</textarea>


  </body>
  </html>
