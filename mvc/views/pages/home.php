<?php
while ($row = mysqli_fetch_array($data['Student'])) {
    echo $row['hoten'];
}
