<template>
    <div class="modal fade" id="edit-user-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
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
                            v-model="user.name"
                        />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="email@gmail.com"
                            v-model="user.email"
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
                        type="submit"
                        class="btn btn-success"
                        @click="updateUser(user.id)"
                    >
                        Done
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    props: ["edit_user"],
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
        async updateUser(id) {
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
                    "/user/edit/put/" + id,
                    this.user
                );
                pleaseWaitAlert.close();
                $("#edit-user-modal").modal("hide");
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "User has been updated!",
                    showConfirmButton: false,
                    timer: 2000,
                });
                
                this.$emit("updatedUsers");
            } catch (error) {
                console.log(error);
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
                .get("/usertype")
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
                    "/designation?usertype_id=" + this.selectedUserType?.id
                )
                .then((response) => {
                    this.designation = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        edit_user: {
            handler(val) {
                // console.log(val);
                this.user.id = val.id;
                this.user.name = val.name;
                this.user.email = val.email;
                this.selectedUserType = val.user_type;
                this.selectedDesig = val.designation;
            },
            deep: true,
        },
    },
    mounted() {
        this.displayUserType();
    },
};
</script>
