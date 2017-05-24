<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		$nama = "Dian";
		include_once 'pages/BeritaUI.php';
		$this->end();
	}
}



 ?>