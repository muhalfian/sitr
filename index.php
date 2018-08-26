<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		include "header.php";
	?>
</head>
<body>
    <div class="hero-content">
        <?php
			include "navbar.php";
		?>
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="carousel-item banner active">
					<img class="w-100"  src="images/1.jpg" alt="Los Angeles">
					<div class="carousel-caption hero-content-overlay hero-content-wrap flex flex-column justify-content-center align-items-start">
						<header class="entry-header">
                            <h4>ARTIKEL / BERITA</h4>
                            <h1>Peta Curah Hujan Jatim 2018</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more</a>
                        </footer><!-- .entry-footer -->
					</div>
				</div>

				<div class="carousel-item banner">
					<img class="w-100"  src="images/2.jpg" alt="Los Angeles">
					<div class="carousel-caption hero-content-overlay hero-content-wrap flex flex-column justify-content-center align-items-start">
						<header class="entry-header">
                            <h4>ARTIKEL / BERITA</h4>
                            <h1>Peta Curah Hujan Jatim 2018</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more</a>
                        </footer><!-- .entry-footer -->
					</div>
				</div>

				<div class="carousel-item banner">
					<img class="w-100"  src="images/3.jpg" alt="Los Angeles">
					<div class="carousel-caption hero-content-overlay hero-content-wrap flex flex-column justify-content-center align-items-start">
						<header class="entry-header">
                            <h4>ARTIKEL / BERITA</h4>
                            <h1>Peta Curah Hujan Jatim 2018</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer read-more">
                            <a href="#">read more</a>
                        </footer><!-- .entry-footer -->
					</div>
				</div>
				
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div><!-- .hero-content -->
		
	
	<section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 align-content-lg-stretch">
                    <header class="heading">
                        <h2 class="entry-title">Visi Misi</h2>

                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </header><!-- .heading -->

                    <div class="entry-content ezuca-stats">
                        <div class="stats-wrap flex flex-wrap justify-content-lg-between">
                            <div class="stats-count">
                                50<span>M+</span>
                                <p>STUDENTS LEARNING</p>
                            </div><!-- .stats-count -->

                            <div class="stats-count">
                                30<span>K+</span>
                                <p>ACTIVE COURSES</p>
                            </div><!-- .stats-count -->

                            <div class="stats-count">
                                340<span>M+</span>
                                <p>INSTRUCTORS ONLINE</p>
                            </div><!-- .stats-count -->

                            <div class="stats-count">
                                20<span>+</span>
                                <p>Country Reached</p>
                            </div><!-- .stats-count -->
                        </div><!-- .stats-wrap -->
                    </div><!-- .ezuca-stats -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">
                    <div class="ezuca-video position-relative">
                        <img src="images/video-screenshot.png" alt="">
                    </div><!-- .ezuca-video -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-section -->
	
	<div id="map" style="width:100%; height : 500px;"></div>
		
    <section class="latest-news-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="heading flex justify-content-between align-items-center">
                        <h2 class="entry-title">Kabar Terkini</h2>
                    </header><!-- .heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-event-content">
                        <figure class="event-thumbnail position-relative m-0">
                            <a href="#"><img src="images/event-1.jpg" alt=""></a>

                            <div class="posted-date position-absolute">
                                <div class="day">23</div>
                                <div class="month">mar</div>
                            </div><!-- .posted-date -->
                        </figure><!-- .event-thumbnail -->

                        <header class="entry-header flex flex-wrap align-items-center">
                            <h2 class="entry-title"><a href="#">The Complete Financial Analyst Training & Investing Course</a></h2>

                            <div class="event-location"><i class="fa fa-map-marker"></i>40 Baria Sreet 133/2 NewYork City, US</div>

                            <div class="event-duration"><i class="fa fa-calendar"></i>10 Dec - 12 dec</div>
                        </header><!-- .entry-header -->
                    </div><!-- .featured-event-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-5 mt-lg-0" style="overflow-y:scroll; height:430px;">
                    <div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                        <figure class="event-thumbnail">
                            <a href="#"><img src="images/event-2.jpg" alt=""></a>
                        </figure><!-- .course-thumbnail -->

                        <div class="event-content-wrap">
                            <header class="entry-header">
                                <div class="posted-date">
                                    <i class="fa fa-calendar"></i> 22 Mar 2018
                                </div><!-- .posted-date -->

                                <h2 class="entry-title"><a href="#">Personalized online learning experience</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    <div class="post-author"><a href="#">Ms. Lara Croft </a></div>

                                    <div class="post-comments">02 Comments  </div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- .entry-content -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-content -->
					
					<div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                        <figure class="event-thumbnail">
                            <a href="#"><img src="images/event-2.jpg" alt=""></a>
                        </figure><!-- .course-thumbnail -->

                        <div class="event-content-wrap">
                            <header class="entry-header">
                                <div class="posted-date">
                                    <i class="fa fa-calendar"></i> 22 Mar 2018
                                </div><!-- .posted-date -->

                                <h2 class="entry-title"><a href="#">Personalized online learning experience</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    <div class="post-author"><a href="#">Ms. Lara Croft </a></div>

                                    <div class="post-comments">02 Comments  </div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- .entry-content -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-content -->
					
					<div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                        <figure class="event-thumbnail">
                            <a href="#"><img src="images/event-2.jpg" alt=""></a>
                        </figure><!-- .course-thumbnail -->

                        <div class="event-content-wrap">
                            <header class="entry-header">
                                <div class="posted-date">
                                    <i class="fa fa-calendar"></i> 22 Mar 2018
                                </div><!-- .posted-date -->

                                <h2 class="entry-title"><a href="#">Personalized online learning experience</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    <div class="post-author"><a href="#">Ms. Lara Croft </a></div>

                                    <div class="post-comments">02 Comments  </div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- .entry-content -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-content -->

                    <div class="event-content flex flex-wrap justify-content-between align-content-lg-stretch">
                        <figure class="event-thumbnail">
                            <a href="#"><img src="images/event-3.jpg" alt=""></a>
                        </figure><!-- .course-thumbnail -->

                        <div class="event-content-wrap">
                            <header class="entry-header">
                                <div class="posted-date">
                                    <i class="fa fa-calendar"></i> 22 Mar 2018
                                </div><!-- .posted-date -->

                                <h2 class="entry-title"><a href="#">Which investment project should my company choose?</a></h2>

                                <div class="entry-meta flex flex-wrap align-items-center">
                                    <div class="post-author"><a href="#">Ms. Lara Croft </a></div>

                                    <div class="post-comments">02 Comments  </div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div><!-- .entry-content -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-content -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .latest-news-events -->

	<section class="featured-courses vertical-column courses-wrap">
        <div class="container">
            <div class="row mx-m-25">
                <div class="col-12 px-25">
                    <header class="heading flex flex-wrap justify-content-between align-items-center">
                        <h2 class="entry-title">Perda Kab / Kota</h2>

						 <a class="btn mt-4 mt-sm-0" href="#">view all</a>
						</header><!-- .heading -->
                </div><!-- .col -->

				<div class="myCarousel4">
					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->

					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->

					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->

					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->

					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->

					<div class="col-12 col-md-6 col-lg-4 px-25">
						<div class="course-content">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
									<h2 class="entry-title"><a href="#">Perda No. 5 Tahun 2018 Kab. Sidoarjo</a></h2>

									<div class="entry-meta flex align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>

										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p  style="color:#9a9a9a">lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet </p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->
				</div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .courses-wrap -->
	
	<section class="featured-courses horizontal-column courses-wrap">
        <div class="container">
            <div class="row">
				<div class="col-12">
                    <header class="heading flex justify-content-between align-items-center">
                        <h2 class="entry-title">Artikel</h2>

                        <a class="btn mt-4 mt-sm-0" href="#">view all</a>
                    </header><!-- .heading -->
                </div><!-- .col -->
				<div class="myCarousel3">
					<!-- Wrapper for slides -->
					<div class="col-12 col-lg-6 item-slick">
						<div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
								   
									<h2 class="entry-title"><a href="#">Lorem Ipsum dor Ammet </a></h2>

									<div class="entry-meta flex flex-wrap align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>
										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p style="color:#9a9a9a">
									lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet 
								</p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->
						
					<!-- Wrapper for slides -->
					<div class="col-12 col-lg-6 item-slick">
						<div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
								   
									<h2 class="entry-title"><a href="#">Lorem Ipsum dor Ammet</a></h2>

									<div class="entry-meta flex flex-wrap align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>
										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p style="color:#9a9a9a">
									lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet 
								</p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->
					
					<!-- Wrapper for slides -->
					<div class="col-12 col-lg-6 item-slick">
						<div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
								   
									<h2 class="entry-title"><a href="#">Lorem Ipsum dor Ammet</a></h2>

									<div class="entry-meta flex flex-wrap align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>
										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p style="color:#9a9a9a">
									lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet 
								</p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->
					
					<!-- Wrapper for slides -->
					<div class="col-12 col-lg-6 item-slick">
						<div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
							<figure class="course-thumbnail">
								<a href="#"><img src="images/1.jpg" alt=""></a>
							</figure><!-- .course-thumbnail -->

							<div class="course-content-wrap">
								<header class="entry-header">
								   
									<h2 class="entry-title"><a href="#">Lorem Ipsum dor Ammet</a></h2>

									<div class="entry-meta flex flex-wrap align-items-center">
										<div class="course-author"><a href="#">Ms. Lara Croft </a></div>
										<div class="course-date">July 21, 2018</div>
									</div><!-- .course-date -->
								</header><!-- .entry-header -->

								<p style="color:#9a9a9a">
									lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet lorem ipsum dor ammet 
								</p>
							</div><!-- .course-content-wrap -->
						</div><!-- .course-content -->
					</div><!-- .col -->
				</div>	
			</div>
		</div>
	</section>
	
	<section class="testimonial-section">
		<div class="container">
            <div class="row">
				<div class="col-12">
					<header class="heading flex justify-content-between align-items-center">
						<h2>Kebijakan dan Arahan</h2>
					</header><!-- .heading -->
				</div><!-- .col -->


				<!-- Swiper -->
				<div class="swiper-container testimonial-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container">
								
								<div class="row">
									<div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
										<figure class="user-avatar">
											<img src="images/user-1.jpg" alt="">
										</figure><!-- .user-avatar -->
									</div><!-- .col -->

									<div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
										<div class="entry-content">
											<p>Together as teachers, students and universities we can help make this education available for everyone.</p>
										</div><!-- .entry-content -->

										<div class="entry-footer">
											<h3 class="testimonial-user">Russell Stephens - <span>University in UK</span></h3>
										</div><!-- .entry-footer -->
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .container -->
						</div><!-- .swiper-slide -->

						<div class="swiper-slide">
							<div class="container">
								<div class="row">
									<div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
										<figure class="user-avatar">
											<img src="images/user-2.jpg" alt="">
										</figure><!-- .user-avatar -->
									</div><!-- .col -->

									<div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
										<div class="entry-content">
											<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div><!-- .entry-content -->

										<div class="entry-footer">
											<h3 class="testimonial-user">Robert Stephens - <span>University in Oxford</span></h3>
										</div><!-- .entry-footer -->
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .container -->
						</div><!-- .swiper-slide -->

						<div class="swiper-slide">
							<div class="container">
								<div class="row">
									<div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">
										<figure class="user-avatar">
											<img src="images/user-3.jpg" alt="">
										</figure><!-- .user-avatar -->
									</div><!-- .col -->

									<div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
										<div class="entry-content">
											<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
										</div><!-- .entry-content -->

										<div class="entry-footer">
											<h3 class="testimonial-user">James Stephens - <span>University in Cambridge</span></h3>
										</div><!-- .entry-footer -->
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .container -->
						</div><!-- .swiper-slide -->
					</div><!-- .swiper-wrapper -->

					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-6 mt-5 mt-lg-0">
								<div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .container -->
			</div><!-- .row -->
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->
	
	
	
    <section class="home-gallery">
        <div class="gallery-wrap flex flex-wrap">
            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/a.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/b.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x2">
                <a href="#"><img src="images/c.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/d.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/e.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/g.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/h.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/i.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x2 ">
                <a href="#"><img src="images/j.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/k.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/l.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/m.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid3x1">
                <a href="#"><img src="images/n.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/o.jpg" alt=""></a>
            </div><!-- .gallery-grid -->
        </div><!-- .gallery-wrap -->
    </section><!-- .home-gallery -->

<?php
	include "footer.php"
?>

</body>
</html>