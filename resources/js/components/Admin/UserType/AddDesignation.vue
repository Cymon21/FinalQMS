<template>
    <div class="modal fade" id="add-designation-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Designation</h5>
                    <button
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Designation Belongs to</label>
                        <select v-model="designation.usertype_id" class="form-control" id="usertype">
                            <option selected disabled>Choose</option>
                            <option v-for="user in usertype" :key="user.id" :value="user.id">{{ user.name }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input
                            type="text"
                            class="form-control"
                            aria-required="true"
                            v-model="designation.name"
                            required
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
                    <button type="submit" class="btn btn-primary" @click="submitDesigData()">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props:["getAllUsertype"],
    data(){
        return{
           designation:{
            name : '',
            usertype_id: '',
           },
           usertype:[],
        }
    },
    methods:{
        submitDesigData(){
            axios.post('/designation/create', this.designation).then((response)=>{
                this.designation.name = '',
                this.designation.usertype_id = '',
                $('#add-designation-modal').modal('hide');
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Designation has been successfully added!",
                    showConfirmButton: false,
                    timer: 1500,
                });
                this.$emit('displayDesignation');
            }).catch((error) =>{
                console.log(error);
            });
        },
        displayUserType(){
            axios.get("/usertype/add/display").then((response) =>{
                this.usertype = response.data;
            }).catch((error) =>{
                console.log(error);
            }); 
        }
    },
    watch:{
        getAllUsertype: {
            handler(val){
                console.log(val);
            },
        }
    },
    mounted() {
        this.displayUserType();
    },
};
</script>

<!-- <style scoped>
@import "../../../../css/admin/user/userAddModal.css";
</style> -->
