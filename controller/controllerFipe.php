<?php
include('../class/classFipe.php');

$obFipe = new classFipe();

$action = $_GET['action'];

//echo ($action);
//exit();

	/*

	if (isset($_GET['tipoId']))
	{
		$tipoId = $_GET['tipoId'];
	
	} else {

		$tipoId = null;
	}
	*/

	if (isset($_GET['brandId']))
	{
		$brandId = $_GET['brandId'];
	
	} else {

		$brandId = null;
	}


	if (isset($_GET['vehicleId']))
	{
		$vehicleId = $_GET['vehicleId'];
	
	} else {

		$vehicleId = null;
	}


	if (isset($_GET['yearId']))
	{
		$yearId = $_GET['yearId'];
	
	} else {

		$yearId = null;
	}




	

	if ($action == 'brand')
	{
		$obFipe->setUrl("https://fipeapi.appspot.com/api/1/carros/marcas.json");

		echo $obFipe->getUrl();

	}elseif ($action == 'vehicles')
	
	{
		$obFipe->setUrl("https://fipeapi.appspot.com/api/1/carros/veiculos/{$brandId}.json");

		echo $obFipe->getUrl();

	}elseif ($action == 'year')
	
	{
		$obFipe->setUrl("https://fipeapi.appspot.com/api/1/carros/veiculo/{$brandId}/{$vehicleId}.json");

		echo $obFipe->getUrl();

	}

	/*

	if ($brandId)

	
		$obFipe->setUrl("http://fipeapi.appspot.com/api/1/carros/veiculo/{$brandId}/{$vehicleId}/{$yearId}.json");

		echo $obFipe->getUrl();

		//$obFipe->seturl("http://fipeapi.appspot.com/api/1/carros/veiculo/21/4828/2013-1.json");

		//$obFipe->getUrl();

		$a = $obFipe->decodeUrl();

		echo $a['preco'];
		//exit();
*/
	
	



//$obFipe->setUrl("http://fipeapi.appspot.com/api/1/carros/marcas.json");
//echo $obFipe->getUrl();




?>

