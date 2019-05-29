#!/usr/bin/env php
<?php 

$CUR_PATH = dirname(__DIR__) ;

function lists($dir)
{
	$lists = scandir($dir);
	foreach ($lists as $key => $val)
	{
		if($val != '.' && $val != '..' )
		{
			echo $val . "\n";
			var_dump(is_dir($dir . '/' . $val));
		}
	}
	// return $lists;
}

print_r(lists($CUR_PATH));

// echo $CUR_PATH;
