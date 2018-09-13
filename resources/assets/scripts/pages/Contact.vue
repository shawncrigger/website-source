<template>
	<div>
		<div class="row">
			<div class="col-lg-6 col-primary">
				<contact-form></contact-form>
				<map-canvas position="56.484392,21.017387" zoom="4" icon="/images/mapmarker.png"></map-canvas>
			</div>
			<div class="col-lg-6 flex-first flex-lg-unordered">
				<h1 class="title title--spaced">Contact me</h1>

				<div class="list-group">
					<div class="list-group-item">
						<p class="item-title">Email</p>
						<p><a href="mailto:ỉthippyshawn@gmail.com">ỉthippyshawn@gmail.com</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Phone</p>
						<p><a href="tel:8436023769">1-843-602-3769</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Address</p>
						<p>As developer nomad, over the last few years my wife and I considered our RV our home and where ever we stopped for the night or week was home for the night.  Currently we are living in Myrtle Beach, SC but once we can purchase another RV preferablly a AIRSTREAM this time, then we will be nomads again!</p>
					</div>
					<div class="list-group-item">
						<p class="item-title">The Team</p>
						<p>My team consists of my main supervisor, Mittens she's a 4 year old Hound Mix, who likes to stare over my shoulder to make sure I'm doing things how she would do them.  Next up is my wife Mellissa Crigger who is mostly my proof reader. proof I can read (joke) and she helps with invoicing and customer service.</p>
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
