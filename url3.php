<?php
$url='http://username:password@hostname/path?arg=value#anchor';
print_r(parse_url($url));
echo parse_url($url,PHP_URL_PATH);
echo "<br/>";
echo rawurldecode('foo%20bar%40baz');
echo "<br/>";
echo '<a href="ftp://user:',rawurlencode('foo @+%/'),
'@ftp.example.com/x.txt">';
$str= base64_encode('swathi');
echo $str;
echo "<br/>";
echo "Hello ";
$str=base64_decode($str);
echo $str;
echo "<br/>";
$str=convert_uuencode($str);
echo $str;
echo "<br/><br/>";
$str=convert_uudecode($str);
echo $str;
?>
