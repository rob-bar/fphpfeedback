Projects feedback
============
##GENERAL
####1:Remove unnecessary files (e.g. Welcome controller)
####2: Use yml instead of php for multilang
####3: index_file => false in config.php
####4: be consistent in the use of shorthand php tags eq. shabir/.../template/home.php (10 != 16)

## shabir:
###remarks

####1: Validation as much as possible in the models.
	
	If you have validation on a specific model class its best to put your validation in your models

####2: If u use logical opperators please use && and || 
	
	The reason for the two different variations of "and" and "or" operators is that they operate at different precedences. (See Operator Precedence.) 
	We'll put those in the style guides.
<http://www.php.net/manual/en/language.operators.precedence.php>

####3: Try to rewrite your baseconroler 
	
	Line 21 till 84 is pretty repetitive.
	I recommend looking into the Array class of fuel 
	And making select statements 'select' => array('id', 'name'),
	
<http://docs.fuelphp.com/classes/arr.html>
<http://docs.fuelphp.com/classes/model_crud/methods.html#/method_find>

####3: Keep up the good work on extending the core! 
	Also good use of oil and its migrations! Also $this->template->set_global use is good but don't overuse it. Take a look at Session::set_flag()

## Zeshan:
###remarks