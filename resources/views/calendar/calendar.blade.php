<?php
//今日を取得
function getToday($date = 'Y-m-d') {
    $today = new DateTime();
    return $today->format($date);
}
//本日かどうかチェック
function isToday($year, $month, $day) {
	
	$today = getToday('Y-n-j');
	
	if ($today == $year."-".$month."-".$day) {
		return true;
	}
	return false;
}
// 今週の日曜日の日付を返す
function getSunday() {
    $today = new DateTime();
    $w = $today->format('w');
    $ymd = $today->format('Y-m-d');
    
    if ($w == 0) {
        $d = 6;
    }
    else {
        $d = $w - 1;
    }
    
    $next_prev = new DateTime($ymd);
    $next_prev->modify("-{$d} day");
    return $next_prev->format('Ymd');
}
//N日（週）+か-する関数
function getNthDay($year, $month, $day, $n) {
 
	$next_prev = new DateTime($year.'-'.$month.'-'.$day);
	$next_prev->modify($n);
	return $next_prev->format('Ymd');
}
 
//週間カレンダー表示
		if (isset($_GET['date'])) {
			//年月日取得
			$year_month_day = $_GET['date'];
 
		} 
		else {
			//今週日曜日取得
			$year_month_day = getSunday();
 
		}
 
		//年月日に変数で取得
		$year  = substr($year_month_day, 0, 4); 
		$month = substr($year_month_day, 4, 2); 
		$day   = substr($year_month_day, 6, 2); 
		$month = sprintf("%01d", $month);
		$day   = sprintf("%01d", $day);
 
		$next_week = getNthDay($year, $month, $day, '+1 week');
		$pre_week  = getNthDay($year, $month, $day, '-1 week');
 
		$table = NULL;
		//週間の日付出力
		for ($i = 0; $i < 7; $i++) { 
				$ymd = getNthDay($year, $month, $day, '+'.$i.' day');
				$y = substr($ymd, 0, 4); 
				$m = substr($ymd, 4, 2); 
				$d = substr($ymd, 6, 2); 
				$n = sprintf("%01d", $m);
				$j = sprintf("%01d", $d);
				$t = $j;
 
			if (isToday($y, $n, $j)){
				$table .= '<td class="today">'. $t  . '</td>' . PHP_EOL;
                            
			}
			else {
				$table .= '<td>' . $t . '</td>' . PHP_EOL;
 
			}
		}
?>

<table class="cal">
    <tr>
        <th colspan="2"><a href="<?php $_SERVER['SCRIPT_NAME'];?>?date=<?php echo $pre_week;?>">&laquo; prev week</a></td>
        <th colspan="3"><?php echo $year;?> / <?php echo $month;?></td>
        <th colspan="2"><a href="<?php $_SERVER['SCRIPT_NAME'];?>?date=<?php echo $next_week;?>">next week &raquo;</a></td>
    </tr>
    <tr>
        <td>Sun</td>
        <td>Mon</td>
        <td>Tue</td>
        <td>Wed</td>
        <td>Thu</td>
        <td>Fri</td>
        <td>Sat</td>
    </tr>
    <tr>
        <?php echo $table; ?>
    </tr>
    <tr>
        @for ($i = 0; $i < 7; $i++)
            <?php
                $s = getSunday();
                $ye = substr($s, 0, 4);
                $mo = substr($s, 4, 2);
                $da = substr($s, 6, 2) + $i;
                $pday = $ye . "-" . $mo . "-" . $da;
            ?>
            
            <td>
            @foreach ($plans as $plan)
                
                @if ($pday == $plan->date)
                    {{ $plan->freetime }}
                        
                    {!! Form::open(['route' => ['plans.destroy', $plan->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                    
                @endif
                
            @endforeach
            </td>
        @endfor
    </tr>
    
</table>


<style type="text/css">
table {
    width: 700px;
    margin-left: auto;
    margin-right: auto;
    border-style: none;
}
table th {
    background: #EEEEEE;
    text-align: center;
    padding: 5px;
}
table td {
    width: 50px;
    border: 1px solid #CCCCCC;
    text-align: center;
    padding: 5px;
}
</style>


