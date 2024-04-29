<template>
    <div class="container">
        <div class="parent1">
            <div class="card" v-for="items in queCashier" :key="items.id">
                <div class="content1">
                    <h3 style="color: black">{{ items.designation.name }}</h3>
                </div>
                <div class="content2">
                    <h1>1</h1>
                    <h3>Currently serving</h3>
                </div>
            </div>
        </div>
        <div class="parent2">
            <div class="card" v-for="items in queAssesor" :key="items.id">
                <div class="content1">
                    <h3 style="color: black">{{ items.designation.name }}</h3>
                </div>
                <div class="content2">
                    <h1>4</h1>
                    <h3>Currently serving</h3>
                </div>
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
        GetQueAssesor(){
            axios.get("/api/assesor/queuDisplay").then((response) =>{
                this.queAssesor = response.data;
            }).catch((error)=>{
                console.log(error);
            });
        }
    },
    mounted() {
        this.GetQueCashier();
        this.GetQueAssesor();
    },
};
</script>
