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
		echo 'dsdsd';
		echo 'haha my test success';
	}
}

$hw = new HelloWord();
$hw->sayHello();
$hw->sayWord();
$hw->showInfo();

echo 'eeee';die;
echo 'wwww';
?>