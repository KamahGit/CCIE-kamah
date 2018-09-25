<?php
$splash="Niaje Bro naskia unadai Hao?\n";
$splash.="Reply with:\n";
$splash.="(1) For Single Bedroom\n";
$splash.="(2) For Two Bedroom\n";
$splash.="(3) For Three Bedroom\n";
$splash.="(4) For Three Bedroom with parking\n";
echo "$splash";

$handle = fopen ("php://stdin","r");
$line = trim(fgets($handle));
if($line == '1'){
	echo "Single bedroom costs 7000";}
	if($line == '2')
	{
		echo "Two bedroom costs 8000";
	}
if($line == '3')
{
		echo "Three bedroom costs 9000";
}
if($line == '4')
{
		echo "Three bedroom with parking costs 10000";
}
	exit;

fclose($handle);

echo "Bro ama unadai more features?(y/n)";

$handle = fopen ("php://stdin","r");
$line = trim(fgets($handle));

switch ($line) {
	case 'y':
		echo "if you have cash more than 20000 you can get security\n";
		echo "Continue?(y/n)";
		exit;
		fclose($handle);
		break;
	
		case 'n':
		echo "sawa tutaonana";
		exit;
		fclose($handle);
	

	default:
	echo "Please reply with y/n";
	exit;
	fclose($handle);
		break;
	

}
$handle = fopen ("php://stdin","r");
$line = trim(fgets($handle));
if ($line == 'y') {
echo "Congrats ukona soldier";
exit;
fclose($handle);
} else {
	exit;
	fclose($handle);
}


