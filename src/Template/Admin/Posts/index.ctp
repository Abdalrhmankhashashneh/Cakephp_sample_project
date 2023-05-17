 <!-- Basic Examples -->
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Users List
                        </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">

                                        <li>                            <button type="button" class="btn btn-default waves-effect" data-toggle="modal" data-target="#largeModal" onclick="add_users_form()">Add post</button>
</li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>

                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($posts as $post): ?>

                                        <tr>
                                            <td><?= $post->post_title ?></td>
                                            <td><?= $post->content ?></td>
                                            <td><?= $post->user ?></td>

                                            <td><?= $post->created_at ?></td>
                                            <td><?= $post->updated_at ?></td>
                                            <td><a class="btn btnbtn btn-success waves-effect" data-toggle="modal" data-target="#largeModal" onclick="edit_user_form(<?= $post->id ?>)"> Edit </a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="paginator">
    <ul class="pagination">
        <!-- Use the Paginator Helper to generate pagination links -->
        <?= $this->Paginator->prev('<< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
</div>
<?= $this->Html->script('../Admin/model_js/users.js') ?>
