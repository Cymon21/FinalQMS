<template>
    <div class="container-fluid">
        <div class="main-profile">
            <div class="container-profile">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img
                                src="../../../../../public/images/profile-logo.png"
                                class="img-fluid"
                                alt="photo-logo"
                            />
                        </div>
                        <div class="card-link">
                            <button class="btn btn-success">
                                Upload Photo
                            </button>
                            <!-- <button class="btn btn-info">Upload Photo</button> -->
                            <button class="btn btn-danger">Delete Photo</button>
                        </div>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card-body">
                        <div class="user-details-card">
                            <div class="card-title">
                                <h3>Personal Details</h3>
                            </div>
                            <div class="user-detail">
                                <strong
                                    >Name: <span>Sample D. Name</span></strong
                                >
                            </div>
                            <div class="user-detail">
                                <strong
                                    >Email:
                                    <span>sample@gmail.com</span></strong
                                >
                            </div>
                            <div class="user-detail">
                                <strong
                                    >Job Position: <span>Cashier</span></strong
                                >
                            </div>
                            <div class="user-detail">
                                <strong
                                    >Designation:
                                    <span>Window 1 Cashier</span></strong
                                >
                            </div>
                            <div class="user-detail">
                                <strong>Role: <span>User</span></strong>
                            </div>
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

                        <div class="row-btns mt-5">
                            <button class="btn btn-primary me-1">Edit</button>
                            <button class="btn btn-secondary me-1">
                                Cancel
                            </button>
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
        </div>
    </div>
</template>

<style scope>
@import "../../../../css/admin/Admin Profile/profile.css";
</style>

<script>
export default {
    mounted() {
        console.log("Component Loaded");
    },
};
</script>
