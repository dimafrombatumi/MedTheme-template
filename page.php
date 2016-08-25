
			
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="main_text">
			
						<h1 class="main_h1"><?php the_title(); ?></h1>
						<p class="main_par">
							<?php the_content(); ?>
						</p>
					
	
					</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>  	
					

		
                    
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


