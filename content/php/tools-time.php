<?php

    if (isset($_POST['submit'])) {
        switch (strtolower($_POST['submit'])) {
            case 'date to timestamp':
                $timestamp = mktime($_POST['hour'], $_POST['minute'], $_POST['second'], $_POST['month'], $_POST['day'], $_POST['year']);
                break;

            case 'timestamp to date':
                $date = date('F n, Y \a\t H:i:s', $_POST['timestamp']);
                break;
        }
    }
?>
<h1>Timestamp Tools</h1>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <p style="text-align: center">
        <select name="month">
            <?php
                $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July',
                                'August', 'September', 'October', 'November', 'December');

                for ($i = 1; $i <= 12; $i++) {
                    if ($i == date('n')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . $months[$i - 1] . '</option>';
                }
            ?>
        </select>
        <select name="day">
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    if ($i == date('j')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
                }
            ?>
        </select>
        <strong>,&nbsp;</strong>
        <select name="year">
            <?php
                for ($i = 1970; $i <= 2050; $i++) {
                    if ($i == date('Y')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
                }
            ?>
        </select>
        <strong>&nbsp;at&nbsp;</strong>
        <select name="hour">
            <?php
                for ($i = 0; $i <= 23; $i++) {
                    if ($i == date('G')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . $i . '</option>';
                }
            ?>
        </select>
        <strong>:</strong>
        <select name="minute">
            <?php
                for ($i = 0; $i <= 59; $i++) {
                    if ($i == date('i')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
                }
            ?>
        </select>
        <strong>:</strong>
        <select name="second">
            <?php
                for ($i = 0; $i <= 59; $i++) {
                    if ($i == date('s')) $selected = ' selected';
                    else                 $selected = '';

                    echo '<option value="' . $i . '"' . $selected . '>' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</option>';
                }
            ?>
        </select>
    </p>

    <?php
        if (isset($timestamp)) {
            echo '<div class="box info">' . $timestamp . '</div>';
        }
    ?>

    <p style="text-align: center">
        <input type="submit" name="submit" value="Date to Timestamp">
    </p>

    <hr>

    <p style="text-align: center">
        <input type="text" name="timestamp" value="<?php if (isset($_POST['timestamp'])) { echo $_POST['timestamp']; } else { echo time(); } ?>">
    </p>
    <?php
        if (isset($date)) {
            echo '<div class="box info">' . $date . '</div>';
        }
    ?>
    <p style="text-align: center">
        <input type="submit" name="submit" value="Timestamp to Date">
    </p>

</form>
