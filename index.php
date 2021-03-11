<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Aekpani-Networks</title>
</head>
<body>
<nav>
    <ul class="topnav" id="DropdownClick">
        <li><a href="#home">Home</a></li>

        <li class="topnav-right"><a href="#home">About US</a></li>
        <li class="topnav-right"><a href="#home">FAQ</a></li>
        <li class="topnav-right"><a href="#home">Contact US</a></li>

        <li class="dropdownIcon" onclick="dropdownMenu();"><a href="javascript:void(0);">&#9776;</a></li>
    </ul>
</nav>


<div class="container" id="section-1-gradient">
<div class="row">
    <div class="col-6">
        <div class="leftside-col">
             <h1 class="large">This is a heading</h1>
             <h1 class="large">but will become professional</h1>
        </div>
        <form>
            <div class="leftside-col">
                <h2>Username:</h2>
                <input class="inputbox" type="text" placeholder="Username">
                <h2>Password:</h2>
                <input class="inputbox" type="text" placeholder="Password">
            </div>
        </form>

    </div>

    <div class="col-6">
        <div class="rightside-col">
           <div class="videocontainer">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AmHEfTSBXiY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

           </div>
        </div>
    </div>
</div>
</div>

<header>
<h1 class="section2Header"> TYPES OF PARKING</h1>
</header>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="box">

                    <div class="icon">
                        <img src="1.png">
                    </div>
                <label>Park and Ride</label>
                <p>Secure and easy on your departure date you will drive to the parking area (yard) and park your car by your own, you will
                    leave the keys at the reception and service provider's shuttle bus will bring you to the airport</p>
            </div>
        </div>

        <div class="col-4">
            <div class="box">

                <div class="icon">
                    <img src="2.png">
                </div>
                <label>PMeet and Greet</label>
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
                <label>On Airport Parking</label>
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

    <hr>
    <div class="container">
        <div class="row">

            <div class="col-5">
                <div class="myimage">
                    <img src="image.jpg">
                </div>
            </div>


        <div class="col-7">
            <article>
                <p>Best Airport parking prices at all Major UK Airports.
                    including Heathrow, Gatwick, Luton, Stansted, Birmingham, Manchester Book through budgetairportparking.co.uk&
                    save £££s</p>
            </article>
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
<div class="footer-bottom">
 copyright &copy; Computers & Codes 2019. All Rights Reserved.
</div>

</footer>





<script>
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
</script>
</body>
</html>