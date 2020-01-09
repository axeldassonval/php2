

$(document).ready(function()
{    
    var regexDate = /[0-9]{2}\/[0-9]{2}\/[0-9]{4}/;
    var regexCaractere = /^[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+$/;//mon regex pour detecter les caractere
    var regexEmail = /.+@{1}.+\..+/;
    var regexCodePostal = /[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+/
	var dateNaissance=document.getElementById("date");
	var date = new Date();
	//var verifDate = dates.inRange (dateNaissance,"1900",date)
	
	$('#nom').blur(function()
	{
		if(!$("#nom").val().match(regexCaractere))
		{
			$("#nom").css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideNom").show().text("format invalide").css("color","red");
		} else{$("#nom").css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideNom").hide();}
	});
	//============================================================================================================================================================
	$('#prenom').blur(function()
	{
		

		if(!$("#prenom").val().match(regexCaractere))
		{
			$("#prenom").css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aidePrenom").show().text("format invalide").css("color","red");
		} else{$("#prenom").css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aidePrenom").hide();}


	});

	//============================================================================================================================================================

	// if(sexeHomme.validity.valueMissing && sexeFemme.validity.valueMissing)
	// 	{
	// 		event.preventDefault();
	// 		missSexeGenre.textContent = "invalide";
	// 		missSexeGenre.style.color = "red";
	// 	}else
	// 	{
	// 		missSexeGenre.textContent=""
	// 	}	
	//============================================================================================================================================================
	$('#date').change(function()
	{
		
		
		
		
		//test
		var dd1 = new Date(dateNaissance.value);
		var t1 = dd1.getTime();
		
		var dd2 = new Date();
		var t2 = dd2.getTime();

		if (t1>t2) {
			console.log("futur");
		}
		else {
			console.log("passé");

		}

		if(t1>t2)
		{
			$(this).css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideDate").show().text("format invalide").css("color","red");
		}else
		{
			$(this).css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideDate").hide();	
		}
		
	});

	//============================================================================================================================================================
	$('#codePostal').blur(function()
	{	
		if($(this).val() != "") 
		{
			if(!$("#codePostal").val().match(regexCodePostal))
			{
				$("#codePostal").css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideCodePostal").show().text("format invalide").css("color","red");
			} else{
				$("#codePostal").css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideCodePostal").hide();}
		}
	});
	//============================================================================================================================================================
	$('#adresse').blur(function()
	{	
		if($(this).val() != "") 
		{
			if(!$("#adresse").val().match(/[0-9a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/))
			{
				$("#adresse").css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideAdresse").show().text("format invalide").css("color","red");
			} else{
				$("#adresse").css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideAdresse").hide();}
		}
	});
	//============================================================================================================================================================
	$('#ville').blur(function()
	{
		if($(this).val() != "") 
		{
			if(!$("#ville").val().match(regexCaractere))
			{
				$("#ville").css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideVille").show().text("format invalide").css("color","red");
			} else{$("#ville").css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideVille").hide();}
		}
	});
	//============================================================================================================================================================
	$('#Email').blur(function()
	{
		if(!$(this).val().match(regexEmail))
		{
			$(this).css("border-color","red",).css("background","rgba(255,0,0,0.1)").next("#aideEmail").show().text("format invalide").css("color","red");
		} else{$(this).css("border-color","green",).css("background","rgba(0,255,0,0.1)").next("#aideEmail").hide();}
	});
	//============================================================================================================================================================



	
}); 



