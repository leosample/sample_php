<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    function test1() {
        $.get("sample69.php", function (data, status) {
            $("#show").html(data + ":" + status);
        });
    }
    function test2(){
        var account = $("#account").val();
        $.get("sample69.php?account="+account, function (data, status) {
            if(data>0){
                $("#showt").html("此帳號已經有，請換個帳號。");
                $("#account").focus();
            }else{
                $("#showt").html("");
            }
        });
    }

</script>


<form action="sample63.php" onsubmit="test2()">
    帳號：<input id="account" onblur="test2()" name="account"/><span id="showt"></span><br>
    密碼：<input type="password" name="passwd"><br>
    姓名：<input name="relname"><br>
    <input type="submit" value="確定" >
</form>