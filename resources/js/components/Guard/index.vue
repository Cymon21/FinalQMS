<template>
    <div class="container">
        <div class="content1">
            <div class="childcontent1">
                <div
                    class="card card1"
                    v-for="item in user_type"
                    :key="item.id"
                    @click="selectUser(item.id)"
                    :style="{
                        backgroundColor:
                            item.id === alreadyClicked
                                ? '#00406d'
                                : '#005ead10',
                    }"
                >
                    <h1
                        :style="{
                            color:
                                item.id === alreadyClicked ? 'white' : 'black',
                        }"
                    >
                        {{ item.name }}
                    </h1>
                </div>
            </div>
        </div>
        <!-- <____content2___________> -->
        <div class="content2">
            <div class="container">
                <div class="childcontent2">
                    <div class="quenumber">
                        <h2>Current Queue Number</h2>
                        <h1>{{ current_number }}</h1>
                    </div>
                </div>
            </div>
            <div class="childbutton">
                <button type="submit" @click="submitQueueData()">Print</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
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
                .get("/api/guard/get/usertype")
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
                .get("/api/guard/generate/number/" + user_id)
                .then((response) => {
                    this.alreadyClicked = user_id;
                    this.current_number = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        submitQueueData() {
            axios
                .post("/api/guard/add/number/" + this.selectedUserID)
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

<style scoped>
@import "/resources/css/guard/guard.css";
</style>
