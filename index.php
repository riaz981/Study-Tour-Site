<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Netwealth Study Tour 2018">
        <meta name="author" content="">
        <title>Netwealth Study Tour 2018</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">
        <link href="css/modifier.css?ver=1212171115" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N6T6SL"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N6T6SL');</script>
        <!-- End Google Tag Manager -->
        <style>
         #logo-image{
            width:480px;

         }
         @media (max-width: 500px){
            #logo-image{
                width: 397px;
            }
         }

        .mySlides {display:none;}

        .w3-container,.w3-panel{
            padding:0.01em 16px
        }
        .w3-content{
            max-width:980px;
            margin:auto
            }
        .w3-rest{
            overflow:hidden
        }
        .w3-panel{margin-top:16px;
            margin-bottom:16px
        }
        .w3-animate-top{position:relative;
            animation:animatetop 0.4s
        }
        @keyframes animatetop{
            from{top:-300px;opacity:0} 
            to{top:0;opacity:1}
        }


        .w3-animate-bottom{
            position:relative;
            animation:animatebottom 0.4s
            }
        @keyframes animatebottom{
            from{
                bottom:-300px;
                opacity:0
                } 
            to{
                bottom:0;
                opacity:1
            }
        }

        .w3-section,.w3-code{
            margin-top:16px!important;
            margin-bottom:16px!important
        }

        .w3-animate-left{
            position:relative;
            animation:animateleft 0.4s
        }
        @keyframes animateleft{
            from{
                left:-300px;
                opacity:0
            } 
            to{left:0;
                opacity:1
            }
        }

        .w3-animate-right{
            position:relative;
            animation:animateright 0.8s
            }
        @keyframes animateright{
            from{
                right:-300px;
                opacity:0
            } 
            to{
                right:0;
                opacity:1
            }
        }
        .img-container{
            width: 100%;
            height: auto;
        }

        .img-container .after{
            position: absolute;
            rgba(0,0,0,0.6);
            display: block;
            color: #fff;
            z-index: 1;
            width: 33.2%;
            height: 42%;
            background-color: rgba(0,0,0,0.6);

        }

        .button-side{
            transform-origin: left;
            top: 68%;
            position: fixed;
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            z-index: 1000;
            left: 0;
        }

        .bbs-side-button {
            display: inline-block;
            background-color: #e70003;
            color: #fff;
            padding: 9px 27px;
            font-size: 16px;
            margin-top: 40px;
            text-decoration: none;
        }
        .bbs-side-button:hover{
            color: #fff;
            background-color: rgba(0,0,0,0.8);
        }

        </style>
    </head>
    <body>
        <!-- Navigation -->
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top"  onclick = $("#menu-close").click(); ></a>
                </li>
                <li>
                    <a href="#top" onclick = $("#menu-close").click(); >Home</a>
                </li>
                <li>
                    <a href="#about" onclick = $("#menu-close").click(); >About</a>
                </li>
                <li>
                    <a href="#services" onclick = $("#menu-close").click(); >Key features</a>
                </li>
                <li>
                    <a href="#portfolio" onclick = $("#menu-close").click(); >Itinerary</a>
                </li>
                <li>
                    <a href="#registration" onclick = $("#menu-close").click(); >Cost</a>
                </li>
                <li>
                    <a href="#contact" onclick = $("#menu-close").click(); >Additional details</a>
                </li>
            </ul>
        </nav>
        <!-- Header -->
        <div  id="top">
        		<div class="col-md-6">
                	<div><img src="img/NetwealthStudyTour2018-01.jpg" id="logo-image" alt="The Adviser Innovation UK Delegation" /></div>
                	<span style="padding-left: 21px;z-index: 1; font-weight: bold; font-size: 20px;">
						1- 4 May 2018, New York City
					</span>
            	</div>
            	<div class="col-md-6">
                    <div class="w3-content w3-section" style="max-width:260px; overflow:hidden; padding-top: 22px;">
                        <img class="mySlides w3-animate-right" src="img/adviser1.jpg" style="width:100%">
                    </div>
            	</div>	
		</div>
		<script>
            var myTimer = [4000,4000,4000];
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                
                var x = document.getElementsByClassName("mySlides");
                var overlay = document.getElementsByClassName("after");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none"; 
                }
                myIndex++;
                
                if (myIndex > x.length) {myIndex = 1}   
                //console.log(myTimer[myIndex-1]); 
                x[myIndex-1].style.display = "block"; 
                setTimeout(carousel, myTimer[myIndex-1]);    
            }
        </script>
			
		</div>
            	</div>
        	</div>
        <div class="button-side">
            <a class="bbs-side-button" href="https://www.eiseverywhere.com/ereg/newreg.php?eventid=302882&" target="_blank">Book Now</a>
        </div>

        <header class="header">
        	
            <div class="text-vertical-center">
            	<div class="col-md-12">
                	<a href="https://www.eiseverywhere.com/ereg/newreg.php?eventid=302882&" target="_blank" class="btn btn-dark btn-lg">Book Now</a>
            	</div>
            </div>
        </header>
        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Netwealth’s study tour is back by popular demand. Designed exclusively for an elite group of advisers and licensees, the 2018 tour will focus on best practice and cutting-edge innovation in the US wealth industry.</h2>
                        <hr>
                        <div class="row" style="font-size: 16px;">
                            <a></a><h2 class="text-center">About</h2>
                            <hr>
                            <P>In May 2018, Netwealth will host a select delegation to New York City -  home to one of the most competitive financial centres in the world and a hub of innovation and opportunity.  This is an invitation-only event for close contacts and stakeholders of Netwealth.  We have teamed up with award-winning events company Momentum Media who will deliver the tour. </p>
                            <p>
							The Netwealth Study Tour is not just about the unique opportunity to hear from visionary speakers - it offers so much more for its elite delegation. </p>
							<p>
							Not only will you have the chance for an intimate personal interaction with speakers, panellists and luminaries from some of the world’s top technology and financial services firms, it’s also a unique opportunity to network with a like-minded peer group who is looking to challenge the status quo and build future proof businesses.</P>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Services -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1" style="font-size: 16px;">
                        <h2>Key features</h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="service-item">
                                    <ul>
                                        <li>Receive unique insights into a competitive market where service and speed count – intelligence you can translate directly into your business</li>
                                        <li>Uncover the tools, mindsets, attitudes, new thinking and innovation that is powering America's best and brightest financial advice businesses, as well as the tech they use</li>
                                        <li>Connect with high-level speakers and influencers that have helped transform the US market</li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-item">
                                    <ul>
                                    	<li>Learn strategies to help shape your business and gain a competitive advantage</li>
                                        <li>Unrivalled social agenda for networking with peers</li>
                                        <li>Five-star accommodation in central New York</li>
                                        <li>Time set aside to relax and explore</li>
                                        <li>A packed two and a half day conference</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Callout -->
        <aside class="callout">
            <div class="text-vertical-center">
            </div>
        </aside>
        <!-- Portfolio -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 class="text-center">Itinerary</h2>
                        <hr class="small">
                        <h4><strong>Tuesday, 1 May – day one</strong></h4>
                        <ul>
                            <li>Delegates arrive in New York and check-in to the hotel</li>
                            <li>Leisure day – itinerary will provide delegates with activities and local suggestions</li>
                            <li>Welcome cocktail networking event (venue to be revealed on the evening)</li>
                        </ul>
                        <h4><strong>Wednesday, 2 May – day two</strong></h4>
                        <ul>
                            <li>Conference (9am – 5pm)</li>
                            <li>Dinner and networking event (venue to be revealed on the evening)</li>
                        </ul>
                        <h4><strong>Thursday, 3 May – day three</strong></h4>
                        <ul>
                            <li>Conference (9am – 5pm)</li>
                            <li>Dinner and networking event (venue to be revealed on the evening)</li>
                        </ul>
                        <h4><strong>Friday, 4 May – day four </strong></h4>
                        <ul>
                            <li>Check out of hotel</li>
                            <li>Half Day Conference (9am – 12:30pm) </li>
                            <li>Lunch (optional) </li>
                        </ul>
                        
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Call to Action -->
        <aside class="call-to-action bg-primary">
            <div class="container" id="registration">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Cost</h2>
                        <h3 class="text-center">$4,950 + GST per person</h3>
                        <hr class="small">
                        <p><strong>Registration will cover</strong></p>
                        <ul>
                            <li>Three nights’ accommodation in New York (including breakfasts)</li>
                            <li>Two full days’ conference, with local speakers and senior executives from top US technology businesses and US financial services firms (the two-day conference will include morning tea, lunch and afternoon tea, CPD points, work booklet and exclusive access to speakers)</li>
                            <li>Dining and social events</li>
                        </ul>
                        <p>A partner rate is also available for the tour. Please enquire about this rate at the time of booking.</p>
                        <p><br>Payment options</p>
                        <ol>
                            <li>Credit card</li>
                            <li>Tax invoice</li>
                            <li>Tax invoice – available on request</li>
                        </ol>
                        <p><em>The official tour organisers are Momentum Media. All registration payments will be processed through Momentum Media’s registration portal here. For any registration queries, please contact <a href="mailto:Cheryl.samarasinghe@momentummedia.com.au" style="color: #FFF; text-decoration: underline;" >Cheryl.samarasinghe@momentummedia.com.au</a></em></p>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Map
            <section id="contact" class="map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                <br />
                <small>
                <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                </small>
                </iframe>
            </section>
            -->
            <!-- Footer -->
            <footer>
                <div class="container" id="contact">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h2 class="text-center">Additional details</h2>
                            <hr class="small">
                            <p><strong>PLEASE NOTE:</strong> Delegates will be responsible for having a valid passport and relevant US visa, arranging their own travel from Australia to New York as well as hotel transfers, travel insurance, plus additional personal expenses or incidentals.</p>
                            <br>
                            <p><strong>Closer to departure, a full travel pack will be sent to delegates, including:</strong></p>
                            <br>
                            <ul>
                                <li>
                                    <p>Pre-departure information</p>
                                </li>
                                <li>
                                    <p>Background on the US market</p>
                                </li>
                                <li>
                                    <p>General information (accommodation, transfers, what to pack, currency etc.)</p>
                                </li>
                                <li>
                                    <p>Suggested activities while you are in New York</p>
                                </li>
                                <li>
                                    <p>Four-day study tour agenda</p>
                                </li>
                                <li>
                                    <p>Final delegate and attendee list</p>
                                </li>
                                <li style="padding-bottom: 15px;">
                                    <p>Two and a half days conference agenda, speakers and bios</p>
                                </li>
                            </ul>
                            <p><strong>For any further information or event enquiries, please contact: </strong><br>
                            Cheryl Samarasinghe <br/>
                            Senior Event Producer, Momentum Media<br/>
                            Phone:
                            (02) 9922 3300<br>
                            Email:
                            <a href="mailto:Cheryl.samarasinghe@momentummedia.com.au" style="color: #000; text-decoration: underline;" >Cheryl.samarasinghe@momentummedia.com.au</a></p>
                            <br>
                            <p><br>
                                <hr>
                            </p><ul class="list-inline text-center">
                            <li>
                                <a href="https://www.facebook.com/MomentumMediaGroup/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/momentummediaau"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/momentummediagroupptyltd"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        <p class="text-muted text-center">Copyright &copy; Momentum Media PTY LTD</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
        });
        // Scrolls to the selected menu item on the page
        $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top
        }, 1000);
        return false;
        }
        }
        });
        });
        </script>
    </body>
</html>