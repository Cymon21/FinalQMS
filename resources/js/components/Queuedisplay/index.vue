<template>
    <div class="display-wrapper">
        <div class="card">
            <div class="card-title display-6 p-0 mt-4 fw-bold">Cashier</div>
            <div class="card-body display-1 d-flex justify-content-center">
                1
            </div>
            <div
                class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2"
            >
                Now Serving
            </div>
        </div>
         <div class="card">
            <div class="card-title display-6 p-0 mt-4 fw-bold"> Cashier</div>
            <div class="card-body display-1 d-flex justify-content-center">1</div>
            <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2">
                Now Serving
            </div>
        </div>
        <div class="card">
           <div class="card-title display-6 p-0 mt-4 fw-bold"> Cashier</div>
           <div class="card-body display-1 d-flex justify-content-center">1</div>
           <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2">
               Now Serving
           </div>
       </div>
       <div class="card">
          <div class="card-title display-6 p-0 mt-4 fw-bold"> Cashier</div>
          <div class="card-body display-1 d-flex justify-content-center">1</div>
          <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2">
              Now Serving
          </div>
      </div>
    </div>
</template>

<style scoped>
@import "/resources/css/queue/queue.css";
</style>

<!-- <script>
import axios from "axios";
export default {
    data() {
        return {
            queCashier: [],
            queAssesor: [],
            cashCurrQue: [],
            asseCurrQue: [],
        };
    },
    methods: {
        GetQueCashier() {
            axios
                .get("/api/cashier/queuDisplay")
                .then((response) => {
                    this.queCashier = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        GetQueAssesor() {
            axios
                .get("/api/assesor/queuDisplay")
                .then((response) => {
                    this.queAssesor = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        displayCashQue(){
            axios.get('/api/cashier/currQue/cashDisplay').then((response)=>{
                if (response.data && response.data.length > 0) {
                    this.cashCurrQue = response.data;
                } else {
                    this.cashCurrQue = "0";
                }
            }).catch((error)=>{
                console.log(error);
                this.cashCurrQue = "0";
            });
            setTimeout(this.displayCashQue, 5000);
        },
        displayAsseQue(){
            axios.get('/api/assesor/currQue/asserDisplay').then((response)=>{
                if (response.data && response.data.length > 0) {
                    this.asseCurrQue = response.data;
                } else {
                    this.asseCurrQue = "0";
                }
            }).catch((error)=>{
                console.log(error);
                this.asseCurrQue = "0";
            });
            setTimeout(this.displayAsseQue, 5000);
        },
        
    },
    mounted() {
        this.displayAsseQue();
        this.displayCashQue();
        this.GetQueCashier();
        this.GetQueAssesor();
    },
};
</script> -->

<!-- 
<div class="card" v-for="cashier in queCashier" :key="cashier.id">
    <div class="card-title display-6 p-0 mt-4">
        {{ cashier.designation.name }}
    </div>
    
        <div class="card-body display-1 d-flex justify-content-center" v-for="queCash in cashCurrQue" :key="queCash.id">
            <p class="fw-semibold mb-0">{{ queCash?.queue_name_number }}</p>
        </div>
    <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-4">
        On Serving
    </div>
</div>

<div class="card" v-for="items in queAssesor" :key="items.id">
    <div class="card-title display-6 p-0 mt-4">
        {{ items.designation.name }}
    </div>
    <div class="card-body display-1 d-flex justify-content-center" v-for="queAss in asseCurrQue" :key="queAss.id">
        <p class="fw-semibold mb-0">{{ queAss?.queue_name_number }}</p>
    </div>
    <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-4">
        On Serving
    </div>
</div> -->
