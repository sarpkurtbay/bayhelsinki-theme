

document.addEventListener("DOMContentLoaded", function() { 


    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
      cellAlign: 'left',
      contain: true,
      autoPlay: true
    });
    
    // element argument can be a selector string
    //   for an individual element
    var flkty = new Flickity( '.main-carousel', {
        // cellAlign: 'left',
        // contain: true
    });


    document.addEventListener("touchstart", function(){}, true);

    // MENU TOGGLE 

    menuToggle = document.querySelector("a.toggle-header-nav")

    dropDownMenu = document.querySelector("div.drop-down-menu")
    header = document.querySelector("header")

    menuToggle.addEventListener("click", function() {

        dropDownMenu.classList.toggle("open")
        header.classList.toggle("open")
        // if (slideDownMenu.style.display === "none") {
        //     slideDownMenu.style.display = "block";

        //   } else {
        //     slideDownMenu.style.display = "none";
        //   }
    })



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

        // faqPreviewSection.classList.toggle("open")
        // faqPreviewButton.innerHTML = "Hide "
        // if (slideDownMenu.style.display === "none") {
        //     slideDownMenu.style.display = "block";

        //   } else {
        //     slideDownMenu.style.display = "none";
        //   }
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

        // menuItemResponsive.addEventListener("click", function () {
        //     // unactiveMenuItems = document.querySelectorAll("div.drop-down-menu  ul.studio-header-menu > li :not()")
        //     subMenuResponsive = this.querySelector(".sub-menu")

        //     // unactiveMenuItems.style.display = "none";
        //     this.style.position = "absolute";
        //     subMenuResponsive.style.display = "block";
        // })
    });


    // CLASS PASSES

    newsletterCoverButton = document.querySelector(".studio-footer-newsletter-cover button")
    newsletterCover = document.querySelector(".studio-footer-newsletter-cover")
    newsletterContent = document.querySelector(".studio-footer-newsletter-content")

        newsletterCoverButton.addEventListener("click", function() {
            console.log("hellooo")
            newsletterCover.style.transform = "translateY(-110%)";
        })


    const reformerPilatesPricingButton = document.querySelector(".pricing-category-button--reformer-pilates")
    const matPilatesPricingButton = document.querySelector(".pricing-category-button--mat-classes")

    const pricingSlides = document.querySelector(".pricing-slideshow-slides")

    const reformerPilatesPricingSlide = document.querySelector(".pricing-options--reformer-pilates")
    const matClassesPricingSlide = document.querySelector(".pricing-options--mat-classes")

    // const reformerPilatesPricingView = document.querySelector(".pricing-options--reformer-pilates .flickity-viewport")
    

    // const classesTag = document.querySelector("a.classes")
    // const privatesTag = document.querySelector("a.privates")
    // const classesSlide = document.querySelector("#classes")
    // const privatesSlide = document.querySelector("#privates")

    // const slideContainer = document.querySelector("div.class-pass-pricing-slide-container")

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


    // document.addEventListener("DOMContentLoaded", function() { 

    //     const classesTag = document.querySelector("a.classes")
    //     const privatesTag = document.querySelector("a.privates")
    //     const classesSlide = document.querySelector("#classes")
    //     const privatesSlide = document.querySelector("#privates")

    //     const slideContainer = document.querySelector("div.class-pass-pricing-slide-container")

    //     privatesTag.addEventListener("click", function() {
    //             this.classList.add("selected")
    //             classesTag.classList.remove("selected")
    //             slideContainer.style.transform = "translateX(-100vw)"
    //             classesSlide.style.opacity = "0"
    //             privatesSlide.style.opacity = "1"

    //     })

    //     classesTag.addEventListener("click", function() {
    //         this.classList.add("selected")
    //         privatesTag.classList.remove("selected")
    //         slideContainer.style.transform = "translateX(0px)"
    //         classesSlide.style.opacity = "1"
    //         privatesSlide.style.opacity = "0"
    //     })

    // });

    // FAQ

    // sectionTitles = document.querySelectorAll(".container--faqSectionTitle")
    // sectionTitles.forEach(sectionTitle => {
    //     sectionTitle.addEventListener("click", function() {
    //         let sectionContent = this.nextElementSibling;
    //         // HOW IS THIS WORKING?
    //         let triangleSymbol = this.childNodes[3];
    //         sectionContent.classList.toggle("open");
    //         triangleSymbol.classList.toggle("triangle-symbol-down")
    //     })
    // })

}); 
    // const classesTag = document.querySelector("a.classes")
    // const privatesTag = document.querySelector("a.privates")
    // const classesSlide = document.querySelector("#classes")
    // const privatesSlide = document.querySelector("#privates")

    // const slideContainer = document.querySelector("div.class-pass-pricing-slide-container")

    // privatesTag.addEventListener("click", function() {
    //         this.classList.add("selected")
    //         classesTag.classList.remove("selected")
    //         slideContainer.style.transform = "translateX(-100vw)"
    //         classesSlide.style.opacity = "0"
    //         privatesSlide.style.opacity = "1"

    // })

    // classesTag.addEventListener("click", function() {
    //     this.classList.add("selected")
    //     privatesTag.classList.remove("selected")
    //     slideContainer.style.transform = "translateX(0px)"
    //     classesSlide.style.opacity = "1"
    //     privatesSlide.style.opacity = "0"
    // })





    // setInterval(function() {

    //     jQuery('.holder').css('left', '-100vw')

    // }, 1000)


    // FLICKITY INITIALIZATION

    // var elem = document.querySelector('.main-carousel');
    // var flkty = new Flickity( elem, {
    //   // options
    //   cellAlign: "center",
    // //   contain: true,
    //   dragThreshold: 30,
    //   initialIndex: 0,
    //   autoPlay: true,
    //   selectedAttraction: 0.4,
    //   friction: 0.9
    // });

    // // element argument can be a selector string
    // //   for an individual element
    // var flkty = new Flickity( '.main-carousel', {
    //   // options
    // //   cellAlign: "center",
    // // //   contain: true,
    // //   dragThreshold: 70,
    // //   initialIndex: 0,
    // //   autoPlay: true,
    // //   selectedAttraction: 0.05,
    // //   friction: 0.8
    // });


// LATEST VERSION, WORKED FINE BUT PROBLEM WAS HAVING TWO CAROUSELS ON TOP OF EACH OTHER AND ON SAME PAGE
    // var elem = document.querySelector('.main-carousel');

    // window.addEventListener("resize", function() {
    //         var flkty = new Flickity( elem, {
    //             // options
    //             cellAlign: "left",
    //             contain: true,
    //             dragThreshold: 40,
    //             initialIndex: 0,
    //             selectedAttraction: 0.3,
    //             friction: 0.9
    //           });
          
    //           // element argument can be a selector string
    //           //   for an individual element
    //         //   var flkty = new Flickity( '.main-carousel', {
    //         //     cellAlign: "left",
    //         //     contain: true,
    //         //     dragThreshold: 40,
    //         //     initialIndex: 0,
    //         //     selectedAttraction: 0.3,
    //         //     friction: 0.9
    //         //   });
    // });
