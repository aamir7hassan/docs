<?php
	
	// https://ui-avatars.com/api/?background=01172F&color=fff&name=aamir&rounded=true'
	// this url  will generate an image like gmail generates with only first 2 alphabets.
semantic errors = those errors that excutes programs without errors, but gives unwanted results/output.
mnemonics = descriptive variable names.
	
Your sql query $log=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' "); ignored upper/lower letters and considers "e"=="é" etc, i recommended this: $log=mysql_query("SELECT * FROM users WHERE username LIKE BINARY '$username' AND password LIKE BINARY '$password' ");

-----------------------------------------------------------------------------------

$query = "UPDATE  `".$this->config->item('SITE_ID')."meals` SET show_available = CASE WHEN show_available = '1' THEN '0' ELSE '1' END
        WHERE   id = ".$meal_id;

-----------------------------------------------------------------------------------

$('#front').is( ":checked" )? '1' : '0';
--------------------------------------------------------------------

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

/*------------------------------------------------------------------*/
// converting obj to array column
$budgetCol = array_map(function($e) {
	return is_object($e) ? $e->order_id : $e['order_id'];
}, $ordersD);
	
	
$kk = array_search($det['order_id'], array_column($orders, 'id'));
$k = $orders[$kk]->budget;

$result = "'" . implode ( "', '", $temp ) . "'";

/*------------------------------------------------------------------*/
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

var data = $('.form-login').serializeArray();

$params = array();
parse_str($_GET, $params);



$('#myModal').modal({backdrop: 'static', keyboard: false})  

button data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false">
    Launch demo modal
 </button>`

/*------------------------------------------------------------------*/
if($('#checkSurfaceEnvironment').not(':checked').length){
       alert('Not checked');
    } else {
     alert('Checked')
    } 
/*------------------------------------------------------------------*/

<script>
	<?php 
		if($this->session->has_userdata('data')) {
			$msg = $this->session->userdata('data');
			$class= $this->session->userdata('class');
	?>
		toastr.<?=$class?>('<?=$msg?>');
	<?php
		}
	?>
</script>

/* -------------------------------------------------------------------*/

// this will return all selected checkboxs
var arr = $("input[name='forwardmsg[]']:checked").map(function() {
	return $(this).val();
}).get();

/*--------------------------------------------------------------------*/

// php and ,mysql timezones synchronization
/*
	In PHP:

	define('TIMEZONE', 'Europe/Paris');
	date_default_timezone_set(TIMEZONE);
	
For MySQL:


$now = new DateTime();
$mins = $now->getOffset() / 60;
$sgn = ($mins < 0 ? -1 : 1);
$mins = abs($mins);
$hrs = floor($mins / 60);
$mins -= $hrs * 60;
$offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);

//Your DB Connection - sample
$db = new PDO('mysql:host=localhost;dbname=test', 'dbuser', 'dbpassword');// connection
$db->exec("SET time_zone='$offset';");
https://stackoverflow.com/questions/34428563/set-timezone-in-php-and-mysql

---------------------------------------------------------------------------
*/

/* 
	
	//Replace the special html characters
	function replace_special_character($text) {
		ereg_replace('à', 'a\'', $text);	// Replace à with &agrave;
		ereg_replace('è', 'e\'', $text);	// Replace è with &egrave;
		ereg_replace('è', 'e\'', $text);	// Replace è with &egrave;
		ereg_replace('ì', 'i\'', $text);	// Replace è with &egrave;
		ereg_replace('ò', 'o\'', $text);	// Replace è with &egrave;
		ereg_replace('ù', 'u\'', $text);	// Replace è with &egrave;
		return $text;
	}
	
	function clean($string) {
		$string = str_replace(["-", "–"], ' ', $string);
		$string = str_replace('  ', ' ', $string);
		$string = str_replace('   ', ' ', $string);
		$string = str_replace(' ', '-', $string);
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
		$string = str_replace("--", "-", $string);
		return strtolower($string);
	}

*/

function get_avatar($text){
	return "https://ui-avatars.com/api/?name=".urldecode($text)."&background=5578eb&color=fff&font-size=0.5&rounded=true";
}

function isValidUrl(url) {
    return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}

// converts all links to hyperlinks in a string
function linkify($value, $protocols = array('http', 'mail'), array $attributes = array())
    {
        // Link attributes
        $attr = '';
        foreach ($attributes as $key => $val) {
            $attr .= ' ' . $key . '="' . htmlentities($val) . '"';
        }
        
        $links = array();
        
        // Extract existing links and tags
        $value = preg_replace_callback('~(<a .*?>.*?</a>|<.*?>)~i', function ($match) use (&$links) { return '<' . array_push($links, $match[1]) . '>'; }, $value);
        
        // Extract text links for each protocol
        foreach ((array)$protocols as $protocol) {
            switch ($protocol) {
                case 'http':   
                case 'https':   $value = preg_replace_callback('~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i', function ($match) use ($protocol, &$links, $attr) { if ($match[1]) $protocol = $match[1]; $link = $match[2] ?: $match[3]; return '<' . array_push($links, "<a $attr href=\"$protocol://$link\">$protocol://$link</a>") . '>'; }, $value); break;
				
                case 'mail':    $value = preg_replace_callback('~([^\s<]+?@[^\s<]+?\.[^\s<]+)(?<![\.,:])~', function ($match) use (&$links, $attr) { return '<' . array_push($links, "<a $attr href=\"mailto:{$match[1]}\">{$match[1]}</a>") . '>'; }, $value); break;
				
                case 'twitter': $value = preg_replace_callback('~(?<!\w)[@#](\w++)~', function ($match) use (&$links, $attr) { return '<' . array_push($links, "<a $attr href=\"https://twitter.com/" . ($match[0][0] == '@' ? '' : 'search/%23') . $match[1]  . "\">{$match[0]}</a>") . '>'; }, $value); break;
				
                default:        $value = preg_replace_callback('~' . preg_quote($protocol, '~') . '://([^\s<]+?)(?<![\.,:])~i', function ($match) use ($protocol, &$links, $attr) { return '<' . array_push($links, "<a $attr href=\"$protocol://{$match[1]}\">{$match[1]}</a>") . '>'; }, $value); break;
            }
        }
        
        // Insert all link
        return preg_replace_callback('/<(\d+)>/', function ($match) use (&$links) { return $links[$match[1] - 1]; }, $value);
    }
-----------------------------------------------------------------------------------------------------------------------------
// detecting timezone
this.set_timezone = function(){
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://api.ip.sb/geoip",
		"dataType": "jsonp",
		"method": "GET",
		"headers": {
			"Access-Control-Allow-Origin": "*"
		}
	}
	
	$.ajax(settings).done(function (response) {
		var timezone = response.timezone;
		$.post(PATH+"timezone", {token:token, timezone:timezone}, function(){});
		$(".auto-select-timezone").val(timezone);
	});
};

-----------------------------------------------------------------------------------------------------------------------------
 