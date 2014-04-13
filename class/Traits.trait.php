<?php

trait documented {
	public static function doc()
	{
		$filename = get_class($this).".class.txt";
		$doc = "<- ".get_class($this)." ----------------------------------------------------------------------". PHP_EOL;
		if (file_exists($filename))
			$doc .= file_get_contents($filename);
		$doc .= "---------------------------------------------------------------------- ".get_class($this)." ->". PHP_EOL;
		return $doc;
	}
}

?>