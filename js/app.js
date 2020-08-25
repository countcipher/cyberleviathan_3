const nav = document.querySelector(".nav"),
   navLinkTitle = document.querySelectorAll(".nav__link-title"),
   navDropdownBox = document.querySelectorAll(".nav__dropdown-box");
   navDropdownContent = document.querySelectorAll(".nav__dropdown-content");


window.addEventListener("scroll", navWhiteOnScroll);
navLinkTitle[1].addEventListener("click", showDropdownContent);

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
   navDropdownContent[0].classList.toggle("fullHeight");
   //navDropdownContent[0].style.height = "100%";
   console.log('hit');
}