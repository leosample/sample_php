<?php
$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );
//$sql = "SELECT * FROM gotw WHERE name LIKE '%餐廳'";
//$sql = "SELECT * FROM gotw WHERE city LIKE '臺_市'";
//$sql = "SELECT * FROM gotw WHERE 1 ORDER BY lng DESC";
//$sql = "SELECT * FROM gotw LIMIT 10";
$sql = "SELECT id FROM gotw";
$rel = $mysqli->query($sql);
$total = $rel->num_rows;


$rpp = 10;
$page = 1;
if ( isset( $_GET['page'] ) ) $page = $_GET['page'];
$start = ($page-1)*$rpp;
$maxPage = ceil($total/$rpp);



$prev = $page==1?1:$page-1;
$next = $page==$maxPage?$page:$page+1;
$sql = "SELECT * FROM gotw LIMIT {$start},{$rpp}";

$rel = $mysqli->query( $sql );
?>
<a href="?page=<?php echo $prev; ?>">上一頁</a>｜<a href="?page=<?php echo $next; ?>">下一頁</a>
<table border="1" width="100%">
    <tr>
        <th>編號</th>
        <th>縣市</th>
        <th>城鎮</th>
        <th>名稱</th>
        <th>緯度</th>
        <th>經度</th>
    </tr>
    <?php
    while ( $data = $rel->fetch_object() ) {
        echo '<tr>';
        echo "<td>{$data->id}</td>";
        echo "<td>{$data->city}</td>";
        echo "<td>{$data->town}</td>";
        echo "<td>{$data->name}</td>";
        echo "<td>{$data->lat}</td>";
        echo "<td>{$data->lng}</td>";
        echo '</tr>';
    }
    ?>
</table>
