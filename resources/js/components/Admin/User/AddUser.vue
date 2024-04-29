<template>
    <div class="modal fade" id="add-user-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            aria-required="true"
                            v-model="user.name"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="email@gmail.com"
                            aria-required="true"
                            v-model="user.email"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select
                            class="form-control"
                            id="usertype"
                            v-model="selectedClass"
                        >
                            <option
                                v-for="item in usertype"
                                :key="item.id"
                                :value="item"
                            >
                                {{ item.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <select
                            v-model="selectedDesig"
                            class="form-control"
                            id="designation"
                            required
                        >
                            <option
                                v-for="desig in designation"
                                :key="desig.id"
                                :value="desig"
                            >
                                {{ desig.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Generated Password"
                            v-model="password"
                            disabled
                        />
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="submit"
                        class="btn btn-primary"
                        @click="submitUser"
                    >
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";
export default {
    data() {
        return {
            user: {
                name: "",
                email: "",
            },
            usertype: [],
            designation: [],
            selectedClass: "",
            selectedDesig: "",
            password: "",
        };
    },
    methods: {
        submitUser() {
            let formData = new FormData();
            formData.append("name", this.user.name);
            formData.append("email", this.user.email);
            formData.append("usertype_id", this.selectedClass?.id);
            formData.append("designation_id", this.selectedDesig?.id);
            formData.append("password", this.password);

            axios
                .post("/api/user/create", formData)
                .then((response) => {
                    // console.log(response.data);
                    this.user.name = "";
                    this.user.email = "";
                    this.selectedClass = "";
                    this.selectedDesig = "";
                    this.password = "";
                    $("#add-user-modal").modal("hide");
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "User has been added!",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    this.$emit('displayUsers'); //$emit for the parent
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        displayUserType() {
            axios
                .get("/api/usertype")
                .then((response) => {
                    this.usertype = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        generatePassword(usertype) {
            switch (usertype?.name) {
                case "Cashier":
                    return "cashier123!!";
                case "Assesor":
                    return "assesor123!!";
                case "Guard":
                    return "guard123!!";
                case "Queue Display":
                    return "queuedisplay123!!";
                case "Admin":
                    return "admin123!!";
                default:
                    return "";
            }
        },
        setPasswordBasedOnUserType() {
            this.password = this.generatePassword(this.selectedClass);
        },
    },
    watch: {
        selectedClass: function (value) {
            axios
                .get("/api/designation?usertype_id=" + this.selectedClass?.id)
                .then((response) => {
                    this.designation = response.data.data;
                    this.setPasswordBasedOnUserType();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.displayUserType();
    },
};
</script>

<style scoped>
@import "../../../../css/admin/user/userAddModal.css";
</style>
