<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
$("#t1").click(function(){
$("#test").hide();
});
$("*").click(function(){
$("#test1").hide();
});
});
</script>
</head>
<body>
<h2 id="test">This is heading</h2>
<p>this is a paragraph.</p>
<p id="test1">this is another paragraph.</p>
<button id="t1">Click me</button>
<button id="t2">Submit</button>
</body>
</html>
