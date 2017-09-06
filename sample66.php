<?php
if ( !isset( $_GET['alter'] ) ) {
    header( "Location:sample62.php" );
}

$alter = $_GET['alter'];
$sql = "SELECT * FROM member WHERE id={$alter}";
$mysqli = new mysqli( 'localhost' , 'root' , 'root' , 'gosql' );
$ret = $mysqli->query($sql);
$data = $ret->fetch_object();

?>
<script>
    function test1() {
        $.get("sample69.php", function (data, status) {
            $("#show").html(data + ":" + status);
        });
    }
    function test2(){
        var account = $("#account").val();
        var id = $("#id").val();
        $.get("sample69.php?account="+account+"&id="+id, function (data, status) {
            if(data>0){
                $("#showt").html("此帳號已經有，請換個帳號。");
                $("#account").focus();
            }else{
                $("#showt").html("");
            }
        });
    }

</script>

<h1>修改資料</h1>
<form action="sample67.php">
    <input type="hidden" name="id" value="<?php echo $alter ?>">
    帳號：<input name="account" onblur="test2()" value="<?php echo $data->account; ?>"/><span id="showt"></span><br>
    密碼：<input type="password" name="passwd"><br>
    姓名：<input name="relname" value="<?php echo $data->relname; ?>"/><br>
    <input type="submit" value="確定">
</form>