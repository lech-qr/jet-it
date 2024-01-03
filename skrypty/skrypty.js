$(document).ready(function () {
    updateContainer();
    // LOGO
        setTimeout(function(){ 
            $('main img#logo').addClass('stan_01'); 
        }, 1000);
        setTimeout(function(){
            $('main img#logo').addClass('stan_02');
        }, 2000);
        setTimeout(function(){
            $('footer').css('bottom', '7%');
        }, 2000);
    // LOGO - koniec
    setTimeout(function (){
        $('section > article:first').fadeIn(1400);    
        updatePetla();    
    }, 3000);        
    $(window).resize(function() {
        updateContainer();
    });
});
$(window).blur(function() {
    // 123
});  
$(window).focus(function() { 
    location.reload();
});
function updateContainer() {
// Ustal wysokość
    var szer = $( window ).width();
    var wyso = $( window ).height();
    console.log(szer + ' x ' + wyso);
    
    $('main').css('line-height', wyso + 'px');     
}
function updatePetla() {
    var naglowek = $('section > article');
    var aktNaglIndex = 0;
    function pokaNastNagl(){
        $( naglowek[aktNaglIndex]).fadeOut(700);
        aktNaglIndex++;
        if ( aktNaglIndex >= naglowek.length) {
            aktNaglIndex = 0;
        }
        $('section > article').eq( aktNaglIndex ).fadeIn(2100);
    }
    var interval = setInterval(pokaNastNagl, 2800);    
}