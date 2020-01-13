<?php

function pageHeader()
{
    echo <<< EOT
<div class="pageHeader">
<header>
<h1>Practicing with PHP</h1>
<h2><i>A Collection of W3 Exercises and Assorted Practice</i></h2>
</header>
<nav>
<ul>
<li><a href="./">Project Files</a></li>
<li><a href="https://www.w3resource.com/php-exercises/">PHP Exercises</a></li>
<li><a href="../phpmyadmin">Database</a></li>
</ul>
</nav>
</div>
EOT;
}

function getProjectFiles(){
    echo "<h3>Current Project Files:</h3>";
    if ($handle = opendir('.')) {
        echo "<ul>";
        while(false !== ($entry = readdir($handle))) {
            if($entry != "." && $entry != ".." && $entry != ".git" && $entry != ".gitignore" && $entry != ".idea") {
                echo "<li><a href='$entry'>$entry</a></li>";
            }
        }
        echo "</ul>";
        closedir($handle);
    }

}
