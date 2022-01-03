require('../bootstrap');
const Vue = require("Vue");
const url = require("url");
const axios = require("axios");



let crowdtizeRegistrationFrom={
    name:'crowdtize-registration-from-component',
    data(){
        return {
            'sponsor_id':null,
            'name':null,
            'city':null,
            'state':null,
            'area':null,
            'payment_gatewaye':null,
            'mobile_no_payment':null,
            'mobile_no_whatsapp':null,
            'ref_code':null,

        }
    },
    methods:{
        submitForm(e){
            e.preventDefault();
            console.log('here')
        }
    }
}

Vue.createApp(crowdtizeRegistrationFrom).mount('#crowdtize-registration-from-component')
