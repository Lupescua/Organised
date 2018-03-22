// watch the window for scrolling events
// Event is called Scroll. Measure the distance of scroll from the top. If it's greater than 80 add class fixed otherwise remove it.
// $(window).scrollTop(); // tells the distance scrolled from the top in pixels

$(window).on('scroll', function (ev) {
    console.log($(window).scrollTop());
    if ($(window).scrollTop() >= 80) {
        // console.log(scrollTop)
        $('#topmenu').addClass('fixed');
    }else if ($(window).scrollTop() < 80){        
        $('#topmenu').removeClass('fixed');
    }
});
