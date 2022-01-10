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
            debugData:{},
            byCategories:[],

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
                console.log(document.getElementById('pricing-vue-component').getAttribute('active-category'),'<-here')
                th.activateCategory(document.getElementById('pricing-vue-component').getAttribute('active-category'));
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


            this.debugData=filteredFeature;

            return filteredFeature;
        },
        getMonthlyPrice(plan){
            let found= plan.cost.find((ar)=>{
                return ar.type==1;
            })


            return found.cost??0;

        },

        getYearPrice(plan){
            let found= plan.cost.find((ar)=>{
                return ar.type==2;
            })


            return found.cost??0;

        },




    }
}
const whatsapp = {
    name:'WhatsApp',
    props:[],
    data() {
        return {

            //messageText:'Hello, I have some queries about WhatsApp Business API, need you help!',
            messageText:'',
            number:null,
            linkBase:'https://api.whatsapp.com/send',
            popUpOpened:false

        }
    },
    mounted() {

        this.inputFromDiv();

    },
    beforeCreate() {



    },

    computed:{

    },

    methods:{

        goToWhatsapp(){
            this.togglePopup();
            window.open(this.makeLink(),'_blank');
        },
        inputFromDiv(){
            this.number = document.getElementById('whatsapp-vue-component').getAttribute('phone-no');
            this.messageText = document.getElementById('whatsapp-vue-component').getAttribute('message');
        },
        togglePopup(){
            this.popUpOpened=(this.popUpOpened)?false:true;
        },
        makeLink(){
            let para=[
                ['phone',this.number].join('='),
                ['text',this.messageText].join('='),
            ].join('&');

            return [this.linkBase,para].join('?');
        }


    }
}

Vue.createApp(pricing).mount('#pricing-vue-component')
Vue.createApp(whatsapp).mount('#whatsapp-vue-component')
