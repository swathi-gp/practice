<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("tr:even").css("background-color","yellow");
$("tr:odd").css("background-color","pink");
$("tr:odd").click(function(){
$("tr:even").hide();
});
$("tr:even").click(function(){
$("tr:odd").hide();
});
});
</script>
</head>
<body>

<h1>Welcome to My Web Page</h1>

<table border="1">
<tr>
  <th>Company</th>
  <th>Country</th>
</tr>
<tr>
<td>Alfreds Futterkiste</td>
<td>Germany</td>
</tr>
<tr>
<td>Berglunds snabbköp</td>
<td>Sweden</td>
</tr>
<tr>
<td>Centro comercial Moctezuma</td>
<td>Mexico</td>
</tr>
<tr>
<td>Ernst Handel</td>
<td>Austria</td>
</tr>
<tr>
<td>Island Trading</td>
<td>UK</td>
</tr>
</table>

</body>
</html>

