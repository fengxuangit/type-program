<?php
/**
	Author : fengxuan
	Date : 2014-12-25 
*/
function  replace_face($content) {
	preg_match_all('/\[.*?\]/is', $content, $array);
	
	if($array[0]){
		$face = F('Face' ,'' ,'./Face/');
		foreach ($array[0] as $v){
				foreach ($face as $key => $value){
					if($v == '['.$value.']'){
						$content = str_replace($v, '<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif" />', $content);
					}
					continue;
				}
		}
	}
	return $content;
}


function node_merge ($node, $pid=0) {
	$arr = array();
	
	foreach ($node as $v) {
		if ($v['pid'] == $pid){
			$v['child'] = node_merge($node, $v['pid']);
			$arr[] = $v;
		}
		
		return $arr;
	}
}

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{
	if(function_exists("mb_substr")){
		if($suffix)
			return mb_substr($str, $start, $length, $charset)."...";
		else
			return mb_substr($str, $start, $length, $charset);
	}
	elseif(function_exists('iconv_substr')) {
		if($suffix)
			return iconv_substr($str,$start,$length,$charset)."...";
		else
			return iconv_substr($str,$start,$length,$charset);
	}
	$re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
	$re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
	$re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
	$re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
	preg_match_all($re[$charset], $str, $match);
	$slice = join("",array_slice($match[0], $start, $length));
	if($suffix) return $slice."…";
	return $slice;
}

function stringcmp ($str1, $str2) {
	$len1 = mb_strlen($str1);
	$len2 = mb_strlen($str2);
	$zql = 0;
	
	for ($i=0; $i < $len1; $i++) {
		if(mb_substr($str1, $i, 1) == mb_substr($str2, $i, 1)){
			$zql++;
		}
	}
	
	$zq = $zql / $len1 * 100;
	
	return $zq;
}





?>