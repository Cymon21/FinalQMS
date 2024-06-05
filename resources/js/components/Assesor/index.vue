<template>
    <div class="container container-xl h-100">
        <div class="display-1 mb-4">Assesor</div>
        <div class="row">
            <div class="card button-wrapper-cashier">
                <div class="buttons-wrapper">
                    <div class="card buttons mt-2" role="button">
                        <div class="display-5">Cashier</div>
                    </div>
                    <div class="card buttons mt-2" role="button">
                        <div class="display-5">Finance</div>
                    </div>
                    <div class="card buttons" role="button">
                        <div class="display-5">Assesor</div>
                    </div>
                    <div class="card buttons" role="button" @click="startQue()">
                        <div class="display-5">Start</div>
                    </div>
                    <div class="card buttons mb-2" role="button" @click="endQue()">
                        <div class="display-5">Finish</div>
                    </div>
                </div>
            </div>
            <div class="card view-wrapper-cashier">
                <div class="card">
                    <div class="dropdown mb-2">
                        <div class="dropend">
                            <button
                                class="btn btn-secondary dropdown-toggle btn-light"
                                type="button"
                                id="dropdownMenuButton1"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Status
                            </button>
                            <ul
                                class="dropdown-menu"
                                aria-labelledby="dropdownMenuButton1"
                            >
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >On Break</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >On Serve</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="view-que">
                        <div class="display-1">{{ assesorQueCater }}</div>
                    </div>
                    <div class="card-footer mt-2">
                        <div class="display-5">Status:</div>
                        <div class="display-5 text-success fw-bold mx-2">
                            Serving
                        </div>
                    </div>
                </div>
            </div>
            <div class="card Pending-wrapper-cashier">
                <div class="display-5 mt-2 fs-2 fw-semibold">
                    On Queue's
                </div>
                <div class="OnQueue mt-2">
                <table class="table">
                    <tbody>
                        <tr v-for="items in assesorPending" :key="items.id">
                            <td><div class=" display-5 row">{{ items.queue_name_number }}</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
@import "/resources/css/cashier/cashier.css";
</style>
<script>
import axios from "axios";
export default {
    data() {
        return {
            assesorPending: [],
            assesorQueCater: 0,
        };
    },
    methods: {
        startQue() {
            axios
                .get("/api/assesor/get/queNum")
                .then((response) => {
                    this.assesorQueCater = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        endQue(){
            let formData = new FormData();
                formData.append('_method', 'PUT');
            axios.post('/api/assesor/update/serve/end/' + this.assesorQueCater, formData).then((response) =>{
                this.assesorQueCater = 0;
                this.finishCaterQue();
            }).catch((error) =>{
                console.log(error);
            });
        },
        finishCaterQue() {
            axios
                .get("/api/assesor/end/queNum")
                .then((response) => {
                    this.assesorPending = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
                setTimeout(this.finishCaterQue, 4000);
        },
    },
    mounted() {
        this.finishCaterQue();
    },
};
</script>
