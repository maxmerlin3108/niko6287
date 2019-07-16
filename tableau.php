<table border="3px" width=800 height=800>
<?php
$ligne=10;
$colonne=10;
  for ($i=0;$i<$ligne; $i++){
     echo '<tr>';
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo '<td>&nbsp</td>';
     else
echo '<td bgcolor=black>&nbsp</td>';
  }
  </tr>
?>
</table>