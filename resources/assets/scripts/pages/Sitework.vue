<template>
	<div>
		<h1 class="title">{{website.title}}</h1>
		<div class="row no-gutters portfolio">
			<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
				<h2 class="">Job Descripition</h2>
				<p class="text-muted">
				{{website.full_description}}
				</p>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-6" v-for="(item, index) in thumbs">
				<div class="portfolio__item" :style="{{'background-image' : 'url('+item[index]+')'}}">
				</div>
			</div>
		</div>
	</div>
</template>


<script>
export default {
	    data:function(){
	      return {
	        website:[]
	      };
	    },
	    created: function () {
	    	var json  = {};
	    	var _this = this;
	    	var slug  = this.$route.params.slug;
	        $.getJSON('/api/portfolio/' + slug, function (json) {
	            _this.website = json;
	        });
	    },
	    computed: {
	    	thumbs(){
	    		return this.website.images.thumbs;
	    	},
	    	fullsize(){
	    		return this.website.images.full;
	    	},
	    	images(){
	    		return this.website.images;
	    	}
	    }
	}
</script>
