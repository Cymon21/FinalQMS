<template>
    <div class="content-wrapper-2">
        <div class="view-button-wrapper-1">
            <div class="row">
                <div class="col-sm-6 col-lg-3 col-md-2"><div class="card diplay-5">Cashier</div></div>
                <div class="col-sm-6 col-lg-3 col-md-2"><div class="card diplay-5">Cashier</div></div>
                <div class="col-sm-6 col-lg-3 col-md-6"><div class="card diplay-5">Cashier</div></div>
                <!-- <div class="card diplay-5">Assesor</div>
                <div class="card diplay-5" @click="finishCaterQue()">Finish</div>
                <div class="card diplay-5" @click="startQue()">Start</div> -->
            </div>
        </div>
        <div class="view-wrapper">
            <div class="view-que-wrapper">
                <div class="que-wrapper">
                    <div class="top-view">
                        <div class="display-5">Cashier</div>
                        <div class="dropend">
                            <button
                                class="btn btn-secondary btn-light fs-10 dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Status
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >On Serve</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >On Break</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="que-content">
                        <div class="display-4">Now Serving</div>
                        <div class="display-1">1</div>
                    </div>
                    <div class="bottom-view footer">
                        <div class="display-5 bottom-display">Status:</div>
                        <div
                            class="display-5 text-success fw-bold bottom-display"
                        >
                            Onserve
                        </div>
                    </div>
                </div>
            </div>
            <div class="pending-que-wrapper">
                <div class="pending-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="display-3">
                                    Pending QUE's
                                    <i class='reload bx bx-sync' @click="reloadData()"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="items in assesorPending" :key="items.id">
                                <td>
                                    {{ items.queue_name_number }}
                                </td>
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
                .get("/api/cashier/serve/queueNum")
                .then((response) => {
                    this.currentServing = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        caterFinishQueNumber() {
            axios
                .get("/api/cashier/get/serve/queueNum")
                .then((response) => {
                    this.currentServing = 0;
                    this.cashierPending = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        reloadData() {
            setTimeout(() => {
                // window.location.reload();
                this.caterFinishQueNumber();
            }, 0);
        },
    },
    mounted() {
        this.caterFinishQueNumber();
    },
};
</script>