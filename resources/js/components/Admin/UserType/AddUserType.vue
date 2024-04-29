<template>
    <div>
    <div class="modal fade" id="add-usertype-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Usertype</h5>
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
                            aria-required="true"
                            v-model="usertype.name"
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
                    <button type="submit" class="btn btn-primary" @click="submituserType()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return{
            usertype:{
                'name': '',
            }
        }
    },
    methods:{
        submituserType(){
            axios.post("/api/usertype/create", this.usertype).then((response) =>{
                this.usertype.name = '';
                $("#add-usertype-modal").modal("hide");
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Job has been added!",
                    showConfirmButton: false,
                    timer: 1300,
                });
                setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                this.$emit('displayUserType');
            }).catch((error) =>{
                console.log(error);
            });
        }
    },  
};
</script>

<style scoped>
@import "../../../../css/admin/user/userAddModal.css";
</style>
