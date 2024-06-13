<template>
    <div class="container container-xl h-100">
        <div class="display-1 mb-4">Cashier</div>
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
                    <div class="card buttons" @click="caterQueNumber()" role="button">
                        <div class="display-5">Start</div>
                    </div>
                    <div class="card buttons mb-2" @click="endedQueNum()" role="button">
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
                        <div class="display-1">{{ currentServing }}</div>
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
                        <tr v-for="items in cashierPending" :key="items.id">
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
            cashierPending: [],
            currentServing: 0,
        };
    },
    methods: {
        caterQueNumber() {

            axios
                .get("/cashier/serve/queueNum/"+ window.user.id)
                .then((response) => {
                    console.log(response);
                    this.currentServing = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        endedQueNum(){
            let formData = new FormData();
                formData.append('_method', 'PUT');
            axios.post('/cashier/update/serve/end/' + this.currentServing, formData).then((response) =>{
                this.currentServing = 0;
                this.caterFinishQueNumber();
            }).catch((error) =>{    
                console.log(error);
            });
        },
        caterFinishQueNumber() {
            axios
                .get("/cashier/get/serve/queueNum")
                .then((response) => {
                    this.cashierPending = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });

                setTimeout(this.caterFinishQueNumber, 6000);
        },
    },
    mounted() {
        this.caterFinishQueNumber();
    },
};
</script>
