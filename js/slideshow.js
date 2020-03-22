
// $("a[href='#top']").click(function() {
//     $("html, body").animate({ scrollTop: 0 }, "slow");
//     return false;
// });



//   COURSES SLIDESHOW

var currentSlide = 0

var nextSlide = function() {
    currentSlide = currentSlide + 1
    var leftPosition = -currentSlide * 100 + 'vw'
    jQuery('.holder').css('left', leftPosition)

    var totalSlides = jQuery(".holder div").length

    if (currentSlide >= (totalSlides - 1)) {
        console.log(totalSlides)
        currentSlide = -1
    }
}

var  previousSlide = function() {
    currentSlide = currentSlide - 1
    var leftPosition = -currentSlide * 100 + 'vw'
    jQuery('.holder').css('left', leftPosition)
}

var autoSlide = setInterval(function() {
    nextSlide()
}, 3000)


// $('.next').on('click', function() {
//     clearInterval(autoSlide)
//     nextSlide()
// })

// $('.prev').on('click', function() {
//     clearInterval(autoSlide)
//     previousSlide()
// })
