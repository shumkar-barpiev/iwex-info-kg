<?php
	class View{
		public function index(){
			$this->importHead();
?>

			<!-- ***** Preloader Start ***** -->
			<div id="js-preloader" class="js-preloader">
				<div class="preloader-inner">
					<span class="dot"></span>
					<div class="dots">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<!-- ***** Preloader End ***** -->

			<!-- Pre-header Starts -->
			<div class="pre-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-sm-8 col-7">
							<ul class="info">
								<li><a href="#"><i class="fa fa-envelope"></i>office@iwex.info</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+996 552 91 91 55</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-sm-4 col-5">
							<ul class="social-media">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Pre-header End -->

			<!-- ***** Header Area Start ***** -->
			<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="main-nav">
								<!-- ***** Logo Start ***** -->
								<a href="index.php" class="logo">
									<img src="./View/Template/assets/images/logo-v2.png" alt="logo-iwex">
								</a>
								<!-- ***** Logo End ***** -->
								<!-- ***** Menu Start ***** -->
								<ul class="nav">
									<li class="scroll-to-section"><a href="#about">О нас</a></li>
									<li class="scroll-to-section">
										<div class="dropdown">
											<button class="dropbtn" style= "font-weight:bold; font-size: 17px;" >Возможности</button>
											<div class="dropdown-content">
												<a href="#">FerienJob</a>
												<a href="#">Ausbildung</a>
												<a href="#">Work in Poland</a>
											</div>
										</div>
									</li>
									<li class="scroll-to-section"><a href="#services">Наши услуги</a></li>
									<li class="scroll-to-section"><a href="#portfolio">Этапы работы</a></li>
									<li class="scroll-to-section"><a href="#blog">Отзывы</a></li>



									<li class="scroll-to-section"><a href="#contact">Контакты</a></li>
									<li class="scroll-to-section"><a><select style="border: none; background: none; appearance: none; background-color: transparent; outline: none;">
										<option value="ru">RU</option>
										<option value="en">EN</option>
										<option value="kg">KG</option>
										<option value="de">DE</option>
									</select></a></li>



									<li class="scroll-to-section"><div class="border-first-button"><a href="#top">Go Top</a></div></li>
								</ul>
								<a class='menu-trigger'>
									<span>Menu</span>
								</a>
								<!-- ***** Menu End ***** -->
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- ***** Header Area End ***** -->



			<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-6 align-self-center">
									<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
										<div class="row">
											<div class="col-lg-12">
												<h6>Interwork Exchange</h6>
												<h2>Изучай язык и открывай <br>
													<strong>новые миры</strong></h2>
												<p style="color: black;">Работаем с 2011 года, отправили более <br>
														4000 тысяч студентов и людей в Европу.</p>
											</div>
											<div class="col-lg-12">
												<div class="border-first-button1 scroll-to-section" >
													<a href="index.php" style="color: black">Курсы Немецкого</a>
												</div>
												<div class="border-first-button2 scroll-to-section" style = "margin-top: 10px;">
													<a href="index.php">Учеба в Германии</a>
												</div>
												<div class="border-first-button3 scroll-to-section" style = "margin-top: 10px;">
													<a href="index.php">Работа в Германии</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
										<img src="./View/Template/assets/images/slider-dec-v2.png" alt="slider-dec-v2">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="about" class="about section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-6">
									<div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
										<img src="./View/Template/assets/images/about-dec-v2.jpg" alt="about-dec-v2">
									</div>
								</div>
								<div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="about-right-content">
										<div class="section-heading">
											<h6>О нас</h6>
											<h4><em>IWEX </em> - это прогресс</h4>
											<div class="line-dec"></div>
										</div>
										<p style="color: black;"><strong>IWEX</strong> или <strong>Interwork Exchange</strong> – это агентство по трудоустройству <br> за
											рубежом, а также крупная языковая школа.</p>
										<div class="col-lg-12">
											<div class="post-item">
												<div class="thumb">
													<a href="#"><img src="./View/Template/assets/images/ceoPicture.png" alt="ceo"></a>
												</div>
												<div class="right-content">
													<span class="category">Основатель компании и Генеральный директор</span>
													<h4>Нурдин Шейшенов</h4>
													<p style="margin-top: 15px;">@nurdin_sheishenov</p>
													<div>
														<h5><b>Что мы делаем?</b></h5>
														<h6 style="text-align: justify; margin-top: 10px;">“Мы меняем мировоззрение наших студентов. Компания основана в 2011 году и имеет многолетний опыт работы.
															Мы являемся первопроходцами в сфере рекрутинга.
															У нас есть официальная государственная лицензия на трудоустройство граждан КР за рубежом.
															С нами сотрудничают крупные европейские компании. </h6>
														<h6 style="text-align: justify; margin-top: 10px;">
															Мы не просто помогаем найти работу мечты в европейских странах и оформить
															необходимые документы, мы поддерживаем наших клиентов, даем советы в различных ситуациях,
															идем на встречу в сложных ситуациях и не боимся брать на себя ответственность.“
														</h6>
													</div>

												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="services" class="services section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
								<h6>Наши услуги</h6>
								<h4>Обучаем, Отправляем, <em>Помогаем</em></h4>
								<div class="line-dec"></div>
								<p style="text-align: center; padding-top: 10px; width:50%; margin: auto; color: black;">
								IWEX или Interwork Exchange – это агентство по трудоустройству 
								за рубежом, а также крупная языковая школа.
								</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="naccs">
								<div class="grid">
									<div class="row">
										<div class="col-lg-12">
											<div class="menu">
												<div class="first-thumb active">
													<div class="thumb">
														<span class="icon"><img src="./View/Template/assets/images/resim.png" alt="permission1"></span>
													</div>
												</div>
												<div>
													<div class="thumb">
														<span class="icon"><img src="./View/Template/assets/images/resim.png" alt="permission2"></span>
													</div>
												</div>
												<div>
													<div class="thumb">
														<span class="icon"><img src="./View/Template/assets/images/resim.png" alt="permission3"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<ul class="nacc">
												<li class="active">
													<div>
														<div class="thumb">
															<div class="row">
																<div class="col-lg-6 align-self-center">
																	<div class="left-text">
																		<h4>Наши успехи &amp; Разрешения</h4>
																		<p style = "color: black;">Мы работаем согласно законам Кыргызской республики и Европейского Союза.</p>
																		<div class="ticks-list">
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Авторская методика <p>80% практика разговорной речи</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Качественный персонал <p>Квалифицированные специалисты помогут вам</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Мы выпустили <p>Более 3000 студентов-выпускников</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Разные варианты обучения <p>Есть онлайн и офлайн курсы</p></span> <br>
																		</div>
																	</div>
																</div>
																<div class="col-lg-6 align-self-center">
																	<div class="right-image">
																		<img src="./View/Template/assets/images/permit1.png" alt="permission1">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div>
														<div class="thumb">
															<div class="row">
																<div class="col-lg-6 align-self-center">
																	<div class="left-text">
																		<h4>Наши успехи &amp; Разрешения</h4>
																		<p style = "color: black;">Мы работаем согласно законам Кыргызской республики и Европейского Союза.</p>
																		<div class="ticks-list">
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Авторская методика <p>80% практика разговорной речи</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Качественный персонал <p>Квалифицированные специалисты помогут вам</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Мы выпустили <p>Более 3000 студентов-выпускников</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Разные варианты обучения <p>Есть онлайн и офлайн курсы</p></span> <br>
																		</div>
																	</div>
																</div>
																<div class="col-lg-6 align-self-center">
																	<div class="right-image">
																		<img src="./View/Template/assets/images/permit2.png" alt="">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div>
														<div class="thumb">
															<div class="row">
																<div class="col-lg-6 align-self-center">
																	<div class="left-text">
																		<h4>Наши успехи &amp; Разрешения</h4>
																		<p style = "color: black;">Мы работаем согласно законам Кыргызской республики и Европейского Союза.</p>
																		<div class="ticks-list">
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Авторская методика <p>80% практика разговорной речи</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Качественный персонал <p>Квалифицированные специалисты помогут вам</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Мы выпустили <p>Более 3000 студентов-выпускников</p></span> <br>
																			<span><i class="fa fa-check" style = "color: #ffcc04;"></i> Разные варианты обучения <p>Есть онлайн и офлайн курсы</p></span> <br>
																		</div>
																	</div>
																</div>
																<div class="col-lg-6 align-self-center">
																	<div class="right-image">
																		<img src="./View/Template/assets/images/permit3.png" alt="">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			


			<div id="portfolio" class="our-portfolio section">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
								<h6>Этапы работы</h6>
								<h4>Как мы  <em>работаем?</em></h4>
								<div class="line-dec"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
					<div class="row">
						<div class="col-lg-12">
							<div class="loop owl-carousel">
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/3.png" alt="" >
											</div>
											<div class="down-content">
												<h4>Подготовка необходимых документов</h4>
												<h6>Регистрация занимает пару минут для этого вам нужно документы и т.д</h6>
												<p>Проверка документов для учебы или работы в Европе</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb">
												<img src="./View/Template/assets/images/4.png" alt="">
											</div>
											<div class="down-content">
												<h4>Собеседование</h4>
												<h6>Проведение собеседования с работодателем</h6>
												<p>Онлайн собеседование через зум или скайп</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/5.png" alt="">
											</div>
											<div class="down-content">
												<h4>Посольство</h4>
												<h6>Нужен текст о том сколько минут занимает собеседование и как вы помогаете его проходить</h6>
												<p>Собеседование в посольстве для получение визы</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/6.png" alt="">
											</div>
											<div class="down-content">
												<h4>Отлет в Германию</h4>
												<h6>Приходите к нам в офис для обсуждения интересующих вас вопросов и других нюансов</h6>
												<p>Мы сопровождаем вас до Аэропорта</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/7.png" alt="">
											</div>
											<div class="down-content">
												<h4>Курирование в Германии</h4>
												<h6>На протяжение всего срока остаемся на связи с вами вплоть до приезда из Германии</h6>
												<p>Консультируем в вопросах которые возникают у студентов</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/1.png" alt="">
											</div>
											<div class="down-content">
												<h4>Консультация</h4>
												<h6 >Приходите к нам в офис для обсуждения интересующих вас вопросов и других нюансов</h6>
												<p>Общение с нашим специалистом в офисе</p>
											</div>
										</div>
									</a>
								</div>
								<div class="item">
									<a>
										<div class="portfolio-item">
											<div class="thumb" >
												<img src="./View/Template/assets/images/2.png" alt="">
											</div>
											<div class="down-content">
												<h4>Регистрация</h4>
												<h6>Регистрация занимает пару минут для этого вам нужно документы и т.д</h6>
												<p>У нас есть несколько программ: Firenjob, Ausbildung и д.р</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="blog" class="blog">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="section-heading">
								<h6>Отзывы</h6>
								<h4>Люди прошедшие 7 <em>этапов</em></h4>
								<div class="line-dec"></div>
							</div>
						</div>
						<div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="blog-post">
								<div class="thumb">
									<a href="#"><img src="./View/Template/assets/images/review1.jpg" alt=""></a>
								</div>
								<div class="down-content">
									<h4>Совет студентам от основателя компании IWEX: <a href="https://www.instagram.com/nurdin_sheishenov/">@nurdin_sheishenov</a></h4>
									<p style = "text-align: justify; color: black;">Размышляя о своей работе понял, что мы как компания делаем большой вклад именно в образование молодёжи и это в разы важнее той работы, которую мы предоставляем в Германии🇩🇪<br>

										Например:<br>
										✅ 1. Студент едет работать на летние каникулы, работает максимальное количество часов, экономит деньги, зарабатывает 2-3 тысячи € и вкладывает в покупку автомобиля себе или своим родителям. Здорово!!! Частый сценарий.</p>
									<span class="author"><img src="./View/Template/assets/images/ceoPicture.png" alt="">Нурдин Шейшенов</span>
									<div class="border-first-button"><a href="https://www.facebook.com/photo/?fbid=2842764099200936&set=ecnf.100063774510846">Узнайте больше</a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="blog-posts">
								<div class="row">
									<div class="col-lg-12">
										<div class="post-item">
											<div class="thumb">
												<a href="#"><img src="./View/Template/assets/images/foto-for-reviews.png" alt="reviews1"></a>
											</div>
											<div class="right-content">
												<span class="category">Студент МУКР</span>
												<span class="date">20 лет</span>
												<a href="#"><h4>Нурмахан</h4></a>
												<p style="text-align: justify; color: black;">Всем привет, меня зовут Нурмахан, я студент Университета МУКР, сейчас я нахожусь в Германии по программе "Работа на летних каникулах" и стараюсь выучить немецкий язык на лучшем уровне мне это очень нужно потому что Моя профессия Международные отношения поэтому я думаю , что этот шаг будет иметь большое влияние на мое будущее. Я хотел бы выразить огромную благодарность IWEX за все. Благодаря IWEX я достиг целей, которые я считал недостижимыми в то время. Дружелюбное отношение персонала к студентам. Желаю этой компании много успехов Спасибо IWEX 🤍 И отдельное благодарность хочу выразить менеджеру Мээрим она очень ответственный человек помогла мне разобраться с документами, у меня не было проблем с документами, она на все сто процентов знает свою работу Спасибо большое ☺️</p>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="post-item">
											<div class="thumb">
												<a href="#"><img src="./View/Template/assets/images/foto-for-reviews-2.png" alt="reviews2"></a>
											</div>
											<div class="right-content">
												<span class="category">Выпускник Iwex</span>
												<span class="date">21 лет</span>
												<a href="#"><h4>Сыймык</h4></a>
												<p style="text-align: justify; color: black;">Здравствуйте! Меня зовут Сыймык Жигитали уулу, мне 21 лет. Я приехал в Германию по программе Ausbildung, и в настоящее время изучаю гастрономию в городе «Landau an der Isar», а также прохожу стажировку в ресторанах McDonald’s. До этого я учился на факультете менеджмента Международного университета Ала-Тоо в Бишкеке. Во время учебы в университете я мечтал учиться в Европе. В поисках надежных компаний мои близкие друзья, побывавшие в Германии, порекомендовали IWEX. Тогда я быстро записался и начал изучать немецкий язык на языковом курсе IWEX Courses. Меня обучали позитивные и профессиональные преподаватели. Я ни разу не пожалел, что выбрал IWEX, и очень благодарен. Потому что, как было сказано в начале, свою работу они выполнили точно и правильно. Они очень помогли мне достичь моих целей за очень короткое время. Всем, кто планирует учиться или работать в Германии я бы порекомендовал IWEX. Хочу выразить благодарность IWEX и пожелать им успехов в их будущих начинаниях!</p>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="post-item last-post-item">
											<div class="thumb">
												<a href="#"><img src="./View/Template/assets/images/foto-for-reviews-3.png" alt="reviews3"></a>
											</div>
											<div class="right-content">
												<span class="category">Студентка Манаса</span>
												<span class="date">23 лет</span>
												<a href="#"><h4>Айнура</h4></a>
												<p style="text-align: justify; color: black;">IWEX- кыялдарынызга копуро болуп берет. Менин атым Айнура. Кыргыз- Турк Манас университети коммуникация факультети « Кытай тили жана адабияты» болумундо 3-курста окуйм. «Ивекс» аркылуу быйыл 2-жолу Германияга келип жатам. Чындыгында Азыр мен учун Европа кыял эмес , колум менен кармаган, козум менен коргон, бутум менен баскан Ош менен Бишкектин жолундай эле болуп калды. Ал эми кокторго бой узаткан, эл оозунда Дастан болуп жаткан «Эйфель» мунарасы, Стамбулдагы даназалуу Султан Сарайы, Галата Мунарасы, Улуу Боаз копуросу ж.б булардын баары саякатыбыздын бир чети гана деп айтууга болот. Бул мумкунчулуктордун баарын тузуп берген Ивекс компаниясынын жамаатына чын дилимден ыраазычылык билдирем. Эгер бираз болсо да алдыга жылам десенер бир кунунор экинчисине такыр окшобосун. Риск алгандан коркпогула! Риск албаган адам чыныгы риске деп айтып коюшат эмеспи! Андыктан эртенки жаркын келечегинерди бугунку риск алуу менен баштагыла. Окууга отпой калдым, эми эмне кылам? Жумушум жок Россияга кетсемби? Булардын баарына ❌🛑 . Анткени эми жалгыз эмессинер? Кайда кантип барам деп ойлонуунун кереги жок. Ивекс баарын эчак эле пландап, тузуп койгон. Болгону тил уйронуп, аракетинерди жасагыла! Ивекс менин кыялдарыма чон копуро болуп берди. Силерде мындан да сонун мумкунчулуктор бар🖤</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="contact" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
								<h6>Контакты</h6>
								<h4>Записаться на программу или получить <em>консултацию</em></h4>
								<div class="line-dec"></div>
							</div>
						</div>
						<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
							<form id="contact" action="" method="post">
								<div class="row">
									<div class="col-lg-12">
										<div class="contact-dec">
											<img src="./View/Template/assets/images/contact-dec-v2.png" alt="">
										</div>
									</div>
									<div class="col-lg-5">
										<div id="map">
											
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.0719936343494!2d74.58892407623827!3d42.87132457114989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec8271380ca4d%3A0x66d6dec56e7ab5c2!2zMzkg0YPQuy4g0JjRgdCw0L3QvtCy0LAsINCR0LjRiNC60LXQug!5e0!3m2!1sru!2skg!4v1681993155109!5m2!1sru!2skg" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="fill-form">
											<div class="row">
											<div class="col-lg-4">
													<div class="info-post">
														<div class="icon">
															<img src="./View/Template/assets/images/location-icon.png" alt="">
															<a>1) Тыналиева 3/3 </a>
															<a>2) Джунусалиева 99 </a>
															<a>3) Исанова 39 </a>
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="info-post">
														<div class="icon">
															<img src="./View/Template/assets/images/phone-icon.png" alt="">
															<a>+996 552 91 91 55</a>
															<a>+996 701 91 91 55</a>
															<a>+996 770 91 91 55</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="info-post">
														<div class="icon">
															<img src="./View/Template/assets/images/email-icon.png" alt="">
															<a href="#">office@iwex.info</a>
														</div>
													</div>
												</div>
												
												<div class="col-lg-6">
													<fieldset>
														<input type="name" name="name" id="name" placeholder="Имя" autocomplete="on" required>
													</fieldset>
													<fieldset>
														<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
													</fieldset>
													<fieldset>
														<input type="subject" name="subject" id="subject" placeholder="Сюжет" autocomplete="on">
													</fieldset>
												</div>
												<div class="col-lg-6">
													<fieldset>
														<textarea name="message" type="text" class="form-control" id="message" placeholder="Сообщение" required=""></textarea>
													</fieldset>
												</div>
												<div class="col-lg-12">
													<fieldset>
														<button type="submit" id="form-submit" class="main-button ">Отправить</button>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			


			<?php
		$this->importFoot();
	}
		public function importHead(){
			include "./View/Template/Head.html";
		}

		public function importFoot(){
			include "./View/Template/Footer.html";
		}
	}
?>
