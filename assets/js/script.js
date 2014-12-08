
//Passage de parametre par valeur et par reference, type natif : par valeur, objet: par reference

/*function Person(fn, ln, age) {
    this.firstName = fn
    this.lastName = ln
    this.age = age
}
var nbr = "42";
changeStr(nbr);
console.log(nbr);

var tdd = new Person('Christophe', 'Porteneuve', 28);
oneYearWentBy(tdd);
console.log(tdd.age);

function changeStr(nbr) 
{ 
  nbr="N";
}
function oneYearWentBy(person) 
{ 
  ++person.age;
   }*/

/*var elem = document.getElementById("srcImage");
   console.log(elem);*/




  /*function showImage1(source)
  {
    document.write('<img src="'+ source +'" >');

  }*/

var taille = 200;
  function getRandomInteger(min,max)
{    

    var x =  Math.random();
    var result = x * (max - min + 1) + min;
    return Math.floor(result);

}

function requestInteger(message,min,max)
{    

    var x = prompt(message);
    while ( isNaN(parseInt(x))   || x < min ||  x > max )  
    {
             x = prompt("Ce n'est pas numérique ou compris entre " + min + " et " + max);
    };
    return parseInt(x);

}

function showImage(source)
{    
    // document.write(source);
//taille+=15;
document.write("<img width=\"" +taille+"\"src=\"" + source + "\"/>");
/*var elem = document.getElementsByTagName('img');
elem.style.opacity=0;
var intervalID = window.setInterval(showImage, 500);*/
}
function installEventHandlers(selector,event,eventHandler)
  {
    var elems=document.querySelectorAll(selector);
      for (var i=0; i<elems.length; i++)
      {
        elems[i].addEventListener(event,eventHandler);
      }
  }
  function installEventHandlersJQ(selector,event,eventHandler)
  {
    var elems=$(selector);
      for (var i=0; i<elems.length; i++)
      {
        elems[i].on(event,eventHandler);
      }
  }
  function hideElem(elemId)
  {
     var elem;
     elem=$("#"+elemId);
     //elem.classList.add("hidden");
     elem.addClass("hidden")

  }
  function showElem(elemId)
  {
    var elem;
     elem=$("#"+elemId);
     //elem.classList.remove("hidden");
      elem.removeClass("hidden")
   }





function getFormFieldvalue(selector,fieldName)
	{
		var form= document.querySelector(selector);
		var fieldval;

		if (form.elements.namedItem(fieldName).type=="select")
			{
				fieldval = form.elements.namedItem(fieldName)[fieldName];
			}
		else
			{
				fieldval = form.elements.namedItem(fieldName).value;
			}		
		
		return fieldval;
	}
	function setFormFieldvalue(selector,fieldname, fieldvalue)
	{
		var form= document.querySelector(selector);
	

		if (form.elements.namedItem(fieldname).type=="select")
			{
				form.elements.namedItem(fieldname)[fieldname]=fieldvalue;
			}
		else
			{
				form.elements.namedItem(fieldname).value=fieldvalue;
			}		
	}
	
		


		function createObjectContact(pcivility, pname,psurname,ptel){

			var contact = new Object();
			contact.civility=pcivility;		
			contact.name=pname.toUpperCase();		
			contact.surname=psurname.toUpperCase();			
			contact.telephone=ptel;
			
			return contact;		
		
		}
	
	function saveContact(event)
	{
		event.preventDefault();
		var contact = new Object();
		
		var civility = getFormFieldvalue("#js-form-add-id","civility");	
		var name = getFormFieldvalue("#js-form-add-id","namef");
		var surname = getFormFieldvalue("#js-form-add-id","surnamef");
		var telephone = getFormFieldvalue("#js-form-add-id","telephonef");
		
		var contact= createObjectContact(civility,name,surname,telephone);
		var contactList = loadDataFromDomStorage(STORAGE_KEY);	
		contactList.push(contact);				
		saveDataToDomStorage(STORAGE_KEY,contactList);
		showAddressBook();
		
	}
	function showAddressBook()
	{
		var listForm= document.getElementById("js-contact-list");
		listForm.innerHTML="";
		var list = loadDataFromDomStorage(STORAGE_KEY);
		for (var i = 0; i < list.length; i++) {
			listForm.innerHTML+="<li data-index="+ i +">"+list[i].name+ " "+ list[i].surname+"</li>"
		}
		
		installEventHandlers("#js-contact-list li","click",showContactDetails);
	}
	function saveDataToDomStorage(key,value)
	{
		value = JSON.stringify(value);
		window.localStorage.setItem(key, value);
	}	

	function loadDataFromDomStorage(key)
	{
		//var lsContact = getList("js-contact-list");
		var list = window.localStorage.getItem(key);
		list=JSON.parse(list);
		if (list==null)
			 			list=[];		

		return list;
	}	
	function addContact()	
	{
		event.preventDefault();
		document.getElementById("js-form-add-id").reset();
 		showElem("js-form-add-id");
	}
	function getContactFromStorage(key,index)
	{
		var list = loadDataFromDomStorage(STORAGE_KEY);
		var contact = list[index];
		return contact;
	}
	function displayContactInForm(id,contact,selectForm)
	{
		var civility =contact.civility
		var name = contact.name
		var surname = contact.surname;
		var telephone = contact.telephone;
		setFormFieldvalue("#js-form-add-id","civility",civility);	
		setFormFieldvalue("#js-form-add-id","namef",name);
		setFormFieldvalue("#js-form-add-id","surnamef",surname);
		setFormFieldvalue("#js-form-add-id","telephonef",telephone);
		setFormFieldvalue("#js-form-add-id","IdContact",id);

	}
	function deleteContact()
	{
		var index = parseInt(getFormFieldvalue("#js-form-add-id","IdContact"));	
		var list = loadDataFromDomStorage(STORAGE_KEY);
		list.splice(index,1);
		saveDataToDomStorage(STORAGE_KEY,list);
		showAddressBook();
		document.getElementById("js-form-add-id").reset();
	}
	function updateContact()
	{
		var index = parseInt(getFormFieldvalue("#js-form-add-id","IdContact"));	
		var list = loadDataFromDomStorage(STORAGE_KEY);
		list(index).name=getFormFieldvalue("#js-form-add-id","namef");
		list(index).surname=getFormFieldvalue("#js-form-add-id","surnamef");
		list(index).civility=getFormFieldvalue("#js-form-add-id","civility");
		list(index).telephone=getFormFieldvalue("#js-form-add-id","telephonef");
		saveDataToDomStorage(STORAGE_KEY,list);
		showAddressBook();
		
	}
	function showContactDetails()
	{
		showElem("js-form-add-id");
		var contact = getContactFromStorage(STORAGE_KEY,this.dataset.index);
		displayContactInForm(this.dataset.index,contact,"#js-form-add-id");
		

	}
    document.addEventListener("DOMContentLoaded",function()
    {    	
		bool = event.defaultPrevented;
    	hideElem("js-form-add-id");
    	installEventHandlers("#js-add-contact-link","click",addContact);
    	installEventHandlers("#js-submit-button","click",saveContact);
    	installEventHandlers("#js-delete-button","click",deleteContact);
    	installEventHandlers("#js-update-button","click",updateContact);
    	showAddressBook();
    	
    });