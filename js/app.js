const body = document.querySelector("body"),
   html = document.querySelector("html"),
   fullWrapper = document.querySelector("full-wrapper");
   nav = document.querySelector(".nav"),
   navLinks = document.querySelector(".nav__links");
   navLinkTitle = document.querySelectorAll(".nav__link-title"),
   hasDropdown = document.querySelectorAll(".has-dropdown"),
   navDropdownContent = document.querySelectorAll(".nav__dropdown-content"),
   hamburger = document.querySelector(".hamburger");


window.addEventListener("scroll", navWhiteOnScroll);
window.addEventListener("resize", removeMobileClasses);
hamburger.addEventListener("click", toggleMenu);

(function(){
   hasDropdown.forEach(function(item){
      item.addEventListener("click", showDropdownContent);
   })
})();

function navWhiteOnScroll(){
   if(window.pageYOffset >= 300 && window.innerWidth >= 646){
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

function showDropdownContent(){
   this.children[1].classList.toggle("fullHeight");
}

function removeMobileClasses(){
   if(window.innerWidth >= 646){
      navDropdownContent.forEach(function(item){
         item.classList.remove("fullHeight");
      })
      navLinks.classList.remove("menuShow");
   }
   
}

function toggleMenu(){
   nav.classList.toggle("fullVH");
   navLinks.classList.toggle("menuShow");
   body.classList.toggle("noScroll");
   html.classList.toggle("noScroll");
   fullWrapper.classList.toggle("noScroll");
}