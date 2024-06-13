<template>
    <div class="display-wrapper p-2">
        <div class="card " v-for="cashier in queCashier" :key="cashier.id">
            <div class="card-title display-6 p-0 mt-4 fw-bold">
                {{ cashier.designation.name }}
            </div>
            <div class="card-body display-1 d-flex justify-content-center">
                {{ cashier?.que[0]?.queue_name_number }} 
            </div>
            <div class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2">
                Now Serving
            </div>
        </div>
        <div class="card" v-for="items in queAssesor" :key="items.id">
            <div class="card-title display-6 p-0 mt-4 fw-bold">
                {{ items.designation.name }}
            </div>
            <div class="card-body display-1 d-flex justify-content-center" >
                {{ items?.que[0]?.queue_name_number }}
            </div>
            <div
                class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-2"
            >
                Now Serving
            </div>
        </div>
    </div>
</template>

<style scoped>
@import "/resources/css/queue/queue.css";
</style>

<script>
import axios from "axios";
export default {
    data() {
        return {
            queCashier: [],
            queAssesor: [],
        };
    },
    methods: {
        GetQueCashier() {
            axios
                .get("/cashier/queuDisplay")
                .then((response) => {
                    if (response.data) {
                         this.queCashier = response.data;
                    } else {
                        this.queCashier = '0';
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
                setTimeout(this.GetQueCashier, 3000);
        },
        GetQueAssesor() {
            axios
                .get("/assesor/queuDisplay")
                .then((response) => {
                    this.queAssesor = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
                setTimeout(this.GetQueAssesor, 3000);
        },
    },
    mounted() {
        this.GetQueCashier();
        this.GetQueAssesor();
    },
};
</script>
