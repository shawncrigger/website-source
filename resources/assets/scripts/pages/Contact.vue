<template>
	<div>
		<div class="row">
			<div class="col-lg-6 col-primary">
				<contact-form></contact-form>
				<map-canvas position="33.674700,-78.901180" zoom="4" icon="/images/mapmarker.png"></map-canvas>
			</div>
			<div class="col-lg-6 flex-first flex-lg-unordered">
				<h1 class="title title--spaced">Contact me</h1>
				<div class="list-group">
					<div class="list-group-item">
						<h2 class="title">I'm Social</h2>
			          <ul class="social-icons">
			            <li>
			              <a href="https://twitter.com/shawncrigger" class="twitter" target="_blank">
			                <span><i class="fa fa-tumblr fa-stack-1x fa-inverse"></i></span>
			                <span>https://twitter.com/shawncrigger</span>
			              </a>
			            </li>
			            <li>
			              <a href="https://twitter.com/shawncrigger" class="linkedin" target="_blank">
			                <span><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>
			                <span>https://www.linkedin.com/in/shawn-crigger/</span>
			              </a>
			            </li>
			            <li>
			              <a href="https://github.com/svizion?tab=repositories" class="github" target="_blank">
			                <span><i class="fa fa-github fa-stack-1x fa-inverse"></i></span>
			                <span>https://github.com/svizion?tab=repositories</span>
			              </a>
			            </li>
			            <li>
			              <a href="https://www.upwork.com/o/profiles/users/_~012c863ad135fdb85f/" class="upwork" target="_blank">
			                <span><i class="upwork"></i></span>
			                <span>https://www.upwork.com/o/profiles/users/_~012c863ad135fdb85f/k</span>
			              </a>
			            </li>
			            <li>
			              <a href='mail&#116;o&#58;it&#104;&#105;ppy&#115;&#104;aw%&#54;E&#64;gmai&#37;6C&#46;co&#109;' class="email" target="_blank">
			                <span><i class="fa fa-envelope-open-o fa-stack-1x fa-inverse"></i></span>
			                <span>ithip&#112;&#121;s&#104;aw&#110;&#64;gma&#105;l&#46;co&#109;</span>
			              </a>
			            </li>
			          </ul>
					</div>
					<div class="list-group-item">
						<h2 class="title">Address</h2>
						<p class="text-muted">As developer nomad, over the last few years my wife and I considered our RV our home and where ever we stopped for the night or week was home for the night.  Currently we are living in Myrtle Beach, SC but once we can purchase another RV preferably a AIRSTREAM this time, then we will be nomads again!</p>
					</div>
					<div class="list-group-item">
						<h3 class="title">The Team<br></h3>
						<p class="text-muted">My team consists of my main supervisor, Mittens she's a 4 year old Hound Mix, who likes to stare over my shoulder to make sure I'm doing things how she would do them.  Next up is my wife Mellissa Crigger who is mostly my proofreader. Proof I can read (joke) and she helps with invoicing and customer service.</p>
					</div>
					<div class="list-group-item">
						<h3 class="title">Mittens<br></h3>
						<iframe id="myplayer" src="//player.vimeo.com/video/289607133?player_id=myplayer&api=1" width="640" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

	</div>
</template>
<script>
import MapCanvas from '../components/MapCanvas.vue';
import ContactForm from '../components/ContactForm.vue';
import Typed from 'typed.js'
export default {
	components : {
		MapCanvas,
		ContactForm
	}
}
</script>
