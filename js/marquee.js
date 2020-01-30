// runs after the window has loaded
window.onload = () => {
    // here we grab our marquee element
    // create a variable called marquee and define 'what it is'
   const marquees = document.querySelectorAll('.marquee')
   // we check if there is a element with the class marquee
   if (marquees) {
     marquees.forEach(function (marquee) {
       // if there is we create an array with 40 elements ("spaces" as in empty space between elements?) in it
       const marqueeTexts = new Array(200).fill(null)
       // we go over our array and do a loop
       marqueeTexts.forEach(el => {
         // here it clones the element 40 times and adds
         // each one to the content of the page (inside the parent element (that's why the 'parentnode')
         marquee.parentNode.append(marquee.cloneNode(true));
       })
     })
   }
 }
 






//  var elem = document.querySelector('.main-carousel');
// var flkty = new Flickity( elem, {
//   // options
//   cellAlign: 'left',
//   contain: true
// });

// // element argument can be a selector string
// //   for an individual element
// var flkty = new Flickity( '.main-carousel', {
//   // options
// });
