<?php
/**
 * @link https://github.com/MaGuowei/M
 * @copyright 2013 maguowei.com
 * @author Ma Guowei <imaguowei@gmail.com>
 */
use M\M;

define('M','M');
define('APP','Demos/Mlog');

$configs = require_once APP.'/Config/config.php';
require_once M.'/M.php';

header('Content-type:text/html;charset=utf-8');

M::run($configs);

