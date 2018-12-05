<?php
    //include_once 'db.php';
    include_once 'header.php';
?>

<style>

    .design h2{
        margin-top: 30px;
        border-bottom: solid 2px #ff8c00;
        margin-bottom: 30px;
        margin-left: 30px;   
    }

    .abcd{
        border:solid white 3px;
    }

    .image_place{
        background:cover;
        background-repeat:no-repeat;
    }
    .pic{
        border:solid 3px white;
    }
    
    .place_row{
        margin-top: 50px;
        height: 480px;
        overflow:hidden;
    }
    
    .date{
        height:135px;
        /* border-bottom:solid 2px #707070; */
        padding-left: 40px;
        font-size: 18px;
    }

    .duration{
        height:135px;
        border-right:solid 2px #707070;
        padding-left: 40px;
        padding-top: 20px;
        font-size: 18px;
    }

    .activities{
        height:135px;
        border-left:solid 2px #707070;
        padding-left: 30px;
        font-size: 18px;
    }

    .inclusives{
        height:135px;
        /* border-top:solid 2px #707070; */
        padding-left: 30px;
        padding-top: 20px;
        font-size: 18px;
    }

    .onecol{
        border-bottom:solid 2px #707070;
        margin-left:10px;
    }
    .twocol{
        margin-left:14px;
    }

    .price{
        padding-top:30px;
        padding-left: 30px;
        margin-bottom:20px;
    }
    .details{
        padding-top:30px;
        padding-left: 30px;
        margin-bottom:20px;
    }

    .but{
        border-radius: 5px;
        background-color: #ff652f;
        border-color: transparent;
        color:white;
        font-weight: bold;
        margin-top: 5px;
        margin-bottom: 5px;

    }
    </style>
<body>
    <div class="container">
        <div class="row place_row">
            <div class="col-lg-7 pic">
                <img src="images/bg4.jpg" class="image_place">
            </div>
            
            <div class="col-lg-5 abcd" style="background-color:#b0b0b0">
                <div class="row">
                    <div class="design">
                        <h2> Kodachadri Trek </h2>
                        <div class="row onecol">
                            <div class="col-lg-6 date">
                                <span class="glyphicon glyphicon-calendar"> DATE</span><br>
                                <span class="d" style="font-size: 34px;">24</span><span class="month"> Oct </span> 
                            </div>
                            <div class="col-lg-6 activities">
                                <span class="glyphicon glyphicon-tree-conifer"> ACTIVITIES</span>
                                <p> Trekking </p>
                                <p> Walking </p>
                            </div>
                        </div>
                        <div class="row twocol">
                            <div class="col-lg-6 duration" >
                                <span class="glyphicon glyphicon-time"> DURATION</span><br>
                                <span class="d">1</span><span class="month">Day </span> 
                            </div>
                            <div class="col-lg-6 inclusives">
                                <span class="glyphicon glyphicon-th-list"> INCLUSIONS</span>
                                <p> 2 Meals </p>
                                <p> Travel </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 price">
                        <h4> Price <sub>(per person)</sub></h4><br>
                        <h2 style="color:#f13c20"> 1500/- </h2>
                    </div>
                    <div class="col-lg-6 details">
                        <button class="but"> BOOK NOW</button>
                        <button class="but"> SEND ENQUIRY </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
