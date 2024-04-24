<template>
    <div class="modal fade" id="verify-user-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Verify User</h5>
                    <button
                        type="button"
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
                            v-model="user.name"
                            disabled
                        />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            v-model="user.email"
                            disabled
                        />
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select
                            class="form-control"
                            id="usertype"
                            v-model="selectedUserType"
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
                            class="form-control"
                            id="designation"
                            v-model="selectedDesig"
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
                        type="button"
                        class="btn btn-success"
                        @click="verifyUser(user.id)"
                    >
                        Verify
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    //Need sya mag gamit ug (props) to fetch data from the parent
    props: ["selected_user"],
    data() {
        return {
            user: {
                id: "",
                name: "",
                email: "",
            },
            usertype: [],
            designation: [],
            selectedUserType: "",
            selectedDesig: "",
        };
    },
    methods: {
        async verifyUser(id) {
            this.user.usertype_id = this.selectedUserType?.id;
            this.user.designation_id = this.selectedDesig?.id;

            const pleaseWaitAlert = Swal.fire({
                title: "Please wait...",
                allowOutsideClick: false,
                onRender: () => {
                    Swal.showLoading();
                },
            });
            try {
                const response = await axios.put(
                    "/api/user/put/" + id,
                    this.user
                );
                pleaseWaitAlert.close();

                $("#verify-user-modal").modal("hide");

                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "User has been verified!",
                    showConfirmButton: false,
                    timer: 2000,
                });

                this.$emit("displayVerifiedUsers");
            } catch (error) {
                console.log("Verify Error", error);

                pleaseWaitAlert.close();

                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Error verifying user",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
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
    },
    watch: {
        selectedUserType: function (value) {
            axios
                .get(
                    "/api/designation?usertype_id=" + this.selectedUserType?.id
                )
                .then((response) => {
                    this.designation = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        selected_user: {
            handler(val) {
                this.user.id = val.id;
                this.user.name = val.name;
                this.user.email = val.email;
                this.selectedUserType = val.selectedUserType;
                this.selectedDesig = val.selectedDesig;
            },
            deep: true,
        },
    },
    mounted() {
        this.displayUserType();
    },
};
</script>
