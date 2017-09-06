<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
       setInterval(function(){
           $.set("sample72.php",function(data,status){
               $("#dataarea").html(data);
           });
       },3000);
    });
</script>


<h1>Sample Company</h1>
<hr>
<div id="dataarea"></div>