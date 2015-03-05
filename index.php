<?php
trait Hello
{
	public function sayHello()
	{
		echo 'hello';
	}
	
}
trait Word
{
	public function sayWord()
	{
		echo '  world';
	}
	
}
class HelloWord
{
	use Hello,Word;
	public function showInfo()
	{
		echo '!';
	}
}

$hw = new HelloWord();
$hw->sayHello();
$hw->sayWord();
$hw->showInfo();

echo 'eeee';die;
echo 'wwww';
?>