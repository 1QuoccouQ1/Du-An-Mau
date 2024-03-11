var slideIndex = 1;
var timer;

showSlider(slideIndex);

function plusSlider(n) {
  clearTimeout(timer);
  showSlider(slideIndex += n);
}

function currentSlider(n) {
  clearTimeout(timer);
  showSlider(slideIndex = n);
}

function showSlider(n) {
  var i;
  var slider = document.getElementsByClassName("mySlider");
  var dots = document.getElementsByClassName("dot");
  if (n > slider.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slider.length}
  for (i = 0; i < slider.length; i++) {
      slider[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slider[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  timer = setTimeout(function() {
    plusSlider(1);
  }, 3000);
}

timer = setTimeout(function() {
  plusSlider(1);
}, 3000);

var register = document.getElementById("register");
var wrapregister = document.querySelector(".modal-main-register")

var login = document.getElementById("login");
var wraplogin = document.querySelector(".modal-main-login ")

 var modal = document.querySelector(".modal")
 var modalover = document.querySelector(".modal-overflow")

var Close = document.querySelector(".main-top-right")
var Closelogin = document.querySelector(".main-top-right-login")

register.onclick = function () {
     modal.style.display="block"
     wrapregister.style.display="block"
    wraplogin.style.display="none"

}
login.onclick = function () {
    wraplogin.style.display="block"
    wrapregister.style.display="none"
    modal.style.display="block"
}
Close.onclick = function () {
    modal.style.display="none"
}
Closelogin.onclick = function () {
    modal.style.display="none"
}
modalover.onclick = function () {
    modal.style.display="none"
}

var show = document.querySelectorAll(".home-product-item__img-icon-eye")
 var itemShow = document.querySelector(".modal-info")
 var itemShowOver = document.querySelector("modal-info-over")
 const showPanel = document.querySelector(".modal-info-right-panel-title")
 const showPrice = document.querySelector(".modal-info-right-price-new-only")
 const showPriceOld = document.querySelector(".modal-info-right-price-old-only")
 const showImg = document.querySelector(".modal-info-left-img-main")


 show.forEach(function( show,index) {
   show.addEventListener("click",function(event) {
    const showItem = event.target;
    const productShow = showItem.parentElement.parentElement.parentElement
    const productShowName = productShow.querySelector(".home-product-item__name").innerHTML
    const productShowPrice = productShow.querySelector(".home-product-item__price-new").innerHTML
    const productShowPriceOld = productShow.querySelector(".home-product-item__price-old-alone").innerHTML
    const productShowImg = productShow.querySelector(".home-product-item__img")
    const style = window.getComputedStyle(productShowImg)
    const image = style.backgroundImage
    const url = image.slice(5,-2)

    showPanel.innerHTML = productShowName
    showPrice.innerHTML = productShowPrice
    showImg.style.backgroundImage = `url(${url})`;
    showPriceOld.innerHTML = productShowPriceOld
    OpenShow();
  })
})

function OpenShow() {

  show.forEach(function() {
    itemShow.style.display = "block";
  });
 
}
 itemShow.onclick = function () {
  itemShow.style.display = "none";
}
// Icon message 

var icon = document.querySelectorAll(".home-product-item__img-icon")



      
function toast({  message = "", type = "info", duration = 3000 }) {
    const main = document.getElementById("toast");
    if (main) {
      const toast = document.createElement("div");
  
      // Auto remove toast
      const autoRemoveId = setTimeout(function () {
        main.removeChild(toast);
      }, duration + 1000);
  
      // Remove toast when clicked
      toast.onclick = function (e) {
        if (e.target.closest(".toast__close")) {
          main.removeChild(toast);
          clearTimeout(autoRemoveId);
        }
      };
  
      const icons = {
        success: "fa-solid fa-cart-shopping",
        info: "fas fa-info-circle"

      };
      const icon = icons[type];
      const delay = (duration / 1000).toFixed(2);
  
      toast.classList.add("toast", `toast--${type}`);
      toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;
  
      toast.innerHTML = `
                      <div class="toast__icon">
                          <i class="${icon}"></i>
                      </div>
                      <div class="toast__body">
                          <p class="toast__msg">${message}</p>
                      </div>
                      <div class="toast__close">
                          <i class="fas fa-times"></i>
                      </div>
                  `;
      main.appendChild(toast);
    }
  }

  // Cart Item

  const cart = document.querySelectorAll(".home-product-item__img-icon")

  cart.forEach(function(cart,index) {
    cart.addEventListener("click",function(event) {
      const cartItems = event.target;
      const product = cartItems.parentElement.parentElement.parentElement
      const productImg = product.querySelector(".home-product-item__img")
      const style = window.getComputedStyle(productImg)
      const image = style.backgroundImage
      const url = image.slice(5,-2)
      const productName = product.querySelector(".home-product-item__name").innerHTML
      const productPrice = product.querySelector(".home-product-item__price-new").innerHTML

      cartItem(productName,productPrice,url)
      cartDelete ()

    })
  })


  function cartItem(productName,productPrice,url) {
    const main = document.getElementById("cart-item");
    
    if (main) {
      const cartItemm = document.createElement("div");
  
      cartItemm.innerHTML = `
      <div class="content-cart">
           <div class="content-cart-img">
           <img src="${url}" alt="">
           </div>
          <div class="content-cart-body">
           <div class="content-cart-top">
          <div class="content-cart-top-left">${productName}</div>
           <div class="content-cart-top-right">
           <span class="content-cart-top-right-price">${productPrice}</span>
           <span class="content-cart-top-right-X">x</span>
           <input value="1" min="1" type="number" class="content-cart-top-right-quantity" >
           
         </div>
         </div>
         <div class="content-cart-bottom">
          <span class="content-cart-bottom-left">Phân loại hàng: Tốt </span>
          <span class="content-cart-bottom-right" >Xoá</span>
         </div>
        </div>
        </div>
                  `;
      const sosanh = document.querySelectorAll(".content-cart ")
      for (let i = 0 ; i < sosanh.length; i++) {
          var productTt = document.querySelectorAll(".content-cart-top-left")
          if (productTt[i].innerHTML == productName) {
            toast({
              message: "Đã có trong giỏ hàng.",
              type: "info",
              duration: 3000
            });
            // alert("Đã có trong giỏ hàng")
            return
          } 
      }
      main.appendChild(cartItemm);
      toast({
        message: "Đã thêm giỏ hàng thành công.",
        type: "success",
        duration: 3000
      });
      toTal();

    }

  }


  function cartDelete () {
    const sosanh = document.querySelectorAll(".content-cart ")
      for (var i = 0 ; i < sosanh.length; i++) {
         var productDelete = document.querySelectorAll(".content-cart-bottom-right")
         productDelete[i].addEventListener("click",function(event) {
          let deleteCart = event.target;
          let cartItemDel = deleteCart.parentElement.parentElement.parentElement
          cartItemDel.remove()
          toTal();
        })
        
      }

  }

  function toTal() {
    const sosanh = document.querySelectorAll(".content-cart ")
    var total = 0;
      for (let i = 0 ; i < sosanh.length; i++) {
        var inputValue = sosanh[i].querySelector("input").value
        var proPrice = sosanh[i].querySelector(".content-cart-top-right-price").innerHTML.slice();
        totalA =inputValue * proPrice*1000;
        total = total + totalA;
      }
      
      var cartTotal = document.querySelector(".Sum span")
      cartTotal.innerHTML = total.toLocaleString("de-DE");
      inputChange()
  }

  function inputChange() {
    const sosanh = document.querySelectorAll(".content-cart ")
      for (let i = 0 ; i < sosanh.length; i++) {
        var inputValue = sosanh[i].querySelector("input")
        inputValue.addEventListener("change",function(){
          toTal()
        })
      }
  } 





 

   