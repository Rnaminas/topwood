var aRestavration = document.getElementsByClassName('restavration');
	var aPokraska = document.getElementsByClassName('pokraska');
	var aOkosyach = document.getElementsByClassName('okosyach');
	var aGermetik = document.getElementsByClassName('germetik');
	var aAll=document.getElementsByClassName('all');

	var divRestavration = document.getElementById('restavr');
	var divGermetisation = document.getElementById('germ');
	var divPokraska = document.getElementById('pokr');
	var divOkosyachka = document.getElementById('okos');
	var divDiff=document.getElementById('different');


	// aPokraska[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='flex';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.add('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aGermetik[0].classList.remove('active');
	// }

	// aOkosyach[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='flex';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.add('active');
	// 	aGermetik[0].classList.remove('active');
	// }

	// aGermetik[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='flex';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aGermetik[0].classList.add('active');
	// }
	// aRestavration[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='flex';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.add('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aGermetik[0].classList.remove('active');
	// }
	

	aAll[0].onclick=function() {
		divDiff.style.display='flex';
		divRestavration.style.display='none';
		divPokraska.style.display='none';
		divGermetisation.style.display='none';
		divOkosyachka.style.display='none';
		aPokraska[0].classList.remove('active');
		aRestavration[0].classList.remove('active');
		aOkosyach[0].classList.remove('active');
		aAll[0].classList.add('active');
		aGermetik[0].classList.remove('active');
	}




var reviewButtonBack=document.getElementsByClassName('buttonBack');
		var reviewButtonNext=document.getElementsByClassName('buttonNext');
		var reviewItem=document.getElementsByClassName('reviewItem');

		reviewButtonNext[0].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='block';
		reviewItem[2].style.display='none';
		reviewButtonBack[1].style.display='block';
	}
		reviewButtonNext[1].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='none';
		reviewItem[2].style.display='block';
		reviewButtonBack[2].style.display='block';
		reviewButtonNext[2].style.display='none';
	}

	reviewButtonBack[1].onclick=function() {
		reviewItem[0].style.display='block';
		reviewItem[1].style.display='none';
		reviewItem[2].style.display='none';
		reviewButtonBack[0].style.display='none';
		reviewButtonNext[0].style.display='block';
	}
		reviewButtonBack[2].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='block';
		reviewItem[2].style.display='none';
		reviewButtonBack[1].style.display='block';
		reviewButtonNext[1].style.display='block';
	}



 var scrollUp=document.getElementsByClassName('scrollUp')[0];
 var menu=document.getElementsByClassName('menu')[0];
 var divMenu=menu.getElementsByTagName('div');
 var ahrefMenu=menu.getElementsByTagName('a');
 var spanMenu=menu.getElementsByTagName('span');

		ahrefMenu[0].onmouseover = function(){this.style.color = '#61d128';}
		ahrefMenu[1].onmouseover = function(){this.style.color = '#61d128';}
		ahrefMenu[2].onmouseover = function(){this.style.color = '#61d128';}
		ahrefMenu[3].onmouseover = function(){this.style.color = '#61d128';}
		ahrefMenu[4].onmouseover = function(){this.style.color = '#61d128';}
		ahrefMenu[5].onmouseover = function(){this.style.color = '#61d128';}

function scrolling(){
	var y=window.scrollY;
	var heightScroll=window.scrollY;
	console.log(heightScroll);
	
	// if(heightScroll<20){
	// 	menu.style.background='transparent';
	// }

	if(y>50){
		scrollUp.style.display='block';
	}

	
	if(heightScroll>440){
		menu.style.background='#efefef';
		menu.style.position='fixed';
		menu.style.transition='0.8s';
		menu.style.boxShadow='rgba(109, 109, 109, 0.3) 0px 2px 20px 2px';
		divMenu[0].style.color='#161616';
		spanMenu[1].style.color='#161616';

		

		for (var i=0; i <ahrefMenu.length; i++) {
			ahrefMenu[i].style.color='#161616';
			
    	}

	}
	if(heightScroll<400){
		menu.style.background='';
		menu.style.position='';
		divMenu[0].style.color='';
		spanMenu[1].style.color='';
		for (var i=0; i <ahrefMenu.length; i++) {
			ahrefMenu[i].style.color='white';
    	}
	}




	


}

setInterval(scrolling, 100);