<template>
    <div>
        <div class="container-fluid">
            <div class="admin-sub-title mb-3">
                <h3>Usertype</h3>
            </div>
            <div class="table-responsive-xl">
                <div class="table-header mb-1">
                    <button class="btn btn-primary btn-sm" @click="showModal">
                        <i class="las la-plus-circle"></i>
                        <span>Add</span>
                    </button>
                </div>

                <table class="table table-borderless table-responsive table-xl">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Created</th>
                            <th scope="col">Upated</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider table-info">
                        <tr v-for="userType in usertype" :key="userType.id">
                            <td>{{ userType.name }}</td>
                            <td>{{ userType.created_at_formated }}</td>
                            <td>{{ userType.updated_at_formated }}</td>
                            <td>
                                <div class="actions-btns">
                                    <button type="submit" class="btn btn-info">
                                        <div class="submit">
                                            <i class="las la-edit"></i>
                                            <span>Edit</span>
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

            <!-- <_____Manage Designation_____> -->

            <div class="admin-sub-title mb-3">
                <h3>Designation</h3>
            </div>
            <div class="table-responsive">
                <div class="table-header mb-1">
                    <button class="btn btn-primary btn-sm" @click="showModal">
                        <i class="las la-plus-circle"></i>
                        <span>Add</span>
                    </button>
                </div>

                <table class="table table-borderless table-responsive table-xl">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Created</th>
                            <th scope="col">Upated</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider table-info">
                        <tr v-for="designation in designation" :key="designation.id">
                            <td>{{ designation.name }}</td>
                            <td>{{ designation.created_at_formated }}</td>
                            <td>{{ designation.updated_at_formated }}</td>
                            <td>
                                <div class="actions-btns">
                                    <button
                                        type="submit"
                                        class="btn btn-info"
                                    >
                                        <div class="submit">
                                            <i class="las la-edit"></i>
                                            <span>Edit</span>
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
        </div>

        <!-- <add-user-modal></add-user-modal> -->
    </div>
</template>

<style scoped>
@import "../../../../css/admin/UserManagement/index.css";
</style>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            usertype: [],
            designation: [],
        };
    },
    methods: {
        displayUserType() {
            axios.get("api/userType/display").then((response) =>{
                this.usertype = response.data;
            }).catch((error) =>{
                console.log(error);
            });
        },
        displayDesignation() {
            axios.get("api/designation/display").then((response) =>{
                this.designation = response.data;
            }).catch((error) =>{
                console.log(error);
            });
        },
    },
    mounted() {
        this.displayUserType();
        this.displayDesignation()
    },
};
</script>
