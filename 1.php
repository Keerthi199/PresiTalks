<?php

$connection=mysqli_connect('localhost','root',' ','project');
if (!$connection)
{
    die("Connection error: ".mysqli_connect_error());
}



        echo("<table><tr><th>Topics</th><th>posted by</th></tr>");

$query="select topic,id from topics";
$run=mysqli_query($connection,$query);
while($td=mysqli_fetch_array($run))
{


    echo("<tr><td><a href='2.php'>".$td['topic']."</a></td><td>".$td['id']."</td>");
}
echo("</table>");
?>
