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
                            aria-required="true"
                        />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="email@gmail.com"
                            aria-required="true"
                        />
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" id="usertype">
                            <option value="">Cashier</option>
                            <option value="">Assessor</option>
                            <option value="">Guard</option>
                            <option value="">Queue Display</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <select class="form-control" id="designation">
                            <option value="">Cashier</option>
                            <option value="">Assessor</option>
                            <option value="">Guard</option>
                            <option value="">Queue Display</option>
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
                    <button type="submit" class="btn btn-success">Done</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  
};
</script>
