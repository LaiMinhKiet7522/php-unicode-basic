<?php
require_once 'function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['sothich'])) {
        $sothich = $_POST['sothich'];
        foreach ($sothich as $item) {
            echo $item . '<br/>';
        }
    }
}

//Code checked $_GET, $_POST

?>
<form action="" method="post">
    <p>Sở thích</p>
    <p>
        <input type="checkbox" name="sothich[]" value="1" <?php echo makeChecked(1); ?>> Sở thích 1
    </p>
    <p>
        <input type="checkbox" name="sothich[]" value="2" <?php echo makeChecked(2); ?>>Sở thích 2
    </p>
    <p>
        <input type="checkbox" name="sothich[]" value="3" <?php echo makeChecked(3); ?>>Sở thích 3
    </p>
    <p>
        <input type="checkbox" name="sothich[]" value="4" <?php echo makeChecked(4); ?>>Sở thích 4
    </p>
    <button type="submit">Submit</button>
</form>
