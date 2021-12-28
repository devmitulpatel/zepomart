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

        }
    },
    mounted() {
        this.getAllPlan();

    },
    beforeCreate() {



    },

    methods:{
        toggleTime(){
            this.timeToggle=(this.timeToggle)?false:true;
        },
        getAllPlan(){
            let url = document.getElementById('pricing-vue-component').getAttribute('api-url');
            var th=this;
            axios.get(url).then((res)=>{
                th.plans=res.data.data;
            }).catch()
        },
        featureFilterByCategory(features){
            let filteredFeature={};
            for (feature in features){
                if(! filteredFeature.hasOwnProperty(feature.type) ){

                }
                filteredFeature[feature.type].push(feature);

            }

            return filteredFeature;
        }



    }
}

Vue.createApp(pricing).mount('#pricing-vue-component')
