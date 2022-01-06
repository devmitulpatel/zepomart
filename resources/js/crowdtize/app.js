require('../bootstrap');
const Vue = require("Vue");
const url = require("url");
const axios = require("axios");
import Datepicker from 'vue3-date-time-picker';
import { ref } from 'vue';


let crowdtizeRegistrationFrom={
    name:'crowdtize-registration-from-component',
    data(){
        return {
            sponsor_id:null,
            name:null,
            city:null,
            state:null,
            area:null,
            payment_gateway:null,
            mobile_no_payment:null,
            mobile_no_whatsapp:null,
            ref_code:null,
            termsaccepted:null,
            api_url:null,
            birthdate:null,
            gender:'male',
            format: "dd/MM/yyyy",
            error:[],
            errorMessage:'',
            successMessage:'',
            createdUser:null



        }
    },
    mounted() {
        let mainDiv=document.getElementById('crowdtize-registration-from-component');
        this.api_url=mainDiv.getAttribute('api-url');
        this.birthdate = ref(new Date());

       // this.test();

    },
    methods:{
        resetUserForm(){

            let data={
                error:[],
                errorMessage:'',
                successMessage:'',
                createdUser:null
            };

            for (let x in data){
                this[x]=data[x];
            }
        },
        resetComp(){
          let data ={
              sponsor_id:null,
              name:null,
              city:null,
              state:null,
              area:null,
              payment_gateway:null,
              mobile_no_payment:null,
              mobile_no_whatsapp:null,
              termsaccepted:null,
              birthdate:null,
              gender:null,

          }

          for (let x in data){
              this[x]=data[x];
          }


        },
        setNewDate(d){
            this.birthdate=d;
        },
        test(){
            let data={
                sponsor_id:'sadasd',
                name:'Mitul Patel',
                city:'fsad',
                state:'jdsa',
                area:'jadsh',
                payment_gateway:1,
                mobile_no_payment:'9662611234',
                mobile_no_whatsapp:'9662611234',
                termsaccepted:true,
                birthdate:ref(new Date()),
                gender:'male',
            }
            for (let x in data ){
                this[x]=data[x];
            }
        },
        submitForm(){

            console.log('here');
            if(this.allValidInput()) this.apiCall();
        },

        allValidInput(){
            console.log('sponsor id',this.isValidSponsorId())
            console.log('name',this.isValidName())
            console.log('city',this.isValidCity())
            console.log('state',this.isValidState())
            console.log('area',this.isValidArea())
            console.log('gateway',this.isValidPaymentGateway())
            console.log('whatsapp number',this.isValidWhatsappNumber())
            console.log('payment number',this.isValidPaymentNumber())
            console.log('gender',this.isValidGender())
            return this.isValidSponsorId() && this.isValidName() && this.isValidCity()  && this.isValidState() && this.isValidArea() && this.isValidPaymentGateway() && this.isValidWhatsappNumber() && this.isValidPaymentNumber() && this.isValidGender()
        },
        apiCall(){
            this.errorMessage="";
            this.error=[];
            this.successMessage="";
            this.createdUser=null;
            let form={
                sponsor_id :this.sponsor_id ,
                name:this.name,
                city:this.city,
                state:this.state,
                area:this.area,
                payment_gateway:this.payment_gateway,
                mobile_no_payment:this.mobile_no_payment,
                mobile_no_whatsapp:this.mobile_no_whatsapp
            };
            axios.post(this.api_url,form).then(res=>this.OkResponse(res)).catch(e=>this.ErrorResponse(e))

        },
        OkResponse(res){
            this.successMessage='User created successfully';
            this.createdUser=res.data.data;
            this.resetComp();

        },
        ErrorResponse(e){
            this.errorMessage=e.response.data.message;
            this.error=e.response.data.errors;

        },
        isValidSponsorId() {
            return this.sponsor_id?.length>3
        },
        isValidName() {
            return this.name?.length>3
        },
        isValidCity() {
            return this.city?.length>3
        },
        isValidState() {
            return this.state?.length>3
        },
        isValidArea() {
            return this.area?.length>3
        },
        isValidPaymentNumber() {
            return this.mobile_no_payment?.toString().length==10;
        },
        isValidWhatsappNumber() {
            return this.mobile_no_whatsapp?.toString().length==10;
        },
        isValidPaymentGateway() {

            return this.payment_gateway?.length==1;
        },
        isValidGender(){
            return this.gender?.lengt>1;
        }
    }
}

const app = Vue.createApp(crowdtizeRegistrationFrom);
app.component('Datepicker',Datepicker);
app.mount('#crowdtize-registration-from-component')

