<!DOCTYPE html>
<html>
<head>
<title>Реставрация, реконструкция деревянных домов из срубов в Украине. Лучшая цена на ремонт, отделку деревянных домов</title>
<meta charset='utf-8'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='styles/style.css' rel='stylesheet'/>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' type='text/css' media='all' />
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link rel="icon" type="image/png" href="icons/favicon.png">

<meta name="description" content="Профессиональные услуги по ремонту, отделке, реставрации и реконструкции срубов (деревянных домов) по всей Украине. Лучшие цены и качество! Звоните: (098) 699-70-50 - Topwood (Топвуд) "/>
<meta name="keywords" content="монтаж срубов, реставрация деревянного дома, реставрация сруба, ремонт старого сруба, покраска сруба, покраска деревянного дома, конопатка сруба, шлифовка бревна сруба, утепление деревянного дома, герметизация сруба" />

<meta name="google-site-verification" content="EwD6__ocrKmUi6fgL0XUSyeG8stoqpJj17Xvt8vZYZg" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98643829-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<header>
	<div class='bg'></div>
	<div class='menu'>
		<div class='logo'>
			TopWood
			<!-- <img src='logo1.png'/> -->
		</div>
		<nav>
			<ul class='navigation'>
				<li class='item'><a href='#service'>Услуги</a></li>				
				<li class='item'><a href='#galery'>Галерея</a></li>
				<li class='item'><a href='#about'>О нас</a></li>
				<li class='item'><a href='#reviews'>Отзывы</a></li>
				<li class='item'><a href='#contact'>Контакты</a></li>
			</ul>
		</nav>
		<nav>
			<ul class='call'>	
				<li class='item'>
					<span class='phone'><a href='tel:(098) 699-70-50'>+38 (098) 699-70-50</a></span>
					<span class='grafic'>C 10:00 до 20:00 без выходных</span>
				</li>
				<!-- <li class='item'>
					<a href="" class="button openModal">Перезвонить вам?</button>
				</li> -->
			</ul>
		</nav>
	</div>
	<div class='main'>
		<div class='description'>
			<h2>Вернем вашему деревянному дому прежнюю красоту</h2>
			<p>С 2012 года наша компания предоставляет весь спектр услуг по отделке, восстановлению и ремонту домов и построек из сруба. Мы превратили нашу страсть к дереву в профессию и стремимся вернуть красоту, тепло и уют вашего деревянного дома.</p>
			
			<div class='fakty'>
				<div class='item'>
					<span class='numer'>6</span>
					<span class='textNumv'>лет опыта работы</span>
				</div>
				<div class='item'>
					<span class='numer'>95</span>
					<span class='textNumv'>выполненных объектов</span>
				</div>
				<div class='item'>
					<span class='numer'>3</span>
					<span class='textNumv'>года гарантии на услуги</span>
				</div>	

			</div>
		</div>
			
		
		<div class='forma'>
			<form action="ready.php" method="post">
				<p>Закажите бесплатную консультацию</p>
				<input type='name' name='name' placeholder='Имя'/>
				<input type='tel' name='tel' placeholder='Телефон'/></br>
				<input class='buton' id='button' type='submit' value='Оставить заявку'/>
			</form>
		</div>
	</div>
</header>


<?php

$sendto   = "r.naminas@gmail.com";
$name = $_POST['name'];
$tel = $_POST['tel'];

$subject  = "Заявка Topwood!";
$headers  = "From: . strip_tags($name) . \r\n";
$headers .= "Reply-To: info@topwood.com.ua \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка с сайта Topwood.com.ua</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$tel."</p>\r\n";
$msg .= "</body></html>";

if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<h2 style='margin: 1% 30%;
    text-align: center;'>Ваша заявка принята.<br>Мы свяжемся с Вами в ближайшее время!</h2>";
}
else {
  echo "<h2>Заполните все поля!";
}


?>


		<!-- <div class="mod">
		       <div>
		       <p>x</p>
		       		<h2>Оставить заявку</h2>		       
					<form>
						<input type="text" name="tel" placeholder="Телефон">
						<input type="submit" value='Отправить'>
					</form>
					<p>Нажимая на кнопку «Оставить заявку», Вы соглашаетесь на обработку персональных данных.</p>
				</div>
					
    </div>         -->

<div id='result-form'></div>
<section id='service'>
	<div class='h-2'>Что мы предлагаем?</div>
	<p>Мы готовы взять на себя решение практически любых задач по ремонту и восстановлению вашего дома из сруба.<br>Но чаще всего у нас заказывают:</p>
	<div class='items'>
	<div class='item'>
		<div class='bg im1'></div>
		<div class='backImage'>
			<div class='image1'></div>
		</div>
		<h3>Покраска сруба</h3>
		<p>Окрашивание внутренних и внешних поверхностей дома с защитой от влаги, плесени, насекомых.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im2'></div>
		<div class='backImage'>
			<div class='image2'></div>
		</div>
		<h3>Реставрация сруба</h3>
		<p>Комплекс отделочных работ по восстановлению деревянных домов и построек.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im3'></div>
		<div class='backImage'>
			<div class='image3'></div>
		</div>
		<h3>Шлифовка сруба</h3>
		<p>Очистка поверхности бревен от мелких повреждений, грязи, остатков старого покрытия.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im4'></div>
		<div class='backImage'>
			<div class='image4'></div>
		</div>
		<h3>Конопатка сруба</h3>
		<p>Удаление зазоров между бревнами при помощи пакли для герметичности и защиты от влаги и насекомых.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im5'></div>
		<div class='backImage'>
			<div class='image4'></div>
		</div>
		<h3>Герметизация</h3>
		<p>Утепление швов деревянного дома из сруба по технологии “теплый шов”.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im6'></div>
		<div class='backImage'>
			<div class='image4'></div>
		</div>
		<h3>Обивка швов</h3>
		<p>Отделка джутовым канатом межбревенных и межвенцовых швов сруба.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im7'></div>
		<div class='backImage'>
			<div class='image4'></div>
		</div>
		<h3>Окосячка сруба</h3>
		<p>Обсадка дверных и оконных проемов для защиты рам и стеклопакетов от давления при усадке бревён.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
	<div class='item'>
		<div class='bg im8'></div>
		<div class='backImage'>
			<div class='image4'></div>
		</div>
		<h3>Защита древесины</h3>
		<p>Обработка сруба антисептическими средствами для защиты древесины от гниения, плесени и грибка.</p>
		<!-- <a href='#'>Подробнее</a> -->
	</div>
</div>
	
</section>


<section id='features'>
	<div class='h-2'>Причины выбрать Topwood</div>
	<p>За 6 лет работы мы обслужили около 95 обьектов, неуклонно следуя четырем основным принципам:</p>
	<div class='items'>
	<div class='item'>
		<div class='backImage'>
			<img src='icons/guarantee.png'/>
			<!-- <div class='image1'></div> -->
		</div>
		<h3>3 года гарантии</h3>
		<p>Каждому клиенту предоставляется 3 года гарантийного обслуживания на все виды выполненных работ.</p>
	</div>
	<div class='item'>
		<div class='backImage'>
			<img src='icons/delivery.png'/>
			<!-- <div class='image2'></div> -->
		</div>
		<h3>Комплексный подход</h3>
		<p>Ваш комфорт - это наша работа! Мы возьмем на себя все организационные вопросы по закупке, подбору и доставке строительных материалов на объект.</p>
	</div>
	<div class='item'>
		<div class='backImage'>
			<img src='icons/calendar.png'/>
			<!-- <div class='image3'></div> -->
		</div>
		<h3>Сдача в срок</h3>
		<p>Мы ценим ваше и свое время, поэтому стараемся реально оценивать объемы предстоящих работ и придерживаемся принципа несдвигаемых сроков.</p>
	</div>
	<div class='item'>
		<div class='backImage'>
			<img src='icons/chat.png'/>
			<!-- <div class='image4'></div> -->
		</div>
		<h3>Бесплатная консультация</h3>
		<p>Все наши консультационные услуги абсолютно бесплатны, начиная от телефонной консультации и заканчивая вызовом мастера для составления предварительной сметы и заключения договора.</p>
	</div>
</div>	
</section>

<section id='stages'>
	<div class='bg'></div>
	<div class='h-2'>Схема нашей работы</div>
	<p>Всего 4 этапа отделяет ваш дом из сруба от перевоплощения:</p>
	<div class='items'>
	<div class='item'>
		<div class='numb'>1</div>
		<div class='backImage'><img src='icons/smartphone.png'/></div>
		<a href='#' class='button'>Заявка</a>
		<p>или позвонить</p>
		<a class='tel' href='tel:(098) 699-70-50'>(098) 699-70-50</a>
	</div>
	<div class='item'>
		<div class='numb'>2</div>
		<div class='backImage'><img src='icons/engineer.png'/></div>
		<h3>Бесплатный выезд</h3>
		<p>Наш специалист приезжает на объект для обсуждения деталей заказа и составления подробной сметы.</p>
	</div>
	<div class='item'>
		<div class='numb'>3</div>
		<div class='backImage'><img src='icons/wrench.png'/></div>
		<h3>Выполнение работ</h3>
		<p>Наша бригада, со всеми необходимыми материалами и инструментами, приезжает на объект и приступает к работе.</p>
	</div>
	<div class='item'>
		<div class='numb'>4</div>
		<div class='backImage'><img src='icons/mortgage.png'/></div>
		<h3>Сдача готового объекта</h3>
		<p>На завершающем этапе вы оцениваете качество и вид отреставрированного дома.</p>
	</div>
</div>	
</section>

<section id='galery'>
	<div class='bg'></div>
	<div class='h-2'>Фотогалерея</div>
	<p>Всегда лучше один раз увидеть и мы с удовольствием предлагаем взглянуть на реальные примеры наших работ.</p>
	<div class='switch'>
			<p class='all active'>Все</p>
			<p class='restavration'>Реставрация</p>
			<p class='pokraska'>Покраска</p>	
			<p class='okosyach'>Окосячка</p>	
			<p class='germetik'>Герметизация</p>
	</div>
	
	<div id='different'>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work1.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work2.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work3.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work17.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work4.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work5.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work6.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work19.jpg'/></div></div>
		
		
		<div class='item'><div class='backImage'><img src='img/works/topwood-work13.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work26.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work10.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work11.jpg'/></div></div>


		<div class='item'><div class='backImage'><img src='img/works/topwood-work8.jpg'/></div></div>
		<div class='item'><div class='backImage'><img height="102%" src='img/works/topwood-work20.jpg'/></div></div>
		<div class='item'><div class='backImage'><img height="102%" src='img/works/topwood-work25.jpg'/></div></div>
		<div class='item'><div class='backImage'><img height="102%" src='img/works/topwood-work15.jpg'/></div></div>
		
		
		<div class='item'><div class='backImage'><img src='img/works/topwood-work16.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work23.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work21.jpg'/></div></div>
		<div class='item'><div class='backImage'><img src='img/works/topwood-work22.jpg'/></div></div>
		
		<div class='item'><div class='backImage'><img src='img/works/topwood-work24.jpg'/></div></div>
		<!-- <div class='item'><div class='backImage'><img src='img/works/topwood-work8.jpg'/></div></div> -->
		<div class='item'><div class='backImage'><img height="102.5%" src='img/works/topwood-work7.jpg'/></div></div>
		<div class='item'><div class='backImage'><img height="102.5%" src='img/works/topwood-work12.jpg'/></div></div>
		<!-- <div class='item'><div class='backImage'><img src='img/works/topwood-work14.jpg'/></div></div> -->
		<!-- <div class='item'><div class='backImage'><img src='img/works/topwood-work9.jpg'/></div></div> -->
		<div class='item'><div class='backImage'><img src='img/works/topwood-work27.jpg'/></div></div>

	</div>


	<!-- <div id='restavr'>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work1.jpg'/></div><p>реставрация</p></div>
	</div>

	<div id='okos'>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work4.jpg'/></div><p>реставрация</p></div>
	</div>

	<div id='pokr'>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
		<div class='item'><div class='backImage'><img src='work2.jpg'/></div><p>покраска</p></div>
	</div>

	<div id='germ'>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
		<div class='item'><div class='backImage'><img src='work3.jpg'/></div><p>реставрация</p></div>
	</div> -->
	
</section>



<section id='about'>
	<div class='items'>
	<div class='item'>
		<div class='whiteImage'><img src='img/director.jpg'/></div>
		
	</div>
	<div class='item director'>
		<div class='h-2'>"Все начинается с любви к своему делу"</div>
		<p>Я всегда ценил и уважал дерево за его натуральность, экологичность и комфорт, который дарит проживание в доме из сруба. Это благородный и живой материал, требующий особого ухода. Именно на любви и уважении к дереву построена наша компания.</p>
		<p>Проведение реставрации деревянного дома - это долгосрочное вложение, требующее профессионального и ответственного подхода. Мы готовы разделить эту ответственность, выполняя весь спектр услуг по восстановлению и ремонту домов и построек из сруба.
		</p>
		<p>Наша цель - найти индивидуальный подход не только к каждому клиенту, но и к его дому. Для нас важно, чтобы вы остались довольны качеством проведенных работ и с удовольствием рекомендовали Topwood своим друзьям и знакомым.</p>
		<p class='green'><span class='bold'>Линник Владислав</span><br>руководитель компании "Topwood"</p>
	
	</div>
</div>	
</section>


<section id='reviews'>
	<div class='h-2'>Отзывы</div>
	<p>то, что о нас думаю клиенты</p>
	<div class='reviewItem active'>
		<div class='buttonBack'><img src='icons/back-button.png'/></div>
		<div class='backImage'><img src='img/review1.jpg'/></div>
		<h3>Андрей</h3>
		<p><img class='lquote' src='icons/lquote.png'/>Недавно воспользовался услугами компании Topwood и вообще не пожалел, что это сделал! Еще недавно мой коттедж был весь в щелях на стыках, из-за этого внутри становилось очень холодно. Я не знал, что делать, но ваши ребята сказали, что можно применить технологию «теплый шов» и тогда все исправится. И действительно — после работы ваших специалистов температура в коттедже значительно увеличилась, стало тепло и уютно. Спасибо вам!<img class='rquote' src='icons/rquote.png'/></p>
		<div class='buttonNext'><img src='icons/next-button.png'/></div>
	</div>
	
	<div class='reviewItem'>
		<div class='buttonBack'><img src='icons/back-button.png'/></div>
		<div class='backImage'><img src='img/review2.jpg'/></div>
		<h3>Руслан</h3>
		<p><img class='lquote' src='icons/lquote.png'/>Я совершенно не связан со строительной сферой и мало что понимаю в ней. У меня на даче стоял старенький полуразрушенный деревянный дом, хотелось привести его в порядок. Друзья порекомендовали вашу фирму. Я созвонился со специалистом, который предоставил бесплатную консультацию. Спустя время ко мне приехал мастер и детально объяснил, какие работы нужно сделать. При этом я не заплатил ни копейки за его выезд! Мы договорились о сроках и видах работ. Команда строителей справилась очень быстро. Дом теперь выглядит как новый. В нем приятно проводить время. Вы сделали все так, как я себе представлял. Справились на отлично!<img class='rquote' src='icons/rquote.png'/></p>
		<div class='buttonNext'><img src='icons/next-button.png'/></div>
	</div>
	<div class='reviewItem'>
		<div class='buttonBack'><img src='icons/back-button.png'/></div>
		<div class='backImage'><img src='img/sveta.png'/></div>
		<h3>Светлана</h3>
		<p><img class='lquote' src='icons/lquote.png'/>Спасибо большое вашей компании за выполненные работы! Мастера работали очень добросовестно и качественно. Особая благодарность за предварительную консультацию, потому что изначально мы планировали сделать внешнюю шлифовку всего дома (старая часть с краской и новая пристроенная), конопатку на новой и покраску, но ваш специалист посоветовал заменить конопатку и на старой части дома! Спасибо ему большое! Также было приятно, что ребята успели сделать работу до дождей. Все мастера доброжелательные, скромные и работящие.<img class='rquote' src='icons/rquote.png'/></p>
		<div class='buttonNext'><img src='icons/next-button.png'/></div>
	</div>
</div>	
</section>






<section id='seotext'>
	<div class='items'>
	<div class='item'>
		<h3>Особенности дома из сруба</h3>
		<p>Срубом издавна называли дом или любую другую постройку, выполненную из цельных бревен, которые накладывались друг на друга по определенной методике. Высшей степенью мастерства считалось возведения дома без единого гвоздя. В последние годы такая технология строительства снова набрала популярность. Это связано с невысокой ценой дерева (по сравнению с камнем или кирпичем), небольшими затратами на строительство, экологичностью и красотой такого дома. Но, как и любой другой натуральный материал, дерево требует тщательного ухода для сохранения комфорта проживания и эстетического внешнего вида дома. Существует несколько весомых факторов, которые негативно влияют на прочность и долговечность дерева:</p>
		<ol>
			<li>Ультрафиолет. Приводит к выгоранию верхнего слоя бревна, в связи с чем оно теряет свою привлекательность, становится блеклым, может посереть и растрескаться.</li>
			<li>Перепады температур. Вызывают деформацию бревен сруба, появление зазоров между ними, что негативно сказывается на терморегуляции дома.</li>
			<li>Влажность. Может привести к деформации постройки, вызвать появление плесени, грибков, которые в разы ускоряют разрушение структуры дерева.</li>
			<li>Грибок и плесень. Самый главный враг деревянных домов. Помимо того, что их появление приводит к быстрому разрушению дома из сруба, почернению бревен, они также несут опасность для здоровья его жильцов.</li>
		</ol>
		<p>Последствия влияния всех этих факторов могут быть весьма плачевными. Потому крайне важно проводить профессиональный осмотр и профилактику деревянного дома один-два раза в год (весной и осенью). А при выявлении каких-либо проблем - не затягивать с их устранением.</p>
	</div>
	<div class='item'>
		<h3>История компании “Topwood”</h3>
		<p>Всегда интересно узнать, как все начиналось. Наша история началась со строительства деревянных домов из сруба. Но когда число обращений по вопросам восстановления и ухода за постройками из сруба заметно возросло, мы поняли, что спрос на такие услуги крайне высот и решили посвятить себя именно этому направлению. Так, в 2012 году, и возникла наша компания.<br>
		Изначально, клиентская база состояла из контактов, которые мы получили еще будучи строителями. Мы внимательно анализировали заявки для определения наиболее востребованных услуг и направлений для своей работы. Мы изучали новые методики и материалы, привлекали в штат мастеров, специализирующихся на работе по дереву. За шесть лет существования компании нами были выполнены сотни проектов, преимущественно на территории Одесской и Днепропетровской области.<br>
		В 2016 году мы взяли курс на расширение, создав сайт для привлечения новых клиентов и начав выполнять заказы по всей территории Украины. Мы уверены в своих силах и, опираясь на многолетний опыт, стремимся развиваться, предоставляя полный перечень услуг по реставрации и ремонту любых построек из сруба (дома, бани, хозяйственной постройки и пр.). <br>
		Сейчас Topwood выполняет следующие виды работ: </p>
		<ul>
			<li>монтаж сруба (сборка построек из сруба, разработка проектов деревянных домов, установка окосячки);</li>
			<li>отделка сруба (шлифовка, покраска бревен, конопатка швов, герметизация швов, отделка швов канатом);</li>
			<li>реставрация сруба (замена поврежденных бревен, обработка сруба от плесени и грибка);</li>
			<li>ремонт сруба (все виды работ, связанных с ремонтом построек из сруба, проведение мелкого бытового ремонта лестниц, дверных проемов, оконных рам и пр.).</li>
		</ul>
		<p>Команда Topwood - это команда людей, влюбленных в свою профессию и мы готовы на деле доказать это.</p>	
	</div>
</div>	
</section>


<section id='contact'>
	<div class='item'>
		<div class='h-2'>Контакты</div>
		<p class='text'>Будем рады ответить на все ваши вопросы!</p>
		<p><a href='tel:(098) 699-70-50'>(098) 699-70-50</a></p>
		<p>Email: <a href='#'>info@topwood.com.ua</a></p>
		

	</div>
	<div class='item2'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5440265.604987868!2d26.871705783303675!3d48.25706728653091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d1d9c154700e8f%3A0x1068488f64010!2z0KPQutGA0LDQuNC90LA!5e0!3m2!1sru!2sua!4v1521027995950" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

</section>



<footer>
<div class='item'>
	<ul>
		<li>© 2012-2018 "Topwood".<br>Все права защищены.</li>
		<li class='social'><a href=''><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li class='social'><a href=''><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
		<li class='social'><a href=''><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		<li class='social'><a href=''><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li class='social'><a href=''><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
	</ul>
</div>
<div class='item'>
	<ul>
		<li><a class='submenu fat green' href=''>Наши услуги</a></li>
		<li><a class='submenu' href=''>Конопатка</a></li>
		<li><a class='submenu' href=''>Покраска</a></li>
		<li><a class='submenu' href=''>Герметизация</a></li>
		<li><a class='submenu' href=''>Шлифовка</a></li>
		<li><a class='submenu' href=''>Окосячка</a></li>
		<li><a class='submenu' href=''>Обивка швов</a></li>
		<li><a class='submenu' href=''>Реставрация</a></li>
	</ul>
</div>
<div class='item'>
	<ul>
		<li><a class='submenu fat' href=''>О компании</a></li>
		<li><a class='submenu fat' href=''>Прайс</a></li>
		<li><a class='submenu fat' href=''>Акции</a></li>
		<li><a class='submenu fat' href=''>Блог</a></li>
		<li><a class='submenu fat' href=''>География работ</a></li>
		<li><a class='submenu fat' href=''>Контакты</a></li>
	</ul>
</div>
<div class='item'>
	<ul>
		<li><a class='submenu tel' href='tel:(098) 699-70-50'><i class="fa fa-phone" aria-hidden="true"></i>+38 (098) 699-70-50</a></li>
		<li><a class='submenu green recall' href=''>Заказать звонок</a></li>
		<li><a class='submenu' href=''><i class="fa fa-envelope" aria-hidden="true"></i>info@topwood.com.ua</a></li>
	</ul>
</div>






</footer>


<script type="text/javascript">
	var aRestavration = document.getElementsByClassName('restavration');
	var aPokraska = document.getElementsByClassName('pokraska');
	var aOkosyach = document.getElementsByClassName('okosyach');
	var aGermetik = document.getElementsByClassName('germetik');
	var aAll=document.getElementsByClassName('all');

	var divRestavration = document.getElementById('restavr');
	var divGermetisation = document.getElementById('germ');
	var divPokraska = document.getElementById('pokr');
	var divOkosyachka = document.getElementById('okos');
	var divDiff=document.getElementById('different');


	// aPokraska[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='flex';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.add('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aGermetik[0].classList.remove('active');
	// }

	// aOkosyach[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='flex';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.add('active');
	// 	aGermetik[0].classList.remove('active');
	// }

	// aGermetik[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='none';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='flex';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aGermetik[0].classList.add('active');
	// }
	// aRestavration[0].onclick=function() {
	// 	divDiff.style.display='none';
	// 	divRestavration.style.display='flex';
	// 	divPokraska.style.display='none';
	// 	divGermetisation.style.display='none';
	// 	divOkosyachka.style.display='none';
	// 	aPokraska[0].classList.remove('active');
	// 	aRestavration[0].classList.add('active');
	// 	aOkosyach[0].classList.remove('active');
	// 	aAll[0].classList.remove('active');
	// 	aGermetik[0].classList.remove('active');
	// }
	

	aAll[0].onclick=function() {
		divDiff.style.display='flex';
		divRestavration.style.display='none';
		divPokraska.style.display='none';
		divGermetisation.style.display='none';
		divOkosyachka.style.display='none';
		aPokraska[0].classList.remove('active');
		aRestavration[0].classList.remove('active');
		aOkosyach[0].classList.remove('active');
		aAll[0].classList.add('active');
		aGermetik[0].classList.remove('active');
	}




var reviewButtonBack=document.getElementsByClassName('buttonBack');
		var reviewButtonNext=document.getElementsByClassName('buttonNext');
		var reviewItem=document.getElementsByClassName('reviewItem');

		reviewButtonNext[0].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='block';
		reviewItem[2].style.display='none';
		reviewButtonBack[1].style.display='block';
	}
		reviewButtonNext[1].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='none';
		reviewItem[2].style.display='block';
		reviewButtonBack[2].style.display='block';
		reviewButtonNext[2].style.display='none';
	}

	reviewButtonBack[1].onclick=function() {
		reviewItem[0].style.display='block';
		reviewItem[1].style.display='none';
		reviewItem[2].style.display='none';
		reviewButtonBack[0].style.display='none';
		reviewButtonNext[0].style.display='block';
	}
		reviewButtonBack[2].onclick=function() {
		reviewItem[0].style.display='none';
		reviewItem[1].style.display='block';
		reviewItem[2].style.display='none';
		reviewButtonBack[1].style.display='block';
		reviewButtonNext[1].style.display='block';
	}



	
</script>
</body>
</html>