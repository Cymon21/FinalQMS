<template>
    <div>
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

                <table class="table table-xl">
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
                                <button
                                    disabled="disabled"
                                    class="btn btn-danger"
                                >
                                    {{ user.status }}
                                </button>
                            </td>
                            <td>{{ user.userType }}</td>
                            <td>{{ user.designation }}</td>
                            <td>
                                <div class="actions-btns">
                                    <button type="submit" class="btn btn-info" @click="verifyUser">
                                        <div class="submit">
                                            <i class="las la-check-circle"></i>
                                            <span>Verify</span>
                                        </div>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
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
            <!-- <div class="sample">
                <table class="table table-xl">
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
                    </table>
            </div> -->
        </div>

        <add-user-modal></add-user-modal>
        <verify-user-modal></verify-user-modal>
    </div>
</template>

<style scoped>
@import "../../../../css/admin/user/index.css";
</style>

<script>
import AddUserModal from "../User/AddUser.vue";
import VerifyUserModal from "../User/VerifyUser.vue"
import axios from "axios";
export default {
    components: {
        AddUserModal,
        VerifyUserModal,
    },
    data() {
        return {
            listofUsers: [],
        };
    },
    methods: {
        displayUsers() {
            axios
                .get("api/user/display")
                .then((response) => {
                    this.listofUsers = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        showModal() {
            $("#add-user-modal").modal("show");
        },
        verifyUser(){
            $("#verify-user-modal").modal("show");
        }
    },
    mounted() {
        this.displayUsers();
    },
};
</script>
