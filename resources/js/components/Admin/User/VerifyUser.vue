<template>
    <div class="modal fade" id="verify-user-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Verify User</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" id="usertype">
                            <option selected>Choose</option>
                            <option value="guard">Guard</option>
                            <option value="cashier">Cashier</option>
                            <option value="assessor">Assessor</option>
                            <option value="queueDisplay">Queue Display</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <select class="form-control" id="designation">
                            <option selected>Choose</option>
                            <option value="w1">Window 1</option>
                            <option value="w2">Window 2</option>
                            <option value="w3">Window 3</option>
                            <option value="entrance">Entrance</option>
                            <option value="front">TV front</option>
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
                    <button type="button" class="btn btn-success">
                        Verify
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
};
</script>
