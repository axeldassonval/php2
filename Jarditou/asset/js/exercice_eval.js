var exo1 = document.getElementById("exo1");
exo1.addEventListener("click",exercice1);
var exo2 = document.getElementById("exo2");
exo2.addEventListener("click",exercice2);
var exo3 = document.getElementById("exo3");
exo3.addEventListener("click",exercice3);
var exo4 = document.getElementById("exo4");
exo4.addEventListener("click",exercice4);
var exo5 = document.getElementById("exo5");
exo5.addEventListener("click",exercice5);
var exo6 = document.getElementById("exo6");
exo6.addEventListener("click",exercice6);



function exercice1()
{
	var prixUnitaire = parseInt(prompt("entée le prix unitaire"));
	var quantitéComande = parseInt(prompt("entrée la quantité d'article"));
	var total =  prixUnitaire*quantitéComande;
	var port = 0;
	var remise = 0;
	var prixPayer = 0;


	if (quantitéComande<1)
	{
		document.write("pas d'element a livrer")
	}
	else
	{
	if( total<=500) // condition
	{
		port= total*0.02; // calcul
		if (port<6) 
		{
			port=6;
		}
	}
	else
	{
		port = 0;
	}
	total = total+port;// calcul

	if(total>200)// condition
	{
		remise=total*0.10;// calcul
	}
	else if (total>=100 && total<=200)
	{
		remise=total*0.05;// calcul
	}

	prixPayer=total+remise;

	console.log(prixPayer)
	document.write("le prix a payer total est de "+prixPayer+"€");
	}
}


//=================================================================================================

function exercice2()
{
var nombre = parseInt(prompt("entrée un nombre"));
var resultat = 0; 

for(i=0;i<=nombre;i++)
{
	resultat = resultat+i;
	console.log(resultat)
}
document.write("les resulatat des entier de "+nombre+" est egal a "+resultat)
}

//=================================================================================================

function exercice3()
{

	var nombre=parseInt(prompt("entrée un nombre"));//la demande de nombre pour entrer un zero il faut le mettre en premier 
	var i=0;
	var moyenne=0;
	var max=nombre;
	var min=nombre;


	while(nombre !== null)
	{
	   i++
			nombre = parseInt(prompt("entrée un nombre"));//la demande de nombre pour entrer un zero il faut le mettre en premier 
			console.log("max"+max);
			console.log("min"+min);
			if (nombre>max && nombre !== 0) // mes condition
		{
			max=nombre;//enregistrement de mon max
			console.log("max"+max);
		}
			if(nombre<min && nombre !== 0) // mes condition
		{
			  min=nombre;//enregistrement de mon min
			  console.log("min"+min);
		}
		else if(nombre===0) //mes condition
		{
			console.log("max"+max);//mes remonter d'info final
			document.write("le nombre max est "+max+"<br/>")//mes remonter d'info final
			console.log("min"+min);//mes remonter d'info final
			document.write("le nombre min est "+min+"<br/>")//mes remonter d'info final
			break;
		}
	 
	}

}


//===========================================================================================================
function exercice4()
{
	var age = confirm("apuyer sure ok pour commencer");//jai pas trouver de solution ducoup ya un bouton qui sert a rien d'autre que lancer
	var i = 0;
	var jeune=0;
	var moyen =0;
	var vieux=0; 
	while(age !== null)
	{
		i++
				age = parseInt(prompt("entrée votre age"));//la demande de nombre pour entrer un zero il faut le mettre en premier 
				
			if (age<=20) // mes condition
			{
				jeune++;//ajout de + 1 a ma variable
				console.log("jeune "+jeune);//afichage console
				console.log(age);//affichage console
			}
			if(age>20 && age<=40) // mes condition
			{	
				  moyen++;
				  console.log("moyen "+moyen);
				  console.log(age);
			}
			if(age>40 && age<100)
			{
				vieux++;
				console.log("vieux "+vieux);
				console.log(age);
			}
			else if(age>=100) //mes condition
			{
				vieux++;
				console.log("vieux "+vieux);
				console.log(age);
				console.log("jeune "+jeune);
				console.log("moyen "+moyen);
				console.log("vieux "+vieux);
				document.write("nombre de jeune: "+jeune+"<br/>"+"nombre de moyen: "+moyen+"<br/>"+"nombre de persone agé: "+vieux);
				break;
			}
	}
}
//=============================================================================================================================================



function exercice5()
{


	//exercice 1 fonction js
	let nombre=parseInt(prompt("entre un premier chiffre"));


	document.write("voici la table de mutiplication du chiffre "+nombre+"<br/>")
	for (i=0;i<=10;i++)
	{
		var resultat = nombre*i;//le calcul
		document.write(i+"x"+nombre+"="+resultat+"<br/>");//lecture du resultat sure le site
		console.log(resultat);// lecture du resultat dans la console
	}
}


//=============================================================================================================================================
function exercice6()
{
var tableau=["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];//tableau de prenom
var debut = confirm("apuyer sure ok pour commencer")//lacement de ma boucle

while(debut == true)
{
var search= prompt("entré un prenom pour finir appuyer sure annuler");//la demande de prenom a suprimer
search = search.substring(0,1).toUpperCase()+ search.substring(1).toLowerCase();//la commande qui permet de toujour trouver peut importe comment on ecris le prenom sauf accent
console.log(tableau[tableau.indexOf(search)]);//re tour info console
tableau.splice(tableau.indexOf(search),1);//supression du mot dans le tableaux
tableau.push("  ");//ajout de la case vide dans le tableaux
if(search == null || search == "")//ma condition de fin
	break;
}
	alert(tableau);//retour page
	console.log(tableau);//retour console
}


//==============================================================================================================================
/*
var choice = prompt("1- exo\n2- exo2\n3- exo3\n4- exo4\n5- exo5\n6- exo6\n Entrez votre option :");
    while (choice!="1" && choice!="2" && choice!="3" && choice!="4" && choice!="5" && choice!="6")//boucle de vérification d'entrée
    {
        var choice = prompt("1- exo\n2- exo2\n3- exo3\n4- exo4\n5- exo5\n6- exo6\n Entrez votre option :");
    }
    
    switch (choice)//switch des 4 options possibles où seules les fonctions créées plus haut seront appelées
    {
        case "1" :
            exercice1();
            break;
        
        case "2" :
            exercice2();
            break;
            
        case "3" :
            exercice3();
            break;
            
        case "4" :
            exercice4();
            break;

        case "5" :
            exercice5();
            break;

        case "6" :
            exercice6();
            break;
    }*/