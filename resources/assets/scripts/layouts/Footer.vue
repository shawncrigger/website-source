<template>
  <footer>
  	<dl>
  		<dt>Email</dt>
  		<dd><a target="_blank" :href="mailto">{{email}}</a></dd>
  	</dl>
  	<dl>
  		<dt>Phone</dt>
  		<dd><a target="_blank" :href="tel">{{phone}}</a></dd>
  	</dl>
  	<dl class="mb-0">
  		<dt>Find me on</dt>
  		<dd class="mb-0">
  			<ul class="nav nav-social">
  				<li class="nav-item">
  					<a class="nav-link" href="https://www.linkedin.com/in/shawn-crigger/" target="_blank">
  						<i class="fa fa-linkedin"></i>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="https://twitter.com/shawncrigger" target="_blank">
  						<i class="fa fa-twitter"></i>
  					</a>
  				</li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/shawncrigger" target="_blank">
              <i class="fa fa-github"></i>
            </a>
          </li>
  				<li class="nav-item">
  					<a class="nav-link" href="https://www.upwork.com/o/profiles/users/_~012c863ad135fdb85f/k" target="_blank">
  						<i class="upwork"></i>
  					</a>
  				</li>
  			</ul>
  		</dd>
  	</dl>
  </footer>
</template>

<script>
export default {
	data(){
		return {
			email: 'ithippyshawn@gmail.com',
			phone: '843-602-3769',
			social : {
				facebook : '',
				twitter: 'shawncrigger',
				github: 'shawncrigger'
			}
		}
	},
	computed: {
		mailto(){
			return 'mailto:' + this.email;
		},
		tel(){
			return 'tel:' + this.phone.replace(/ /g, '')
		}
	}
}
</script>
