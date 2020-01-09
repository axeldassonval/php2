
var date= new Date(document.getElementById("date"));
var dateMax= new Date();
/*var dateMin= new Date(01/01/1800)*/
var regexDate = /[0-9]{2}\/[0-9]{2}\/[0-9]{4}/;
var regexCaractere = /[a-zA-ZÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØŒŠþÙÚÛÜÝŸàáâãäåæçèéêëìíîïðñòóôõöøœšÞùúûüýÿ]+[^1-9¢ß¥£™©®ª×÷±²³¼½¾µ¿¶·¸º°¯§…¤¦≠¬ˆ¨‰]+/;//mon regex pour detecter les caractere
var regexEmail = /.+@.+\..+/;
var regexCodePostal = /[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+/

//===========================================================
var traitement=document.getElementById("traitement");
var missTraitement=document.getElementById("aideTaitement")
//===========================================================
var sexeHomme=document.getElementById("choix1");
var sexeFemme=document.getElementById("choix2");
var missSexeGenre=document.getElementById("aideGenre")
//===========================================================
var date1=document.getElementById("date");
var missDate=document.getElementById("aideDate")
//===========================================================
var formValid = document.getElementById("bouton");
formValid.addEventListener("click",validation);
//===========================================================
var codePostal=document.getElementById("codePostal");
var missCodePostal=document.getElementById("aideCodePostal")
//===========================================================
var Prenom= document.getElementById("Prenom");
var missPrenom = document.getElementById("aidePrenom");
//===========================================================
var nom = document.getElementById("nom");
var missNom = document.getElementById("aideNom");
//===========================================================
var Adresse= document.getElementById("Adresse");
var missAdresse = document.getElementById("aideAdresse");
//===========================================================
var Email= document.getElementById("Email");
var missEmail = document.getElementById("aideEmail");
//===================================================================================================================
	
	function validation(event)
	{
		if(nom.validity.valueMissing)
		{
			event.preventDefault();
			missNom.textContent = "invalide";
			missNom.style.color = "red";
		}else if (regexCaractere.test(nom.value)==false)
		{
			event.preventDefault();
			missNom.textContent = "format incorect";
			missNom.style.color = "orange";
		}
	

//==================================================================================================================








		if(Prenom.validity.valueMissing)
		{
			event.preventDefault();
			missPrenom.textContent = "invalide";
			missPrenom.style.color = "red";
		}else if (regexCaractere.test(Prenom.value)==false)
		{
			event.preventDefault();
			missPrenom.textContent = "format incorect";
			missPrenom.style.color = "orange";
		}
	

//==================================================================================================================



		if(Email.validity.valueMissing)
		{
			event.preventDefault();
			missEmail.textContent = "invalide";
			missEmail.style.color = "red";
		}else if (regexEmail.test(Email.value)==false)
		{
			event.preventDefault();
			missEmail.textContent = "format incorect";
			missEmail.style.color = "orange";
		}
	

//==================================================================================================================

/*
if (regexCodePostal.test(codePostal.value)==false)
		{
			event.preventDefault();
			missCodePostal.textContent = "format incorect";
			missCodePostal.style.color = "orange";
		}
*/
//==================================================================================================================
if(date1.validity.valueMissing)
		{
			event.preventDefault();
			missDate.textContent = "invalide";
			missDate.style.color = "red";
		}else
		{
			missDate.textContent=""
		}	




//==================================================================================================================
if(sexeHomme.validity.valueMissing && sexeFemme.validity.valueMissing)
		{
			event.preventDefault();
			missSexeGenre.textContent = "invalide";
			missSexeGenre.style.color = "red";
		}else
		{
			missSexeGenre.textContent=""
		}	


//==================================================================================================================
if(traitement.validity.valueMissing)
		{
			event.preventDefault();
			missTraitement.textContent = "invalide";
			missTraitement.style.color = "red";
		}else
		{
			missTraitement.textContent=""
		}

}
