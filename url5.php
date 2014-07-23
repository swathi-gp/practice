<?php
$file=file_get_contents('/var/www/country_list.txt');
		$code=substr(highlight_file($file,true), 36, -15);
		$lines=explode('<br />',$code);
		$lineCount=count($lines);
		$padLength=strlen($lineCount);
		echo "<code><span style=\"color:#000000\">";
		foreach($lines as $li=>$line)
		{
			$lineNumber=str_pad($i+1,$padLength,'0',STR_PAD_LEFT);
			echo sprintf('<br><span style="color:#999999">%s | </span>%s',$lineNumber,$line);
		
		}
	echo "</span></code>";
	highlight_string('<?php phpinfo(); ?>');
