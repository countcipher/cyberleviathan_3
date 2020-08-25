const nav = document.querySelector(".nav"),
   navLinkTitle = document.querySelectorAll(".nav__link-title"),
   hasDropdown = document.querySelectorAll(".has-dropdown");
   navDropdownContent = document.querySelectorAll(".nav__dropdown-content");


window.addEventListener("scroll", navWhiteOnScroll);

(function(){
   hasDropdown.forEach(function(item){
      item.addEventListener("click", showDropdownContent);
   })
})();

function navWhiteOnScroll(){
   if(window.pageYOffset >= 300 && window.innerWidth >= 692){
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