<?php include 'includes/head.php'?>
<body class="checkout">
    <?php include 'includes/headerCheckout.php'?>
    <div class="checkoutWizard">
        <ul id="progressbar">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form id="msform">
                        <fieldset>
                            <div class="whiteShadow">
                                <div class="delieveryAddress">
                                    <div class="checkoutTitle">
                                        <h3>
                                            <span>1</span>
                                            Delievery Address
                                        </h3>
                                        <a href="javascript:void(0);">+ Add New</a>                                        
                                    </div>
                                    <div class="delieveryAddressTab">
                                        <ul>
                                            <li>
                                                <input type="radio"  class="addressBox" id="address_1" name="addresses" value="address_1" checked>
                                                <label for="address_1">
                                                    <div class="addressTitle">
                                                        <h4>Home</h4>
                                                        <div class="editDelete">
                                                            <button class="btn btn-round btn-edit"><i class="fas fa-pen"></i></button>
                                                            <button class="btn btn-round btn-delete"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="addressInfo">
                                                        <p><strong>Name</strong>Mr. John Wick</p>
                                                        <p><strong>Address</strong>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new</p>
                                                        <p><strong>Email Address</strong>johnwick@gmail.com</p>
                                                        <p><strong>Contact No.</strong>0333-xxx xxxx</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="radio"  class="addressBox" id="address_2" name="addresses" value="address_2">
                                                <label for="address_2">
                                                    <div class="addressTitle">
                                                        <h4>Office</h4>
                                                        <div class="editDelete">
                                                            <button class="btn btn-round btn-edit"><i class="fas fa-pen"></i></button>
                                                            <button class="btn btn-round btn-delete"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="addressInfo">
                                                        <p><strong>Name</strong>Mr. John Wick</p>
                                                        <p><strong>Address</strong>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new</p>
                                                        <p><strong>Email Address</strong>johnwick@gmail.com</p>
                                                        <p><strong>Contact No.</strong>0333-xxx xxxx</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="radio"  class="addressBox" id="address_2" name="addresses" value="address_3">
                                                <label for="address_3">
                                                    <div class="addressTitle">
                                                        <h4>Office</h4>
                                                        <div class="editDelete">
                                                            <button class="btn btn-round btn-edit"><i class="fas fa-pen"></i></button>
                                                            <button class="btn btn-round btn-delete"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="addressInfo">
                                                        <p><strong>Name</strong>Mr. John Wick</p>
                                                        <p><strong>Address</strong>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new</p>
                                                        <p><strong>Email Address</strong>johnwick@gmail.com</p>
                                                        <p><strong>Contact No.</strong>0333-xxx xxxx</p>
                                                    </div>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="radio"  class="addressBox" id="address_2" name="addresses" value="address_4">
                                                <label for="address_4">
                                                    <div class="addressTitle">
                                                        <h4>Office</h4>
                                                        <div class="editDelete">
                                                            <button class="btn btn-round btn-edit"><i class="fas fa-pen"></i></button>
                                                            <button class="btn btn-round btn-delete"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="addressInfo">
                                                        <p><strong>Name</strong>Mr. John Wick</p>
                                                        <p><strong>Address</strong>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new</p>
                                                        <p><strong>Email Address</strong>johnwick@gmail.com</p>
                                                        <p><strong>Contact No.</strong>0333-xxx xxxx</p>
                                                    </div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="whiteShadow mt-md-5 mt-3 mobileRow">
                                <div class="orderListConten">
                                    <div class="orderListTitle py-md-2">
                                        <h4 class="m-0">Your Orders</h4>
                                    </div>
                                    <div class="orderLists">
                                        <div class="singleList">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <div class="form-check p-md-0 customRadio">
                                                                <input type="checkbox" class="form-check-input" id="product_1">
                                                                <label for="product_1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="form-check-label" for="product_1">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td><img src="./images/gI.png" alt="gI"></td>
                                                                        <td>
                                                                            <div class="mobile-prodTitle">
                                                                                <h5>Product title</h5>
                                                                                <button class="btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                                                                            </div>
                                                                            <div class="d-md-none d-block">
                                                                                <p>Product Attributes</p>
                                                                                <div class="mobilePrice">
                                                                                    <p class="amount">Price <span>12,300</span></p>
                                                                                    <p class="quantity"><input type="number" class="form-control" min="1" max="9" step="1" value="1"></p>
                                                                                </div>                                                                                
                                                                            </div>
                                                                        </td>
                                                                        <td class="d-md-block d-none"><p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do</p></td>
                                                                        <td class="d-md-block d-none"><p class="quantity">Qty: <input type="number" class="form-control" min="1" max="9" step="1" value="1"></p></td>
                                                                        <td class="d-md-block d-none"><p class="amount">Amount <span>12,300</span></p></td>
                                                                        <td class="d-md-block d-none"><button class="btn btn-theme btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                                                    </tr>
                                                                </table>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <div class="form-check p-md-0 customRadio">
                                                                <input type="checkbox" class="form-check-input" id="product_2">
                                                                <label for="product_2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="form-check-label" for="product_2">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td><img src="./images/gI.png" alt="gI"></td>
                                                                        <td>
                                                                            <div class="mobile-prodTitle">
                                                                                <h5>Product title</h5>
                                                                                <button class="btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                                                                            </div>
                                                                            <div class="d-md-none d-block">
                                                                                <p>Product Attributes</p>
                                                                                <div class="mobilePrice">
                                                                                    <p class="amount">Price <span>12,300</span></p>
                                                                                    <p class="quantity"><input type="number" class="form-control" min="1" max="9" step="1" value="1"></p>
                                                                                </div>                                                                                
                                                                            </div>
                                                                        </td>
                                                                        <td class="d-md-block d-none"><p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do</p></td>
                                                                        <td class="d-md-block d-none"><p class="quantity">Qty: <input type="number" class="form-control" min="1" max="9" step="1" value="1"></p></td>
                                                                        <td class="d-md-block d-none"><p class="amount">Amount <span>12,300</span></p></td>
                                                                        <td class="d-md-block d-none"><button class="btn btn-theme btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                                                    </tr>
                                                                </table>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="totalPayoff">
                                <div class="row justify-content-end">
                                    <div class="col-md-5">
                                        <div class="payOffs">
                                            <p>Sub Total<strong>PKR. 26,350</strong></p>
                                            <p>Delivery Charges<strong>PKR. 150</strong></p>
                                            <p>Sales Tax (GST).<strong>PKR. 50</strong></p>
                                            <p class="totalAmount">Total<strong>PKR. 26,550</strong></p>
                                        </div>
                                        <a href="javascript:void(0)" class="next btn btn-theme btn-radius btn-block next-payment">CHECK OUT</a>
                                        <a href="index.php" class="btn btn-theme-outline btn-radius btn-block">CONTINUE SHOPPING</a>
                                    </div>
                                </div>
                            </div>                            
                        </fieldset>
                        <fieldset>
                            <div class="paymentMethod">
                                <div class="whiteShadow">
                                    <div class="delieveryAddress">
                                        <div class="checkoutTitle">
                                            <h3>
                                                <span>2</span>
                                                Payment Method
                                            </h3>
                                            <a href="javascript:void(0);">+ Add New</a>                                        
                                        </div>
                                        <div class="delieveryAddressTab">
                                            <ul class="paymentSlider">
                                                <li>
                                                    <input type="radio" class="addressBox" name="cardName" value="paypal" class="form-control" id="payment_1" checked>
                                                    <label for="payment_1">
                                                        <div class="addressTitle">
                                                            <h4><img src="./images/paypal.png" alt="paypal"></h4>
                                                            <div class="editDelete">
                                                                <button class="btn btn-round btn-edit"><i class="fas fa-pen" aria-hidden="true"></i></button>
                                                                <button class="btn btn-round btn-delete"><i class="fas fa-times" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-info">
                                                            <p>Card Number</p>
                                                            <p class="card-num"><span>****</span><span>****</span><span>****</span><span>1234</span></p>
                                                            <p class="card-name">John Doe Smith</p>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="addressBox" name="cardName" value="paypal" class="form-control" id="payment_2">
                                                    <label for="payment_2">
                                                        <div class="addressTitle">
                                                            <h4><img src="./images/visa.png" alt="paypal"></h4>
                                                            <div class="editDelete">
                                                                <button class="btn btn-round btn-edit"><i class="fas fa-pen" aria-hidden="true"></i></button>
                                                                <button class="btn btn-round btn-delete"><i class="fas fa-times" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-info">
                                                            <p>Card Number</p>
                                                            <p class="card-num"><span>****</span><span>****</span><span>****</span><span>1234</span></p>
                                                            <p class="card-name">John Doe Smith</p>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="addressBox" name="cardName" value="paypal" class="form-control" id="payment_3">
                                                    <label for="payment_3">
                                                        <div class="addressTitle">
                                                            <h4><img src="./images/visa.png" alt="paypal"></h4>
                                                            <div class="editDelete">
                                                                <button class="btn btn-round btn-edit"><i class="fas fa-pen" aria-hidden="true"></i></button>
                                                                <button class="btn btn-round btn-delete"><i class="fas fa-times" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-info">
                                                            <p>Card Number</p>
                                                            <p class="card-num"><span>****</span><span>****</span><span>****</span><span>1234</span></p>
                                                            <p class="card-name">John Doe Smith</p>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" class="addressBox" name="cardName" value="paypal" class="form-control" id="payment_4">
                                                    <label for="payment_4">
                                                        <div class="addressTitle">
                                                            <h4><img src="./images/visa.png" alt="paypal"></h4>
                                                            <div class="editDelete">
                                                                <button class="btn btn-round btn-edit"><i class="fas fa-pen" aria-hidden="true"></i></button>
                                                                <button class="btn btn-round btn-delete"><i class="fas fa-times" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-info">
                                                            <p>Card Number</p>
                                                            <p class="card-num"><span>****</span><span>****</span><span>****</span><span>1234</span></p>
                                                            <p class="card-name">John Doe Smith</p>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="otherPaymentOption">
                                                <div class="form-check customRadio">
                                                    <input type="radio" name="cardName" value="cod" class="form-check-input" id="cod">
                                                    <label for="cod">
                                                        <p>Cash On Delivery (COD)</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="whiteShadow mt-5 mobileRow">
                                <div class="orderListConten">
                                    <div class="orderListTitle py-md-2">
                                        <h4 class="m-0">Your Orders</h4>
                                    </div>
                                    <div class="orderLists">
                                        <div class="singleList no-minus-margin-mobile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><img src="./images/gI.png" alt="gI"></td>
                                                        <td>
                                                            <h5>Product title</h5>
                                                            <p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do</p>
                                                            <p class="amount"><span>1</span>x<span>12,300</span></p>
                                                        </td>
                                                        <td class="d-md-block d-none"><p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do</p></td>
                                                        <td class="d-md-block d-none"><p class="amount"><span>1</span>x<span>12,300</span></p></td>
                                                    </tr>
                                                </tbody>
                                            </table>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="totalPayoff">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4">
                                            <div class="payOffs">
                                                <p class="totalAmount">Total<strong>PKR. 26,550</strong></p>
                                            </div>
                                            <a href="javascript:void(0)" class="next btn btn-theme btn-radius btn-block">PAY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="orderConfirmed">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="whiteShadow">
                                                <div class="delieveryAddress">
                                                    <div class="checkoutTitle">
                                                        <h3>
                                                            <span>3</span>
                                                            Order Confirmed
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="orderConfirmation">
                                                    <p>Thank you. Your order has been received.</p>
                                                    <div class="row confirmationDetail">
                                                        <div class="col-md-3 text-center">
                                                            <p>
                                                                ORDER NUMBER
                                                                <strong>3031</strong>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p>
                                                                Date
                                                                <strong>May 19, 2020</strong>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p>
                                                                TOTAL
                                                                <strong>PKR. 26,550</strong>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p>
                                                                PAYMENT METHOD
                                                                <strong>Cash on delivery</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="whiteShadow p-0 mt-3 mt-lg-0">
                                                <div class="orderNumber">
                                                    <div class="orderPartition">
                                                        <p><strong>Your order number is</strong></p>
                                                        <p class="orderNumberVal">0000000000</p>
                                                    </div>
                                                    <div class="orderPartition">
                                                        <p>You can track and manage your order at <a href="#">My Orders</a></p>
                                                        <button class="btn btn-theme-outline btn-radius">
                                                            Track Order
                                                        </button>
                                                    </div>
                                                    <div class="orderPartition orderMailing">
                                                        <p>
                                                            <i class="icon">
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0)">
                                                                    <path d="M10.3574 19.9882C11.8868 19.7709 13.2276 18.1747 14.0712 15.8173C12.8516 15.5442 11.6071 15.3976 10.3574 15.3801V19.9882Z" fill="#595959"/>
                                                                    <path d="M12.8009 19.6133C12.8913 19.5871 12.9814 19.5608 13.0707 19.5318C13.1461 19.5076 13.2205 19.4814 13.2948 19.4554C13.3828 19.425 13.4704 19.3938 13.5577 19.3606C13.632 19.3323 13.7057 19.3023 13.7795 19.2723C13.8647 19.2365 13.9496 19.2009 14.0338 19.1651C14.1072 19.1328 14.1802 19.099 14.2532 19.065C14.3357 19.026 14.4179 18.9864 14.4994 18.9452C14.571 18.9088 14.6424 18.8716 14.7139 18.8334C14.794 18.7904 14.8736 18.7466 14.9527 18.7016C15.0242 18.6611 15.0932 18.6204 15.1628 18.5785C15.2403 18.5309 15.3174 18.4832 15.3941 18.4356C15.4626 18.392 15.5311 18.3476 15.5986 18.3019C15.674 18.2511 15.7483 18.1982 15.8223 18.1454C15.8888 18.0977 15.955 18.0502 16.0199 18.0024C16.0915 17.9473 16.1648 17.8902 16.2365 17.833C16.3002 17.7822 16.3637 17.7317 16.4264 17.6795C16.4978 17.6202 16.5662 17.5588 16.6355 17.4973C16.6962 17.4434 16.7573 17.39 16.8166 17.3347C16.8849 17.271 16.9514 17.205 17.0179 17.1395C17.0755 17.0826 17.1338 17.0266 17.1901 16.9683C17.2006 16.9575 17.2105 16.9458 17.2214 16.9346C16.4417 16.532 15.6206 16.2159 14.7722 15.9922C14.331 17.3992 13.5458 18.6744 12.4878 19.7016C12.5168 19.6941 12.5457 19.688 12.5747 19.6805C12.6512 19.6591 12.7262 19.6355 12.8009 19.6133Z" fill="#595959"/>
                                                                    <path d="M20.0001 10.3657H15.7144C15.6981 12.0391 15.4554 13.7026 14.9927 15.3108C15.9362 15.5629 16.8467 15.9252 17.7054 16.3903C19.1153 14.6911 19.9223 12.5725 20.0001 10.3657Z" fill="#595959"/>
                                                                    <path d="M10.3574 9.65078H14.9994C14.9812 8.03656 14.7444 6.43228 14.2957 4.88159C13.0031 5.17637 11.683 5.3338 10.3574 5.35125V9.65078Z" fill="#595959"/>
                                                                    <path d="M10.3574 0.0283203V4.63642C11.6071 4.6188 12.8516 4.47237 14.0712 4.19923C13.2276 1.84186 11.8868 0.24561 10.3574 0.0283203Z" fill="#595959"/>
                                                                    <path d="M10.3574 14.6653C11.683 14.6829 13.0031 14.8403 14.2957 15.1351C14.7444 13.5844 14.9812 11.98 14.9994 10.3657H10.3574V14.6653Z" fill="#595959"/>
                                                                    <path d="M17.7054 3.62622C16.8467 4.09134 15.9362 4.45367 14.9927 4.70569C15.4554 6.31398 15.6981 7.97742 15.7144 9.65081H20.0001C19.9221 7.44423 19.1151 5.32561 17.7054 3.62622Z" fill="#595959"/>
                                                                    <path d="M17.2225 3.08399C17.212 3.07334 17.2021 3.06182 17.1918 3.05083C17.1352 2.99254 17.0766 2.93634 17.019 2.87962C16.9527 2.81417 16.8865 2.74802 16.8181 2.68449C16.7589 2.62934 16.6977 2.57716 16.6369 2.52218C16.5676 2.46074 16.4984 2.39879 16.4271 2.33945C16.3654 2.28726 16.302 2.23735 16.2392 2.18726C16.1676 2.12931 16.0943 2.07172 16.0207 2.01639C15.9561 1.9677 15.8906 1.92058 15.8248 1.87345C15.7501 1.8197 15.6751 1.76612 15.599 1.71498C15.5322 1.66995 15.4643 1.62597 15.3964 1.58286C15.3191 1.53312 15.2419 1.48443 15.1632 1.4373C15.0943 1.39594 15.0246 1.3551 14.9548 1.31548C14.8749 1.26975 14.7948 1.22542 14.714 1.18214C14.6424 1.14636 14.571 1.10744 14.4995 1.07166C14.4173 1.03013 14.3344 0.990159 14.2494 0.95089C14.1778 0.916856 14.1052 0.883696 14.0315 0.851408C13.9469 0.813884 13.8614 0.780025 13.776 0.744247C13.7024 0.714228 13.6291 0.684558 13.5547 0.656284C13.468 0.623123 13.38 0.592057 13.2921 0.561689C13.2177 0.535509 13.1434 0.509504 13.068 0.48507C12.9786 0.456098 12.8892 0.429745 12.7974 0.403216C12.7231 0.3814 12.6484 0.359235 12.5732 0.339338C12.5444 0.331484 12.5151 0.325376 12.4861 0.317871C13.5441 1.34515 14.3291 2.62009 14.7705 4.02732C15.6198 3.80357 16.4422 3.48733 17.2225 3.08399Z" fill="#595959"/>
                                                                    <path d="M0 9.65081H4.28574C4.30197 7.97742 4.54474 6.31398 5.00725 4.70569C4.06392 4.45384 3.1534 4.09152 2.29471 3.62622C0.884864 5.32544 0.0778401 7.44423 0 9.65081Z" fill="#595959"/>
                                                                    <path d="M9.64253 19.9882V15.3801C8.39289 15.3978 7.14832 15.5442 5.92871 15.8173C6.77221 18.1747 8.11312 19.7709 9.64253 19.9882Z" fill="#595959"/>
                                                                    <path d="M9.64269 10.3657H5.00073C5.01888 11.98 5.25555 13.5844 5.70444 15.1351C6.997 14.8401 8.31697 14.6827 9.64269 14.6653V10.3657Z" fill="#595959"/>
                                                                    <path d="M9.64253 0.0283203C8.11312 0.24561 6.77221 1.84186 5.92871 4.19923C7.14832 4.47254 8.39289 4.61897 9.64253 4.63642V0.0283203Z" fill="#595959"/>
                                                                    <path d="M9.64269 5.35125C8.31714 5.3338 6.997 5.17637 5.70444 4.88159C5.25555 6.43228 5.01888 8.03656 5.00073 9.65078H9.64269V5.35125Z" fill="#595959"/>
                                                                    <path d="M7.51111 0.317383C7.48214 0.324888 7.45316 0.330996 7.42419 0.338501C7.34845 0.358746 7.27375 0.381261 7.19835 0.403077C7.10864 0.429256 7.01963 0.45561 6.92958 0.484233C6.85366 0.508842 6.77896 0.535021 6.70426 0.561026C6.61682 0.591918 6.52921 0.622635 6.44264 0.655447C6.36794 0.684069 6.29429 0.713739 6.22029 0.744108C6.13529 0.779886 6.05012 0.815665 5.96617 0.851269C5.89252 0.883557 5.81974 0.917415 5.74679 0.951449C5.66424 0.990369 5.58203 1.02999 5.50053 1.07118C5.42897 1.10765 5.35741 1.145 5.28603 1.18305C5.20592 1.22598 5.12651 1.26997 5.04762 1.31499C4.97607 1.35496 4.90573 1.39598 4.83679 1.43786C4.75913 1.48464 4.68233 1.53298 4.60589 1.5808C4.53712 1.62478 4.46888 1.66911 4.40134 1.71484C4.32594 1.76563 4.25159 1.81851 4.17759 1.87139C4.1111 1.91904 4.04495 1.96651 3.97985 2.01451C3.90672 2.06948 3.83691 2.12673 3.76326 2.1838C3.69973 2.23459 3.63568 2.28503 3.57355 2.33756C3.50199 2.39655 3.4341 2.45764 3.36516 2.51872C3.30407 2.57318 3.24246 2.62606 3.18277 2.68243C3.11488 2.74579 3.04874 2.81158 2.98241 2.87686C2.92482 2.93376 2.86618 2.98995 2.80963 3.04842C2.79933 3.05924 2.78939 3.07111 2.77856 3.08211C3.55801 3.48492 4.37935 3.80099 5.22774 4.02474C5.66895 2.61838 6.45363 1.34414 7.51111 0.317383Z" fill="#595959"/>
                                                                    <path d="M2.98105 17.1368C3.04755 17.2022 3.11369 17.2684 3.18194 17.3321C3.24128 17.387 3.30236 17.4392 3.36327 17.4942C3.43256 17.5558 3.50185 17.6176 3.57306 17.6769C3.63484 17.7288 3.69784 17.7789 3.76102 17.8291C3.83258 17.8871 3.90396 17.9447 3.97971 18.0003C4.04411 18.0487 4.10956 18.0955 4.17501 18.1435C4.24971 18.197 4.3251 18.2506 4.4012 18.3021C4.46804 18.3471 4.53593 18.3911 4.60383 18.4344C4.68114 18.484 4.75828 18.5327 4.837 18.5798C4.90594 18.6213 4.97557 18.662 5.04539 18.7018C5.12532 18.7475 5.20543 18.7918 5.28624 18.8349C5.35762 18.8707 5.42918 18.9096 5.50073 18.9454C5.58294 18.987 5.66584 19.0269 5.75083 19.0664C5.82239 19.1001 5.89499 19.1332 5.96865 19.1657C6.05329 19.2032 6.13864 19.2371 6.22416 19.2728C6.29781 19.3029 6.37111 19.3325 6.44546 19.3608C6.5322 19.3941 6.62016 19.4252 6.70813 19.4556C6.78248 19.4816 6.85683 19.5078 6.93222 19.532C7.02158 19.561 7.11094 19.5875 7.20274 19.6139C7.27709 19.6357 7.35179 19.6579 7.42684 19.6779C7.45581 19.6858 7.48513 19.6919 7.5141 19.6994C6.45611 18.6719 5.67107 17.397 5.22969 15.9897C4.3813 16.2137 3.55997 16.5297 2.78052 16.9327C2.79099 16.9434 2.80094 16.9549 2.81141 16.9659C2.86499 17.0238 2.92276 17.08 2.98105 17.1368Z" fill="#595959"/>
                                                                    <path d="M2.29471 16.3903C3.1534 15.9252 4.06392 15.5629 5.00725 15.3108C4.54474 13.7026 4.30197 12.0391 4.28574 10.3657H0C0.0780146 12.5723 0.884864 14.6909 2.29471 16.3903Z" fill="#595959"/>
                                                                    </g>
                                                                    <defs>
                                                                    <clipPath id="clip0">
                                                                    <rect width="20" height="20" fill="white"/>
                                                                    </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </i>
                                                            <span>We’ve sent the confirmation email to <a href="#">demo@gmail.com</a>.</span>
                                                        </p>
                                                        <p>
                                                            <i class="icon">
                                                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0)">
                                                                    <path d="M17.3708 13.6743C15.7722 13.6743 14.4717 14.9748 14.4717 16.5735C14.4717 18.1721 15.7722 19.4726 17.3708 19.4726C18.9697 19.4726 20.27 18.1721 20.27 16.5735C20.27 14.9748 18.9695 13.6743 17.3708 13.6743ZM17.3708 18.0231C16.5714 18.0231 15.9213 17.3729 15.9213 16.5735C15.9213 15.7741 16.5714 15.1239 17.3708 15.1239C18.1703 15.1239 18.8204 15.7741 18.8204 16.5735C18.8204 17.373 18.1703 18.0231 17.3708 18.0231Z" fill="#595959"/>
                                                                    <path d="M7.46533 13.6743C5.86669 13.6743 4.56616 14.9748 4.56616 16.5735C4.56616 18.1721 5.86669 19.4726 7.46533 19.4726C9.06396 19.4726 10.3645 18.1721 10.3645 16.5735C10.3645 14.9748 9.06396 13.6743 7.46533 13.6743ZM7.46533 18.0231C6.6659 18.0231 6.01575 17.3729 6.01575 16.5735C6.01575 15.7741 6.6659 15.1239 7.46533 15.1239C8.26453 15.1239 8.91491 15.7741 8.91491 16.5735C8.91491 17.373 8.26476 18.0231 7.46533 18.0231Z" fill="#595959"/>
                                                                    <path d="M19.3231 5.37618C19.1999 5.13145 18.9494 4.97705 18.6754 4.97705H14.8582V6.42664H18.2284L20.202 10.3521L21.4975 9.70072L19.3231 5.37618Z" fill="#595959"/>
                                                                    <path d="M15.1964 15.873H9.71216V17.3226H15.1964V15.873Z" fill="#595959"/>
                                                                    <path d="M5.29105 15.873H2.77848C2.37814 15.873 2.05371 16.1975 2.05371 16.5978C2.05371 16.9982 2.37818 17.3226 2.77848 17.3226H5.2911C5.69144 17.3226 6.01587 16.9981 6.01587 16.5978C6.01587 16.1975 5.69139 15.873 5.29105 15.873Z" fill="#595959"/>
                                                                    <path d="M22.8479 11.442L21.4223 9.6059C21.2853 9.42905 21.0739 9.32563 20.8499 9.32563H15.5831V4.25211C15.5831 3.85177 15.2586 3.52734 14.8583 3.52734H2.77848C2.37814 3.52734 2.05371 3.85181 2.05371 4.25211C2.05371 4.65241 2.37818 4.97688 2.77848 4.97688H14.1335V10.0504C14.1335 10.4507 14.458 10.7752 14.8583 10.7752H20.495L21.5505 12.1349V15.8729H19.5453C19.1449 15.8729 18.8205 16.1973 18.8205 16.5976C18.8205 16.998 19.145 17.3224 19.5453 17.3224H22.2753C22.6756 17.3224 23.0001 16.9979 23.0001 16.5976V11.8866C23.0001 11.7257 22.9465 11.5691 22.8479 11.442Z" fill="#595959"/>
                                                                    <path d="M5.24266 12.2007H1.90861C1.50826 12.2007 1.18384 12.5252 1.18384 12.9255C1.18384 13.3258 1.50831 13.6502 1.90861 13.6502H5.24262C5.64296 13.6502 5.96739 13.3258 5.96739 12.9255C5.96743 12.5252 5.64296 12.2007 5.24266 12.2007Z" fill="#595959"/>
                                                                    <path d="M6.90966 9.34985H0.72477C0.324471 9.34985 0 9.67432 0 10.0747C0 10.475 0.324471 10.7994 0.72477 10.7994H6.90966C7.31 10.7994 7.63443 10.475 7.63443 10.0747C7.63443 9.67437 7.31 9.34985 6.90966 9.34985Z" fill="#595959"/>
                                                                    <path d="M8.09349 6.49902H1.90861C1.50826 6.49902 1.18384 6.82349 1.18384 7.22379C1.18384 7.62414 1.50831 7.94856 1.90861 7.94856H8.09349C8.49384 7.94856 8.81826 7.62409 8.81826 7.22379C8.81831 6.82349 8.49384 6.49902 8.09349 6.49902Z" fill="#595959"/>
                                                                    </g>
                                                                    <defs>
                                                                    <clipPath id="clip0">
                                                                    <rect width="23" height="23" fill="white"/>
                                                                    </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </i>
                                                            <span>Your order has been placed and will be shipped till <strong>07-Nov to 08-Nov</strong>.</span>
                                                        </p> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'includes/bottomMenu.php'?>
    <?php include 'includes/footer.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        $(document).ready(function(){
            $('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div><div class="quantity-button quantity-down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div></div>').insertAfter('.quantity input');
            $('.quantity').each(function() {
                var spinner = $(this),
                    input = spinner.find('input[type="number"]'),
                    btnUp = spinner.find('.quantity-up'),
                    btnDown = spinner.find('.quantity-down'),
                    min = input.attr('min'),
                    max = input.attr('max');

                btnUp.click(function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue >= max) {
                    var newVal = oldValue;
                    } else {
                    var newVal = oldValue + 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

                btnDown.click(function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue <= min) {
                    var newVal = oldValue;
                    } else {
                    var newVal = oldValue - 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

            });
            var options ={
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                dots: false,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-chevron-left'></i></button>",
                nextArrow: "<button type='button' class='slick-next'><i class='fa fa-chevron-right'></i></button>",
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            };
            $('.next-payment').on('click', function(){
                $('.delieveryAddressTab ul').slick('unslick');
                $('.delieveryAddressTab ul').slick(options);
            })
            $('.delieveryAddressTab ul').slick(options)

        })
    </script>
    <?php include 'includes/foot.php'?>