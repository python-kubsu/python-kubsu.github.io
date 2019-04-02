<html>
<head>
<meta charset="UTF-8">
<title>Tests</title>
<LINK href="../css/style-test.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/ico" href="../img/favicon.ico" />
	<link rel="stylesheet" href="../libs/960_12_col.css">
</head>
<body>
		<header>
			<div class="container_12">
					<div class="grid_4">
							<a href="../index.html" class="logo"><img src="../img/python-logo.png" alt="" ></a>
					</div>
					<div class="grid_8">
						<nav class="mnu_top">
								<ul>
									<li class="active"><a href="../index.html">Главная </a><span class="top_hover"></span></li>
									<li><a href="../lessons/lessons.html">Уроки</a><span class="top_hover"></span></li>
									<li><a href="test.html">Тест</a><span class="top_hover"></span></li>
									<li><a href="#">Доп материалы</a><span class="top_hover"></span></li>
								</ul>
						</nav>
					</div>
			</div>
		</header>

<table bgcolor="#fff" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" valign="top">
<tr height="100%">
<td width="5%"></td>
<td width="90%" height="100%" valign="top" class="test">
<table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" valign="top">
<tr height="40">
	<td width="100%"><h1>Результаты в форме таблицы</h1><br></td>
</tr>

<?
$q=$_POST['q'];

$ansv = array(4, 4, 2, 1, 1, 2, 5, 5);

$sum=0;

for ($i=0; $i<=7; $i++) {

if (empty($q[$i])) {$q[$i]="Без ответа";}

if ($ansv[$i]==$q[$i]) {

$sum=$sum+1;

$A[$i]="
<tr height=\"10\">
	<td width=\"50%\">Ваш ответ: <font style=\"background: #006600;color: #ffffff;padding: 4px;\"><b>$q[$i]</b></font></td>
	<td width=\"50%\" align=\"center\"  bgcolor=\"#0389d0\"><h3>Верно</h3></td>
</tr>
";

}
elseif ($ansv[$i]!==$q[$i]) {

$A[$i]="
<tr height=\"10\">
	<td width=\"50%\">Ваш ответ: <font style=\"background: #006600;color: #ffffff;padding: 4px;\"><b>$q[$i]</b></font>
	&nbsp;&nbsp;&nbsp;
	Верный ответ: <font style=\"background: #0389d0;color: #ffffff;padding: 4px;\"><b>$ansv[$i]</b></font>
	</td>
	<td width=\"50%\" align=\"center\"  bgcolor=\"#ff0000\"><h3>НЕверно</h3></td>
</tr>
";

}

}

echo "
<tr height=\"40\">
	<td width=\"100%\"><h1>Правильных ответов: $sum из 8</h1><br></td>
</tr>
";

?>

<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 1</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Найти производную функции z=-3x<sup>2</sup>y в точке М(9;7) в направление l, составляющем 30<sup>o</sup> с положительным направлением оси OX.<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) y<sub>наи</sub>=2 y<sub>наиб</sub>=3 &nbsp;&nbsp;
	2) -452.858 &nbsp;&nbsp;
	3) -454.858 &nbsp;&nbsp; 4) -448.858 &nbsp;&nbsp; 5) -442.858 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[0]; ?>

		</table>
	</td>
</tr>


<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 2</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Найти производную функции z=6x<sup>3</sup>+6y<sup>3</sup> в точке М(8;8) в направление l, составляющем 60<sup>o</sup> с положительным направлением оси OX.<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) 1579.661 &nbsp;&nbsp;
	2) 1580.661 &nbsp;&nbsp;
	3) 1582.661 &nbsp;&nbsp; 4) 1573.661 &nbsp;&nbsp; 5) 1583.661 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[1]; ?>

		</table>
	</td>
</tr>


<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 3</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Вычислить u'<sub>x</sub>+u'<sub>y</sub>+u'<sub>z</sub> в точке M(-1;4;3), если u=3x<sup>2</sup>-6<sup>y</sup>-4z<sup>3</sup><br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) -400 &nbsp;&nbsp;
	2) -402 &nbsp;&nbsp;
	3) -408 &nbsp;&nbsp; 4) -393 &nbsp;&nbsp; 5) -409 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[2]; ?>

		</table>
	</td>
</tr>


<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 4</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Вычислить u'<sub>x</sub>+u'<sub>y</sub>+u'<sub>z</sub> в точке M(2;-1;3), если u=ln(-5+4x-6y<sup>2</sup>+5z<sup>3</sup>)<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) 1.144 &nbsp;&nbsp;
	2) 7.144 &nbsp;&nbsp;
	3) 3.144 &nbsp;&nbsp; 4) -4.856 &nbsp;&nbsp; 5) 4.144 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[3]; ?>

		</table>
	</td>
</tr>



<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 5</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Определить существование экстремума функции z=-5x<sup>2</sup>-8xy-3y<sup>2</sup>+24x+14y+5<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) Нет экстремума &nbsp;&nbsp;
	2) Max &nbsp;&nbsp;
	3) Min &nbsp;&nbsp;  	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[4]; ?>	
			
		</table>
	</td>
</tr>




<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 6</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Определить существование экстремума функции z=-8x<sup>2</sup>-16xy-10y<sup>2</sup>+12x+10y+5<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) Нет экстремума &nbsp;&nbsp;
	2) Max &nbsp;&nbsp;
	3) Min &nbsp;&nbsp;  	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[5]; ?>		
			
		</table>
	</td>
</tr>



<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 7</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Вычислить приближенно с помощью дифференциала:<br>b=a<sup>c</sup> (a=3.669 c=5.96)<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) 2287.758 &nbsp;&nbsp;
	2) 2327.055 &nbsp;&nbsp;
	3) 2297.043 &nbsp;&nbsp; 4) 2328.936 &nbsp;&nbsp; 5) 2315.817 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[6]; ?>

		</table>
	</td>
</tr>


<tr height="10">
	<td width="100%">
		<table border="0" cellpadding="10" cellspacing="10" valign="top" width="100%">
			
<tr height="10">
	<td width="100%" colspan="2"><h2>Вопрос № 8</h2></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">Вычислить приближенно с помощью дифференциала: b=a<sup>c</sup> (a=4.932 c=2.43)<br clear="all"></td>
</tr>
<tr height="10">
	<td width="100%" colspan="2">
	1) 34.801 &nbsp;&nbsp;
	2) 26.081 &nbsp;&nbsp;
	3) 67.769 &nbsp;&nbsp; 4) 28.261 &nbsp;&nbsp; 5) 48.321 &nbsp;&nbsp;	
	<br clear="all"><hr>
	</td>
</tr>

<?php echo $A[7]; ?>

		</table>
	</td>
</tr>


	<tr height="100%">
		<td width="100%"></td>
	</tr>
	</table>
</td>
<td width="5%"></td>
</tr>
</table>
</body>
</html>