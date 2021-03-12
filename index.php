<!doctype html>
<html lang="en" xmlns:style="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Aekpani-Networks</title>
</head>
<body onload="slider()">

<div class="head" id="home">
    <div class="slider">
        <img src="image.jpg" id="slideimg">
    </div>

    <div class="overlay">
        <nav id="navbar">
            <ul class="topnav" id="DropdownClick">
                <li><a href="#home">Home</a></li>
                <li class="topnav-right"><a href="#aboutus">About US</a></li>
                <li class="topnav-right"><a href="#parking">Book your Parking</a></li>
                <li class="topnav-right"><a href="#services">Services</a></li>
                <li class="dropdownIcon" onclick="dropdownMenu();"><a href="javascript:void(0);">&#9776;</a></li>
            </ul>
        </nav>
        <div class="content" >
            <div class="the-headings">
            <h1>Let's Book your parking Today!!</h1>
            <h3> Aekpaninetworks The Most Reliable Company in Pakistan...</h3>
            </div>

            <div class="row">
            <div class="col-12 divofbutton">
                <button class="mybtn" type="button">Book Now!</button>
                <button class="mybtn" type="button">Contact US</button>
            </div>
            </div>
        </div>
    </div>
</div>


<header id="services">
<h1 class="section2Header" > TYPES OF PARKING</h1>
</header>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="box">

                    <div class="icon">
                        <img src="1.png">
                    </div>
                <label class="mybiglabel">Park and Ride</label>
                <p>Secure and easy on your departure date you will drive to the parking area (yard) and park your car by your own, you will
                    leave the keys at the reception and service provider's shuttle bus will bring you to the airport</p>
            </div>
        </div>

        <div class="col-4">
            <div class="box">

                <div class="icon">
                    <img src="2.png">
                </div>
                <label class="mybiglabel">PMeet and Greet</label>
                <p>Most convenient and time saving just drive to the terminal on departure day & give your chauffeur a
                    call he will meet you at the terminal,you just need to hand over the keys & walk to the main hall
                    for boarding.</p>
            </div>
        </div>

        <div class="col-4">
            <div class="box">

                <div class="icon">
                    <img src="3.png">
                </div>
                <label class="mybiglabel">On Airport Parking</label>
                <p>If you’re after the reassurance of being closer to the check-in desks then look no further than an
                    on-airport car park. Usually located within the airport grounds, you’ll be just a few minutes
                    from the Terminal</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button class="learnmore">Learn More</button>
            </div>
        </div>

    </div>


    </div>



<div class="banner" id="parking">

    <hr>

    <header class="" >
        <h1 class="section2Header" style="color:white">Airport Parking Available</h1>
    </header>

    <div class="container">
        <form action="">
        <div class="row  borderofsearch">
             <div class="col-2">
                <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>flying from</label>
                        <select name="airport" required="">
                            <option value="MME">Durham Tees</option>
                            <option value="EMA">East Midlands</option>
                            <option value="EXT">Exeter</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>DropOff Date</label>
                        <div class="col-xs-12 pad_none drop-date-calender">
                            <input type="date" id="dropoff_date_f" value="12-03-2021">
                            <input type="hidden" name="dropoff_date" id="dropoff_date" value="2021-03-12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>Time</label>
                        <select name="dropoff_time"><option value="00:15">00:15</option><option value="00:30">00:30</option>
                            <option value="00:45">00:45</option><option value="01:00">01:00</option>
                            <option value="01:15">01:15</option><option value="01:30">01:30</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>PickUp Date</label>
                        <div class="col-xs-12 pad_none drop-date-calender">
                            <input type="date" id="pickup_date_f">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>Time</label>
                        <select name="dropoff_time"><option value="00:15">00:15</option><option value="00:30">00:30</option>
                            <option value="00:45">00:45</option><option value="01:00">01:00</option>
                            <option value="01:15">01:15</option><option value="01:30">01:30</option>
                        </select>
                    </div>
                </div>
            </div>

                <div class="col-2">
                    <div class="box-for-searching">
                    <div class="iconforsearch">

                        <label>Promo Code</label>

                            <input name="coupon_code" type="text" placeholder="Code" value="">
                        </div>
                    </div>
                </div>

        </div>  <!-- row ends here-->

    <br>
        <div class="row">
            <div class="col-12">
                <button class="search-btn">Search</button>
            </div>
        </div>
        </form>
    </div>  <!--container --!>

    </div>






        </div>

      </div>




</div>





    <header id="aboutus">
        <h1 class="section2Header"> About US</h1>
    </header>



    <div class="container">
        <div class="row">

            <div class="col-7">
                <article>
                    <p>Best Airport parking prices at all Major UK Airports.
                        including Heathrow, Gatwick, Luton, Stansted, Birmingham, Manchester Book through budgetairportparking.co.uk&
                        save £££s</p>
                </article>
            </div>


            <div class="col-5">
                <div class="myimage">
                    <img src="image3.jpg">
                </div>
            </div>


    </div>
  </div>
</div>




<footer class="footer">

    <div class="row inner-footer">
        <div class="col-3 footer-items mobilestack">
            <h1>Computer & Codes</h1>
            <p>Most convenient and time saving just drive to the terminal on departure day & give your
                chauffeur a call he will meet you at the terminal,you just need to hand over the keys & walk to the
                main hall for boarding.</p>
        </div>

        <div class="col-3 footer-items quciklinksforstyle mobilestack">
            <h2>Quick Links</h2>
            <div class="border"></div>
            <ul>
                <a href=""><li>Home</li></a>
                <a href=""><li>About Us</li></a>
                <a href=""><li>Services</li></a>
                <a href=""><li>PortFolio</li></a>
                <a href=""><li>Contact US</li></a>
            </ul>
        </div>

        <div class="col-3 footer-items quciklinksforstyle mobilestack">
            <h2>Tutorials</h2>
            <div class="border"></div>
            <ul>
                <a href=""><li>HTML/CSS</li></a>
                <a href=""><li>Javascript</li></a>
                <a href=""><li>PHP</li></a>
                <a href=""><li>C</li></a>
                <a href=""><li>Java</li></a>
            </ul>
        </div>

        <div class="col-3 footer-items mobilestack">
            <h2>Contact US</h2>
            <div class="border"></div>
            <ul>
               <li><i class="fa fa-map-marker" aria-hidden="true"></i>karachi , Gulshan E hadeed</li>
               <li><i class="fa fa-phone" aria-hidden="true"></i>+923332337448</li>
               <li><i class="fa fa-envelope" aria-hidden="true"></i>support@aekpaninetwork.test</li>
            </ul>
            <div class="social-media">
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>


</footer>





<script>

    //this is for toggle button of navbar
    function dropdownMenu(){
        var x = document.getElementById("DropdownClick");
        if(x.className==="topnav"){
            x.className += " responsive";
            /*change topnav to topnav.responsive*/
        }
        else{
            x.className="topnav";
        }
    }


    //this is for slider
    var slideimg=document.getElementById("slideimg");

    var images= new Array(
        "image1.jpg",
        "image2.jpg",
        "image3.jpg",
        "image4.jpg"
    );

    var len=images.length;
    var i=0;
    
    function slider() {

        if( i > len-1){
         i=0;
     }
        slideimg.src=images[i];
                i++;

     setTimeout('slider()',3000);
    }



    //for nabar sliding

    // When the user scrolls down 20px from the top of the document, slide down the navbar
    // When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
    }
</script>
</body>
</html>