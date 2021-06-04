<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <center>
   <body style = " background-color:black; color:Yellow;margin-top:5%;";>
   <H2>MY division table</H2>
<TABLE BORDER=1>
<?php
$start_num = 1;
$end_num = 20;

  print("<tr>");
  print("<th> </th>");
  for ($count_1 = $start_num;$count_1 <= $end_num;$count_1++)
    print("<th>$count_1</th>");
  print("</tr>");

  for ($count_1 = $start_num;$count_1 <= $end_num;$count_1++){
    print("<tr><th>$count_1</th>");
    for ($count_2 = $start_num;$count_2 <= $end_num;$count_2++){
        $quotient = $count_1 / $count_2;
        printf("<td>%.3f</td>",
               $quotient); 
      }
    print("</tr>\n");
  }
?> 
</TABLE>
<br>
<br>
</body>
</center>
</html>


