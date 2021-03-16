<?php

function getDPHLazizbekAmrillaev(float $PriceLazizbekAmrillaev, float $DPH2LazizbekAmrillaev) {
    return"DPH z cisla" . $PriceLazizbekAmrillaev ."je". $PriceLazizbekAmrillaev * round($DPH2LazizbekAmrillaev,2).".";

}
echo"<br><br>";
echo getDPHLazizbekAmrillaev(659,0.1736);
echo"<br><br>";
echo getDPHLazizbekAmrillaev(659,0.1304);
echo"<br><br>";
echo getDPHLazizbekAmrillaev(659,0.0909);
echo"<br><br>";
?>