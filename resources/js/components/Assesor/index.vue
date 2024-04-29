<template>
    <div class="container-fluid">
        <aside class="content1">
            <div class="childcontent1">
                <div class="btn card Cashier1">Cashier1</div>
                <div class="btn card Cashier2">Cashier2</div>
                <div class="btn card FinanceAssesor1">FinanceAssesor1</div>
                <div class="btn card FinanceAssesor2">FinanceAssesor2</div>
                <div class="btn card Finish" @click="finishCaterQue()">
                    Finish
                </div>
                <div class="btn card Start" @click="startQue()">Start</div>
                
            </div>
        </aside>
        <div class="content2">
            <div class="card">
                <div class="childcontent2">
                    <div class="navchildcontent2">
                        <h2>Assesor</h2>

                        <div class="btn-group dropdown">
                            <button
                                type="button"
                                class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                Status
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Onbreak</a>
                                <a class="dropdown-item" href="#">On Serve</a>
                            </div>
                        </div>
                    </div>

                    <div class="contentchildcontent2">
                        <div class="card content2child2">
                            <h3>Now Serving</h3>
                            <h1 style="cursor: default;">{{ assesorQueCater }}</h1>
                        </div>

                        <div class="footerchildcontent2">
                            <h4>Status:</h4>
                            <h2>On Serving</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="content3">
            <div class="childcontent3">
                <div class="caption">
                    <i class='bx bx-sync' @click="reloadData()"></i>
                    <h3>Pending Queue</h3>
                </div>
                <div class="tablecontent">
                    <table class="table caption-top">
                        <tbody>
                            <tr v-for="items in assesorPending" :key="items.id">
                                <td style="font-size: 18px; font-weight: 600">
                                    {{ items.queue_name_number }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
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
