<?php

function pageHeader()
{
    echo <<< EOT
<header>
<h1>Practicing with PHP</h1>
<h2>Below there will be a table with links.</h2>
</header>
<nav>
<table>
<tr>
<th><a href="./">Project Files</a></th>
<th><a href="https://www.w3resource.com/php-exercises/">PHP Exercises</a></th>
<th><a href="../phpmyadmin">Database</a></th>
</tr>
</table>
</nav>
EOT;
}
