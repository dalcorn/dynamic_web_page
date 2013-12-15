<div id="footer">
    <p>&copy; 
        <?php
        $startYear = 2006;
        $thisYear = date('Y');
        if ($startYear == $thisYear) {
            echo $startYear;
        } else {
            echo "{$startYear}-{$thisYear}";
        }
        ?>
        David Powers</p>
</div>