<?php


class Logger{
	public function WriteLog($logStream){
		date_default_timezone_set('Asia/Colombo');
		$_LOGFILE = 'LogData.log';
		
		$file = fopen($_LOGFILE, 'a');
		fwrite($file, '['.date('D M j G:i:s T Y').'] '.$logStream.'\n');
		fclose($file);
	}
}
?>
