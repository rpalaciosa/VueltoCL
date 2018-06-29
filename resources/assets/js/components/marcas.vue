<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
				<div class="card-body" v-for="campagin in campagins" v-bind:key="campagin.id">
					<div class="col-xs-12 col-sm-4">
						<div class="box box-solid box-default">
							
							<div class="box-header with-border">
								<div class="box-title">
										<i v-bind:class="getClass(campagin.category_fa_icon)"></i>	
										{{campagin.mark_name}}
										
								</div>
							</div>
							<div class="box-body">
								{{campagin.description}}
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
			return{
				campagins: [],
				campagin:{
					id:'',
					category_title:'',
					category_fa_icon:'',
					mark_id:'',
					mark_name:'',
					value:'',
					description:'',
					status:''
					
				}
			}
		},
		created(){
			this.fetchMarks();
		},
		
		methods:{
			fetchMarks(){
				let vm = this;
				fetch('/api/ListOffers')
				.then(res=>res.json())
				.then(res=>{
					this.campagins = res.data;
					
					
				})
			},
			getClass(p_class){
				return p_class;
			}
		}
			
    }
</script>
