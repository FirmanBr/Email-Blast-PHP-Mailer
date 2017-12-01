<?php
$value = $_GET['query'];
$field = $_GET['field'];
 
//Cek Validasi
if($field == "subject")
{
	if(strlen($value) <= 0) 
	{
		echo "Silahkan wajib diisi";
	} 
	else 
	{
		echo "<span>Valid</span>";
	}
}
 
if($field == 'pesan')
{
	if(strlen($value) <= 0)
	{
		echo "SIlahkan wajib diisi";
	}
	else
	{
		echo "<span>Valid</span>";
	}
}
 

}