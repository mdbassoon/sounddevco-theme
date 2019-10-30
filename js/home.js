/**
 * File main.js.
 *
 * Provides Main Scrolling function of site
 * 
 */
(function ($, root, undefined) {
	'use strict';
	console.log('is home: ',$('body.home').length);
	let audioCtx = new (window.AudioContext || window.webkitAudioContext)();
	let windowWidth = $(window).width();
	let windowHeight = $(window).height();

	let waiting = false;
	let musicWaiting = false;
	let hoverNote = false;
	const textToPosition = {
		'websites':2,
		'process-simplification':3,
		'multi-platform':4,
		'data-science':5,
		'sound-development':6,
		'contact-us':7
	}
	let panels = document.getElementsByClassName('panel');
	let links = document.getElementById('panel-2').getElementsByTagName('li');
	let topButtons = document.getElementsByClassName('top-button');
	let contactButtons = document.getElementsByClassName('contact-button');
	let leftButtons = document.getElementsByClassName('left-arrow');
	let rightButtons = document.getElementsByClassName('right-arrow');
	let scrollPosition = 0;
	let resizeTimer;
	let lineTimer = false;
	let sliderWidth = 0;
	let sliders;
	let sliderI = 1;
	let clickNavigate = false;
	let loaded = false;
	function resize() {
		clearTimeout(lineTimer);
		const wpadminbar = document.getElementById('wpadminbar');
		windowWidth = $(window).width();
		windowHeight = $(window).height();

		$('html').css('width',windowWidth+'px');
		$('html').css('height',wpadminbar?windowHeight+32+'px':windowHeight+'px');
		$('html').css('overflow','hidden');
		for(let i=0;i<panels.length;i++) {
			let img = panels[i].getElementsByClassName('panel-background')[0];
			const contactBox = panels[i].getElementsByClassName('gform_wrapper');
			if(img){	
				img.style.height = null;
				img.width = windowWidth;
				img.height = windowHeight;
				img.style.width = windowWidth;
				img.style.height = windowHeight;
			}
			$(panels[i]).css('width',windowWidth+'px');
			$(panels[i]).css('height',windowHeight+'px');

		}
		const width = document.getElementById('portfolio-slider').offsetWidth;
		$(document.getElementById('portfolio-slider')).css('right',-width)
		changePanel(scrollPosition);
		resizeSliders();
		if(!lineTimer){
			lineTimer = true;
			setTimeout(lines(),1000);
		}
	}
	function lines() {
		console.log('lines');
		for(let i=2;i<panels.length;i++) {
			const ring = panels[i].getElementsByClassName('ring')[0];
			const lines = panels[i].getElementsByClassName('line');
			const top = $(ring).offset().top;//top of the ring in relation to the total div
			const lastRingTop = $(panels[i-1].getElementsByClassName('ring')[0]).offset().top;
			let ringHeight = $(ring).height();
			let height = Math.abs(top-lastRingTop-ringHeight*3);
			$(lines[0]).css('height',height);
			$(lines[0]).css('top',-height-ringHeight);
			lineTimer = false;
		} 
	}
	function pageLinks() {
		if(!loaded){
			for(let i=0;i<links.length;i++){
				$(links[i].getElementsByTagName('A')).on('click', function (e) {
					e.preventDefault();
					changePanel(e.target.id.split('-')[1]-1);
				})
			}
			loaded = true;
		}
		if(!clickNavigate){
			for(let i=0;i<topButtons.length;i++){
				$(topButtons[i]).on('click', function () {
					changePanel(1);
				})
				$(contactButtons[i]).on('click', function () {
					changePanel(7);
				})
			}
		} else {
			for(let i=0;i<topButtons.length;i++){
				const upArrow = $(topButtons[i]).children()[0];
				$(topButtons[i]).off();
				console.log('arrows',upArrow);
				$(topButtons[i]).text('Back');
				$(topButtons[i]).prepend(upArrow);
				$(topButtons[i]).on('click', function () {
					changePanel(scrollPosition-1>=0?scrollPosition-1:0);
				})
				if(i===0){
					console.log('looking for this: ',$('#panel-2').find('.panel-box'));
					const firstButton = $(topButtons[i]).clone();
					$(firstButton).on('click', function () {
						changePanel(scrollPosition-1>=0?scrollPosition-1:0);
					})
					$('#panel-2').append(firstButton);
				}
				const downArrow = $(contactButtons[i]).children()[0];
				$(contactButtons[i]).off();	
				$(contactButtons[i]).text('Next');
				$(contactButtons[i]).append(downArrow);
				$(contactButtons[i]).on('click', function () {
					changePanel(scrollPosition+1<=panels.length?scrollPosition+1:panels.length);
				})
			}
		}
	}
	function changePanel(panel) {
		if(panel<0){panel=0}
		scrollPosition = panel;
		if(scrollPosition>0){
			$('.home-page').css('margin-top', -windowHeight*(scrollPosition)+'px');
		} else {
			$('.home-page').css('margin-top', '0px');
		}
		if(window.location.hash&&history){
			history.pushState(null,null,'/wordpress/');
		}


		const slider1 = document.getElementById('sound-slider');
		const slider2 = document.getElementById('portfolio-slider');
		slider1.classList.remove('show-portfolio');
		slider2.classList.remove('show-portfolio');

		const paragraphs = panels[6].getElementsByClassName('panel-box')[0].getElementsByTagName('P'); 
		if(panel===6){
			for(let i=0;i<paragraphs.length-1;i++){
				paragraphs[i].classList.add('show');
			}
			playSounds();
		}
	}
	function noteToFreq(input) {
		const noteToPitch = {'c':-9,'c#':-8,'d':-7,'d#':-6,'e':-5,'f':-4,'f#':-3,'g':-2,'g#':-1,'a':0,'a#':1,'b':2,'c1':3,'c#1':4,'d1':5,'d#1':6,'e1':7,'f1':8,'f#1':9,'g1':10,'g#1':11,'a1':12,'a#1':13,'b1':14,'c2':15};
		const freq = 440*Math.pow(Math.pow(2, (1/12)), noteToPitch[input]+12);
		return freq;
	}
	function createOsc(note) {
		const osc = audioCtx.createOscillator();
		osc.frequency.value = noteToFreq(note);		
		osc.type = 'sine';
		return osc;
	}
	function playSounds() {
		if(!musicWaiting&&!hoverNote){
		musicWaiting = true;
		const time = audioCtx.currentTime;
		const osc1 = createOsc('a');
		const oscGain = audioCtx.createGain();
		oscGain.gain.value = 0.25;
		osc1.connect(oscGain);
		osc1.start(time+0.5);
		osc1.stop(time + 0.75);
		oscGain.gain.exponentialRampToValueAtTime(0.01, time + 0.75);
		oscGain.gain.linearRampToValueAtTime(0.25, time + 1);
		const osc2 = createOsc('c#1');
		osc2.connect(oscGain);
		osc2.start(time+1);
		osc2.stop(time + 1.25);
		oscGain.gain.exponentialRampToValueAtTime(0.01, time + 1.25);
		oscGain.gain.exponentialRampToValueAtTime(0.25, time + 1.5);
		const osc3 = createOsc('e1');
		osc3.connect(oscGain);
		osc3.start(time+1.5);
		osc3.stop(time + 1.75);
		oscGain.gain.exponentialRampToValueAtTime(0.01, time + 1.75);
		oscGain.gain.linearRampToValueAtTime(0, time + 1.76);
		oscGain.connect(audioCtx.destination);
		}
	}
	function scroll(e) {
		if(!waiting){
			waiting = true;
			if(e.deltaY>0&&scrollPosition<panels.length-1){
				changePanel(scrollPosition+1);
			} else if(e.deltaY<0&&scrollPosition>0) {
				changePanel(scrollPosition-1);
			}
			setTimeout(function(){waiting = false},1100);
		}
	}
	function resizeSliders() {
		sliders = document.getElementsByClassName('slider');
		sliderWidth = sliders[0].offsetWidth;

		for(let i=0;i<sliders.length;i++){
			const slides = sliders[i].getElementsByClassName('slide');
			$(sliders[i].getElementsByClassName('slider-wrapper')[0]).css('width',sliderWidth*slides.length);
			for(let y=0;y<slides.length;y++) {
				$(slides[y]).css('width',sliderWidth);
			}
			changeSlide(sliders[i], sliderI)
		}
	}
	function changeSlide(slider, slide) {
		const oldSlide = sliderI;
		const slides = slider.getElementsByClassName('slide');
		if(slide===0){
			console.log('to the end');
			$(slider).css('transition','none');
			$(slider).css('margin-left',-((slides.length-1)*sliderWidth));
			setTimeout(function(){$(slider).css('transition','margin-left ease-in 0.25s');
			$(slider).css('margin-left',-((slides.length-2)*sliderWidth));
			sliderI = slides.length-2
			console.log(sliderI);
			},1);
		} else if(slide===slides.length-1){
			console.log('to the beginning');
			$(slider).css('transition','none');
			$(slider).css('margin-left',0);
			setTimeout(function(){$(slider).css('transition','margin-left ease-in 0.25s');
			$(slider).css('margin-left',-sliderWidth);
			sliderI = 1;},1);
		} else {
			$(slider).css('margin-left',-(slide*sliderWidth));
			sliderI = slide;
		}
	}
	function scrollUp() {
		$("html,body").css('overflow','hidden');
		$("html,body").scrollTop(0);
		$('.home-page').css('margin-top', '0px');
		$("html,body").css('overflow','initial');
		setTimeout(function(){
			resize();
			resizeSliders();
			pageLinks();
			changePanel(0);		
			$('html').removeClass('hidden');	
		},200)
	}
	function hashCheck() {
		const hash = window.location.hash;
		console.log('hash',hash);
		if(hash){
			if(hash==='#portfolio'){
				const slider = document.getElementById('portfolio-slider').getElementsByClassName('slider-wrapper')[0];
				setTimeout(function(){
					changePanel(2);
					$(slider).css('transition','none');
					$(slider).css('margin-left',-sliderWidth);
					sliderI = 1;
					setTimeout(function(){$(slider).css('transition','margin-left ease-in 0.25s');},1);
					document.getElementById('portfolio-slider').classList.add('show-portfolio');
					console.log('portfolio');
				},400);
			}
		}
	}
	function addListeners() {
		makeSliderInfinite();
		document.getElementById('portfolio-button').addEventListener("click",function(e){
			e.preventDefault();
			const slider = document.getElementById('portfolio-slider').getElementsByClassName('slider-wrapper')[0];
			$(slider).css('transition','none');
			$(slider).css('margin-left',-sliderWidth);
			sliderI = 1;
			setTimeout(function(){$(slider).css('transition','margin-left ease-in 0.25s');},1);
			document.getElementById('portfolio-slider').classList.add('show-portfolio');
		})
		document.getElementById('portfolio-close').addEventListener("click",function(e){
			e.preventDefault();
			const slider = document.getElementById('portfolio-slider').getElementsByClassName('slider-wrapper')[0]
			changeSlide(slider, 1);
			document.getElementById('portfolio-slider').classList.remove('show-portfolio');
		})
		window.onload = window.onpageshow = scrollUp();
		$(document).on('ready',function (e) {
			scrollUp();
		});
		$('.scroll-button').on("click", function(e){
			if(clickNavigate === false){
				console.log('scroll click:',e);
				clickNavigate = true;
				changePanel(scrollPosition+1);
				pageLinks();
			} else {
				changePanel(scrollPosition+1);
			}
		});
		$('#sound-button').on("mouseenter",function(e){
			if(!hoverNote){
				hoverNote = true;
				musicWaiting = true;
				const osc = createOsc('a1');
				const oscGain = audioCtx.createGain();
				oscGain.gain.value = 0.25;
				oscGain.connect(audioCtx.destination);
				const time = audioCtx.currentTime;
				oscGain.gain.value = 0.25;
				osc.connect(oscGain);
				osc.start(time);
				osc.stop(time + 0.25);
				oscGain.gain.linearRampToValueAtTime(0, time + 0.25);
				}
		});
		document.getElementById('sound-button').addEventListener("click",function(e){
			e.preventDefault();
			document.getElementById('sound-slider').classList.add('show-portfolio');
		})
		document.getElementById('sound-close').addEventListener("click",function(e){
			e.preventDefault();
			document.getElementById('sound-slider').classList.remove('show-portfolio');
		})
		document.body.addEventListener("wheel", scroll, false);
		let touchStart;
		let touchEnd;
		let touchTimer;
		document.body.addEventListener('touchstart',function(e){
			touchStart = e.touches[0].clientY;
		},false);
		document.body.addEventListener('touchmove',function(e){
			if(!waiting){touchEnd = e.touches[0].clientY;};
		},false);
		document.body.addEventListener('touchend',function(e){
			if(touchEnd&&touchStart!==touchEnd){
				scroll({deltaY:touchStart-touchEnd});
				touchStart = null;
				touchEnd = null;
				touchTimer = null;
			}
		},false);
		$(window).on('keydown',function(e){
			if(e.which===40&&scrollPosition<panels.length-1){
				console.log(scrollPosition,panels.length)
				changePanel(scrollPosition+1);
			} else if (e.which===38&&scrollPosition>0){
				changePanel(scrollPosition-1);
			}
		});
		$(window).on('resize',function (e) {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(resize(),400);
		});
		for(let i=0;i<leftButtons.length;i++){
			leftButtons[i].addEventListener('click',function(e){
				const slider = e.target.parentElement.getElementsByClassName('slider-wrapper')[0];
				const slides = slider.getElementsByClassName('slide');		
				if(!sliderI){sliderI=0}
				changeSlide(slider, (sliderI-1));
			});
			rightButtons[i].addEventListener('click',function(e){
				const slider = e.target.parentElement.getElementsByClassName('slider-wrapper')[0];
				const slides = slider.getElementsByClassName('slide');		
				if(!sliderI){sliderI=0}
				changeSlide(slider, (sliderI+1));
			});
		}
		hashCheck();
	}
	function resizeSingle() {
		console.log('resize');
		windowWidth = $(window).width();
		windowHeight = $(window).height();
		if(document.getElementById('wpadminbar')){
			windowHeight = $(window).height()-32;
		}
		$('html').css('width',windowWidth+'px');
		$('html').css('height',windowHeight+'px');
		$('html').css('overflow','hidden');
		$('#main').css('width',windowWidth+'px');
		$('#main').css('height',windowHeight+'px');
		$('.panel-background').css('width',windowWidth+'px');
		$('.panel-background').css('height',windowHeight+'px');
		$('.panel-background').css('position','absolute');
		const contentWrapper = document.getElementsByClassName('content-wrapper')[0];
		const scrollBarSize = contentWrapper.offsetWidth - contentWrapper.clientWidth;
		console.log('offset width',contentWrapper.offsetWidth)
		console.log('client width',contentWrapper.clientWidth)
		$('.content-wrapper').css('margin-right',-scrollBarSize);
		clearTimeout(resizeTimer);
	}
	function makeSliderInfinite() {
		const slider = document.getElementById('portfolio-slider').getElementsByClassName('slider-wrapper')[0];
		const slides = slider.getElementsByClassName('slide');
		const firstSlide = $(slides[0]).clone();
		const lastSlide = $(slides[slides.length-1]).clone();
		console.log('innerhtml',firstSlide.innerHTHMl);
		$(slider).prepend(lastSlide);
		$(slider).append(firstSlide);
	}
	addListeners();
})(jQuery, this);