<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amelia &mdash; The Credit Card Provider</title>
    <link rel="stylesheet" href="css/style.css">
		<style>
		.chat-overlay {
		position: fixed;
		width: 376px;
		height: 500px;
		bottom: 24px;
		right: 24px;
		z-index: 90;
		}

		.chat-overlay-open {
			height: 512px;
		}

		.chat-overlay-closed {
			height: 78px;

		}

		.chat-overlay-wrapper {
		width: 376px;
		height: 448px;
		}

		.chat-overlay-header-mobile {
			display: none;
		}

		.chat-overlay-header {
		position: relative;
		height: 56px;
		width: 56px;
		border: 1px solid black;
		background: #000;
		margin-left: auto;
		border-radius: 50%;
		box-shadow: 1rem 1rem 5rem rgba(0, 0, 0, 0.5);
		}

		#receiver {
		transition: opacity 1s ease-in-out;
		opacity: 1;
		background: rgba(0, 0, 0, 0.5);
		box-shadow: 1rem 1rem 5rem rgba(0, 0, 0, 0.5);
		border-radius: 0.5rem;
		}

		#receiver.close {
		height: 0;
		opacity: 0;
		overflow: hidden;
		}

		#receiver.open {
		height: 100%;
		opacity: 1;
		overflow: hidden;
		}

		.chat-overlay-header-img {
		position: absolute;
		max-width: 14px;
		max-height: 14px;
		transition: opacity 1s ease-in-out;
		opacity: 1;
		right: 0px;
		left: 0px;
		top: 0px;
		bottom: 0px;
		margin: auto;
		}

		.chat-overlay-header-img.open {
		opacity: 0;
		}

		.absolute-cart-box {
		display: none;
		}

		@media only screen and (max-width: 768px) {
		.chat-overlay {
			width: 100%;
			position: fixed;
			height: 100%;
		}

		.chat-overlay-header-mobile {
			display: flex;
			width: inherit;
			height: 9%;
			background: #4d5aff;
		}

		.chat-overlay-header-mobile img {
			height: 30%;
			padding: 1rem;
			margin-left: auto;
		}

		.chat-overlay-header-mobile.close {
			display: none;
		}

		#receiver {
			border-radius: 0;
		}

		#receiver.close {
			height: 0;
			opacity: 0;
			overflow: hidden;
		}

		#receiver.open {
			height: 91%;
			opacity: 1;
			overflow: hidden;
		}

		.chat-overlay-open {
			height: 100%;
			bottom: 0px;
			right: 0px;
			}

		.chat-overlay-closed {
					height: 70px;
			bottom: 24px;
			right: 24px;
			}

		.chat-overlay-wrapper {
			width: 100%;
			height: 100%;
		}


}

.contaminate {
position: relative;
text-align: center;
color: white;
}

.bottom-left {
																			    position: absolute;
																			    bottom: 140px;
																			    left: 35px;
																					color: white;
																			}
																			.bottom-left-2 {
																			    position: absolute;
																			    bottom: 120px;
																			    left: 35px;
																					color: white;
																			}
																			.bottom-left-3 {
																			    position: absolute;
																			    bottom: 105px;
																			    left: 35px;
																					font-size: 12px;
																					color: white;
																			}
																			.top-right {
																			    position: absolute;
																			    top: 150px;
																			    left: 220px;
																					font-weight: bold;
																					font-size: 22px;
																					color: white;
																			}
																			.top-left {
																			    position: absolute;
																			    top: 190px;
																			    right: -130px;

																					font-size: 13px;
																					color: black;
																			}
																			.top-left-2 {
																			    position: absolute;
																			    top: 145px;
																			    right: 80px;
																					font-weight: bold;
																					font-size: 7px;
																					color: white;
																			}

																			.bottom-left-4 {
																					position: absolute;
																					bottom: 85px;
																					right: -130px;
																					font-size: 10px;
																					color: white;

																			}
																			h2 {
    display: block;
    font-size: 1.5em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;

}


		</style>
  </head>
  <body>


<div class="chat-overlay">
	  <div class="chat-overlay-wrapper">
	        <div class="chat-overlay-header-mobile">
	        <img class="close" src="close.png" alt="toggle chat overlay" />
	      </div>
				<iframe id="receiver" src="https://ipsoft-amelia-demodeveu-v3.ipsoft.com/Amelia/ui/TheBankExperience/login?embed=iframe&domainCode=sweden&processName=CreditCardOtherQs&&username=<?php
				if (isset($_GET['username'])) {
				 echo $_GET['username'];
				} else {
				// Fallback behaviour goes here
				}
				?>"  frameborder="0" width="100%" height="100%" allow="geolocation; microphone; camera">
	        <p>Your browser does not support iframes.</p>
	      </iframe>
	      <div class="chat-overlay-header">
	        <img class="chat-overlay-header-img close" src="close.png" alt="toggle chat overlay" />
	        <img class="chat-overlay-header-img open" src="icon.png" alt="toggle chat overlay" />
	      </div>
	  </div>
	</div>


		<script>

		  function openChatOverlay (receiverElem, imgElemOpen, imgElemClose) {
		    document.getElementById('receiver').classList.add("open");
		    document.getElementById('receiver').classList.remove("close");
		    document.getElementsByClassName('chat-overlay')[0].classList.add("chat-overlay-open");
		    document.getElementsByClassName('chat-overlay')[0].classList.remove("chat-overlay-closed");
		    document.getElementsByClassName('chat-overlay-header-mobile')[0].classList.remove('close');
		    imgElemClose.style.opacity = 1;
		    imgElemOpen.style.opacity = 0;
		    localStorage.setItem('chatOverlayOpen', true);
		  }

		  function closeChatOverlay (receiverElem, imgElemOpen, imgElemClose) {
		    document.getElementById('receiver').classList.add("close");
		    document.getElementById('receiver').classList.remove("open");
		    document.getElementsByClassName('chat-overlay')[0].classList.add("chat-overlay-closed");
		    document.getElementsByClassName('chat-overlay')[0].classList.remove("chat-overlay-open");
		    document.getElementsByClassName('chat-overlay-header-mobile')[0].classList.add('close');
		    imgElemOpen.style.opacity = 1;
		    imgElemClose.style.opacity = 0;
		    localStorage.setItem('chatOverlayOpen', false);
		  }

		  function toggleChatOverlay () {
		    /**
		     * Toggles opening and closing of the chatOverlay
		     * @returns - no return
		     */
		    var chatOverlayHeaderImgElemOpen = document.getElementsByClassName('chat-overlay-header-img open')[0];
		    var chatOverlayHeaderImgElemClose = document.getElementsByClassName('chat-overlay-header-img close')[0];
		    var receiverElem = document.getElementById('receiver');
		    if (receiverElem.classList.contains('close')) {
		      openChatOverlay(receiverElem, chatOverlayHeaderImgElemOpen, chatOverlayHeaderImgElemClose);
		    } else {
		      closeChatOverlay(receiverElem, chatOverlayHeaderImgElemOpen, chatOverlayHeaderImgElemClose);
		    }
		  }

		  var chatOverlayHeaderElem = document.getElementsByClassName('chat-overlay-header')[0];
		  chatOverlayHeaderElem.addEventListener('click', toggleChatOverlay);
		  var chatOverlayHeaderElemMobile = document.getElementsByClassName('chat-overlay-header-mobile')[0];
		  chatOverlayHeaderElemMobile.addEventListener('click', toggleChatOverlay);


		  if (typeof(Storage) !== "undefined") {
		    var chatOverlayOpen = localStorage.getItem('chatOverlayOpen');
		    var chatOverlayHeaderImgElemOpen = document.getElementsByClassName('chat-overlay-header-img open')[0];
		    var chatOverlayHeaderImgElemClose = document.getElementsByClassName('chat-overlay-header-img close')[0];
		    var receiverElem = document.getElementById('receiver');
		    if (chatOverlayOpen && localStorage.getItem('chatOverlayOpen') !== "true") {
		      closeChatOverlay(receiverElem, chatOverlayHeaderImgElemOpen, chatOverlayHeaderImgElemClose);
		    } else {
		      openChatOverlay(receiverElem, chatOverlayHeaderImgElemOpen, chatOverlayHeaderImgElemClose);
		    }
		  } else {
		      // Sorry! No Web Storage support..
		    console.log('No localStorage support')
		  }


			function receiveMessage(e, data) {
			    /**
			     * Receive message from child frame and update the DOM
			     * @param {Object} data - data used to update the DOM
			     * @returns - no return
			     */
			    // Check to make sure that this message came from the correct domain.

			    var url = e.data.url;
					//Ändras ej vid flytt till web
			    if (e.origin !== 'https://ipsoft-amelia-demodeveu-v3.ipsoft.com')
			      return;

			     if (e.data.action === "checkout" && e.data.additionalData)
					 {
			        //window.location.href = "http://localhost:8000/Documents/AmeliawithMA/Templates/seb/privat/betala/kort/login.html"; //+ e.data.additionalData;
							window.location.href = "https://hostedsite.herokuapp.com/virtual_card.php" + e.data.additionalData;
			    }
			  }

			  function sendMessage(data) {
			    /**
			     * Use data object and postMessage to URL provided (postMessage to child frame)
			     * @param {Object} data - data to be sent to url provided of child frame
			     * @returns - no return
			     */

			    var receiverElem = document.getElementById('receiver').contentWindow;
			    receiverElem.postMessage(data, "https://ipsoft-amelia-demodeveu-v3.ipsoft.com/Amelia/ui/TheBankExperience/login?embed=iframe&domainCode=sweden&processName=CreditCardProcessing_generic");
			  }
			window.addEventListener('message', receiveMessage);
			//document.write(data);
			//document.write("test");
			//Some stuff to remove leave message

			window.onbeforeunload = function() {
			    return true;
			};
			// Remove navigation prompt
			window.onbeforeunload = null;

		</script>


  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">


    <header class="templateux-navbar dark" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
            <a href="index.html" class="animsition-link">The Credit Card Provider</a>
          </div>
          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a href="index.html" class="animsition-link">Home</a>
              </li>
              <li><a href="about.html" class="animsition-link">About</a></li>
              <li>
                <a href="services.html" class="animsition-link">Services</a>
                <ul>
                  <li><a href="#">Service 1</a></li>
                  <li><a href="#">Service 2</a></li>
                  <li>
                    <a href="#">Service 3</a>
                    <ul>
                      <li><a href="#">Service 1</a></li>
                      <li><a href="#">Service 2</a></li>
                      <li>
                        <a href="#">Service 3</a>
                        <ul>
                          <li><a href="#">Service 1</a></li>
                          <li><a href="#">Service 2</a></li>
                          <li><a href="#">Service 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="gallery.html" class="animsition-link">Gallery</a></li>
              <li><a href="blog.html" class="animsition-link">Blog</a></li>
              <li><a href="contact.html" class="animsition-link">Login</a></li>
            </ul> <!-- .templateux-menu -->

          </nav> <!-- .site-nav -->


        </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->

    <div class="templateux-cover" style="background-image: url(images/slider-1.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">



          <div class="col-lg-6 order-lg-1">
            <h1 class="heading mb-3" data-aos="fade-up">XX</h1>
						<h2>Your new Virtual Credit Card <?php
											 								if (isset($_GET['data'])) {
											 				 					echo $_GET['data'];
											 								} else {
											 									// Fallback behaviour goes here
											 								}
											 								?>!
						</h2>
						<div class="contanimate"> <img src="credit_card<?php
													if (isset($_GET['data'])) {
														echo $_GET['data'];
													} else {
														// Fallback behaviour goes here
													}
													?>.gif" height="200" width="710">
													<div class="bottom-left">5581			 4691			4151			1721 </div>
													<div class="top-right">Credit Card</div>
													<div class="top-left">3124 689</div>
													<div class="top-left-2">www.card.com - 555 111 478 </div>
													<div class="bottom-left-4">Credit Card </div>
													<div class="bottom-left-2">Master Card <?php
														if (isset($_GET['data'])) {
																echo $_GET['data'];
																} else {
					// Fallback behaviour goes here
																}
												?></div>
												<div class="bottom-left-3">Exp date  12/21</div>


							</div>





            <p class="lead mb-5" data-aos="fade-up"  data-aos-delay="100">XX</p>

          </div>

        </div>

      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 templateux-overlap">
            <div class="row">
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">Intuitive Thinking</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3"><span class="ion-ios-nutrition-outline"></span></div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">Orange for Carrots</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                <div class="media block-icon-1 d-block text-left">
                  <div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
                  <div class="media-body">
                    <h3 class="h5 mb-4">Infinite Posibilities</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  </div>
                </div> <!-- .block-icon-1 -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
            <h2 class="heading mb-5 text-center">Good Design is a Good Start</h2>
          </div>
        </div> <!-- .row -->
        <div class="row mb-5" data-aos="fade-up">
          <div class="col-md-6">
            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. <a href="#">Separated they live in Bookmarksgrove</a> right at the coast of the Semantics, a large language ocean.</p>
          </div>
          <div class="col-md-6">
            <p> When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
      </div> <!-- .container -->
      <div class="container-fluid"  data-aos="fade-up">
        <div class="owl-carousel wide-slider">
          <div class="item">
            <img src="images/slider-2.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/slider-3.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
          </div>
          <div class="item">
            <img src="images/slider-4.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
          </div>
        </div> <!-- .owl-carousel -->
      </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-loop"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Regular Update</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Infinite Posibilities</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-locked-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Good Security</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>

          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-nutrition-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Orange for Carrots</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Intuitive Thinking</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-videocam-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Play Video</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>

        </div>
        <div class="row">

          <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
            <p><a href="#" class="btn btn-black py-3 px-4">More Features</a></p>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->

    <div class="">
      <div class="d-flex flex-column flex-sm-row">
        <a href="#" class="block-thumbnail-1 one-third" style="background-image: url('images/slider-2.jpg'); " data-aos="fade">
          <div class="block-thumbnail-content">
            <h2>When she reached the first</h2>
            <span class="post-meta">Design, Illustration</span>
          </div>
        </a>
        <a href="#" class="block-thumbnail-1 two-third" style="background-image: url('images/slider-1.jpg'); " data-aos="fade" data-aos-delay="100">
          <div class="block-thumbnail-content">
            <h2>Duden flows by their place</h2>
            <span class="post-meta">Design, Illustration</span>
          </div>
        </a>
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="#" class="block-thumbnail-1 two-third" style="background-image: url('images/slider-3.jpg'); " data-aos="fade" data-aos-delay="200">
          <div class="block-thumbnail-content">
            <h2>Italic Mountains</h2>
            <span class="post-meta">Design, Illustration</span>
          </div>
        </a>
        <a href="#" class="block-thumbnail-1 one-third" style="background-image: url('images/slider-4.jpg'); " data-aos="fade" data-aos-delay="300">
          <div class="block-thumbnail-content">
            <h2>Behind the word mountains</h2>
            <span class="post-meta">Design, Illustration</span>
          </div>
        </a>
      </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section bg-primary" id="templateux-counter-section">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="templateux-counter text-center">
              <span class="templateux-number" data-number="99399">0</span>
              <span class="templateux-label">Lines of Codes</span>
            </div>
          </div>
          <div class="col-md">
            <div class="templateux-counter text-center">
              <span class="templateux-number" data-number="99">0</span>
              <span class="templateux-label">Number of Projects</span>
            </div>
          </div>
          <div class="col-md">
            <div class="templateux-counter text-center">
              <span class="templateux-number" data-number="124">0</span>
              <span class="templateux-label">Number of Clients</span>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 testimonial-wrap">
            <div class="quote">&ldquo;</div>
            <div class="owl-carousel wide-slider-testimonial">
              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
              </div>

              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
                </blockquote>
              </div>

              <div class="item">
                <blockquote class="block-testomonial">
                  <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .templateux-section -->

    <footer class="templateux-footer bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-4 pr-md-5">
            <div class="block-footer-widget">
              <h3>About</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>

          <div class="col-md-8">
            <div class="row">
              <div class="col-md-3">
                <div class="block-footer-widget">
                  <h3>Learn More</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">How it works?</a></li>
                    <li><a href="#">Useful Tools</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Sitemap</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="block-footer-widget">
                  <h3>Support</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login Us</a></li>
                    <li><a href="#">Help Desk</a></li>
                    <li><a href="#">Knowledgebase</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="block-footer-widget">
                  <h3>About Us</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-3">
                <div class="block-footer-widget">
                  <a href="#" class="btn btn-primary mb-3">Download for free</a>
                  <p>Connect With Us</p>
                  <ul class="list-unstyled block-social">
                    <li><a href="#" class="p-1"><span class="icon-facebook-square"></span></a></li>
                    <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                    <li><a href="#" class="p-1"><span class="icon-github"></span></a></li>
                  </ul>
                </div>
              </div>
            </div> <!-- .row -->

          </div>
        </div> <!-- .row -->

        <div class="row pt-5 text-left">
          <div class="col-md-12 text-left"><p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p></div>
        </div> <!-- .row -->

      </div>
    </footer> <!-- .templateux-footer -->


   </div> <!-- .js-animsition -->


  <script src="js/scripts-all.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
