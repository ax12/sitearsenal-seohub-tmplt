<?php
if ( $GLOBALS['$devMess']) echo '<div class="debug-msg position-relative">подключен(php/functions.php)</div>';
/*Выводит имя файла в котором она написана*/
function getFilesInclud () {
    $included_files = get_included_files();
    foreach ($included_files as $filename) {
        echo $filename . "<br>";
    }

}

function getIncludingFileName ($fileName) {
    if ($GLOBALS ['$mxDebugAllUsers'] || $GLOBALS['$devMess'])
        echo "<div class=\"debugallusers position-absolute\"> Подключен (. $fileName. ) </div>";
}