<?php
session_start();
// session_destroy();
ob_start();
function redirect($page)
{
    header('location:' . $page);
}