function logfm(){

			if (document.forms["Lfrm"]["uname"].value=="") {
				alert("Please Enter User Name..!");
				document.Lfrm.uname.focus();
				return false;
			}

			if(document.forms["Lfrm"]["psw"].value==""){
				alert("Please Enter Password..!");
				document.Lfrm.psw.focus();
				return false;
			}

			var pas1 = document.forms["Lfrm"]["psw"].value;
			
			if (pas1.length<5) {
				alert("Passwords is too short");
				document.Lfrm.psw.focus();
				return false;
			}
}



function signfm(){

			if (document.forms["SFrm"]["uid"].value=="") {
				alert("Please Enter ID..!");
				document.SFrm.uid.focus();
				return false;
			}

			var usid = document.forms["SFrm"]["uid"].value;
			
			if (usid.length<6) {
				alert("User ID is too short");
				document.SFrm.uid.focus();
				return false;
			}

			if (document.forms["SFrm"]["fname"].value=="") {
				alert("Please Enter First Name..!");
				document.SFrm.fname.focus();
				return false;
			}

			if (document.forms["SFrm"]["email"].value=="") {
				alert("Please Enter Email..!");
				document.SFrm.email.focus();
				return false;
			}

			if (document.forms["SFrm"]["gend"].value=="") {
				alert("Please Enter Gender..!");
				document.SFrm.gend.focus();
				return false;
			}

			if (document.forms["SFrm"]["bday"].value=="") {
				alert("Please Enter Birthday..!");
				document.SFrm.bday.focus();
				return false;
			}

			if (document.forms["SFrm"]["uname"].value=="") {
				alert("Please Enter User Name..!");
				document.SFrm.uname.focus();
				return false;
			}

			if(document.forms["SFrm"]["psw"].value==""){
				alert("Please Enter Password..!");
				document.SFrm.psw.focus();
				return false;
			}

			var pas1 = document.forms["SFrm"]["psw"].value;
			
			if (pas1.length<5) {
				alert("Passwords is too short");
				document.SFrm.psw.focus();
				return false;
			}
}


function clubfm(){

			if (document.forms["CFrm"]["id"].value=="") {
				alert("Please Enter Student ID Number..!");
				document.CFrm.id.focus();
				return false;
			}

			var sid = document.forms["CFrm"]["id"].value;
			
			if (sid.length<6) {
				alert("ID is too short..");
				document.CFrm.id.focus();
				return false;
			}

			if (document.forms["CFrm"]["fname"].value=="") {
				alert("Please Enter Name..!");
				document.CFrm.fname.focus();
				return false;
			}

			if (document.forms["CFrm"]["bday"].value=="") {
				alert("Please Enter Birthday..!");
				document.CFrm.bday.focus();
				return false;
			}

			if (document.forms["CFrm"]["email"].value=="") {
				alert("Please Enter Email..!");
				document.CFrm.email.focus();
				return false;
			}

}

function uloadfm(){

			if (document.forms["UFrm"]["fil"].value=="") {
				alert("Please Select File..!");
				document.UFrm.fil.focus();
				return false;
			}
}