<?php
$HAANGA_VERSION  = '1.1.2';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/title.tpl */
function haanga_02538e36710a9b95d7e6c8d1e1bba6e65b566aa4($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo htmlentities(ucwords(strtolower($title))).'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}