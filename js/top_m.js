$(function () {
  //slide 
  Splide.defaults = {
    type   : 'loop',
    autoplay: true,
    interval: 2000,
    perMove: 1,
    pagination: false,
  }
  new Splide('#slider1', {
    perPage: 5,
    arrows: false,
		interval: 3000,
  }).mount();

	/*var splide = new Splide('#slider1').mount();
	splide.on( 'active', function () {
  // do something
	} );*/
	
});