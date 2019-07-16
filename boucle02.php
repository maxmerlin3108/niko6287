<?php

print("<table>");
 for ( $degC = -20 ; $degC < 50 ; $degC++ );
{
    print("<tr>");
    $degF = $degC * 1.8 + 32;
    print( "<td>".$degC."°C = ".$degF." °F <br>");
    print("</tr>");
}
print("</table>");



?>