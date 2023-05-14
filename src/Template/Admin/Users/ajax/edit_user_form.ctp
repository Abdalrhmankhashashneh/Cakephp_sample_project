     <!-- Vertical Layout -->
     <div class="modal-header">
        <h4 class="modal-title" id="largeModalLabel">Add new user</h4>
    </div>
    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">

                                <label for="first_name">first name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" value="<?= $user['first_name']?>" id="first_name" name="first_name" class="form-control" placeholder="Enter user first name">
                                    </div>
                                </div>
                                <label for="last_name">last name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" value="<?= $user['last_name']?>" id="last_name" name="last_name" class="form-control" placeholder="Enter user last name">
                                    </div>
                                </div>
                                <label for="email">email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" value="<?= $user['email']?>" id="email" name="email" class="form-control" placeholder="Enter user email">
                                    </div>
                                </div>
                                <label for="username">username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" value="<?= $user['username']?>" id="username" name="username" class="form-control" placeholder="Enter user username">
                                    </div>
                                </div>
                                <label for="phone">phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" value="<?= $user['phone']?>" id="phone" name="phone" class="form-control" placeholder="Enter user last name">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" value="<?= $user['password']?>" id="password" name="password" class="form-control" placeholder="Enter user password">
                                    </div>
                                </div>
                                <input type="hidden" value="<?= $user['role']?>" id="role" name="role" class="form-control" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" onclick="edit_users(<?= $user['id']?>)">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>

