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
<input id="account" onblur="test2()" /><span id="showt"></span><br>
<input id="passwd" ><br>

<!--<input type="button" value="按我" onclick="test1()">-->
<!--<div id="show"></div>-->