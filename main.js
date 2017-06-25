function cl (a){
console.log (a);
}






  var audioContainer = document.querySelector('#audioContainer');  
    audioContainer.addEventListener('click', function (e) {
 playSong(e);
      
      e.preventDefault();
    });
 

function playSong(e) {
	
	var pressedBtn = e.target;
	 

// $('button').removeClass('activeSong ');
// $(pressedBtn).addClass('activeSong ');
// $(pressedBtn).parent('li').parent('ul').parent('div').parent('div').next().removeClass('activeSong ');
// $(pressedBtn).parent('li').parent('ul').parent('div').parent('div').addClass('activeSong ');




	var audio = $('audio')[0];
	audio.src = pressedBtn.dataset.src;
	audio.play();
	$('#diskSpin').addClass('diskSpin ');



	$(audio).on('ended', function (e) {
		cl('uygtfrtyghj');
		$(pressedBtn).next().find('button').trigger('click');
	})
}

	// $(audio).Pause($('#diskSpin').removeClass('diskSpin ') );








// $('#demo3').circleType({radius: 384});
$('.roundtxt').circleType({fitText:true, radius: 150});
// $('#demo3').circleType();



document.querySelector('#popupBtn1').addEventListener('click', function (e) {
	var bluePopup = new ColoredPopup('Add a New play List', 'blue', 'Play List Name:','Play List Url:');
	bluePopup.build();
	cl(bluePopup);
});


document.querySelector('#popupBtn2').addEventListener('click', function (e) {
	var bluePopup = new ColoredPopup('Add play List Songs', 'blue', 'Song Url:','Play List Url:');
	bluePopup.build();
	cl(bluePopup);
});