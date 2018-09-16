<template>
	<div>
		<h1 class="title">Portfolio</h1>
		<p class="text-muted">
		These are some of the websites , I have built over the years that I am particularly proud of.   If I included every website I touched over the last decade on this page it would scroll for miles, so these are  just my favorites so to speak.
		</p>
		<div class="row no-gutters portfolio">
			<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-6" v-for="item in items">
				<div class="portfolio__item" :style="{'background-image' : 'url('+item.thumbnail+')'}">
					<div class="item__content">
						<p class="item__title">
							<a :href="item.slug" target="_blank">
								<i class="fa fa-link"></i>
								<span>{{item.title}}</span>
							</a>
						</p>
						<div class="clearfix"></div>
						<p class="item__desc">{{item.task}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import portfolioData from '../data/portfolio.json';
export default {
	data(){
		return {
			portfolioItems : portfolioData
		}
	},
	computed: {
		items(){
			return _.orderBy(this.portfolioItems, ['date', ], ['desc']);
		}
	}
}
</script>
