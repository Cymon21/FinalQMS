<template>
   <div>
       <div class="container-fluid">
           <div class="admin-sub-title mb-3">
               <h3>Manage userType</h3>
           </div>
           <div class="table-responsive-xl">
               <div class="table-header mb-1">
                   
                   <button class="btn btn-primary btn-sm" @click="showModal">
                       <i class="las la-plus-circle"></i>
                       <span>Add User</span>
                   </button>
               </div>

               <table class="table table-xl">
                   <thead>
                       <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Name</th>
                           <th scope="col">Created</th>
                           <th scope="col">Upated</th>
                           <th scope="col">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="table-group-divider table-info">
                     <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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

                       <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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
                       </tr> <tr >
                        <td>1</td>
                        <td>Cymon Madronna</td>
                        <td>1:00pm</td>
                        <td>1:05pm</td>
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

           <!-- <_____Manage Designation_____> -->

            <div class="admin-sub-title mb-3">
                <h3>Manage userType</h3>
            </div>
            <div class="table-responsive-xl">
                <div class="table-header mb-1">
                    
                    <button class="btn btn-primary btn-sm" @click="showModal">
                        <i class="las la-plus-circle"></i>
                        <span>Add User</span>
                    </button>
                </div>
 
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Created</th>
                            <th scope="col">Upated</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider table-info">
                      <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
 
                        <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
                        </tr> <tr >
                         <td>1</td>
                         <td>Cymon Madronna</td>
                         <td>1:00pm</td>
                         <td>1:05pm</td>
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
@import "../../../../css/admin/UserManagement/index.css";
</style>


