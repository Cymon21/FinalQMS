<template>
    <div class="content-wrapper-1">
        <div class="button-wrapper">
            <div
                class="card card btn btn-outline-dark"
                v-for="item in user_type"
                :key="item.id"
                @click="selectUser(item.id)"
                :style="{
                    backgroundColor:
                        item.id === alreadyClicked ? '#00406d' : '#005ead10',
                }"
            >
            <h1 :style="{  color: item.id === alreadyClicked ? 'white' : 'black', }">
                {{ item.name }}</h1>
            </div>
        </div>

        <div class="view-wrapper">
            <div class="view-queue card">
                <div class="view-queue-number display-1">{{ current_number }}</div>
            </div>
            <div class="view-button">
                <button class="btn" @click="submitQueueData()">
                    <!-- <i class="fa-solid fa-print fa-2xl"> -->
                        <span class="fs-1 fw-semibold mb-0 text-white">Done</span>
                    <!-- </i> -->
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Swal from 'sweetalert2';
export default {
    data() {
        return {
            selectedUserID: "",
            user_type: [],
            alreadyClicked: null,
            current_number: 0,
        };
    },
    methods: {
        getAllUsers() {
            axios
                .get("/guard/get/usertype")
                .then((response) => {
                    this.user_type = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        selectUser(user_id) {
            this.selectedUserID = user_id;
            axios
                .get("/guard/generate/number/" + user_id)
                .then((response) => {
                    console.log(response);
                    this.alreadyClicked = user_id;
                    this.current_number = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        submitQueueData() {
            axios
                .post("/guard/add/number/" + this.selectedUserID)
                .then((response) => {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Your Queue has been successfully added!",
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(() => {
                        window.location.reload();
                    }, 800);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.getAllUsers();
    },
};
</script>

<style>
@import "/resources/css/guard/guard.css";
</style>
