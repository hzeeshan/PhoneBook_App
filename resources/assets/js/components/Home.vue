<template>

	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">

				<div class="panel-heading"><h4>VueJs PhoneBook App</h4>
					<div class="clearfix">
						<div class="pull-right">
							<a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal">Add New</a>
						</div>
					</div>

				</div>

				<div class="panel-body">
					<input type="search" class="form-control" placeholder="Search">

				</div>
				<div class="row text-center" v-for="item,key in lists">
					<div class="col-md-6">
						<div class="" style="padding: 10px;">

					{{ item.name }}

					</div>
				</div>

					<div class="row">
						<div class="col-md-6">
							<div class="col-md-4">
								<a href=""><i class="fa fa-trash text-danger"></i></a>
							</div>

							<div class="col-md-4">
								<a href="" data-toggle="modal" data-target="#myModal_3"><i class="fa fa-edit text-primary" @click="openUpdate(key)"></i></a>
							</div>

							<div class="col-md-4">
								<a href="" data-toggle="modal" data-target="#myModal_2"><i class="fa fa-eye text-success" @click="openShow(key)"></i></a>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<Add></Add>
		
		<Show></Show>
		<Update></Update>

	</div>

	
</template>

<script type="text/javascript">
	
let Add = require('./Add.vue');
let Show = require('./Show.vue');
let Update = require('./Update.vue');

	export default {

		components: {
			Add, Show, Update
		},	

		data() {
			return {

				lists: {},
				errors: {}
			}
		},

		mounted() {
			axios.post('/getData')
	        .then((response) => this.lists = response.data)
	        .catch((error) => this.errors = error.response.data.errors)
			},	

		methods: {

			openShow(key) {

				this.$children[1].list = this.lists[key]
			},

			openUpdate(key) {
				this.$children[2].list = this.lists[key]
			}
		}
	}
</script>