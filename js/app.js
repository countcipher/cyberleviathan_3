let nav = document.querySelector(".nav");
let navLinkTitle = document.querySelectorAll(".nav__link-title");

window.addEventListener("scroll", myFunc);

function myFunc(){
   if(window.pageYOffset >= 300){
        nav.classList.add("onScrollWhite");
        navLinkTitle.forEach(function(item){
         item.classList.add("onScrollBlackColor");
        });
   }else{
      nav.classList.remove("onScrollWhite");
      navLinkTitle.forEach(function(item){
         item.classList.remove("onScrollBlackColor");
      })
   }
}