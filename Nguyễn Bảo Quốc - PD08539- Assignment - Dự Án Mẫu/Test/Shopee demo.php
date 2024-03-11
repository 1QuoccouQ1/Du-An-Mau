

<?php
    include 'connect.php';
    // truy vấn danh sách các sản phẩm
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopee</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./base.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    
    <link rel="icon" href="/favicon_io/favicon-16x16.png" >
    <link
      rel="stylesheet"
      href="fontawesome-free-6.3.0-web/css/all.min.css"
    />
    <link rel="icon" href="/favicon_io/favicon-32x32.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css

    "
    />
  </head>
  <body>
    <div class="app">
      <div id="toast"></div>
      <div class="modal-info">
          <div class="modal-info-over">
          </div>
          <div class="modal-info-item">
              <div class="modal-info-left">
                <div class="modal-info-left-img-main" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler04lf8qraq04_tn);"></div>
                <div class="modal-info-left-img-items">
                  <div class="modal-info-left-img-item" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler0pilmiqia8f_tn);"></div>
                  <div class="modal-info-left-img-item" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler0pioeeoc22e_tn);"></div>
                  <div class="modal-info-left-img-item" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler04lf8qraq04_tn);"></div>
                  <div class="modal-info-left-img-item" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler04lc6ttiq4f_tn); background-size: contain; background-repeat: no-repeat;"></div>
                  <div class="modal-info-left-img-item" style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-ler04l6x1j8yf2_tn); background-size: contain; background-repeat: no-repeat;"></div>
                </div>
                <div class="modal-info-left-share">
                  <div class="modal-info-left-share-mxh">
                    Chia sẻ :
                    <i style="color: #2184F7; margin: 0 3px;" class="fa-brands fa-facebook-messenger"></i>
                    <i style="color: #365EB9; margin: 0 3px;" class="fa-brands fa-facebook"></i>
                    <i style="color: #E23530; margin: 0 3px;" class="fa-brands fa-pinterest"></i>
                    <i style="color: #4CC0F8; margin: 0 3px;" class="fa-brands fa-twitter"></i>
                  </div>
                  <div class="modal-info-left-share-favorate">
                    <i style="color: #E23530; margin: 0 3px;"  class="fa-regular fa-heart"></i>
                    Đã thích (8)
                  </div>
                </div>
              </div>
              <div class="modal-info-right">
                <div class="modal-info-right-panel">
                  
                  <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="BSp+Yo"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 2C0 0.895431 0.895431 0 2 0L28 0C29.1046 0 30 0.895431 30 2V14C30 15.1046 29.1046 16 28 16H2C0.89543 16 0 15.1046 0 14L0 2Z" fill="#D0011B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.8045 3.00128H10.8673C10.8403 3.00132 10.8137 3.00752 10.7895 3.01939C10.7652 3.03126 10.744 3.0485 10.7274 3.0698L10.151 3.70154C10.1108 3.74133 10.0736 3.78149 10.0397 3.82129L10.0109 3.85512L9.73645 4.1559C9.26611 4.63346 8.55272 5.15874 7.50601 5.1696H7.47399C6.35562 5.1696 5.61724 4.53545 5.18223 4.084L4.2545 3.06788C4.23787 3.04676 4.21666 3.02968 4.19249 3.01792C4.16831 3.00617 4.14178 3.00004 4.1149 3H3.17803C3.13084 3.00008 3.08561 3.01887 3.05224 3.05223C3.01887 3.0856 3.00008 3.13084 3 3.17803V12.8198C3.00008 12.867 3.01887 12.9123 3.05224 12.9456C3.08561 12.979 3.13084 12.9978 3.17803 12.9979H4.11458C4.16177 12.9978 4.207 12.979 4.24037 12.9456C4.27373 12.9123 4.29252 12.867 4.2926 12.8198V5.00726C4.51669 5.20068 4.74894 5.38439 4.9887 5.55788C5.57807 5.9956 6.40375 6.40585 7.47655 6.40585H7.51722C8.53818 6.3953 9.32642 6.03468 9.89137 5.64233L9.89877 5.64155L9.97012 5.58642C10.0506 5.52802 10.1262 5.46926 10.1969 5.41116L10.689 5.03095V12.8198C10.6892 12.867 10.708 12.9122 10.7413 12.9455C10.7747 12.9789 10.8199 12.9977 10.867 12.9979H11.8042C11.8514 12.9977 11.8966 12.9789 11.9299 12.9455C11.9633 12.9122 11.9821 12.867 11.9822 12.8198V3.17931C11.9821 3.1322 11.9633 3.08706 11.93 3.05372C11.8967 3.02038 11.8516 3.00153 11.8045 3.00128ZM19.3506 6.74843H18.4154C18.3682 6.74851 18.3229 6.76729 18.2896 6.80066C18.2562 6.83403 18.2374 6.87926 18.2373 6.92645V7.5172C17.6712 7.03692 16.8957 6.70776 16.087 6.70776C14.307 6.70776 12.8639 8.11659 12.8639 9.85105C12.8639 11.5855 14.307 12.9947 16.087 12.9947C16.8743 12.9882 17.6348 12.7074 18.2373 12.2006V12.8195C18.2372 12.843 18.2417 12.8663 18.2506 12.888C18.2595 12.9097 18.2726 12.9295 18.2891 12.9461C18.3057 12.9628 18.3253 12.976 18.347 12.9851C18.3686 12.9941 18.3919 12.9988 18.4154 12.9988H19.3522C19.3994 12.9987 19.4446 12.98 19.478 12.9466C19.5114 12.9132 19.5302 12.868 19.5303 12.8208V6.92933C19.5306 6.90559 19.5262 6.88202 19.5173 6.86C19.5084 6.83798 19.4952 6.81796 19.4785 6.80111C19.4618 6.78426 19.4418 6.77092 19.4199 6.76187C19.3979 6.75283 19.3744 6.74825 19.3506 6.74843ZM16.1455 11.8375C14.9929 11.8375 14.0586 10.9493 14.0586 9.85425C14.0586 8.75921 14.9929 7.87133 16.1455 7.87133C17.2982 7.87133 18.2329 8.75921 18.2329 9.85425C18.2329 10.9493 17.2982 11.8375 16.1455 11.8375ZM23.7506 12.02C23.7618 11.9746 23.7547 11.9266 23.7307 11.8865C23.7067 11.8464 23.6678 11.8174 23.6225 11.8058L23.2034 11.7005L23.1918 11.6976C22.5499 11.5653 22.3174 11.354 22.287 10.769V3.17897C22.2866 3.13204 22.2677 3.08715 22.2344 3.05414C22.201 3.02114 22.1559 3.0027 22.109 3.00287H21.2445C21.1975 3.0027 21.1524 3.02114 21.1191 3.05414C21.0857 3.08715 21.0668 3.13204 21.0664 3.17897V10.4472C21.0082 12.1513 21.9818 12.6863 22.8857 12.8864L23.3174 12.9947C23.363 13.0061 23.4113 12.999 23.4517 12.975C23.4922 12.951 23.5216 12.9121 23.5335 12.8666L23.6318 12.4888C23.6348 12.4786 23.6374 12.4681 23.6399 12.4576L23.6427 12.4465L23.7506 12.02ZM26.9708 11.8864C26.9948 11.9266 27.0019 11.9746 26.9905 12.02L26.8826 12.4465C26.8794 12.4606 26.8759 12.475 26.8718 12.4888L26.7738 12.8666C26.7618 12.9121 26.7324 12.9511 26.6918 12.975C26.6513 12.999 26.603 13.0061 26.5573 12.9947L26.1257 12.8864C25.2218 12.6863 24.2485 12.1513 24.3064 10.4472V3.17897C24.3067 3.13204 24.3257 3.08715 24.359 3.05414C24.3924 3.02114 24.4375 3.0027 24.4844 3.00287H25.3489C25.3959 3.0027 25.441 3.02114 25.4743 3.05414C25.5077 3.08715 25.5266 3.13204 25.527 3.17897V10.769C25.5574 11.354 25.7914 11.5653 26.4318 11.6976C26.436 11.6982 26.4395 11.7005 26.4437 11.7005L26.8625 11.8058C26.9078 11.8173 26.9468 11.8463 26.9708 11.8864Z" fill="white"></path></svg>
                  <span class="modal-info-right-panel-title">Áo Sweater Nam Form Rộng Phối Layer Chất Nỉ Unisex Thời Trang Trẻ Trung VESCA M10</span>
                </div>
                <div class="modal-info-right-feedback">
                  <div class="modal-info-right-feedback-star">
                    <div class="modal-info-right-feedback-star-qtt underline">5.0</div>
                    <i style="font-size: 13px;" class="fa-solid fa-star"></i>
                    <i style="font-size: 13px;"  class="fa-solid fa-star"></i>
                    <i style="font-size: 13px;"  class="fa-solid fa-star"></i>
                    <i style="font-size: 13px;"  class="fa-solid fa-star"></i>
                    <i style="font-size: 13px;"  class="fa-solid fa-star"></i>
                    <i style="color: white; font-size: 13px;"  class="fa-solid fa-star"></i>
                  </div>
                  <div class="modal-info-right-feedback-feed">
                    <div class="modal-info-right-feedback-feed-qtt underline">2k</div>
                    <div style="color: #888; font-size: 14px;" class="modal-info-right-feedback-feed-qtt-over">Đánh Giá</div>
                  </div>
                  <div class="modal-info-right-feedback-qtt">
                    <div style="font-size: 16px;" class="modal-info-right-feedback-qtt-qtt">7,8k</div>
                    <div style="color: #888; font-size: 14px;" class="modal-info-right-feedback-qtt-qtt-over">Đã Bán </div>
                    <svg width="25" height="16" enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-help CH6Tya"><circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle><path stroke="none" d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z"></path></svg>
                  </div>
                  <button style="color: #888; font-size: 14px;" class="modal-info-right-feedback-right">Tố cáo</button>
                </div>
                <div class="modal-info-right-banner">
                  <svg viewBox="0 0 108 21" height="21" width="108" class="flash-sale-logo "><g fill="currentColor" fill-rule="evenodd"><path d="M0 16.195h3.402v-5.233h4.237V8H3.402V5.037h5.112V2.075H0zm29.784 0l-.855-2.962h-4.335l-.836 2.962H20.26l4.723-14.12h3.576l4.724 14.12zM26.791 5.294h-.04s-.31 1.54-.563 2.43l-.797 2.744h2.74l-.777-2.745c-.252-.889-.563-2.43-.563-2.43zm7.017 9.124s1.807 2.014 5.073 2.014c3.13 0 4.898-2.034 4.898-4.384 0-4.463-6.259-4.147-6.259-5.925 0-.79.778-1.106 1.477-1.106 1.672 0 3.071 1.245 3.071 1.245l1.439-2.824s-1.477-1.6-4.47-1.6c-2.76 0-4.918 1.718-4.918 4.325 0 4.345 6.258 4.285 6.258 5.964 0 .85-.758 1.126-1.457 1.126-1.75 0-3.324-1.462-3.324-1.462zm12.303 1.777h3.402v-5.53h5.054v5.53h3.401V2.075h-3.401v5.648h-5.054V2.075h-3.402zm18.64-1.678s1.692 1.915 4.763 1.915c2.877 0 4.548-1.876 4.548-4.107 0-4.483-6.492-3.871-6.492-6.36 0-.987.914-1.678 2.08-1.678 1.73 0 3.052 1.224 3.052 1.224l1.088-2.073s-1.4-1.501-4.12-1.501c-2.644 0-4.627 1.738-4.627 4.068 0 4.305 6.512 3.87 6.512 6.379 0 1.145-.952 1.698-2.002 1.698-1.944 0-3.44-1.48-3.44-1.48zm19.846 1.678l-1.166-3.594h-4.84l-1.166 3.594H74.84L79.7 2.174h2.623l4.86 14.021zM81.04 4.603h-.039s-.31 1.382-.583 2.172l-1.224 3.752h3.615l-1.224-3.752c-.253-.79-.545-2.172-.545-2.172zm7.911 11.592h8.475v-2.192H91.46V2.173H88.95zm10.477 0H108v-2.192h-6.064v-3.772h4.645V8.04h-4.645V4.366h5.753V2.174h-8.26zM14.255.808l6.142.163-3.391 5.698 3.87 1.086-8.028 12.437.642-8.42-3.613-1.025z"></path></g></svg>
                </div>
                <div class="modal-info-right-price">
                  <div class="modal-info-right-price-old"><span class="modal-info-right-price-old-only">739.000</span>đ</div>
                  <div class="modal-info-right-price-new"><span class="modal-info-right-price-new-only">219.000</span>đ</div>
                  <div class="modal-info-right-price-sale">43% GIẢM </div>
                </div>
                <div class="modal-info-right-shop-sale">
                  <div class="modal-info-right-shop-sale-panel">Mã Giảm Giá Của Shop</div>
                  <div class="modal-info-right-shop-sale-itemsale">
                    <div class="modal-info-right-shop-sale-itemsale-wapper"> 10% GIẢM</div>
                   </div>
                </div>
                <div class="modal-info-right-shop-insurance">
                  <div class="modal-info-right-shop-insurance-panel">Bảo Hiểm</div>
                  <div class="modal-info-right-shop-insurance-right">
                    <div>Bảo hiểm Quyền lợi người dùng</div>
                    <div class="modal-info-right-shop-insurance__btn">Mới</div>
                    <div class="modal-info-right-shop-insurance__describe">Tìm hiểu thêm</div>
                  </div>
                </div>
                <div class="modal-info-right-ship">
                  <div class="modal-info-right-ship-panel">Vận Chuyển</div>
                  <div class="modal-info-right-ship-right">
                    <div class="modal-info-right-ship-right-up">
                      <svg class="modal-info-right-ship-right-icon-1" xmlns="http://www.w3.org/2000/svg" width="24.5" height="17" viewBox="0 0 23 16" fill="none" stroke-width="0"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.8 12.9995H10.5641C8.74973 12.9995 7.5 11.9812 7.4202 10.0596L7.50002 1.9649L5.43267 1.46943C5.05323 1.34295 4.87256 0.832732 5.01711 0.489432C5.16166 0.146132 5.43267 -0.0745393 6 0.0233099L8.07066 0.499438C8.88364 0.754224 9.00002 1.36864 9.00002 1.83842V10.0596C9.00002 10.9449 9.60649 11.4995 10.546 11.4995H21.8C22.1975 11.4995 22.5 11.8701 22.5 12.2495C22.5 12.6109 22.1975 12.9995 21.8 12.9995ZM11 1.49944C10.4477 1.49944 10 1.94715 10 2.49944V9.49944C10 10.0517 10.4477 10.4994 11 10.4994H21C21.5523 10.4994 22 10.0517 22 9.49944V2.49944C22 1.94715 21.5523 1.49944 21 1.49944H11ZM15.1543 8.23654C14.8594 8.13183 14.5545 7.95472 14.2398 7.70561L13.7481 8.39382C14.0563 8.65602 14.389 8.86438 14.7462 9.01828C15.1036 9.17217 15.5444 9.24944 16.0688 9.24944C16.3639 9.24944 16.6441 9.20658 16.9095 9.12151C17.175 9.03643 17.4062 8.91842 17.6029 8.76748C17.7995 8.61675 17.9568 8.42992 18.0748 8.20699C18.193 7.98427 18.2519 7.73516 18.2519 7.45967C18.2519 7.15166 18.1814 6.8863 18.0404 6.66316C17.8993 6.44044 17.719 6.25023 17.4995 6.09296C17.2797 5.93547 17.0374 5.80269 16.7718 5.6946C16.5064 5.58651 16.2523 5.48982 16.0099 5.40454L15.882 5.35535C15.7572 5.30954 15.6314 5.26035 15.5033 5.20779C15.3755 5.15543 15.2609 5.09315 15.1592 5.02096C15.0576 4.94897 14.974 4.86368 14.9086 4.76551C14.8429 4.66693 14.8102 4.54913 14.8102 4.41149C14.8102 4.28039 14.8429 4.16407 14.9086 4.06232C14.974 3.96077 15.0642 3.87549 15.1788 3.80666C15.2936 3.73784 15.423 3.68718 15.5674 3.65424C15.7116 3.62152 15.8626 3.60506 16.0198 3.60506C16.3407 3.60506 16.6293 3.66396 16.885 3.78218C17.1406 3.90019 17.3405 4.00827 17.4849 4.10665L17.9667 3.41823C17.8814 3.35278 17.775 3.28227 17.6473 3.2067C17.5193 3.13154 17.3718 3.05934 17.2046 2.99052C17.0374 2.9217 16.8556 2.86428 16.6589 2.81847C16.4621 2.77266 16.2491 2.74944 16.0198 2.74944C15.7378 2.74944 15.4705 2.7906 15.2183 2.87251C14.9658 2.95464 14.7462 3.07074 14.5596 3.22169C14.3726 3.37242 14.2252 3.55101 14.1169 3.75748C14.0088 3.96394 13.9546 4.1951 13.9546 4.45075C13.9546 4.73258 14.012 4.97198 14.1268 5.16852C14.2415 5.36527 14.3924 5.53247 14.579 5.67011C14.7659 5.80775 14.9755 5.92238 15.2086 6.01422C15.441 6.10605 15.6755 6.19133 15.9115 6.26987C16.0492 6.31589 16.205 6.37162 16.3787 6.43706C16.5523 6.50272 16.7129 6.58125 16.8605 6.67308C17.0078 6.76491 17.1324 6.87469 17.2341 7.00241C17.3357 7.13034 17.3866 7.28276 17.3866 7.45967C17.3866 7.61716 17.3488 7.75311 17.2734 7.86795C17.198 7.98258 17.098 8.07758 16.9734 8.15295C16.8489 8.22852 16.7064 8.28573 16.5459 8.325C16.3851 8.36426 16.2196 8.38411 16.0492 8.38411C15.7477 8.39065 15.4492 8.34146 15.1543 8.23654ZM12.25 15.9994C12.9404 15.9994 13.5 15.4398 13.5 14.7494C13.5 14.0591 12.9404 13.4994 12.25 13.4994C11.5596 13.4994 11 14.0591 11 14.7494C11 15.4398 11.5596 15.9994 12.25 15.9994ZM21 14.7494C21 15.4398 20.4404 15.9994 19.75 15.9994C19.0596 15.9994 18.5 15.4398 18.5 14.7494C18.5 14.0591 19.0596 13.4994 19.75 13.4994C20.4404 13.4994 21 14.0591 21 14.7494ZM3.25 8.49956C2.83579 8.49956 2.5 8.83535 2.5 9.24956C2.5 9.66377 2.83579 9.99956 3.25 9.99956H5.75C6.16421 9.99956 6.5 9.66377 6.5 9.24956C6.5 8.83535 6.16421 8.49956 5.75 8.49956H3.25ZM1.5 6.74956C1.5 6.33535 1.83579 5.99956 2.25 5.99956H5.75C6.16421 5.99956 6.5 6.33535 6.5 6.74956C6.5 7.16377 6.16421 7.49956 5.75 7.49956H2.25C1.83579 7.49956 1.5 7.16377 1.5 6.74956ZM1.25 3.49956C0.835786 3.49956 0.5 3.83535 0.5 4.24956C0.5 4.66377 0.835786 4.99956 1.25 4.99956H5.75C6.16421 4.99956 6.5 4.66377 6.5 4.24956C6.5 3.83535 6.16421 3.49956 5.75 3.49956H1.25Z" fill="#D0011B"></path></svg>
                      Xử lý đơn hàng bởi Shopee
                    </div>
                    <div class="modal-info-right-ship-right-between">
                      <i class="fa-solid fa-car-side modal-info-right-ship-right-icon"></i>                      Vận Chuyển Tới
                    </div>
                    <div class="modal-info-right-ship-right-down">
                      Phí Vận Chuyển
                    </div>
                    </div>
                </div>
                <div class="modal-info-right-color">
                  <div class="modal-info-right-color-panel">Màu</div>
                  <div class="modal-info-right-color-right">
                    <div class="product-variation">Đen</div>
                    <div class="product-variation">Trắng</div>
                    <div class="product-variation">Be</div>
                    <div class="product-variation">Kem</div>
                    <div class="product-variation">Nâu</div>
                    <div class="product-variation">Xanh</div>
                  </div>
                </div>
                <div class="modal-info-right-size">
                  <div class="modal-info-right-size-panel">Size</div>
                  <div class="modal-info-right-size-right">
                    <div class="product-variation">M</div>
                    <div class="product-variation">L</div>
                    <div class="product-variation">XL</div>

                  </div>
                </div>
                </div>
              </div>
          </div>
      </div>
      <div class="hear-container">
        <header class="header">
          <div class="hear">
            <div class="hear--list">
              <div class="hear--list-left">
                <div class="hear--list-left-item hear--list-left-item--separate">
                  <a href="" class="hear--list-left-item-link"> Kênh Người Bán </a>
                </div>
                <div class="hear--list-left-item hear--list-left-item--separate">
                  <a href="login.php" class="hear--list-left-item-link"
                    >Admin</a
                  >
                </div>
                <div
                  class="hear--list-left-item--separate hear--list-left-item-download"
                >
                  <a href="" class="hear--list-left-item-link">Tải ứng dụng</a>
                  <div class="container-download">
                    <div class="download-top">
                      <img
                        src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/d91264e165ed6facc6178994d5afae79.png"
                        alt=""
                      />
                    </div>
                    <div class="download-bottom">
                      <div class="download-bottom-left">
                        <img
                          src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/39f189e19764dab688d3850742f13718.png"
                          alt=""
                        />
                      </div>
                      <div class="download-bottom-right">
                        <img
                          src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/f4f5426ce757aea491dce94201560583.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hear--list-left-item hear--list-left-item-importan">
                  <a href="" class="hear--list-left-item-link"> Kết nối </a>
                  <i
                    style="margin-left: -2px; margin-right: 2px"
                    class="fa-brands fa-facebook"
                  ></i>
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <!-- Right -->
              </div>
              <div class="hear--list-right">
                <div class="hear--list-left-item-title hear--list-left-item-link">
                  <i
                    style="margin-left: 2px; margin-right: 2px"
                    class="fa-regular fa-bell "
                  ></i>
                  <a href="" class="hear--list-left-item-link"> Thông báo </a>
                  <div class="container-thongbao">
                    <div class="container-virtul"></div>
                    <div class="main-thongbao-top">
                      <img
                        src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/99e561e3944805a023e87a81d4869600.png"
                        alt=""
                      />
                      Đăng nhập để xem thông báo
                    </div>
                    <div class="main-thongbao-bottom">
                      <div class="main-thongbao-bottom-item">Đăng ký</div>
                      <div class="main-thongbao-bottom-item">Đăng nhập</div>
                    </div>
                  </div>
                </div>
                <div class="hear--list-left-item">
                  <i
                    style="margin-left: 2px; margin-right: 2px"
                    class="fa-regular fa-circle-question"
                  ></i>
                  <a href="" class="hear--list-left-item-link"> Hỗ trợ </a>
                </div>
                <div class="hear--list-left-item-title hear--list-left-item-language hear--list-left-item-link">
                  <i
                    style="margin-left: 2px; margin-right: 2px"
                    class="fa-solid fa-globe"
                  ></i>
                  <a href="" class="hear--list-left-item-link"> Tiếng việt </a>
      
                  <i
                    style="margin-left: 2px; margin-right: 2px"
                    class="fa-solid fa-chevron-down"
                  ></i>
                  <div class="language">
                    <div class="virturl"></div>
                    <div class="language-item">Tiếng Việt</div>
                    <div class="language-item">English</div>
                  </div>
                </div>
                <!-- No User -->
                <div
                  style="color: white; font-weight: 600"
                  class="hear--list-left-item hear--list-left-item--separate hear--with"
                >
                  <a href="/client/res_client.php"  class="hear--list-left-item-link" > Đăng ký </a>
                </div>
                <div
                  style="color: white; font-weight: 600"
                  class="hear--list-left-item"
                >
                  <a  href="/client/login_client.php"   class="hear--list-left-item-link" > Đăng nhập </a>
                </div>
                <!-- Has User -->
                <!-- <div
                  style="color: white; font-weight: 600"
                  class="hear--list-left-item  hear--with hear--list-left-item-avatar-wrap"
                >
                  <span class="hear--list-left-item-avatar">
                    <img src="data:image/jpeg;base64,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" alt="">
                  </span>
                  <a href="" class="hear--list-left-item-link-avatar"> Nguyễn Quốc </a>
                </div> -->

              </div>
            </div>
            <div class="hear--sereach">
              <div class="hear--sereach-right">
                <img
                  src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/26c9324913c021677768c36975d635ef.png"
                  alt=""
                />
              </div>
              <div class="hear--sereach-center">
                <input
                  class="hear--sereach-center-input"
                  type="text"
                  placeholder="Nhập để tìm kiếm sản phẩm"
                />
                <div class="hear--sereach-icon-input">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>
      
                <div class="hear-sereach-history">
                  <div class="hear-sereach-history-title">Lịch sử tìm kiếm</div>
                  <div class="hear-sereach-history-1">Sữa rửa mặt</div>
                  <div class="hear-sereach-history-1">Bộ dụng cụ láp ráp</div>
                </div>
              </div>
              <div class="hear--sereach-left hear--sereach-left-shopping">
                <i class="fa-solid fa-cart-shopping "></i>
                <span class="hear--sereach-left-notice">3</span>
                <!-- No cart : container-cart-right--no-cart -->
                <!-- <div class="container-cart-right">
                  <img
                    src="Screen Shot 0005-02-24 at 10.50.57.png"
                    alt=""
                    class="container-cart-right-img"
                  />
                </div> -->
                <!-- Has cart : container-cart-right-has-cart -->
                <div class="container-cart-right-after container-cart-right-has-cart">
                  <div class="container-cart-right-has-cart-top">Sản Phẩm Đã Thêm</div>
                  <div id="cart-item" class="container-items-cart">
                    <!-- <div class="content-cart">
                      <div class="content-cart-img">
                        <img src="https://static.comem.vn/uploads/November2022/bo-cham-soc-da-rau-ma-cho-da-dau-mun_sp2x.jpg" alt="">
                      </div>
                      <div class="content-cart-body">
                        <div class="content-cart-top">
                        <div class="content-cart-top-left">Bộ sữa rửa mặt</div>
                        <div class="content-cart-top-right">
                          <span class="content-cart-top-right-price">1.300.000</span>
                          <span class="content-cart-top-right-X">x</span>
                          <span class="content-cart-top-right-quantity">2</span>
                        </div>
                      </div>
                      <div class="content-cart-bottom">
                        <span class="content-cart-bottom-left">Phân loại hàng: Bạc </span>
                        <span class="content-cart-bottom-right">Xoá</span>
                      </div>
                      </div>
                    </div>
                    <div class="content-cart">
                      <div class="content-cart-img">
                        <img src="https://down-vn.img.susercontent.com/file/vn-11134201-23030-z72xtjcvi9nv83_tn" alt="">
                      </div>
                      <div class="content-cart-body">
                        <div class="content-cart-top">
                        <div class="content-cart-top-left">Kính mắt mèo nữ Lily</div>
                        <div class="content-cart-top-right">
                          <span class="content-cart-top-right-price">359.000</span>
                          <span class="content-cart-top-right-X">x</span>
                          <span class="content-cart-top-right-quantity">1</span>
                        </div>
                      </div>
                      <div class="content-cart-bottom">
                        <span class="content-cart-bottom-left">Phân loại hàng: Bạc </span>
                        <span class="content-cart-bottom-right">Xoá</span>
                      </div>
                      </div>
                    </div>
                    <div class="content-cart">
                      <div class="content-cart-img">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-ncle8jpklfkv1a_tn" alt="">
                      </div>
                      <div class="content-cart-body">
                        <div class="content-cart-top">
                        <div class="content-cart-top-left">Dây chuyền bạc nữ TLEE</div>
                        <div class="content-cart-top-right">
                          <span class="content-cart-top-right-price">179.000</span>
                          <span class="content-cart-top-right-X">x</span>
                          <span class="content-cart-top-right-quantity">1</span>
                        </div>
                      </div>
                      <div class="content-cart-bottom">
                        <span class="content-cart-bottom-left">Phân loại hàng: Bạc </span>
                        <span class="content-cart-bottom-right">Xoá</span>
                      </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="Sum">Tổng tiền là : <span style="color: #DD332F;" >0</span>
                    <span style="color: #DD332F;">đ</span>
                   </div>
                  <div class="btn btn-cart">Thanh toán</div>
      
                </div>
              </div>
            </div>
          </div>
          <!-- Modal layout -->
            <div class="modal">
            <div class="modal-overflow"></div>
           
             <form class="modal-main-login" action="">
              <div class="main-top" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <div class="main-top-left">Đăng Nhập</div>
                <div class="main-top-right-login">Đóng</div>
              </div>
              <div class="main-body-login">
                <div class="main-body-top">
                  <input
                    type="text"
                    id="username"
                    name="username"
                    class="main-body-input"
                    placeholder="Tài khoản của bạn"
                    required
                  />
                  <input
                    type="text"
                    id="password"
                    name="password"
                    class="main-body-input"
                    placeholder="Mật khẩu của bạn"
                    required
                  />
                </div>
                <div class="main-body-title-help">
                  <span
                    class="main-body-title-help-left hear--list-left-item--separate-1"
                    >Quên mật khẩu</span
                  >
                  <span style="cursor: pointer">Cần trợ giúp?</span>
                </div>
                <div class="main-body-bottom">
                  <div class="main-body-bottom-left">TRỞ LẠI</div>
                  <button type="submit" class="main-body-bottom-right">ĐĂNG NHẬP</button>
                </div>
              </div>
              <div class="main-bottom">
                <div class="main-bottom-div-left">
                  <i class="fa-brands fa-square-facebook main-bottom-div-icon"></i>
                  <div class="main-bottom-div-title">Kết nối với Facebook</div>
                </div>
                <div class="main-bottom-div-right">
                  <i class="fa-brands fa-google main-bottom-div-icon"></i>
                  <div class="main-bottom-div-title">Kết nối với Google</div>
                </div>
              </div>
             </form>
      </div> 
    </div>
      <div class="container">

        <div class="slideshows">
          <div class="slideshow">
            <div class="slideshow-left">

              <div class="slideshow-container">
                <div class="mySlider fade">
                  <img
                    src="https://cf.shopee.vn/file/fa79715264f5c973648d8096a8aa9773_xxhdpi"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlider fade">
                  <img
                    src="https://cf.shopee.vn/file/vn-50009109-c46bf5367c2a15cbd8fcebc3ee84422e_xhdpi"
                    style="width: 100%"
                  />
                </div>
                <div class="mySlider fade">
                  <img
                    src="https://cf.shopee.vn/file/vn-50009109-37d3d0bb6878064cbd4c4722d0b0ae84_xhdpi"
                    style="width: 100%"
                  />
                </div>
                <a class="prev" onclick="plusSlider(-1)">❮</a>
                <a class="next" onclick="plusSlider(1)">❯</a>
                <div class="dotss" style="text-align: center">
                  <span class="dot" onclick="currentSlider(1)"></span>
                  <span class="dot" onclick="currentSlider(2)"></span>
                  <span class="dot" onclick="currentSlider(3)"></span>
                </div>
              </div>
              


            </div>
            <div class="slideshow-right">
              <div class="slideshow-up"></div>
              <div class="slideshow-down"></div>
            </div>
          </div>
        </div>
        <div class="grid">
          <div class="grid-row">
            <div class="category-2">
              <h3 class="category-heading">
                <i class="fa-solid fa-list category-heading-icon"></i>
                Danh mục
                
              </h3>
              <hr style="color: #F9F7FD;">
              <ul class="category-list">
                <li class="category-item">
                  <a href="#" style="color: var(--primary);" class="category-item-link">
                    <i class="fa-solid fa-caret-right category-item-link-icon"></i>
                    Sách Bán Chạy</a>
                </li>
                <li class="category-item">
                  <a href="#" style="margin-left: 15px;" class="category-item-link">Sách Tâm Lý </a>
                </li>
                <li class="category-item">
                  <a href="#" style="margin-left: 15px;" class="category-item-link">Sách Đầu tư  </a>
                </li>
                
              </ul>                
            </div>
            <div class="categery-10">
                <div class="home-filter">
                    <div class="home-filter-left">
                      <span class="home-filter-left-arrange">Sắp xếp theo</span>
                      <div class="button">Phổ biến</div>
                      <div style="background-color: #DD332F; color: var(--white-color);" class="button">Mới nhất </div>
                      <div class="button">Bán chạy</div>
                      <div class="selection">
                        <span>Giá</span>
                        <i class="fa-solid fa-chevron-down selection-icon"></i>
                        <div class="selection-history">
                            <div class="down-to-up">Giá: Thấp đến cao</div>
                            <div class="down-to-up">Giá: Cao đến thấp</div>
                        </div>
                      </div>

                    </div>
                    <div class="home-filter-right">
                        <div class="home-filter-right-number">
                          <span style="font-size: 15.5px; color: var(--primary);" class="home-filter-right-number-first">1</span>
                          /14
                        </div>
                        <div class="home-chevron-left home-chevron-left-opacity">
                          <i class="fa-solid fa-chevron-left home-chevron-left-icon"></i>
                        </div>
                        <div class="home-chevron-left">
                          <i class="fa-solid fa-chevron-right home-chevron-left-icon"></i>
                        </div>
                    </div>
                </div>
               <div class="home-product">
                <div class="grid-row">
                  <!-- Home product -->
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1c907fe21fe46b26e4eb3cec6df3127d);">
                          <div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div>  
                          <div  class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>              
                      </div>
                      <h4 class="home-product-item__name">Bút Bi Nước Văn Phòng Mực Gel Màu Đen Deli Thiết Kế </h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">225.000</span>đ</span>
                      <span class="home-product-item__price-new">124.000</span>
                      <span style="color: red;">đ</span>
                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 4,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">25%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/0e775944902a412f1b3d5977d1ca1e12);">
                        <div   class="home-product-item__img-icon">
                        <i class="fa-solid fa-cart-shopping "></i>        
                      </div>   
                      <div class="home-product-item__img-icon-eye">
                        <i class="fa-solid fa-eye"></i>
                      </div>   
                       </div>
                      <h4 class="home-product-item__name">Son Kem Lì Herorange Mềm Mịn Như Nhung Chống Thấm Nước</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">125.000</span>đ</span>
                      <span class="home-product-item__price-new">95.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 51,6k</span>
                      </div>
                      <div class="home-product-item__address">Hồ Chí Minh</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/vn-11134201-23030-bf3t2jtytgov2e_tn);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div>
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                         </div>
                      <h4 class="home-product-item__name">Dép Nam Nữ - Đế Trấu Quai 2 Khóa-Màu Trắng
                      </h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">399.000</span>đ</span>
                      <span class="home-product-item__price-new">116.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 1,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/63d7bef820b88a57b5ae4713eb2d20d7);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div> 
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                        </div>
                      <h4 class="home-product-item__name">Tee basic ss1 CREWZ</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">199.000</span>đ</span>
                      <span class="home-product-item__price-new">75.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 14,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/0fdcf06ccfb4ef54fe2428ff6420f20d);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div>
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                         </div>
                      <h4 class="home-product-item__name">Kính Cường Lực Full Màn và Tự Dán Blue Arrow Che Bụi</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">99.000</span>đ</span>
                      <span class="home-product-item__price-new">24.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 11,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="grid-row">
                  <!-- Home product -->
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/9506733d60df1b63d7108f19eb47aa96);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div> 
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                        </div>
                      <h4 class="home-product-item__name">Balo Degrey thời trang nam nữ hàng cao cấp chất vải gai mịn chống nước</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">425.000</span>đ</span>
                      <span class="home-product-item__price-new">299.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 34,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/46f4a1c42ce6c897c179817f956bea8f);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div>
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                         </div>
                      <h4 class="home-product-item__name">Quần jean nữ ống rộng đen xám phong cách Ulzzang School (Có Bigsize)</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">349.000</span>đ</span>
                      <span class="home-product-item__price-new">199.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 94,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/aa8397841fed49c424e3fbfacdd4292b);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div> 
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                        </div>
                      <h4 class="home-product-item__name">Serum The Ordinary Niacinamide 10% + Zinc 1% Giúp Cân Bằng Bã Nhờn </h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">899.000</span>đ</span>
                      <span class="home-product-item__price-new">624.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 4,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  <div class="category-2-4">
                    <div class="home-product-item">
                      <div class="home-product-item__img" style="background-image: url(./uploads/1.png);"><div   class="home-product-item__img-icon">
                            <i class="fa-solid fa-cart-shopping "></i>        
                          </div>
                          <div class="home-product-item__img-icon-eye">
                            <i class="fa-solid fa-eye"></i>
                          </div>   
                         </div>
                      <h4 class="home-product-item__name">Nước tẩy trang Nước tẩy trang Loreal - L'Oreal Paris 3-in-1 Micellar 400ml.</h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone">325.000</span>đ</span>
                      <span class="home-product-item__price-new">114.000</span>
                      <span style="color: red;">đ</span>

                      </div>
                      <div class="home-product-item__Gop">
                        <span class="home-product-item__star">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="home-product-item__qtt">Đã bán 23,6k</span>
                      </div>
                      <div class="home-product-item__address">Hà Nội</div>
                      <div class="home-product-item__favorite">Yêu thích</div>
                      <div class="home-product-item__saleoff">
                        <div class="home-product-item__saleoff-percent">35%</div>
                        <div class="home-product-item__saleoff-sale">GIẢM</div>
                        </div>
                    </div>
                  </div>
                  

                <?php
        // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
        while ($row = mysqli_fetch_assoc($result)){
            echo '<div class="category-2-4">
            <div class="home-product-item">
              <div class="home-product-item__img" style="background-image: url(./'.$row['image_url'].');"><div   class="home-product-item__img-icon">
                    <i class="fa-solid fa-cart-shopping "></i>        
                  </div> 
                  <div class="home-product-item__img-icon-eye">
                    <i class="fa-solid fa-eye"></i>
                  </div>   
                </div>
              <h4 class="home-product-item__name"> '.$row['namepro'].' </h4>
              <div class="home-product-item__price">
                <span class="home-product-item__price-old"><span class="home-product-item__price-old-alone"> 430.000</span>đ</span>
              <span class="home-product-item__price-new">'.$row['gia'].'.000</span>
              <span style="color: red;">đ</span>

              </div>
              <div class="home-product-item__Gop">
                <span class="home-product-item__star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span>
                <span class="home-product-item__qtt">Đã bán 19,2k</span>
              </div>
              <div class="home-product-item__address">Hà Nội</div>
              <div class="home-product-item__favorite">Yêu thích</div>
              <div class="home-product-item__saleoff">
                <div class="home-product-item__saleoff-percent">35%</div>
                <div class="home-product-item__saleoff-sale">GIẢM</div>
                </div>
            </div>
          </div>
        </div>';
           
        }
        ?>


                <div class="pagination">
                  <div  class="pagination-item">
                    <i style="font-size: 15px;" class="fa-solid fa-chevron-left"></i>
                  </div>
                  <div class="pagination-item pagination-item-correct">1 </div>
                  <div class="pagination-item">2</div>
                  <div class="pagination-item">3</div>
                  <div class="pagination-item">4</div>
                  <div class="pagination-item">5</div>
                  <div class="pagination-item">...</div>
                  <div class="pagination-item">14</div>
                  <div class="pagination-item">
                    <i style="font-size: 15px;" class="fa-solid fa-chevron-right"></i>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
      </div>
      <div class="footer-container">
        <div class="footer-container-list-1  footer-container-list-item">
          <h4 class="footer-container-list-title">CHĂM SÓC KHÁCH HÀNG</h4>
          <ul>Trung Tâm Hỗ Trợ</ul>
          <ul>Shopee Mall</ul>
          <ul>Hướng Dẫn Mua Hàng</ul>
          <ul>Thanh Toán</ul>
          <ul>Vận Chuyển</ul>
        </div>
        <div class="footer-container-list-1 footer-container-list-item">
          <h4 class="footer-container-list-title">GIỚI THIỆU</h4>
          <ul>Giới Thiệu </ul>
          <ul>Tuyển Dụng  </ul>
          <ul>Điều Khoản</ul>
        </div>
        <div class="footer-container-list-1 footer-container-list-item">
          <h4 class="footer-container-list-title">DANH MỤC</h4>
          <ul>Giày Dép</ul>
          <ul>Mỹ Phầm Làm Đẹp </ul>
          <ul>Đồ Gia Dụng</ul>
          <ul>Đồ Điện Tử </ul>
        </div>
        <div class="footer-container-list-1 footer-container-list-item">
          <h4 class="footer-container-list-title">THEO GIÕI CHÚNG TÔI TRÊN</h4>
          <ul>
            <i class="fa-brands fa-facebook"></i>
            Facebook</ul>
          <ul>
            <i class="fa-brands fa-instagram"></i>
            Instagram </ul>
          <ul>
            <i class="fa-brands fa-linkedin"></i>
            Linkedln</ul>
        </div>
        <div class="footer-container-list-1 footer-container-list-item">
          <h4 class="footer-container-list-title">VÀO CỬU HÀNG TRÊN ỨNG DỤNG </h4>
          <div class="footer-container-list-imgs">
            <div class="footer-container-list-img">
              <img src="https://cf.shopee.vn/file/a5e589e8e118e937dc660f224b9a1472" alt="">
            </div>
            <div class="footer-container-list-img">
              <div class="footer-container-list-img-right">
                <img src="https://cf.shopee.vn/file/ad01628e90ddf248076685f73497c163" alt="">
              </div>
              <div class="footer-container-list-img-right">
                <img src="https://cf.shopee.vn/file/ae7dced05f7243d0f3171f786e123def" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="shopee.js"></script>
  </body>
</html>


<?php
//đóng kết nóii
mysqli_close($conn);
?>