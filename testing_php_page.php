<?php
	
function button_press_y_n(){
	$press =0;

		if (isset($_GET['button1'])){
	$press = 1;
	
}
else{}

if (isset($_GET['button2'])){
	$press = -1;
	
}
else{}

return($press);
	



}



/*
function button_press_keep_track($press){
	
	
		if (isset($_GET['button1'])){
	$press = $press +1;
	
}
else{}

if (isset($_GET['button2'])){
	$press = $press -1;
	
}
else{}

return($press);
	



}

 */



// below function will combine the page information 
//from the webpage we are on, var_ which will be a number, and 
//when button hit yn != 0 
/*function change_display_num($array_num){
if(button_press_y_n()== '1'){
	$array_num = $array_num +1;
	page_info($array_num);
}
elseif(button_press_y_n()== '-1'){
	$array_num = $array_num -1;
	page_info($array_num);
}
else{}
return($array_num);
}
*/

//below function will force the site to wait to update
/*function wait(){
	
	while(1){
		if(button_press_y_n() != 0){
			//$x++;
			
			continue;
			
		}
		else{
			$y=0;
			while($y<200){
				$y++;
			}
		}	
	}
	return(0);
	
}
*/

/*
function request_URI() {

    if(!isset($_SERVER['REQUEST_URI'])) {
        $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
        if($_SERVER['QUERY_STRING']) {
            $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
        }
    }
    return $_SERVER['REQUEST_URI'];
}

$_SERVER['REQUEST_URI'] = request_URI();*/

function page_info($h){
	
	//$h = request_URI();
switch ($h) {
	


	case 0:
			include '/Endoscopy_intro.html';
    break;
//////////////////////////////////////////////////////////////
    case 1:
			include '/Endoscopy_0.html';	

				
    break;
//////////////////////////////////////////////////////////////	
    case 2:
			include '/Endoscopy_1.html';
			
    break;
//////////////////////////////////////////////////////////////		
	case 3:
			include '/Endoscopy_2.html';
			
    break;
//////////////////////////////////////////////////////////////		
	case 4:
			include '/Endoscopy_3.html';
			
    break;
//////////////////////////////////////////////////////////////		
	case 5:
			include '/Endoscopy_4.html';
    break;
//////////////////////////////////////////////////////////////	
   case 6:
			include '/Endoscopy_5.html';
   break;
//////////////////////////////////////////////////////////////	
   case 7:
			include '/Endoscopy_6.html';
   break;
//////////////////////////////////////////////////////////////	
   case 8:
			include '/Endoscopy_7.html';
   break;
//////////////////////////////////////////////////////////////	
   case 9:
			include '/Endoscopy_8.html';
   break;
//////////////////////////////////////////////////////////////	
   case 10:
			include '/Endoscopy_9.html';
   break;
//////////////////////////////////////////////////////////////	
   case 11:
			include '/Endoscopy_10.html';
   break;
//////////////////////////////////////////////////////////////	
   case 12:
			include '/Endoscopy_11.html';
   break;
//////////////////////////////////////////////////////////////		
		default:
		include '/Endoscopy_end.html';
		
		
	}
	
}
/*require_once(button_press_y_n() !=0)
	
index_pages(button_press());
*/
//change_on_page();



	
	
	
//page_info(change_display_num($array_num));
/*function write_to_txt(){
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $array_num;
fwrite($myfile, $txt);
fclose($myfile);
}

//reads from txt
function read_from_txt(){
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$val= fread($myfile, filesize("newfile.txt"));
fclose($myfile);	

return($val);
	
}
*/
$array = [
    "0" => "/Endoscopy_intro.html",
    "1" => '/Endoscopy_0.html',
    "2" => '/Endoscopy_1.html',
	"3" => '/Endoscopy_2.html',
	"4" => '/Endoscopy_3.html',
	"5" => '/Endoscopy_4.html',
	"6" => '/Endoscopy_5.html',
	"7" => '/Endoscopy_6.html',
	"8" => '/Endoscopy_7.html',
	"9" => '/Endoscopy_8.html',
	"10" => '/Endoscopy_9.html',
	"11" => '/Endoscopy_10.html',
	"12" => '/Endoscopy_11.html',
	"13" => '/Endoscopy_end.html',
];

 $array_reverse =[
    "/Endoscopy_intro.html"=> '0',
     '/Endoscopy_0.html'=> '1',
    '/Endoscopy_1.html' =>'2',
	 '/Endoscopy_2.html'=>'3',
	 '/Endoscopy_3.html'=>'4',
	 '/Endoscopy_4.html'=>'5',
	'/Endoscopy_5.html'=>'6',
	 '/Endoscopy_6.html'=>'7',
	 '/Endoscopy_7.html'=>'8',
	'/Endoscopy_8.html'=>'9',
	'/Endoscopy_9.html'=>'10',
	 '/Endoscopy_10.html'=>'11',
	 '/Endoscopy_11.html'=>'12',
	 '/Endoscopy_end.html'=>'13',

];
global $array;
global $array_reverse;
//$array_num = read_from_txt();

//global $array_num;


/*if(button_press_y_n() == 1){
	$array_num++;
	write_to_txt();
	page_info($array_num);
	
}elseif(button_press_y_n() == -1){
	$array_num-- ;
	write_to_txt();
	page_info($array_num);
	
	
}else{
	
	
	
}*/



?>



<input type="button" name="button1" onclick="document.write(' <?php page_info(0);?>' )  value="Session 1">
