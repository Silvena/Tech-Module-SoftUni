
<ul>
<?php
/**
 * Created by PhpStorm.
 * User: Silvena
 * Date: 15-Jul-17
 * Time: 5:59 PM
 */

for ($i = 1; $i <= 20; $i++) {
    if($i % 2 == 0)
        $color = 'green';
    else $color = 'blue';
    echo"\t<li><span style='color: $color'> $i </span></li>\n";

 } ?>
</ul>