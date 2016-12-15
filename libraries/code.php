<?

// 先随机产生验证码上的内容
session_start();
$content=rand(1000,9999);


// session（方便后面校验），

$_SESSION['yzm_code']=$content;

$img_width=200;
$img_height=30;

// 创建图片：宽度和高度
$im=imagecreate($img_width,$img_height);

// 定义背景颜色
$gray=imagecolorallocate($im,200,200,200);
// 定义字体颜色
$white=imagecolorallocate($im,255,255,255);
$blank=imagecolorallocate($im,0,0,0);




//是填充图片的背景色，分别从左上角：0 0 
imagefill($im,0,0,$gray);


// 生成干扰元素start


// x1 和 y1 是开始坐标    x2和y2是结束的坐标
$y1 = rand(0, $img_height); 
$y2 = rand(0, $img_height); 
$y3 = rand(0, $img_height); 
$y4 = rand(0, $img_height); 
imageline($im, 0, $y1, $img_width, $y3, $blank); 
imageline($im, 0, $y2, $img_width, $y4, $blank); 


for ($i=0; $i <80 ; $i++) { 
	 imagesetpixel($im, rand(0,$img_width), rand(0,$img_height), $blank);
}

 

// 生成干扰元素end








// 把随机内容放入图片中，
// 参数：图片对象、内容字体大小、x坐标、y坐标、内容、内容颜色

imagestring($im, 5, 80, 5, $content, $white);

// 绘图
imagepng($im);

//释放内存
imagedestroy($im);

?>