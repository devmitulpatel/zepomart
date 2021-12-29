require('./bootstrap');
const Vue = require("Vue");
const url = require("url");
const axios = require("axios");
const pricing = {
    name:'Pricing',
    props:['dyamicdata'],
    data() {
        return {
            timeToggle:1,
            plans: [],
            categories:{},
            activeCategory:0,

        }
    },
    mounted() {
        this.getAllPlan();

    },
    beforeCreate() {



    },

    computed:{

    },

    methods:{
        toggleCategory(k){
            this.activeCategory=(this.activeCategory==k)?null:k;
        },
        isCurrentCategoryActive(k){
          return this.activeCategory==k;
        },
        activateCategory(k){
            this.activeCategory=k;
        },
        setCategories(data){
            let newCategories={};
            for (let cat in data){
                newCategories[data[cat].id]=data[cat];
            }

            this.categories=newCategories;
            this.activateCategory(1);
        },
        toggleTime(){
            this.timeToggle=(this.timeToggle)?false:true;
        },
        getAllPlan(){
            let url = document.getElementById('pricing-vue-component').getAttribute('api-url');
            var th=this;
            axios.get(url).then((res)=>{
                th.plans=res.data.data;
                th.setCategories(res.data.categories);
            }).catch()
        },
        featureFilterByCategory(features){
            let filteredFeature={};
            //console.log(features)
            for (let feature in features){

                if(!filteredFeature.hasOwnProperty(features[feature].type) ){
                    filteredFeature[features[feature].type]=[];
                }
                filteredFeature[features[feature].type].push(features[feature]);

            }
            //console.log(filteredFeature);

            return filteredFeature;
        }




    }
}

Vue.createApp(pricing).mount('#pricing-vue-component')
