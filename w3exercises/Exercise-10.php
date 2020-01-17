<?php
//checks if http or https is enabled
if (!empty($_SERVER['HTTPS'])){
    echo 'https is enabled';
}
else{
    echo 'http is enabled';
}