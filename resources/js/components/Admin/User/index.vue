<template>
    <div style="overflow-y: scroll">
        <div class="container-fluid">
            <div class="admin-sub-title mb-3">
                <h3>Manage User</h3>
            </div>
            <div class="table-responsive-xl">
                <div class="table-header mb-1">
                    <h5>List of users</h5>
                    <button class="btn btn-primary btn-sm" @click="showModal">
                        <i class="las la-plus-circle"></i>
                        <span>Add User</span>
                    </button>
                </div>

                <table class="table table-borderless table-responsive table-xl">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider table-info">
                        <tr v-for="user in listofUsers" :key="user.id">
                            <td scope="row">{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                <div :class="getStatusClass(user.status)">
                                    <p>{{ user.status }}</p>
                                </div>
                            </td>
                            <td>{{ user?.user_type?.name }}</td>
                            <td>{{ user?.designation?.name }}</td>
                            <td>
                                <div class="actions-btns">
                                    <button
                                        v-if="!user.verified"
                                        type="submit"
                                        class="btn btn-warning"
                                        @click="verifyUser(user)"
                                    >
                                        <div class="submit">
                                            <i class="las la-check-circle"></i>
                                            <span>Verify</span>
                                        </div>
                                    </button>
                                    <button
                                        v-if="!user.unverified"
                                        type="submit"
                                        class="btn btn-info"
                                        @click="editUser(user)"
                                    >
                                        <div>
                                            <i class="las la-edit"></i>
                                            <span>Edit</span>
                                        </div>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                        @click="deleteUser(user.id)"
                                    >
                                        <div type="delete">
                                            <i class="las la-trash"></i>
                                            <span>Delete</span>
                                        </div>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Get the $emit func -->
        <add-user-modal @displayUsers="displayUsers"></add-user-modal>
        <!-- Call the (Props Name) -->
        <verify-user-modal :selected_user="selected_user" @displayVerifiedUsers="displayUsers"></verify-user-modal>
        <edit-user-modal :edit_user="edit_user" @updatedUsers="displayUsers"></edit-user-modal>
    </div>
</template>

<style scoped>
@import "../../../../css/admin/user/index.css";
</style>

<script>
import AddUserModal from "../User/AddUser.vue";
import VerifyUserModal from "../User/VerifyUser.vue";
import EditUserModal from "../User/EditUser.vue";
import axios from "axios";
export default {
    components: {
        AddUserModal,
        VerifyUserModal,
        EditUserModal,
    },
    data() {
        return {
            //assign props here  as object
            selected_user: {},
            edit_user:{},
            listofUsers: [],
        };
    },
    methods: {
        displayUsers() {
            axios
                .get("/api/user/display")
                .then((response) => {
                    // need ug (map) to specific to call a column from the db 
                    // eg("status"=>column name === (row of the specific column))
                    this.listofUsers = response.data.map((user) => ({
                        ...user,
                        verified: user.status === "Verified",
                        unverified: user.status === "Unverified",
                    }));
                })
                .catch((error) => {
                    console.log(error);
                });
        },
       

        showModal() {
            //To show the modal, need kuhaon first iyang id to call the child(modal) from the parent
            $("#add-user-modal").modal("show");
        },
        verifyUser(selected_user) {
            //to call the props as param
            this.selected_user = selected_user;
            $("#verify-user-modal").modal("show");
        },
        editUser(edit_user) {
            this.edit_user = edit_user;
            $("#edit-user-modal").modal("show");
        },
        getStatusClass(status) {
            return {
                "status-unverified": status === "Unverified",
                "status-verified": status === "Verified",
            };
        },
        deleteUser(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            })
                .then((data) => {
                    if (data.isConfirmed) {
                        axios
                        //always need ang id for calling the delete function ;)
                            .delete("/api/user/delete/" + id)
                            .then((response) => {
                                Swal.fire(
                                    "Remove!",
                                    "User has been remove.",
                                    "success"
                                );
                                this.displayUsers();
                            });
                    }
                })
                .catch((error) => {
                    Swal.fire({
                        icon: "error",
                        text: "Something went wrong!",
                    });
                    console.log(error);
                });
        },
    },
    mounted() {
        //first function be executed after loading the web page
        this.displayUsers();
    },
};
</script>
