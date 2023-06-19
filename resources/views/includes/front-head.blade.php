 <!-- Basic -->
 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('front/images/favicon.png')}}" type="">
    <title> Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" />
    <style>
    .andnew {
        width: 280px;
        float: left;
    }

    .ditaile-my {
        padding: 2px 20px;
    }

    .dark {
        text-decoration: line-through;
        opacity: 0.4;
        font-weight: 500;
        color: darkorange;
    }


    @keyframes dn {
        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(1.2);
        }

        80% {
            transform: scale(1);
        }
    }

    .discount {
        padding: 9px;
        position: absolute;
        width: 50px;
        animation: dn 3s infinite;
        background: darkorange;
        padding-left: 14px;
        margin: 20px;
        border-radius: 80px;
        font-weight: bold;
        font-size: 11px;
    }

    .description {
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0px;
}
    .product_section .box .img-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100%;
    }

    .product_section .box .img-box img {
        max-width: 100%;
        margin: 0px 0px 20px 4px;
        max-height: 420px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border-radius: 23px;
    }

    .product_section .box {
        position: relative;
        margin-top: 25px;
        padding: 0px 0px;
        border-radius: 34px;
        background-color: #f7f8f9;
        -webkit-transition: all .3s;
        transition: all .3s;
        overflow: hidden;
        box-shadow: 5px 5px 5px -5px rgba(0, 0, 0, .2);
        border: solid #fff 10px;
    }

    
.arrival_section .arrival_bg_box {
    position: revert;
    top: 0;
    left: 0;
    /* width: 100%; */
    /* height: 100%; */
    z-index: 3;
}
.arrival_section {
    background-color: #d4ced0;
    background-image: url({{asset('front/images/arrival-bg.png')}});
}

.andnew {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.read-more {
    display: inline-block;
    /* margin-left: 5px; */
    padding: 10px 0px;
    color: blue;
}
.product_section .box .detail-box h5 {
    font-size: 16px;
    font-weight: 400;
    margin-top: 10px;
}



/* 

@keyframes moveProduct {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

.product-animation {
    animation: moveProduct 2s infinite;
} */


/* responsiv product */






    img.girl.img-responsive {
    width: 80%;
    float: left;
}
/* responsiv product */
    </style>