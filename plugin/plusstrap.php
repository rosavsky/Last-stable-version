<?php
/*=========================================================
|	Title: RooCMS Plugin Plusstrap UI
|	Author:	alex Roosso
|	Copyright: 2010-2014 (c) RooCMS. 
|	Web: http://www.roocms.com
|	All rights reserved.
|----------------------------------------------------------
|	This program is free software; you can redistribute it and/or modify
|	it under the terms of the GNU General Public License as published by
|	the Free Software Foundation; either version 2 of the License, or
|	(at your option) any later version.
|	
|	Данное программное обеспечение является свободным и распространяется
|	по лицензии Фонда Свободного ПО - GNU General Public License версия 2.
|	При любом использовании данного ПО вы должны соблюдать все условия
|	лицензии.
|----------------------------------------------------------
|	Build date:		1:19 02.10.2012
|	Last Build:		1:19 02.10.2012
|	Version file: 	1.00
=========================================================*/

# OUTPUT
header('HTTP/1.1 200 OK');
header('Content-type: application/x-javascript');
header('Content-transfer-encoding: binary\n');
header('Accept-Ranges: bytes');
ob_start("ob_gzhandler", 9);

?>

document.write('<link href="/plugin/plusstrap/css/plusstrap.min.css" rel="stylesheet">');
document.write('<link href="/plugin/plusstrap/css/plusstrap_moreclasses.min.css" rel="stylesheet">');
document.write('<script src="/plugin/plusstrap/js/plusstrap.min.js"></script>');

    

