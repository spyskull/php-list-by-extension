<?php
namespace FreedomJsk;
class FileLister{
	public static function listData($folder, $extension = ""){
		$result = [];
		if ($handle = opendir($folder)){

			/* This is the correct way to loop over the directory. */
			while (false !== ($entry = readdir($handle))) {
				$e = "";
				$exts = explode(".", $entry);
				$e = end($exts);
				if($e == $extension || !$extension){
					$result[] = $entry;
				}
			}
			
			closedir($handle);
		}
		return $result;
	}
}