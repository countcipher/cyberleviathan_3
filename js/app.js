//============================
//DEFINED CONSTANTS VARIABLES
//============================
const body = document.querySelector("body"),
   html = document.querySelector("html"),
   fullWrapper = document.querySelector("full-wrapper");
   nav = document.querySelector(".nav"),
   navLinks = document.querySelector(".nav__links");
   navLinkTitle = document.querySelectorAll(".nav__link-title"),
   hasDropdown = document.querySelectorAll(".has-dropdown"),
   navDropdownContent = document.querySelectorAll(".nav__dropdown-content"),
   hamburger = document.querySelector(".hamburger");

//=============================
//EVENT LISTENERS
//=============================
window.addEventListener("scroll", navWhiteOnScroll);
window.addEventListener("resize", removeMobileClasses);
hamburger.addEventListener("click", toggleMenu);

//==============================
//GIVES <li/> WITH "HAS-DROPDOWN" CLASS THE showDropdownContent FUNCTION
//==============================
(function(){
   hasDropdown.forEach(function(item){
      item.addEventListener("click", showDropdownContent);
   })
})();

//=================================
//SETS CSS PROPERTIES FOR NAV AFTER SCROLLING DOWN PAGE
//=================================
function navWhiteOnScroll(){
   if(window.pageYOffset >= 145 && window.innerWidth >= 646){
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

//================================
//SHOWS DROPDOWN CONTENT FOR DROPDOWN MENUS
//================================
function showDropdownContent(){
   this.children[1].classList.toggle("fullHeight");
}

//==================================
//REMOVES ALL MOBILE-USE CLASSES WHEN WINDOW IS RESIZED
//==================================
function removeMobileClasses(){
   if(window.innerWidth >= 646){
      navDropdownContent.forEach(function(item){
         item.classList.remove("fullHeight");
      })
      navLinks.classList.remove("menuShow");
      nav.classList.remove("fullVH");
      body.classList.remove("noScroll");
      html.classList.remove("noScroll");
      fullWrapper.classList.remove("noScroll");
   }
   
}

//====================================
//OPENS AND CLOSES THE MOBILE NAV MENU
//====================================
function toggleMenu(){
   nav.classList.toggle("fullVH");
   navLinks.classList.toggle("menuShow");
   body.classList.toggle("noScroll");
   html.classList.toggle("noScroll");
   fullWrapper.classList.toggle("noScroll");
}