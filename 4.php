<?php
$kata = "cepat kerjakan";
foreach (count_chars($kata, 1) as $i => $val)
	if($val > 1)
{
   echo "Huruf \"" , chr($i) , "\" = $val <br>";
}
?>