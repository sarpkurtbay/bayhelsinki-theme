

document.addEventListener("DOMContentLoaded", function() { 


    // MENU TOGGLE 

    menuToggle = document.querySelector("a.toggle-header-nav")
    dropDownMenu = document.querySelector("div.drop-down-menu")

    menuToggle.addEventListener("click", function() {

        dropDownMenu.classList.toggle("open")
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

});












// CLASS PASSES

document.addEventListener("DOMContentLoaded", function() { 

    const classesTag = document.querySelector("a.classes")
    const privatesTag = document.querySelector("a.privates")
    const classesSlide = document.querySelector("#classes")
    const privatesSlide = document.querySelector("#privates")

    const slideContainer = document.querySelector("div.class-pass-pricing-slide-container")

    privatesTag.addEventListener("click", function() {
            this.classList.add("selected")
            classesTag.classList.remove("selected")
            slideContainer.style.transform = "translateX(-100vw)"
            classesSlide.style.opacity = "0"
            privatesSlide.style.opacity = "1"

    })

    classesTag.addEventListener("click", function() {
        this.classList.add("selected")
        privatesTag.classList.remove("selected")
        slideContainer.style.transform = "translateX(0px)"
        classesSlide.style.opacity = "1"
        privatesSlide.style.opacity = "0"
    })

});


    document.addEventListener("DOMContentLoaded", function() { 

    const classesTag = document.querySelector("a.classes")
    const privatesTag = document.querySelector("a.privates")
    const classesSlide = document.querySelector("#classes")
    const privatesSlide = document.querySelector("#privates")

    const slideContainer = document.querySelector("div.class-pass-pricing-slide-container")

    privatesTag.addEventListener("click", function() {
            this.classList.add("selected")
            classesTag.classList.remove("selected")
            slideContainer.style.transform = "translateX(-100vw)"
            classesSlide.style.opacity = "0"
            privatesSlide.style.opacity = "1"

    })

    classesTag.addEventListener("click", function() {
        this.classList.add("selected")
        privatesTag.classList.remove("selected")
        slideContainer.style.transform = "translateX(0px)"
        classesSlide.style.opacity = "1"
        privatesSlide.style.opacity = "0"
    })

});






// FAQ

document.addEventListener("DOMContentLoaded", function() { 
    sectionTitles = document.querySelectorAll(".container--faqSectionTitle")
    sectionTitles.forEach(sectionTitle => {
        sectionTitle.addEventListener("click", function() {
            let sectionContent = this.nextElementSibling;
            // HOW IS THIS WORKING?
            let triangleSymbol = this.childNodes[3];
            sectionContent.classList.toggle("open");
            triangleSymbol.classList.toggle("triangle-symbol-down")
        })
    })

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

});



// setInterval(function() {

//     jQuery('.holder').css('left', '-100vw')

// }, 1000)