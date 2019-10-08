
<h4>a * x<sup>2</sup> + b * x + c = 0</h4>
<form action="Controller.php" method="GET">
    <p>a = <input type="text" name="a" /></p>
    <p>b = <input type="text" name="b" /></p>
    <p>c = <input type="text" name="c" /></p>
    <input type="submit" name="send" value="Go"/>
</form>

<?php
 if (isset($result)): ?>
<hr />

Result:<br>
<p>X<sub>1</sub> = <?=$result[0] ?></p>
<p>X<sub>2</sub> = <?=$result[1] ?></p>
<? endif ?>