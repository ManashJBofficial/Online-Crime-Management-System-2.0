/* PreLoader */
$(window).on('load', function(){
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut();
}); 

/* Sidenav */
function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      //document.getElementById('box').style.marginLeft = "250px";
     
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      //document.getElementById('box').style.marginLeft = "0";
    }

