<template>
    <div class="display-wrapper">
        <div class="card" v-for="cashier in queCashier" :key="cashier.id">
            <div class="card-title display-6 p-0 mt-4">
                {{ cashier.designation.name }}
            </div>
            <div class="card-body display-1 d-flex justify-content-center">
                1
            </div>
            <div
                class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-4"
            >
                On Serving
            </div>
        </div>
        
        <div class="card" v-for="items in queAssesor" :key="items.id">
            <div class="card-title display-6 p-0 mt-4">
                {{ items.designation.name }}
            </div>
            <div class="card-body display-1 d-flex justify-content-center">
                1
            </div>
            <div
                class="card-footer text-success fw-bold d-flex justify-content-center bg-light fs-4"
            >
                On Serving
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
                .get("/api/cashier/queuDisplay")
                .then((response) => {
                    this.queCashier = response.data;
                    // console.log(response);
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
    },
    mounted() {
        this.GetQueCashier();
        this.GetQueAssesor();

        
    },
};
</script>
