<template>
    <div class="content-wrapper">
        <div class="view-button-wrapper">
            <div class="button-wrapper">
                <div class="card diplay-5">Cashier</div>
                <div class="card diplay-5">Assesor</div>
                <div class="card diplay-5" @click="finishCaterQue()">Finish</div>
                <div class="card diplay-5" @click="startQue()">Start</div>
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
                                <th scope="col" class="display-3" @click="reloadData()">
                                    Pending QUE's
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
        finishCaterQue() {
            axios
                .get("/api/assesor/end/queNum")
                .then((response) => {
                    this.assesorQueCater = 0;
                    this.assesorPending = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        reloadData() {
            setTimeout(() => {
                window.location.reload();
            }, 0);
        },
    },
    mounted() {
        this.finishCaterQue();
    },
};
</script>
