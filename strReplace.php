function srtReplace($imgUrl){
	$path_info = pathinfo($imgUrl);
	$theType = $path_info['extension'];
	$theImgUrl=str_replace(".".$theType,"-113x113.".$theType,$imgUrl);
	return $theImgUrl;
}