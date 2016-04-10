$(function ()
{
    //Update clock per 1 sec
    setInterval('updateClock()', 1000 );

    $( ".menu-item" ).each( function( index, el ) {
        $( el ).addClass( "tooltip" ).attr( 'title', $( el ).text());
    });

    $('.tooltip').tooltipster();
});

//Change clock time
function updateClock ( ) {
    var currentTime     = new Date ( );
    var currentHours    = currentTime.getHours ( );
    var currentMinutes  = currentTime.getMinutes ( );
    var currentSeconds  = currentTime.getSeconds ( );
    var dayPart         = ( currentHours < 12 ) ? "AM" : "PM";

    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + dayPart;

    $('.footer-date').html(currentTimeString);
}
