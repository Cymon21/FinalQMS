<template>
    <div class="container-fluid">
        <div class="table-responsive-xl">
            <div class="table-header mb-1">
                <h3>Jobs</h3>
                <button class="btn btn-primary" @click="showTypeModal">
                    <i class="las la-plus-circle"></i>
                    <span>Add New Job</span>
                </button>
            </div>

            <table class="table table-borderless table-responsive table-xl">
                <thead>
                    <tr>
                        <th scope="col">Job Name</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Updated</th>
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
                                    @click="deleteUserType(userType.id)"
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
        <div class="table-responsive">
            <div class="table-header mb-1">
                <h3>Designation</h3>
                <button class="btn btn-primary" @click="showDesignationModal">
                    <i class="las la-plus-circle"></i>
                    <span>Add New Designation</span>
                </button>
            </div>

            <table class="table table-borderless table-responsive table-xl">
                <thead>
                    <tr>
                        <th scope="col">Assigned Users</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Updated</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-info">
                    <tr v-for="item in designation" :key="item.id">
                        <td>{{ item.user_type?.name }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.created_at_formated }}</td>
                        <td>{{ item.updated_at_formated }}</td>
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
                                    @click="deleteDesignation(item.id)"
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
        <!-- dapat align sya sa imong components na gi add for example (AddUserModal) this could be a <add-user-modal>-->
        <add-user-type @displayUserType="displayUserType"></add-user-type>
        <add-designation
            @displayDesignation="displayDesignation"
        ></add-designation>
    </div>
</template>

<style scoped>
@import "../../../../css/admin/UserManagement/index.css";
</style>

<script>
import AddUserType from "../UserType/AddUserType.vue";
import AddDesignation from "./AddDesignation.vue";
import axios from "axios";
export default {
    components: {
        AddUserType,
        AddDesignation,
    },
    data() {
        return {
            usertype: [],
            designation: [],
        };
    },
    methods: {
        //Fetch Data Section
        displayUserType() {
            axios
                .get("/usertype/display")
                .then((response) => {
                    console.log(response);
                    this.usertype = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        displayDesignation() {
            axios
                .get("/designation/display")
                .then((response) => {
                    console.log(response);
                    this.designation = response.data;
                })
            .catch((error) => {
                    console.log(error);
                });
        },

        //Modals
        showTypeModal() {
            $("#add-usertype-modal").modal("show");
        },
        showDesignationModal() {
            $("#add-designation-modal").modal("show");
        },

        //Delete Data Section
        deleteUserType(id) {
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
                            .delete("/userType/type/delete/" + id)
                            .then((response) => {
                                Swal.fire(
                                    "Remove!",
                                    "Usertype has been remove.",
                                    "success"
                                );
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
                                this.displayUserType();
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

        deleteDesignation(id) {
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
                            .delete("/designation/assign/delete/" + id)
                            .then((response) => {
                                Swal.fire(
                                    "Remove!",
                                    "Designation has been remove.",
                                    "success"
                                );
                                this.displayDesignation();
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
        this.displayUserType();
        this.displayDesignation();
    },
};
</script>
