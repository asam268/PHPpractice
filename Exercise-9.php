<?php
/**
 * Created by PhpStorm.
 * User: Asa
 * Date: 1/12/2020
 * Time: 5:13 PM
 */
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red">\lsomething</span>', $text);