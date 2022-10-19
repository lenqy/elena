<?php


class Student{
    public $fname;
    public $lastname;
    public $degree_year;
    public $birthday;
}
$picasso = new student();
$picasso -> fname= "Ma. Elena";
$picasso -> lastname= "Fuentes";
$picasso -> degree_year= "Certificate in Computer Technology 2";
$picasso -> birthday= "December 17, 2001";


print_r (" Hello, my name is " . $picasso -> fname . " ".$picasso -> lastname. " ". "I am currently taking up ". $picasso -> degree_year. " and I was born on ". $picasso -> birthday. "."  );

function draw_calendar($month,$year){

	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';


	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;

	$calendar.= '<tr class="calendar-row">';

	for($x = 0; $x < $running_day; $x++){
        $calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
    }

	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
		
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month){
                $calendar.= '<tr class="calendar-row">';
			
			$running_day = -1;
			$days_in_this_week = 0;
            }
			
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;


	$calendar.= '</tr>';


	$calendar.= '</table>';
	

	return $calendar;
}

echo '<h2>December 17 2001</h2>';

echo draw_calendar(12,2001);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table.calendar		{ 
    border-left:1px solid #999; }
td.calendar-day	{
     min-height:80px; font-size:11px; position:relative; }

td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number		{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
</style>
<body>
    
</body>
</html>

