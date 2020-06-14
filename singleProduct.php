<?php include 'includes/head.php'?>

<body>
    <?php include 'includes/header.php'?>
    <nav aria-label="breadcrumb" class="breadcrumb m-0 p-0 d-none d-md-flex">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb m-0 px-0">
                        <li class="breadcrumb-item"><a href="#">Main Category</a></li>
                        <li class="breadcrumb-item"><a href="#">Sub Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Name</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <div class="selectedProdDesc">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="productSyncSlider">
                                <div class="sliderLarge">
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                </div>
                                <div class="sliderSmall sliderbtnNav">
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                    <div><img src="./images/gI.png" alt="gi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="prodFullInfo">
                                <h2 class="title">Product title</h2>
                                <div class="priceAvalibility">
                                    <div class="Stars" style="--rating: 2.3;" aria-label="Rating of this product is 2.3 out of 5.">
                                        <span>(1)</span>
                                    </div>
                                    <a href="javascript:void(0);" class="d-md-none d-block">
                                        <i class="far fa-heart" aria-hidden="true"></i>
                                        Favourite
                                    </a>
                                </div>
                                <div class="priceAvalibility">
                                    <h4 class="price">PKR 8,590.00</h4>
                                    <h5 class="avalibility">Availibility: <span>IN STOCK</span></h5>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur adipisicing sed do new eiusmod tempor incididunt ut labore etel dolor
                                </p>
                                <div class="prodFeatures">
                                    <div class="feature">
                                        <div class="featureTitle">
                                            <h5>Size</h5>
                                        </div>
                                        <div class="featureDesc">
                                            <select class="form-control">
                                                <option>Small</option>
                                            </select>
                                            <div class="sizeGuide">
                                                <i class="icon"><img src="./images/ruler.png" alt="ruler"></i>
                                                <p>Size Guide</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature">
                                        <div class="featureTitle">
                                            <h5>Color</h5>
                                        </div>
                                        <div class="featureDesc">
                                            <div class="colorPallete">
                                                <span style="background: #EE0C0C" class="active"></span>
                                                <span style="background: #1916B9"></span>
                                                <span style="background: #C10FA5"></span>
                                                <span style="background: #00E1D4"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature">
                                        <div class="featureTitle">
                                            <h5>Quantity</h5>
                                        </div>
                                        <div class="featureDesc">
                                            <select class="form-control">
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="productBuyBtns">
                                    <div class="cartBut"><a href="javascript:void(0);" class="btn btn-radius btn-block btn-theme btn-lg">ADD TO CART</a></div>
                                    <div class="cartBut"><a href="checkout.php" class="btn btn-radius btn-block btn-theme-outline btn-lg">BUY NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="upSell d-none d-md-block">
                        <h5>UPSELL PRODUCTS</h5>
                        <div class="upsellProds">
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="selectProductDescReview">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="upSell">
                        <h5>RELATED PRODUCTS</h5>
                        <div class="upsellProds">
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                            <div class="upSellSingle">
                                <div class="upSellGen">
                                    <div class="upSellImg">
                                        <a href="javascript:void(0);">  
                                            <img src="./images/gI.png" alt="gi">
                                        </a>
                                    </div>
                                    <div class="upSellTitle">
                                        <a href="javascript:void(0);">
                                            <h4>Product title</h4>
                                            <p class="price">PKR 8,590.00</p>
                                        </a>
                                        <div class="prodGeneralBtns">
                                            <button class="btn btn-white btn-round">
                                                    <i class="far fa-heart"></i>
                                            </button>
                                            <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView">
                                                    <i class="icon">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7.66165" cy="7.66165" r="7.16165" stroke="black"/>
                        <line x1="12.6387" y1="12.9527" x2="17.3536" y2="17.6675" stroke="black"/>
                    </svg>
                </i>
                                            </button>
                                            <button class="btn btn-white btn-round">
                                                    <i class="icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                <path d="M6.4386 0.375255C4.41343 0.977216 2.66484 2.27295 1.49948 4.03525C1.33943 4.32401 1.23949 4.64216 1.20569 4.97057V1.81087H0.00656891V6.60737H4.80307V5.40825H2.09305C3.43562 2.82544 6.08936 1.18987 9.00001 1.15135C12.4518 1.19148 15.4774 3.46919 16.4706 6.77525L17.6217 6.4335C16.2065 1.67241 11.1997 -1.03994 6.4386 0.375255Z" fill="black"/>
                                <path d="M13.1969 11.4037V12.6028H15.907C14.5644 15.1857 11.9106 16.8212 9 16.8598C5.5482 16.8196 2.52262 14.5419 1.52944 11.2358L0.378284 11.5776C1.79955 16.3369 6.80987 19.0429 11.5691 17.6216C13.6537 16.9991 15.4419 15.642 16.6025 13.802C16.7268 13.5673 16.7926 13.3061 16.7943 13.0405V16.2002H17.9934V11.4037H13.1969Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="18" height="18" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="upSellDesc">
                                    <p>
                                    Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="descReviewTab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a href="#prodDesc" data-toggle="tab" role="tab" class="active">Description</a></li>
                            <li><a href="#prodSpecs" data-toggle="tab" role="tab">Specifications</a></li>
                            <li><a href="#prodWarranty" data-toggle="tab" role="tab">warranty</a></li>
                            <li><a href="#prodReview" data-toggle="tab" role="tab">Reviews</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="prodDesc" role="tabpanel">Description </div>
                            <div class="tab-pane" id="prodSpecs" role="tabpanel">Specifications</div>
                            <div class="tab-pane" id="prodWarranty" role="tabpanel">warranty</div>
                            <div class="tab-pane" id="prodReview" role="tabpanel">Reviews</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shopMore">
                    <div class="shopMoreTitle">
                        <h3>Shop More Product</h3>
                    </div>
                    <div class="shopMoreProduct">
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                        <div class="singleProd">
                            <div class="prodImage">
                                <a href="singleProduct.php" tabindex="-1">
                                    <img src="./images/gI.png" alt="gI">
                                </a>
                                <div class="prodGeneralBtns">
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="far fa-heart" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" data-toggle="modal" data-target="#quickView" tabindex="-1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    <button class="btn btn-white btn-round" tabindex="-1">
                                            <i class="fa fa-sync" aria-hidden="true"></i>
                                        </button>
                                </div>
                            </div>
                            <a href="singleProduct.php" tabindex="-1">
                                <div class="prodInfo">
                                    <h2>Product Title</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed
                                    </p>
                                    <h3 class="price">PKR 8,599.00</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quickView" tabindex="-1" role="dialog" aria-labelledby="quickViewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="quickViewModal">
                        <div class="prodSlider sliderbtnNav">
                            <img src="./images/gI.png" alt="gi">
                            <img src="./images/gI.png" alt="gi">
                            <img src="./images/gI.png" alt="gi">
                        </div>
                        <div class="quickDescSide">
                            <div class="quickDesc">
                                <div class="text-right">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 1.5L13.5 0L7.5 6L1.5 0L0 1.5L6 7.5L0 13.5L1.5 15L7.5 9L13.5 15L15 13.5L9 7.5L15 1.5Z" fill="black"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="px-4">
                                    <h3 class="quickTitle">Product Title</h3>
                                    <h4 class="quickPrice">PKR 12,300</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet, adipiscing mauris nibh morbi, dui sed Lorem ipsum dolor sit amet.
                                    </p>
                                    <p class="stocks">IN STOCK</p>
                                </div>
                            </div>
                            <div class="quickBtns">
                                <div class="cartViewBtn"><a href="javascript:void(0);" class="btn btn-radius btn-theme btn-block btn-lg">ADD TO CART</a></div>
                                <div class="cartViewBtn"><a href="javascript:void(0);" class="btn btn-radius btn-theme-outline btn-lg btn-block">View Detail</a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include 'includes/bottomMenu.php'?>
    <?php include 'includes/footer.php'?>
    <script>
        $(document).ready(function() {
            $('.sliderLarge').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.sliderSmall',
                dots: false,
            });
            $('.sliderSmall').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.sliderLarge',
                dots: false,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-chevron-left'></i></button>",
                nextArrow: "<button type='button' class='slick-next'><i class='fa fa-chevron-right'></i></button>",
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                        }
                    }
                ]
            });
            $('.shopMoreProduct').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                dots: true,
                infinite: false,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-chevron-left'></i></button>",
                nextArrow: "<button type='button' class='slick-next'><i class='fa fa-chevron-right'></i></button>",
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            })
        })
    </script>
    <?php include 'includes/foot.php'?>