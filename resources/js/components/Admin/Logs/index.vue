<template>
    <div class="container-fluid">
        <div class="table-responsive-xl">
            <div class="table-header mb-1">
                <h5>List of users</h5>
            </div>
            <table class="table table-borderless table-responsive table-xl">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-info">
                    <tr v-for="users in user" :key="users.id">
                        <td scope="row">{{ users.name }}</td>
                        <td>{{ users.email }}</td>
                        <td>{{ users.status }}</td>
                        <td>{{ users.user_type?.name }}</td>
                        <td>{{ users.designation?.name }}</td>
                        <td>{{ users.created_formated_time }}</td>
                        <td>{{ users.updated_formated_time }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-xl">
            <div class="table-header mb-1">
                <h5>List of jobs</h5>
            </div>
            <table class="table table-borderless table-responsive table-xl">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Job Name</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-info">
                    <tr v-for="usertype in userType" :key="usertype.id">
                        <td scope="row">{{ usertype.id }}</td>
                        <td>{{ usertype.name }}</td>
                        <td>{{ usertype.created_formated_time }}</td>
                        <td>{{ usertype.updated_formated_time }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-xl">
            <div class="table-header mb-1">
                <h5>List of designations</h5>
            </div>
            <table class="table table-borderless table-responsive table-xl">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-info">
                    <tr v-for="designation in designation" :key="designation.id">
                        <td scope="row">{{ designation.id }}</td>
                        <td>{{ designation.name }}</td>
                        <td>{{ designation.created_formated_time }}</td>
                        <td>{{ designation.updated_formated_time }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<style>
@import "../../../../css/admin/Admin Logs/logs.css";
</style>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            user:[],
            userType:[],
            designation:[],
        }
    },
    methods:{
        displayUser(){
            axios.get('/api/user/displaylogs').then((response) =>{
                this.user = response.data;
            }).catch((error)=>{ 
                console.log(error);
            });
        },
        displayUserType(){
            axios.get('/api/userType/displaylogs').then((response)=>{
                this.userType = response.data;
            }).catch((error) =>{
                console.log(error);
            });
        },
        displayDesignation(){
            axios.get('/api/designation/displaylogs').then((response)=>{
                this.designation = response.data;
            }).catch((error) =>{
                console.log(error);
            });        
        }
    },
    mounted(){
        this. displayUser();
        this.displayUserType();
        this.displayDesignation();
    },
}
</script>
