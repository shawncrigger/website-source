<template>
	<div>
		<h1 class="title">{{website.title}}</h1>
		<div class="row no-gutters portfolio">
			<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
				<h2 class="title">Job Descripition</h2>
				<p class="text-muted">
				This project is based on Wordpress using a Custom Theme I wrote, along with a few custom plug-ins and widgets that were created for the project.   The Front Page is widget based which allows the end client to pick what type of content to display on each row and add and remove rows very easily,  there are a couple custom page types and taxonimies for there specials and team members.  Along with a event calendar that required quite a bit of modification. to fit there design.  I built this website without using a responsive framework, and in hindsite I wish I would have used Foundation or Bootstrap or something.
				</p>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-6" v-for="item in images">
				<div class="portfolio__item" :style="{'background-image' : 'url('+item+')'}">
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
	    	var _this = this;
	    	var slug = this.$route.params.slug;
	        $.getJSON('/api/portfolio/' + slug, function (json) {
	            _this.website = json;
	        });
	        console.log(json);
	    },
	    computed: {
	    	images(){
	    		return this.website.images;
	    	}
	    }
	}
</script>
