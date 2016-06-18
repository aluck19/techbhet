//navigation active state controller
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="' + url + '"]').parent().addClass('active');
// Will also work for relative and absolute hrefs
$('ul.nav > li').removeClass('active');
$('ul.nav a').filter(function() {
	return this.href == url;
}).parent().addClass('active');


//semantic JS
$('.menu .item')
  .tab()
;
$('.ui.checkbox')
  .checkbox()
;
$('select.dropdown')
  .dropdown()
;
$('.accordion')
  .accordion()
;
