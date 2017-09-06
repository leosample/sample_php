<?php
$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );
if(isset($_GET['del'])){
    $delid=$_GET['del'];
    $sql = "DELETE FROM member WHERE id={$delid}";
    $mysqli->query($sql);
}


$sql = "SELECT * FROM member";
$ret = $mysqli->query( $sql );
?>

<script>
    function dle_confirm(name){
        return confirm("確定刪除"+name+"?");
    }

</script>
<a href="sample62.php">新會員</a><br>
<table border="1">
    <tr>
        <td width="100">編號</td>
        <td width="100">帳號</td>
        <td width="600">密碼</td>
        <td width="100">姓名</td>
        <td width="100">刪除</td>
        <td width="100">修改</td>
    </tr>
    <?php
    while ( $data = $ret->fetch_object() ) {
        echo '<tr>';
        echo "<td>{$data->id}</td>";
        echo "<td>{$data->account}</td>";
        echo "<td>{$data->passwd}</td>";
        echo "<td>{$data->relname}</td>";
        echo "<td><a href='?del={$data->id}' onclick='return dle_confirm(\"{$data->account}\")'>刪除</a></td>";
        echo "<td><a href='sample66.php?alter={$data->id}'>修改</a></td>";
        echo '</tr>';
    }

    ?>
</table>