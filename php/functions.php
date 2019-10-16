<?php
require_once ROOT . '/php/UserFunctions.php';

getIncludingFileName('function.php', 'position-relative');
/*Выводит имя файла в котором она написана*/
function getFilesInclud()
{
    $included_files = get_included_files();
    foreach ($included_files as $filename) {
        echo $filename . "<br>";
    }

}

/*если файл ни чего не отображает, то передать в функцию класс bootstrap 'position-relativ'*/
function getIncludingFileName($fileName, $class = 'position-absolute')
{ //выводит сообщения в подключаемых файлах
    if ($GLOBALS ['$mxDebugAllUsers'] || $GLOBALS['$devMess'])
        echo "<div class=\"debugallusers $class\"> Подключен (. $fileName. ) </div>";
}


