(function readyJS(win,doc){
  

	function getRoot()
	{
		return win.location.protocol+"//"+doc.location.hostname+"/";


	}


	function ajaxFunction(action, brandId="", vehicleId="", yearId="")
	{
		$.ajax({

		//url: getRoot()+"nfe-guard/controller/controllerFipeMotos.php?action="+action+brandId+vehicleId+yearId+"",
		url: getRoot()+"controller/controllerFipeMotos.php?action="+action+brandId+vehicleId+yearId+"",
		type: "POST",
		dataType: "JSON",
		async: false,
		success:function(response){
			const responseJSON=JSON.parse(response);
			
			for (let i =0; i < responseJSON.length; i++) 
			{
				$("#"+action).append("<option class='form-control' value='"+responseJSON[i].id+"'>"+responseJSON[i].name+"</option>");

			}

		}

		});

	}

	function getBrand()
	{
		//carrega as marcas
		ajaxFunction("brand");

		$("#brand").on("change", function(){
			///console.log($(this)val());
				$("#vehicles").show();

				//limpa os dropdowns (veículos e ano) quando a marca muda
				$('#vehicles').find('option').remove().end().append('<option value="">Selecione a moto</option>');
				$('#year').find('option').remove().end().append('<option value="">Selecione o Ano</option>');
				document.getElementById("preco").innerHTML = '';
				document.getElementById("valoripva").innerHTML = '';
				//$('#valoripva').find('p').remove();

				getVehicles($(this).val());
			});
	
	}

	
	function getVehicles(brandId)
	{
		//console.log(brandId);
		//carrega os veículos da marfca escolhida
		ajaxFunction("vehicles", "&brandId="+brandId);

		$("#vehicles").on("change", function(){
				$("#year").show();

				$('#year').find('option').remove().end().append('<option value="">Selecione o Ano</option>');
				document.getElementById("preco").innerHTML = '';
				document.getElementById("valoripva").innerHTML = '';

				getYear(brandId, $(this).val());
			});
	
	}


	function getYear(brandId, vehicleId)
	{
		//carrega o ano de acordo com a marca e o veículo escolhido
		ajaxFunction("year", "&brandId="+brandId, "&vehicleId="+vehicleId);

		$("#year").on("change", function(){
				$("#preco").show();

				getPreco(brandId, vehicleId, $(this).val());
			});
		
	}

	function getPreco(brandId, vehicleId, yearId)
	{
		
		//console.log("&brandId="+brandId, "&vehicleId="+vehicleId, "&yearId="+yearId);

		$.getJSON("https://fipeapi.appspot.com/api/1/motos/veiculo/"+brandId+"/"+vehicleId+"/"+yearId+".json", function(data){
		
			var a =  '';			

			$.each(data, function(key, value){

				document.getElementById("preco").innerHTML = data.preco;
				// console.log(data.preco);
				var precoId = data.preco;

				getCalc(precoId, yearId);

			});
			

		});

		//ajaxFunction("preco", "&brandId="+brandId, "&vehicleId="+vehicleId, "&yearId="+yearId);

		////console.log(getPreco(['preco']));
	}

	function getCalc(precoId, yearId)
	{
		//
		var b = yearId.substr(0, 4);
		
		var isento = '2020' - b;

			if (isento > 15)
			{
				document.getElementById("valoripva").innerHTML = '<b style="color:white; font-weight:bold; font-size:20px;">ISENTO</b>';
			
			}else{


		var numeros = precoId.match(/\d/g);

		numeros = numeros.join("");

		//pegar o id do estado para fornecer qual a aliquota na qual será calculada
		var a = numeros*0.02; //aceita numero ou string

		var tmp = a+'';
        tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
        
        //mascara para a rederizaçao do preo na tela
        if( tmp.length <= 6 ){
                tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, "$1,$2");
          }else if(tmp.length > 6  ){

          		tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
          }


		document.getElementById("valoripva").innerHTML = '<b style="color:white; font-weight:bold; font-size:20px;">R$ '+tmp+'</b>';

	}

	};


	getBrand();

})(window,document);