<?php

$concerts = Concert::getConcerts($dbh);

echo "<div class='row ng-scope'> <div class='col-12'>";

foreach ($concerts as $concert){
    $concert->print_concert();
}


echo"</div></div>";









?>