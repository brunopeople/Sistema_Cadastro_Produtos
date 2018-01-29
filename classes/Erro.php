<?php

Class Erro 
{
	public static function trataErro(Exception $e)
	{
		if(DEBUG){
			echo '<pre>';
			print_r($e);
			echo'<>';
		}else
		{
			echo $e->getMessage();
		}

		exit;
	}
}

?>