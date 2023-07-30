<?php
while ($row = mysqli_fetch_array($data['Student'])) {
?>
<?= $row['hoten'] ?>
    <?php
}
    ?>
