<?php get_header();?>
	<aside>
		<div class="contact">
			<div class="item-wrap">
				<div class="item">
					<img src="<? echo get_template_directory_uri() . '/images/phone.png';?>" alt="">
					<div class="wr">
						<span>Phone:</span>
						<p>123-456-789</p>
					</div>

				</div>
				<div class="item">
					<img src="<? echo get_template_directory_uri() . '/images/layer-199.jpg';?>" alt="">
					<div class="wr">
						<span>Mail:</span>
						<p><a href="">haskellisp@gmail.com</a></p>
					</div>

				</div>
				<div class="item">
					<img src="<? echo get_template_directory_uri() . '/images/layer-200.jpg';?>" alt="">
					<div class="wr">
						<span>Adress:</span>
						<p>Lorem ipsum 123 <br>
							123</p>
					</div>

				</div>
			</div>
		</div>
	</aside>
	<article>
		<div class="title">
			<h1>Lorem ipsum dolor sit amet</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
				exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
				dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Excepteur sint occaecat
				cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<form action="">
			<div class="input-wrap">
				<div class="l-wrap">
					<label for="firstname">First name</label>
				</div>
				<input type="text" name="firstname" id="name"><br>
			</div>

			<div class="input-wrap">
				<div class="l-wrap">
					<label for="lastname">Last name</label>
				</div>
				<input type="text" name="lastname" id="lastname"><br>
			</div>
			<div class="input-wrap">
				<div class="l-wrap">
					<label for="email">Email</label>
				</div>
				<input type="email" name="email" id="email"><br>
			</div>
			<div class="input-wrap">
				<div class="l-wrap">
					<label for="phone">Phone</label>
				</div>
				<input type="tel" name="phone" id="phone"><br>
			</div>
			<div class="input-wrap">
				<div class="l-wrap">
					<label for="message">Message</label>
				</div>
				<input type="text" name="message" id="message"><br>
			</div>

			<div class="input-wrap">
				<div class="i-wrap">
					<input type="submit" id="submit"><br>
				</div>
			</div>
		</form>

	</article>
<?php get_footer();?>