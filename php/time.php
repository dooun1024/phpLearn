<?php
// 关于时间转换的一些格式，参照以下这个网站
// http://php.net/manual/zh/function.date.php
echo "<a href='http://php.net/manual/zh/function.date.php'>时间的格式参照</a><br>";

// 获取现在的时间
// 1 获取现在的时间戳
$currentTimestamp = time();
echo "现在的时间戳shi ".$currentTimestamp;
echo "<hr>";

// 2 把时间戳转换为 人能够阅读的格式
$currentTime = date("Y-m-d",$currentTimestamp);
echo "现在的时间Y-m-d格式为 ".$currentTime;
echo "<hr>";

// 3.1 把任意时间转化为时间戳
$timeStr = "2018-12-2";
$timestamp = strtotime($timeStr);
echo "把固定字符串{$timeStr}转换为时间戳得到的是".$timestamp;
echo "<hr>";

// 3.2 把得到的时间戳转换为你要用的格式
$time = date("Y年m月d日",$timestamp);
echo "{$timeStr}被转换为目标格式".$time;
echo "<hr>";

// 4 时间的计算（自加自己减）
$time1 = strtotime('2018-10-01 +1 year');
// 时间加法：增加一年

echo "2018-10-01 加1年得到 ".date('Y-m-d',$time1);;
echo "<hr>";

// 4.2 我想知道75天以后是星期几
$time2 = strtotime(date('Y-m-d')." +75 day");
$time2Str = date("星期N", $time2);
echo "75天以后是 ".$time2Str;
echo "<hr>";



// 5 时间比较
$zero1=strtotime (date("y-m-d h:i:s")); //当前时间  ,注意H 是24小时 h是12小时
$zero2=strtotime ("2020-8-1 00:00:00");  //
//float ceil ( float $value )
//返回不小于 value 的下一个整数，value 如果有小数部分则进一位。
$guonian=ceil(($zero2-$zero1)/86400); //60s*60min*24h
echo "离过东京奥运会还有<strong>$guonian</strong>天！";




?>
<table class="doctable table">
	<caption><strong>格式字串可以识别以下 <code class="parameter">format</code> 参数的字符串</strong></caption>

	<thead>
	<tr>
		<th><code class="parameter">format</code> 字符</th>
		<th>说明</th>
		<th>返回值例子</th>
	</tr>

	</thead>

	<tbody class="tbody">
	<tr>
		<td style="text-align: center;"><em class="emphasis">日</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>d</em></td>
		<td>月份中的第几天，有前导零的 2 位数字</td>
		<td><em>01</em> 到 <em>31</em></td>
	</tr>

	<tr>
		<td><em>D</em></td>
		<td>星期中的第几天，文本表示，3 个字母</td>
		<td><em>Mon</em> 到 <em>Sun</em></td>
	</tr>

	<tr>
		<td><em>j</em></td>
		<td>月份中的第几天，没有前导零</td>
		<td><em>1</em> 到 <em>31</em></td>
	</tr>

	<tr>
		<td><em>l</em>（“L”的小写字母）</td>
		<td>星期几，完整的文本格式</td>
		<td><em>Sunday</em> 到 <em>Saturday</em></td>
	</tr>

	<tr>
		<td><em>N</em></td>
		<td>ISO-8601 格式数字表示的星期中的第几天（PHP 5.1.0 新加）</td>
		<td><em>1</em>（表示星期一）到 <em>7</em>（表示星期天）</td>
	</tr>

	<tr>
		<td><em>S</em></td>
		<td>每月天数后面的英文后缀，2 个字符</td>
		<td><em>st</em>，<em>nd</em>，<em>rd</em>
			或者 <em>th</em>。可以和 <em>j</em> 一起用</td>
	</tr>

	<tr>
		<td><em>w</em></td>
		<td>星期中的第几天，数字表示</td>
		<td><em>0</em>（表示星期天）到 <em>6</em>（表示星期六）</td>
	</tr>

	<tr>
		<td><em>z</em></td>
		<td>年份中的第几天</td>
		<td><em>0</em> 到 <em>365</em></td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">星期</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>W</em></td>
		<td>ISO-8601 格式年份中的第几周，每周从星期一开始（PHP 4.1.0 新加的）</td>
		<td>例如：<em>42</em>（当年的第 42 周）</td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">月</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>F</em></td>
		<td>月份，完整的文本格式，例如 January 或者 March</td>
		<td><em>January</em> 到 <em>December</em></td>
	</tr>

	<tr>
		<td><em>m</em></td>
		<td>数字表示的月份，有前导零</td>
		<td><em>01</em> 到 <em>12</em></td>
	</tr>

	<tr>
		<td><em>M</em></td>
		<td>三个字母缩写表示的月份</td>
		<td><em>Jan</em> 到 <em>Dec</em></td>
	</tr>

	<tr>
		<td><em>n</em></td>
		<td>数字表示的月份，没有前导零</td>
		<td><em>1</em> 到 <em>12</em></td>
	</tr>

	<tr>
		<td><em>t</em></td>
		<td>指定的月份有几天</td>
		<td><em>28</em> 到 <em>31</em></td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">年</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>L</em></td>
		<td>是否为闰年</td>
		<td>如果是闰年为 <em>1</em>，否则为 <em>0</em></td>
	</tr>

	<tr>
		<td><em>o</em></td>
		<td>ISO-8601 格式年份数字。这和
			<em>Y</em> 的值相同，只除了如果 ISO
			的星期数（<em>W</em>）属于前一年或下一年，则用那一年。（PHP 5.1.0 新加）</td>
		<td>Examples: <em>1999</em> or <em>2003</em></td>
	</tr>

	<tr>
		<td><em>Y</em></td>
		<td>4 位数字完整表示的年份</td>
		<td>例如：<em>1999</em> 或 <em>2003</em></td>
	</tr>

	<tr>
		<td><em>y</em></td>
		<td>2 位数字表示的年份</td>
		<td>例如：<em>99</em> 或 <em>03</em></td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">时间</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>a</em></td>
		<td>小写的上午和下午值</td>
		<td><em>am</em> 或 <em>pm</em></td>
	</tr>

	<tr>
		<td><em>A</em></td>
		<td>大写的上午和下午值</td>
		<td><em>AM</em> 或 <em>PM</em></td>
	</tr>

	<tr>
		<td><em>B</em></td>
		<td>Swatch Internet 标准时</td>
		<td><em>000</em> 到 <em>999</em></td>
	</tr>

	<tr>
		<td><em>g</em></td>
		<td>小时，12 小时格式，没有前导零</td>
		<td><em>1</em> 到 <em>12</em></td>
	</tr>

	<tr>
		<td><em>G</em></td>
		<td>小时，24 小时格式，没有前导零</td>
		<td><em>0</em> 到 <em>23</em></td>
	</tr>

	<tr>
		<td><em>h</em></td>
		<td>小时，12 小时格式，有前导零</td>
		<td><em>01</em> 到 <em>12</em></td>
	</tr>

	<tr>
		<td><em>H</em></td>
		<td>小时，24 小时格式，有前导零</td>
		<td><em>00</em> 到 <em>23</em></td>
	</tr>

	<tr>
		<td><em>i</em></td>
		<td>有前导零的分钟数</td>
		<td><em>00</em> 到 <em>59</em>&gt;</td>
	</tr>

	<tr>
		<td><em>s</em></td>
		<td>秒数，有前导零</td>
		<td><em>00</em> 到 <em>59</em>&gt;</td>
	</tr>

	<tr>
		<td><em>u</em></td>
		<td>
			毫秒 （PHP 5.2.2 新加）。需要注意的是
			<span class="function"><strong>date()</strong></span> 函数总是返回
			<em>000000</em> 因为它只接受 <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
			参数， 而 <span class="methodname"><a href="datetime.format.php" class="methodname">DateTime::format()</a></span> 才支持毫秒。
		</td>
		<td>示例: <em>654321</em></td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">时区</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>e</em></td>
		<td>时区标识（PHP 5.1.0 新加）</td>
		<td>例如：<em>UTC</em>，<em>GMT</em>，<em>Atlantic/Azores</em></td>
	</tr>

	<tr>
		<td><em>I</em></td>
		<td>是否为夏令时</td>
		<td>如果是夏令时为 <em>1</em>，否则为 <em>0</em></td>
	</tr>

	<tr>
		<td><em>O</em></td>
		<td>与格林威治时间相差的小时数</td>
		<td>例如：<em>+0200</em></td>
	</tr>

	<tr>
		<td><em>P</em></td>
		<td>与格林威治时间（GMT）的差别，小时和分钟之间有冒号分隔（PHP 5.1.3 新加）</td>
		<td>例如：<em>+02:00</em></td>
	</tr>

	<tr>
		<td><em>T</em></td>
		<td>本机所在的时区</td>
		<td>例如：<em>EST</em>，<em>MDT</em>（【译者注】在 Windows
			下为完整文本格式，例如“Eastern Standard Time”，中文版会显示“中国标准时间”）。</td>
	</tr>

	<tr>
		<td><em>Z</em></td>
		<td>时差偏移量的秒数。UTC 西边的时区偏移量总是负的，UTC 东边的时区偏移量总是正的。</td>
		<td><em>-43200</em> 到 <em>43200</em></td>
	</tr>

	<tr>
		<td style="text-align: center;"><em class="emphasis">完整的日期／时间</em></td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td><em>c</em></td>
		<td>ISO 8601 格式的日期（PHP 5 新加）</td>
		<td>2004-02-12T15:19:21+00:00</td>
	</tr>

	<tr>
		<td><em>r</em></td>
		<td>RFC 822 格式的日期</td>
		<td>例如：<em>Thu, 21 Dec 2000 16:01:07 +0200</em></td>
	</tr>

	<tr>
		<td><em>U</em></td>
		<td>从 Unix 纪元（January 1 1970 00:00:00 GMT）开始至今的秒数</td>
		<td>参见 <span class="function"><a href="function.time.php" class="function">time()</a></span></td>
	</tr>

	</tbody>

</table>



