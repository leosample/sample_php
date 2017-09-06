<?php
if(isset($_GET['forname'])){
    echo '打字！';
}
?>
<script>
    function ckfrom(){
        return true;
    }
</script>

<form action="sample24.php" method="get">
    <input name="name"><br>
    <input type="password" name="passw"><br>
    <input type="radio" name="sex" value="m" checked>男
    <input type="radio" name="sex" value="g">女
    <BR>
    <input type="checkbox" name="like[]" value="1">打
    <input type="checkbox" name="like[]" value="2">打
    <input type="checkbox" name="like[]" value="3">打
    <input type="checkbox" name="like[]" value="4">打
    <input type="checkbox" name="like[]" value="5">打
    <input type="checkbox" name="like[]" value="6">打
    <BR>
    <select name="area">
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
        <option value="e">e</option>
        <option value="f">f</option>
    </select>
    <BR>
    <textarea name="memo" rows="10" cols="40"></textarea>
    <BR>
    <input type="file" name="upload">
    <input type="submit" name="foryou" value="確認">
    <input type="submit" name="foryou1" value="瀏覽">

</form>

<hr>

<form action="sample25.php" onsubmit="return ckfrom();" method="get">
    <input name="name"><br>
    <input type="password" name="passw"><br>
    <input type="submit" value="OK">
</form>

<hr>

<form action="sample26.php" onsubmit="return ckfrom();" method="post">
    <input name="name"><br>
    <input type="password" name="passw"><br>
    <input type="submit" value="OK">
</form>



