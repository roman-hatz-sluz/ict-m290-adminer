<?php
/*******************************************************
** Adminer, since version 4.7.0 does not accept        *
** connections without a password.                     *
** For version 4.7.x to accept an empty password,      *
** in the adminer-4.7.x.php file, replace :            *
** login($Ae,$F){if($F=="") by login($Ae,$F){if(1===2) *
** This can be done automatically by replacing false   *
** with true in the line below.                        *
*******************************************************/
include "adminer-4.8.1.php"

?>
