
			
<!-- HEADER -->
<?php get_header();?>
<!-- HEADER -->

<div id="container">
	<div id="inner">
		<!-- SIDEBAR -->
				 <?php get_sidebar();?>
		<!-- SIDEBAR -->
		<div id="center">
			<div class="slider_wrap">

					<div class="my-slider">
			    		<div class="slider">
	    <ul>
	        <li><img src="http://wordpress/wp-content/themes/mytheme/images/slide1.jpg" alt="image description"/></li>
	        <li><img src="http://wordpress/wp-content/themes/mytheme/images/slide2.jpg" alt="image description"/></li>
	       
	    </ul>

	 </div>
	        
	    </ul>

			 		</div>

		 		</div>
	
			<div id="main_text">
						<h1 class="main_h1">Давно выяснено</h1>
						<p class="main_par">
							Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).<br>
							Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
						</p>
					
	
					</div>


					<div id="doctors_block">
							<h2>Наши врачи</h2>
							
										<ul class="doctors_list">
							<li class="view"><img src="http://wordpress/wp-content/themes/mytheme/images/doc1.jpg"></li>

							<li class="view"><img src="http://wordpress/wp-content/themes/mytheme/images/doc2.jpg"></li>
							<li class="view"><img src="http://wordpress/wp-content/themes/mytheme/images/doc3.png"></li>
							<li class="end_block_doct"><img src="http://wordpress/wp-content/themes/mytheme/images/doc4.jpg"></li>
							</ul>
							
									<div class="online_button_block">
										<span class="text_zakaz">Вы можете записаться на прием к нашим специалистам</span>
										<a href=""></a><span onclick="show('block')"  class="online_zakaz">ЗАПИСЬ НА ПРИЕМ</span>
									</div>
					</div>

					<div id="news_block">
                    	<h2>Новости клиники</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	                    	<div class="news_item">
	                    	<span class="news_date"><?php the_time('F jS, Y'); ?></span>
	                    		<a href="<?php the_permalink(); ?>"><h3 class="news_h3"><?php the_title(); ?></h3></a>
	                    		
	                    		<span class="news_prew_text"><?php the_content(); ?></span>
	                    		<a href="<?php the_permalink(); ?>">Подробнее</a>

	                    	</div>
	                  				<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>  	
                    </div>
		
                    <div id="prog_wrap"><h2 class="programs_header">Программы клиники</h2>
                    <div id="programs_block">
                    	
							<div class="programs_item">
								<img class="program_prew_img" src="http://wordpress/wp-content/themes/mytheme/images/prog1.png" width="70" height="70">
								<h3 class="program_prew_h3">Заголовок программы</h3>
									<span class="programs_prew_txt">много веб-страниц всё ещё дожидаются своего 
                    		настоящего рождениямного веб-страниц всё ещё дожидаются своего настоящего рождениямного</span>

							</div>
						
							<div class="programs_item second_prog">
								<img class="program_prew_img" src="http://wordpress/wp-content/themes/mytheme/images/prog2.png" width="70" height="70">
								<h3 class="program_prew_h3">Заголовок программы два</h3>
									<span class="programs_prew_txt">много веб-страниц всё ещё дожидаются своего 
                    		настоящего рождениямного веб-страниц всё ещё дожидаются своего 
                    		настоящего рождения</span>

							</div>
								<a class="all_programs_link" href="#">все программы</a>
                    </div>		


                    	
                    </div>


		</div>

			
		<div class="clear"></div>
	</div>

</div>

	 <!--  FOOTER -->
	 <?php get_footer();?>

</div>

 <!--  ВСПЛЫВАЮЩЕЕ ОКНО -->

<div id="window">
						
						 <!-- Картинка крестика-->
				<img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
					
						<form method="POST" id="feedback-form">
Как к Вам обращаться:
<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
Email для связи:
<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
Ваш телефон:
<input name="telFF" required placeholder="например, 89000000000" x-autocompletetype="tel" type="tel">
К какому врачу записываетесь:
<input name="docFF" required placeholder="ФИО врача или специализация" x-autocompletetype="tel" type="tel">
Ваше сообщение:
<textarea name="messageFF" required rows="5"></textarea>
<input type="submit" value="отправить">
</form>

<script>
document.getElementById('feedback-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "contacts.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value + "&telFF=" + f.telFF.value + "&docFF=" + f.docFF.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
      alert(http.responseText + ', Ваше сообщение получено.\nНаши специалисты ответят Вам в течении 2-х дней.\nБлагодарим за интерес к нашей фирме!');    
      f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
      f.messageFF.value='';
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
}, false);
</script>
</div>
 <!-- ВСПЛЫВАЮЩЕЕ ОКНО -->



  <!-- СЛАЙДЕР И ПРОКРУТКА -->

<script type="text/javascript">



$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear'
};
*/
 
$().UItoTop({ easingType: 'easeOutQuart' });
 
});
</script>

<script type="text/javascript">
 $(document).ready(function() {
 $(".slider").each(function() {

 var repeats = 5, // кількість повторювань автоматичного прокручування
 interval = 2, // інтервал в секундах
 repeat = true, // чи треба автоматично прокручувати (true/false)
 slider = $(this),
 repeatCount = 0,
 elements = $(slider).find("li").length;

 $(slider)
 .append("<div class='nav'></div>")
 .find("li").each(function() {
 $(slider).find(".nav").append("<span data-slide='"+$(this).index()+"'></span>");
 $(this).attr("data-slide", $(this).index());
 })
 .end()
 .find("span").first().addClass("on");

 // add timeout

 if (repeat) {
 repeat = setInterval(function() {
 if (repeatCount >= repeats - 1) {
 window.clearInterval(repeat);
 }

 var index = $(slider).find('.on').data("slide"),
 nextIndex = index + 1 < elements ? index + 1 : 0;

 sliderJS(nextIndex, slider);

 repeatCount += 1;
 }, interval * 4000);
 }

 });
 });

function sliderJS(index, slider) { // slide
 var ul = $(slider).find("ul"),
 bl = $(slider).find("li[data-slide=" + index + "]"),
 step = $(bl).width();

 $(slider)
 .find("span").removeClass("on")
 .end()
 .find("span[data-slide=" + index + "]").addClass("on");

 $(ul).animate({
 marginLeft: "-" + step * index
 }, 2000);
}

$(document).on("click", ".slider .nav span", function(e) { // slider click navigate
 e.preventDefault();
 var slider = $(this).closest(".slider"),
 index = $(this).data("slide");

 sliderJS(index, slider);
});
</script>
  <!-- СЛАЙДЕР И ПРОКРУТКА -->


</body>
</html>


