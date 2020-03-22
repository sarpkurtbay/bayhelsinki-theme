


document.addEventListener("scroll", function() {
    console.log(window.pageYOffset)
})

document.addEventListener("DOMContentLoaded", function() {
    sectionlinks =  document.querySelectorAll(".faq .sidebar li a")
    sectionlinks.forEach( function(sectionlink) {
        sectionlink.addEventListener("click", function() {
            sectionlinks.forEach(function(link) {
                link.classList.remove("selected-link");
            })
            sectionlink.classList.add("selected-link");
        })
    })
    sectionlinks[0].classList.add("selected-link");

    document.addEventListener("touchstart", function(){}, true);

    menuToggle = document.querySelector("a.toggle-header-nav")
    dropDownMenu = document.querySelector("div.drop-down-menu")
    header = document.querySelector("header")

    menuToggle.addEventListener("click", function() {
        dropDownMenu.classList.toggle("open")
        header.classList.toggle("open")
    })

})

document.addEventListener("DOMContentLoaded", function() {

    faqPreviewButton = document.querySelector(".button--faq-preview")
    faqPreviewSection = document.querySelector(".faq-preview")

    faqPreviewButton.addEventListener("click", function() {

        if (faqPreviewSection.classList.contains("open")) {
            faqPreviewSection.classList.remove("open");
            faqPreviewButton.innerHTML = "Show related questions";
        } else {
            faqPreviewSection.classList.add("open");
            faqPreviewButton.innerHTML = "Hide related questions";
        }
    })
})


    menuItemsResponsive = document.querySelectorAll("div.drop-down-menu  ul.studio-header-menu > li")
    menuItemsResponsive.forEach(menuItemResponsive => {
        menuItemResponsive.addEventListener("click", function() {
            subMenuResponsive = this.querySelector(".sub-menu")
            subMenuResponsive.classList.toggle("open")
            dropDownMenu.classList.toggle("drop-down-menu-hidden")
            menuItemResponsive.classList.toggle("absolute")
            menuItemResponsive.classList.toggle("show-selected-menu-item")
        })
    });


    // CLASS PASSES
document.addEventListener("DOMContentLoaded", function() {

    const reformerPilatesPricingButton = document.querySelector(".pricing-category-button--reformer-pilates")
    const matPilatesPricingButton = document.querySelector(".pricing-category-button--mat-classes")
    const pricingSlides = document.querySelector(".pricing-slideshow-slides")
    const reformerPilatesPricingSlide = document.querySelector(".pricing-options--reformer-pilates")
    const matClassesPricingSlide = document.querySelector(".pricing-options--mat-classes")

    reformerPilatesPricingButton.addEventListener("click", function() {
            this.classList.add("selected")
            matPilatesPricingButton.classList.remove("selected")
            reformerPilatesPricingSlide.style.transform = "translateY(0%)"
            matClassesPricingSlide.style.transform = "translateY(0%)"
            reformerPilatesPricingSlide.style.opacity = "1"
            reformerPilatesPricingSlide.style.transition = "transform 0.5s ease, opacity ease 1s 0.2s"
            matClassesPricingSlide.style.opacity = "0"
            matClassesPricingSlide.style.transition = "none"
    })

    matPilatesPricingButton.addEventListener("click", function() {
        this.classList.add("selected")
        reformerPilatesPricingButton.classList.remove("selected")
        matClassesPricingSlide.style.transform = "translateY(-100%)"
        reformerPilatesPricingSlide.style.transform = "translateY(100%)"
        matClassesPricingSlide.style.transition = "transform 0.5s ease, opacity ease 1s 0.2s"
        matClassesPricingSlide.style.opacity = "1"
        reformerPilatesPricingSlide.style.opacity = "0"
        reformerPilatesPricingSlide.style.transition = "none"
    })
})
   //
   //
   // var elem = document.querySelector('.main-carousel');
   // var flkty = new Flickity( elem, {
   //   // options
   //   cellAlign: 'left',
   //   contain: true,
   //   autoPlay: 1000
   // });
   //
   // // element argument can be a selector string
   // //   for an individual element
   // var flkty = new Flickity( '.main-carousel', {
   //   // options
   // });
