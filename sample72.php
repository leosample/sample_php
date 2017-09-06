<?php
    $mysqli = new mysqli('localhost','root','root','gosql');
    $rel = $mysqli->query("SELECT * FROM member WHERE id=12");
    $data = $rel->fetch_object();
?>

<table border="1" width="100%">
    <tr>
        <td><?php echo "{$data->id}"; ?></td>
        <td><?php echo "{$data->id}"; ?></td>
        <td><?php echo "{$data->id}"; ?></td>
    </tr>
</table>