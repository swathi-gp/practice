<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("a[target='_blank']").hide();
  });
});
</script>
</head>
<body>

<h2>This is a heading</h2>
<p>This is a paragraph.</p>
<p target="_blank">This is another paragraph.</p>
<p><a href="http://www.w3schools.com/html/" target="_blank">HTML Tutorial</a></p>
<p><a href="http://www.w3schools.com/css/" target="_blank">CSS Tutorial</a></p>
<button>Click me</button>

</body>
</html>
