<template>
    <div class="container-fluid">
        <div class="main-profile">
            <div class="container-profile">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img
                                ref="uploadInput"
                                src="../../../../../public/images/profile-logo.png"
                                class="img-fluid"
                                alt="photo-logo"
                            />
                        </div>
                        <div class="card-link">
                            <!-- <button class="btn btn-success" @click="openFileDialog">
                                Upload Photo
                            </button>
                            <button class="btn btn-danger">Delete Photo</button> -->
                            <p class="fs-4 text-center fw-medium mb-0">Admin Name</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-edit-credentials">
                <div class="row-profile">
                    <div class="card-edit" style="margin-right: 5px">
                        <div class="card-title-edit">
                            <h3>Edit Profile</h3>
                        </div>
                        <div class="input-name-email">
                            <div class="input">
                                <label>Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="input">
                                <label>Email</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="input">
                            <label>Role</label>
                            <input type="text" class="form-control" disabled />
                        </div>
                        <div class="input">
                            <label>Profile</label>
                            <input type="file" class="form-control form-control-sm" />
                        </div>

                        <div class="row-btns mt-3">
                            <button class="btn btn-primary me-1">Edit</button>
                            <button class="btn btn-success">Done</button>
                        </div>
                    </div>

                    <div class="card-delete">
                        <div class="card-title-delete">
                            <h3>Delete your account</h3>
                        </div>
                        <div class="card-subtitle">
                            <p>
                                Permanently remove your Personal Account and all
                                of its associated content from this application.
                                This action cannot be undone, so please proceed
                                with caution. Once initiated, all data tied to
                                your account, including personal information and
                                interactions will be irretrievably deleted from
                                our system. We advise thorough consideration
                                before proceeding with this irreversible action.
                            </p>
                        </div>
                        <div class="row-btns mt-5">
                            <button class="btn btn-danger">
                                Delete your account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-edit-password">
            <div class="card-titles-edit">
                <h3>Change Password</h3>
            </div>
            <div class="input-name-email">
                <div class="input">
                    <label>Current Password</label>
                    <input type="passsword" class="form-control" />
                </div>
                <div class="input">
                    <label>New Password</label>
                    <input type="password" class="form-control" />
                </div>
            </div>
            <div class="input">
                <label>Confirm Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    class="form-control"
                />
            </div>
            <div class="row-btns mt-5">
                <button class="btn btn-primary">
                    Change Password
                </button>
            </div>
        </div>
    </div>
</template>

<style scope>
@import "../../../../css/admin/Admin Profile/profile.css";
</style>

<script>
export default {
    data(){
        return{
            'avatar_img': '',
        }
    },
    methods:{
    
        getImage(){
            return "image/profile" + this.avatar_img;
        }
    },
    mounted() {
        console.log("Component Loaded");
    },
};
</script>
