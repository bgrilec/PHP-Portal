/*Modal activation/deactivation*/
function ActivateModal (idModal, idCloseModal, action, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13) {
    var modal = document.getElementById(idModal);
    var span = document.getElementById(idCloseModal);

    modal.style.display = "block";

    span.onclick = function () {
        modal.style.display = "none";
		modal.form.reset();
    }

    window.onclick = function (event) {
        if (event.target == modal){
            modal.style.display = "none";
			modal.form.reset();
        }
    }
	
	//MODAL REGISTER ACTIVATION
	if (idModal == 'modal-register'){
		naziv = document.getElementById("r_naziv").value = "";
		email = document.getElementById("r_email").value = "";
		pwd = document.getElementById("r_pwd").value = "";
		pwd_repeat = document.getElementById("r_pwd_repeat").value = "";
		document.getElementById("btn-register").onclick = registerFirm;
	}
	
	//MODAL LOGIN ACTIVATION
	if (idModal == 'modal-login'){
		email = document.getElementById("l_email").value = "";
		pwd = document.getElementById("l_pwd").value = "";
		document.getElementById('login-notice').style.display = "none";
		document.getElementById("btn-login").onclick = login;
	}
	
	//MODAL ADD USER
	if (idModal == 'modal-addUser'){
		if (action == 'n'){
			uloga = modal_addUser.au_uloga.value;
			ime = document.getElementById("au_ime").value = "";
			prezime = document.getElementById("au_prezime").value = "";
			adresa = document.getElementById("au_adresa").value = "";
			mjesto = document.getElementById("au_mjesto").value = "";
			drzava = document.getElementById("au_drzava").value = "";
			email = document.getElementById("au_email").value = "";
			pwd = document.getElementById("au_pwd").value = "";
			pwd_repeat = document.getElementById("au_pwd_repeat").value = "";
			document.getElementById('addUserTitle').innerHTML = "Novi korisnik";
			document.getElementById('addUserBtn').innerHTML = "Dodaj korisnika";
			document.getElementById("btn-register").onclick = addUser;
		}
		if (action == 'c'){
			uloga = modal_addUser.au_uloga.value = p2;
			ime = document.getElementById("au_ime").value = p3;
			prezime = document.getElementById("au_prezime").value = p4;
			adresa = document.getElementById("au_adresa").value = p5;
			mjesto = document.getElementById("au_mjesto").value = p6;
			drzava = document.getElementById("au_drzava").value = p7;
			email = document.getElementById("au_email").value = p8;
			pwd = document.getElementById("au_pwd").value = "";
			pwd_repeat = document.getElementById("au_pwd_repeat").value = "";
			document.getElementById('addUserTitle').innerHTML = "Uređivanje";
			document.getElementById('addUserBtn').innerHTML = "Izmjeni podatke";
			document.getElementById("btn-register").addEventListener("click", function(){
				changeUserData(p1);
			}, false);
		}
		
	}
	
	//FIRM DATA MODAL
	if (idModal == 'modal-firmData'){
		naziv = document.getElementById("naziv-f").innerHTML = p2;
		adresa = document.getElementById("adresa-f").innerHTML = p3;
		mjesto = document.getElementById("mjesto-f").innerHTML = p4;
		drzava = document.getElementById("drzava-f").innerHTML = p5;
		web = document.getElementById("web-f").innerHTML = p6;
		logo = document.getElementById("logo-f").innerHTML = p7;
		email = document.getElementById("email-f").innerHTML = p8;		
	}
	
	//FIRM DATA CHANGE MODAL
	if (idModal == 'modal-changeFirmData'){
		naziv = document.getElementById("cd_naziv").value = p1;
		adresa = document.getElementById("cd_adresa").value = p2;
		mjesto = document.getElementById("cd_mjesto").value = p3;
		drzava = document.getElementById("cd_drzava").value = p4;
		logo = document.getElementById("showimg").innerHTML = p5;
		web = document.getElementById("cd_web").value = p6;
		email = document.getElementById("cd_email").value = p7;	
		document.getElementById('btn-changeFirmData').addEventListener("click", function(){
				changeFirmData(p8);
		}, false);
	}
	
	
	//FIRM PASSWORD CHANGE MODAL
	if (idModal == 'modal-changePass'){
		pwd = document.getElementById("change_pass").value = "";
		pwd_repeat = document.getElementById("change_pass_repeat").value = "";	
		document.getElementById('btn-changePass').addEventListener("click", function(){
				changeFirmPassword(p1);
		}, false);
	}
	
	//FIRM OFFER JOB MODAL
	if (idModal == 'modal-offerJob'){
		naziv = document.getElementById("job_naziv").value = "";
		mjesto_rada = document.getElementById("job_mjesto").value = "";
		job_url = document.getElementById("job_url").value = "";
		start_date= document.getElementById("job_start_date").value = "";
		stop_date = document.getElementById("job_stop_date").value = "";
		document.getElementById('btn-offerJob').addEventListener("click", function(){
				offerJob(p1);
		}, false);
	}
	
	
	//FIRM JOB CHANGE MODAL
	if (idModal == 'modal-changeJob'){
		naziv = document.getElementById("c_job_naziv").value = p2;
		mjesto_rada = document.getElementById("c_job_mjesto").value = p3;
		job_url = document.getElementById("c_job_url").value = p4;
		if (typeof InstallTrigger !== 'undefined'){
			start_date= document.getElementById("c_job_start_date").value = p5;
			stop_date = document.getElementById("c_job_stop_date").value = p6;
		}else {
			start_date= document.getElementById("c_job_start_date").value = p7;
			stop_date = document.getElementById("c_job_stop_date").value = p8;
		}
		document.getElementById('btn-changeJob').addEventListener("click", function(){
				changeJob(p1, p2, p3, p4, p5, p6, p7, p8);
		}, false);
	}
	
	
	//ADMIN FIRM JOB CHANGE MODAL
	if (idModal == 'modal-changeJobAdmin'){
		naziv = document.getElementById("c_job_naziv").value = p2;
		mjesto_rada = document.getElementById("c_job_mjesto").value = p3;
		job_url = document.getElementById("c_job_url").value = p4;
		if (typeof InstallTrigger !== 'undefined'){
			start_date= document.getElementById("c_job_start_date").value = p5;
			stop_date = document.getElementById("c_job_stop_date").value = p6;
		}else {
			start_date= document.getElementById("c_job_start_date").value = p9;
			stop_date = document.getElementById("c_job_stop_date").value = p10;
		}
		firma = document.getElementById("c_job_firma").innerHTML = p8;
		status_komentara = modalFormChangeJobAdmin.c_job_status.value = p7;
		document.getElementById('btn-changeJobAdmin').addEventListener("click", function(){
				changeJobAdmin(p1);
		}, false);
	}
	
	
	//ADMIN CHANGE BLOG POST MODAL
	if (idModal == 'modal-changeBlogPost'){
		kategorija = c_blog_category.value = p2;
		pozicija = c_blog_position.value = p11;
		naslov = document.getElementById("c-blog-naslov").value = p4;	
		sadrzaj = document.getElementById("c-blog-sadrzaj").value = p5;
		seo_naslov = document.getElementById("c-blog-naslov-seo").value = p6;
		seo_sadrzaj = document.getElementById("c-blog-description-seo").value = p7;
		img_url = document.getElementById("showimg").innerHTML = p8;
		img_alt_tag = document.getElementById("c-blog-img-alt").value = p12;
		date_time_objave = document.getElementById("c-datum-vrijeme-objave").innerHTML = p9;
		date_time_izmjene = document.getElementById("c-datum-vrijeme-izmjene").innerHTML = p10;
		broj_pregleda = document.getElementById("c-blog-broj-pregleda").innerHTML = p13;		
		document.getElementById('btn-changeBlogPost').addEventListener("click", function(){
				changeBlogPost(p1);
		}, false);
	}
	
	
	//ADMIN COMMENT STATUS CHANGE MODAL
	if (idModal == 'modal-changeCommentAdmin'){
		naslov_clanka = document.getElementById("c_clanak_title").innerHTML = p2;
		komentar = document.getElementById("c_clanak_komentar").innerHTML = p3;
		korisnik = document.getElementById("c_clanak_korisnik").innerHTML = p4;
		email = document.getElementById("c_clanak_korisnik_email").innerHTML = p5;
		datum_vrijeme = document.getElementById("c_clanak_datum_vrijeme").innerHTML = p6;
		status_komentara = modalFormChangeCommentAdmin.c_comment_status.value = p7;
		document.getElementById('btn-changeCommentAdmin').addEventListener("click", function(){
				changeCommentStatusAdmin(p1);
		}, false);
	}

	
}


/*Dropdown activation/deactivation*/
var active = 0;
function ActivateDropdown () {
    var dropdown = document.getElementById('dropdown');
    var korisnici = document.getElementById('korisnici-link');
    
    if (active == 0){
        dropdown.style.display = "block";
        active = 1;
    }else {
        dropdown.style.display = "none";
        active = 0;
    }
    
	window.onclick = function (event) {
        if (event.target != dropdown && event.target != korisnici){
            dropdown.style.display = "none";
            active = 0;
        }
    }      
}


//------------------------------------------------------------------------------
//******************************************************************************
//------------------------------------------------------------------------------
//alert (naziv + ' ' + email + ' ' + pwd + ' '+ pwd_repeat);

/*AJAX CALL CREATION*/
var xmlhttp;
if (window.XMLHttpRequest){
	xmlhttp = new XMLHttpRequest();
}else {
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}


//REGISTER FIRM
function registerFirm(){
	//Form data
	naziv = document.getElementById("r_naziv").value;
	email = document.getElementById("r_email").value;
	pwd = document.getElementById("r_pwd").value;
	pwd_repeat = document.getElementById("r_pwd_repeat").value;
	
	//Messages
	success = "Uspješno ste se registrirali!";
	err1 = "Niste ispunili sva polja!";
	err2 = "Neispravan format emaila!";
	err3 = "Lozinke se ne podudaraju!";
	err4 = "Korisnik s istim emailom je već registriran!";
	err5 = "Registracija nije uspjela";
	
	if (naziv != "" && email != "" && pwd != "" && pwd_repeat != ""){
		xmlhttp.open("POST", "actions/registerFirm.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText != 0){
					document.getElementById("register-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
					document.getElementById("register-notice").style.display = "block";
					if (xmlhttp.responseText == 2){
						document.getElementById("register-notice").innerHTML = err2;
					}else if (xmlhttp.responseText == 3){
						document.getElementById("register-notice").innerHTML = err3;
					}else if (xmlhttp.responseText == 4){
						document.getElementById("register-notice").innerHTML = err4;
					}else if (xmlhttp.responseText == 5){
						document.getElementById("register-notice").innerHTML = err5;
					}
				}
				else if (xmlhttp.responseText == 0){
					document.getElementById("register-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
					document.getElementById("register-notice").innerHTML = success;
					document.getElementById("register-notice").style.display = "block";
					setTimeout(function(){ 
						document.getElementById('modal-register').style.display = "none";
						document.getElementById('register-notice').style.display = "none";
						document.getElementById('dropdown').style.display = "none";
					}, 2000);
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("naziv="+naziv+"&email="+email+"&pwd="+pwd+"&pwd_repeat="+pwd_repeat);
		
	}else {
		document.getElementById("register-notice").innerHTML = err1;
		document.getElementById("register-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("register-notice").style.display = "block";
	}	
	
}


//LOGIN
function login(){
	//Form data
	email = document.getElementById("l_email").value;
	pwd = document.getElementById("l_pwd").value;	
	
	//Messages
	success = "Uspješno ste se prijavili!";
	err1 = "Niste ispunili sva polja!";
	err2 = "Neispravan format emaila!";
	err3 = "Netočna lozinka ili email!";
	
	if (email != "" && pwd != ""){
		xmlhttp.open("POST", "actions/login.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText != 0){
					document.getElementById("login-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
					document.getElementById("login-notice").style.display = "block";
					if (xmlhttp.responseText == 2){
						document.getElementById("login-notice").innerHTML = err2;
					}else if (xmlhttp.responseText == 3){
						document.getElementById("login-notice").innerHTML = err3;
					}
				}
				else {
					document.getElementById("login-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
					document.getElementById("login-notice").innerHTML = success;
					document.getElementById("login-notice").style.display = "block";
					setTimeout(function(){ 
						document.getElementById('modal-login').style.display = "none";
						document.getElementById('login-notice').style.display = "none";
						document.getElementById('dropdown').style.display = "none";
						window.location.reload();
					}, 2000);
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("email="+email+"&pwd="+pwd);
		
	}else {
		document.getElementById("login-notice").innerHTML = err1;
		document.getElementById("login-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("login-notice").style.display = "block";
	}	
	
}


//ADD USER
function addUser(){
	//Form data
	uloga = modal_addUser.au_uloga.value;
	ime = document.getElementById("au_ime").value;
	prezime = document.getElementById("au_prezime").value;
	adresa = document.getElementById("au_adresa").value;
	mjesto = document.getElementById("au_mjesto").value;
	drzava = document.getElementById("au_drzava").value;
	email = document.getElementById("au_email").value;
	pwd = document.getElementById("au_pwd").value;
	pwd_repeat = document.getElementById("au_pwd_repeat").value;
	
	//Messages
	success = "Novi korisnik je dodan!";
	err1 = "Email, lozinka i ponovljena lozinka su obavezne!";
	err2 = "Neispravan format emaila!";
	err3 = "Lozinka i ponovljena lozinka moraju se podudarati!";
	err4 = "Korisnik s istim emailom je već registriran!";
	err5 = "Došlo je do greške!";
	
	if (email != "" && pwd != "" && pwd_repeat != ""){
		xmlhttp.open("POST", "actions/registerUser.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText != 0){
					document.getElementById("addUser-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
					document.getElementById("addUser-notice").style.display = "block";
					if (xmlhttp.responseText == 2){
						document.getElementById("addUser-notice").innerHTML = err2;
					}else if (xmlhttp.responseText == 3){
						document.getElementById("addUser-notice").innerHTML = err3;
					}else if (xmlhttp.responseText == 4){
						document.getElementById("addUser-notice").innerHTML = err4;
					}else if (xmlhttp.responseText == 5){
						document.getElementById("addUser-notice").innerHTML = err5;
					}
				}
				else if (xmlhttp.responseText == 0){
					document.getElementById("addUser-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
					document.getElementById("addUser-notice").style.display = "block";
					document.getElementById("addUser-notice").innerHTML = success;
					setTimeout(function(){ 
						document.getElementById('addUser-notice').style.display = "none";
						document.getElementById('modal-addUser').style.display = "none";
						refreshContent('includes/page_components/usersAdmin.php', 'main-page-content-admin');
					}, 2000);
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("uloga="+uloga+"&ime="+ime+"&prezime="+prezime+"&adresa="+adresa+"&mjesto="+mjesto+"&drzava="+drzava+"&email="+email+"&pwd="+pwd+"&pwd_repeat="+pwd_repeat);
		
	}else {
		document.getElementById("addUser-notice").innerHTML = err1;
		document.getElementById("addUser-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("addUser-notice").style.display = "block";
	}	
	
}


//CHANGE USER DATA
function changeUserData(id){
	//Form data
	uloga = modal_addUser.au_uloga.value;
	ime = document.getElementById("au_ime").value;
	prezime = document.getElementById("au_prezime").value;
	adresa = document.getElementById("au_adresa").value;
	mjesto = document.getElementById("au_mjesto").value;
	drzava = document.getElementById("au_drzava").value;
	email = document.getElementById("au_email").value;
	pwd = document.getElementById("au_pwd").value;
	pwd_repeat = document.getElementById("au_pwd_repeat").value;
	
	//Messages
	success = "Izmjenjeno je sve osim lozinke!";
	err2 = "Neispravan format emaila!";
	err3 = "Ako želite promjeniti lozinku, lozinka i ponovljena lozinka moraju se podudarati!<br>Ako ne želite mjenjati lozinku polja za lozinku i ponovljenu lozinku ostavite praznu!";
	err4 = "Korisnik s istim emailom je već registriran!";
	err5 = "Došlo je do greške!";
	err6 = "Promjenjeno je sve zajedno sa lozinkom!";
	
	
	xmlhttp.open("POST", "actions/changeUserData.php", true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if (xmlhttp.responseText != 0 && xmlhttp.responseText != 6){
				document.getElementById("addUser-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
				document.getElementById("addUser-notice").style.display = "block";
				if (xmlhttp.responseText == 2){
					document.getElementById("addUser-notice").innerHTML = err2;
				}else if (xmlhttp.responseText == 3){
					document.getElementById("addUser-notice").innerHTML = err3;
				}else if (xmlhttp.responseText == 4){
					document.getElementById("addUser-notice").innerHTML = err4;
				}else if (xmlhttp.responseText == 5){
					document.getElementById("addUser-notice").innerHTML = err5;
				}
			}
			else if (xmlhttp.responseText == 0 || xmlhttp.responseText == 6){
				document.getElementById("addUser-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
				document.getElementById("addUser-notice").style.display = "block";
				if (xmlhttp.responseText == 0){
					document.getElementById("addUser-notice").innerHTML = success;
				}else {
					document.getElementById("addUser-notice").innerHTML = err6;
				}				
				setTimeout(function(){ 
					document.getElementById('addUser-notice').style.display = "none";
					document.getElementById('modal-addUser').style.display = "none";
					refreshContent('includes/page_components/usersAdmin.php', 'main-page-content-admin');					
				}, 2000);
			}
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("uloga="+uloga+"&ime="+ime+"&prezime="+prezime+"&adresa="+adresa+"&mjesto="+mjesto+"&drzava="+drzava+"&email="+email+"&pwd="+pwd+"&pwd_repeat="+pwd_repeat+"&id_korisnika="+id);
	
}


//CHANGE FIRM DATA
function changeFirmData(id){
	//Form data
	naziv = document.getElementById("cd_naziv").value;
	adresa = document.getElementById("cd_adresa").value;
	mjesto = document.getElementById("cd_mjesto").value;
	drzava = document.getElementById("cd_drzava").value;
	logo = document.getElementById("showimg").innerHTML;
	web = document.getElementById("cd_web").value;
	email = document.getElementById("cd_email").value;
	
	//Messages
	success = "Izmjene su uspješno provedene!";
	err2 = "Neispravan format emaila!";
	err3 = "Korisnik s istim emailom već postoji!";
	err4 = "Došlo je do greške!";
	
	
	xmlhttp.open("POST", "actions/changeFirmData.php", true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){

			if (xmlhttp.responseText != 0){
				document.getElementById("changeFirmData-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
				document.getElementById("changeFirmData-notice").style.display = "block";
				if (xmlhttp.responseText == 2){
					document.getElementById("changeFirmData-notice").innerHTML = err2;
				}else if (xmlhttp.responseText == 3){
					document.getElementById("changeFirmData-notice").innerHTML = err3;
				}
			}
			else {
				document.getElementById("changeFirmData-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
				document.getElementById("changeFirmData-notice").style.display = "block";
				document.getElementById("changeFirmData-notice").innerHTML = success;							
				setTimeout(function(){ 
					document.getElementById('changeFirmData-notice').style.display = "none";
					document.getElementById('modal-changeFirmData').style.display = "none";
					document.location.reload(true);
				}, 2000);
			}
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("naziv="+naziv+"&adresa="+adresa+"&mjesto="+mjesto+"&drzava="+drzava+"&email="+email+"&web="+web+"&logo="+logo+"&id_firme="+id);
	
}

function changeFirmPassword(id){
	//form data
	pwd = document.getElementById("change_pass").value;
	pwd_repeat = document.getElementById("change_pass_repeat").value;
	
	//Messages
	success = "Lozinka je uspješno promjenjena!";
	err2 = "Nova lozinka i ponovljena lozinka moraju biti iste!";
	err3 = "Došlo je do greške!";
	
	
	xmlhttp.open("POST", "actions/changePass.php", true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){

			if (xmlhttp.responseText != 0){
				document.getElementById("changePass-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
				document.getElementById("changePass-notice").style.display = "block";
				if (xmlhttp.responseText == 2){
					document.getElementById("changePass-notice").innerHTML = err2;
				}else if (xmlhttp.responseText == 3){
					document.getElementById("changePass-notice").innerHTML = err3;
				}
			}
			else {
				document.getElementById("changePass-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
				document.getElementById("changePass-notice").style.display = "block";
				document.getElementById("changePass-notice").innerHTML = success;							
				setTimeout(function(){ 
					document.getElementById('changePass-notice').style.display = "none";
					document.getElementById('modal-changePass').style.display = "none";
				}, 2000);
			}
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("pwd="+pwd+"&pwd_repeat="+pwd_repeat+"&id_firme="+id);
	
}


//FIRM OFFER JOB
function offerJob(id){
	//form data
	naziv = document.getElementById("job_naziv").value;
	mjesto_rada = document.getElementById("job_mjesto").value;
	job_url = document.getElementById("job_url").value;
	start_date= document.getElementById("job_start_date").value;
	stop_date = document.getElementById("job_stop_date").value;
	
	if (naziv == "" || mjesto_rada == "" || job_url == "" || start_date == "" || stop_date == ""){
		document.getElementById("offerJob-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("offerJob-notice").style.display = "block";
		document.getElementById("offerJob-notice").innerHTML = "Niste ispunili sva polja!";
	}else {
		xmlhttp.open("POST", "actions/offerJob.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText == 0){
					document.getElementById("offerJob-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
					document.getElementById("offerJob-notice").style.display = "block";
					document.getElementById("offerJob-notice").innerHTML = "Uspješno ste predali natječaj za posao!";
					setTimeout(function(){ 
						document.getElementById('offerJob-notice').style.display = "none";
						document.getElementById('modal-offerJob').style.display = "none";
						window.location.reload();
					}, 2000);
				}else {
					document.getElementById("offerJob-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
					document.getElementById("offerJob-notice").style.display = "block";
					document.getElementById("offerJob-notice").innerHTML = "Došlo je do greške!";							
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("naziv="+naziv+"&mjesto_rada="+mjesto_rada+"&job_url="+job_url+"&start_date="+start_date+"&stop_date="+stop_date+"&id_firme="+id);
	}
}



//FIRM CHANGE JOB
function changeJob(id, p1, p2, p3, p4, p5, p6, p7){
	//form data
	naziv = document.getElementById("c_job_naziv").value;
	mjesto_rada = document.getElementById("c_job_mjesto").value;
	job_url = document.getElementById("c_job_url").value;
	start_date= document.getElementById("c_job_start_date").value;
	stop_date = document.getElementById("c_job_stop_date").value;
	
	if (naziv == p1 && mjesto_rada == p2 && job_url == p3 && start_date == p4 && stop_date == p5 || naziv == p1 && mjesto_rada == p2 && job_url == p3 && start_date == p6 && stop_date == p7){
		document.getElementById("changeJob-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("changeJob-notice").style.display = "block";
		document.getElementById("changeJob-notice").innerHTML = "Vrijednosti svih polja ostala su ista!";
		setTimeout(function(){ 
			document.getElementById('changeJob-notice').style.display = "none";
			document.getElementById('modal-changeJob').style.display = "none";
		}, 3000);
	}else {
		if (naziv == "" || mjesto_rada == "" || job_url == "" || start_date == "" || stop_date == ""){
			document.getElementById("changeJob-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
			document.getElementById("changeJob-notice").style.display = "block";
			document.getElementById("changeJob-notice").innerHTML = "Niste ispunili sva polja!";
		}else {
			xmlhttp.open("POST", "actions/changeJob.php", true);
			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
					if (xmlhttp.responseText == 0){
						document.getElementById("changeJob-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
						document.getElementById("changeJob-notice").style.display = "block";
						document.getElementById("changeJob-notice").innerHTML = "Uspješno ste izmjenili natječaj za posao!";
						setTimeout(function(){ 
							document.getElementById('changeJob-notice').style.display = "none";
							document.getElementById('modal-changeJob').style.display = "none";
							window.location.reload();
						}, 2000);
					}else {
						document.getElementById("changeJob-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
						document.getElementById("changeJob-notice").style.display = "block";
						document.getElementById("changeJob-notice").innerHTML = "Došlo je do greške!";							
					}
				}
			};
			xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xmlhttp.send("naziv="+naziv+"&mjesto_rada="+mjesto_rada+"&job_url="+job_url+"&start_date="+start_date+"&stop_date="+stop_date+"&id_posla="+id);
		}
	}
}


//ADMIN FIRM CHANGE JOB
function changeJobAdmin(id, p1, p2, p3, p4, p5){
	//form data
	naziv = document.getElementById("c_job_naziv").value;
	mjesto_rada = document.getElementById("c_job_mjesto").value;
	job_url = document.getElementById("c_job_url").value;
	start_date= document.getElementById("c_job_start_date").value;
	stop_date = document.getElementById("c_job_stop_date").value;
	radio_status = modalFormChangeJobAdmin.c_job_status.value;
	
	xmlhttp.open("POST", "actions/changeJob.php", true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if (xmlhttp.responseText == 0){
				document.getElementById("changeJobAdmin-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
				document.getElementById("changeJobAdmin-notice").style.display = "block";
				document.getElementById("changeJobAdmin-notice").innerHTML = "Uspješno ste izmjenili natječaj za posao!";
				setTimeout(function(){ 
					document.getElementById('changeJobAdmin-notice').style.display = "none";
					document.getElementById('modal-changeJobAdmin').style.display = "none";
					refreshContent('includes/page_components/jobsAdmin.php', 'main-page-content-admin');
				}, 2000);
			}else {
				document.getElementById("changeJobAdmin-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
				document.getElementById("changeJobAdmin-notice").style.display = "block";
				document.getElementById("changeJobAdmin-notice").innerHTML = "Došlo je do greške!";							
			}
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("naziv="+naziv+"&mjesto_rada="+mjesto_rada+"&job_url="+job_url+"&start_date="+start_date+"&stop_date="+stop_date+"&id_posla="+id+"&radio_status="+radio_status);

}


//CHANGE COMMENT STATUS ADMIN
function changeCommentStatusAdmin(id){
	status_komentara = modalFormChangeCommentAdmin.c_comment_status.value;
	
	xmlhttp.open("POST", "actions/changeCommentStatus.php", true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if (xmlhttp.responseText == 0){
				document.getElementById("changeCommentAdmin-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
				document.getElementById("changeCommentAdmin-notice").style.display = "block";
				document.getElementById("changeCommentAdmin-notice").innerHTML = "Uspješno ste ažurirali status komentara!";
				setTimeout(function(){ 
					document.getElementById('changeCommentAdmin-notice').style.display = "none";
					document.getElementById('modal-changeCommentAdmin').style.display = "none";
					refreshContent('includes/page_components/commentsAdmin.php', 'main-page-content-admin');
				}, 2000);
			}else {
				document.getElementById("changeCommentAdmin-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
				document.getElementById("changeCommentAdmin-notice").style.display = "block";
				document.getElementById("changeCommentAdmin-notice").innerHTML = "Došlo je do greške!";							
			}
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("id_komentara="+id+"&status="+status_komentara);
}



//ADD POST ADMIN
function addPostAdmin(){
	kategorija = blog_category.value;
	pozicija = blog_position.value;
	naslov = document.getElementById("blog-naslov").value;	
	sadrzaj = document.getElementById("blog-sadrzaj").value;
	seo_naslov = document.getElementById("blog-naslov-seo").value;
	seo_sadrzaj = document.getElementById("blog-description-seo").value;
	img_url = document.getElementById("showimg").innerHTML;
	img_alt_tag = document.getElementById("blog-img-alt").value;
	
	if (kategorija != "" && pozicija != "" && naslov != "" && sadrzaj != "" && seo_naslov != "" && seo_sadrzaj != "" && img_url != "" && img_alt_tag != ""){
		xmlhttp.open("POST", "actions/addPostToDatabase.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText == 1){
					setTimeout(function(){ 
						alert("Novi članak je uspješno objavljen!");
						refreshContent('includes/page_components/addPostAdmin.php', 'main-page-content-admin');
					}, 2000);
				}else {
					alert("Došlo je do greške!");							
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("kategorija="+kategorija+"&naslov="+naslov+"&sadrzaj="+sadrzaj+"&seo_naslov="+seo_naslov+"&seo_sadrzaj="+seo_sadrzaj+"&img_url="+img_url+"&pozicija="+pozicija+"&img_alt_tag="+img_alt_tag);
	}else {
		alert("Niste ispunili sva polja ili ste zaboravili odabrati naslovnu fotografiju članka!");
	}
}


//CHANGE BLOG POST
function changeBlogPost(id){
	kategorija = c_blog_category.value;
	pozicija = c_blog_position.value;
	naslov = document.getElementById("c-blog-naslov").value;	
	sadrzaj = document.getElementById("c-blog-sadrzaj").value;
	seo_naslov = document.getElementById("c-blog-naslov-seo").value;
	seo_sadrzaj = document.getElementById("c-blog-description-seo").value;
	img_url = document.getElementById("showimg").innerHTML;
	img_alt_tag = document.getElementById("c-blog-img-alt").value;
	
	if (kategorija != "" && pozicija != "" && naslov != "" && sadrzaj != "" && seo_naslov != "" && seo_sadrzaj != "" && img_url != "" && img_alt_tag != ""){
		xmlhttp.open("POST", "actions/changePostInDatabase.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText == 1){
					document.getElementById("changeBlogPost-notice").style.backgroundColor = "rgba(43, 214, 28, 0.13)";
					document.getElementById("changeBlogPost-notice").style.display = "block";
					document.getElementById("changeBlogPost-notice").innerHTML = "Uspješno ste izmjenili podatke članka!";
					setTimeout(function(){ 
						document.getElementById('changeBlogPost-notice').style.display = "none";
						document.getElementById('modal-changeBlogPost').style.display = "none";
						refreshContent('includes/page_components/newsAdmin.php', 'main-page-content-admin');
					}, 2000);
				}else {
					document.getElementById("changeBlogPost-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
					document.getElementById("changeBlogPost-notice").style.display = "block";
					document.getElementById("changeBlogPost-notice").innerHTML = "Došlo je do greške!";								
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("kategorija="+kategorija+"&naslov="+naslov+"&sadrzaj="+sadrzaj+"&seo_naslov="+seo_naslov+"&seo_sadrzaj="+seo_sadrzaj+"&img_url="+img_url+"&id_clanka="+id+"&pozicija="+pozicija+"&img_alt_tag="+img_alt_tag);
	}else {
		document.getElementById("changeBlogPost-notice").style.backgroundColor = "rgba(93, 85, 85, 0.07)";
		document.getElementById("changeBlogPost-notice").style.display = "block";
		document.getElementById("changeBlogPost-notice").innerHTML = "Niste ispunili sva polja ili ste zaboravili odabrati naslovnu fotografiju članka!";
	}
}


//COMMENT BLOG POST
function commentBlogPost(id){
	korisnik = document.getElementById("c_name").value;
	email = document.getElementById("c_email").value;
	komentar = document.getElementById("c_comment").value;
	
	if (komentar != "" && korisnik != "" && email != ""){
		xmlhttp.open("POST", "actions/commentBlogPost.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText == 1){
					alert("Novi komentar je predan!");
					window.location.reload(true);
				}else if (xmlhttp.responseText == 2) {
					alert("Neispravan format emaila!");								
				}else {
					alert("Došlo je do greške prilikom predaje komentara!");
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("komentar="+komentar+"&korisnik="+korisnik+"&email="+email+"&id_clanka="+id);
	}else {
		alert("Potrebno je ispuniti sva polja kako bi objavili komentar!");
	}
	
}



/*DELETE FROM*/
function deleteFrom(table, pk, pkValue, serverPage, ElementId, p1, p2){
	potvrda = confirm("Jeste li sigurni da želite izbrisati zapis?");
	
	if (potvrda == true){
		xmlhttp.open("POST", "actions/deleteFrom.php", true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if (xmlhttp.responseText != ""){
					alert(xmlhttp.responseText);
				}
				
				if (table == "posao" && p1 != 1){
					window.location.reload();
				}else if (table == "posao" && p1 == 1){
					refreshContent(serverPage, ElementId);
				}else {
					refreshContent(serverPage, ElementId);
				}
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("table="+table+"&pk="+pk+"&pkValue="+pkValue+"&img_url="+p2);
	}
}


/*SEARCH ITEM*/
function searchItem(searchData, orderBy, serverPage, ElementId){
	if(searchData.length > 0){
		xmlhttp.open("POST", serverPage, true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById(ElementId).innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("searchData="+searchData+"&orderBy="+orderBy);
	}
	if (searchData.length == 0){
		xmlhttp.open("POST", serverPage, true);
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById(ElementId).innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlhttp.send("searchData="+searchData+"&orderBy="+orderBy);
	}
}


/*SORT ITEMS*/
function orderBy(sortBy, searchData, serverPage, ElementId){
	xmlhttp.open("POST", serverPage, true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(ElementId).innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send("orderBy="+sortBy+"&searchData="+searchData);
}



//REFRESH CONTENT ON PAGE
function refreshContent(serverPage, ElementId){
	xmlhttp.open("POST", serverPage, true);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(ElementId).innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send();
}

/*UPLOAD FOTOGRAFIJA LOGA - DOBIVANJE URL-A UNUTAR FORME ZA UNOS PROIZVODA*/
function uploadimg(theform){
	theform.submit();
}

function doneloading(theFrame, theFile){
	var theloc = "showimg.php?thefile="+theFile;
	theFrame.processAjax("showimg", theloc);
}

function processAjax(obj, serverPage){
	var theImg;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(obj).innerHTML = xmlhttp.responseText;
			document.getElementById("modal-image").style.display = "none";
		}
	}
	xmlhttp.send(null);
}

     
































