

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">List Users</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">List Users</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <?php echo Toastr::message(); ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Users List</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="add-time-table.html" class="btn btn-primary">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table
                                class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>User ID</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Date Join</th>
                                        <th>Role Name</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="user_id"><?php echo e($list->user_id); ?></td>
                                        <td hidden class="avatar"><?php echo e($list->avatar); ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-circle"src="/images/<?php echo e($list->avatar); ?>"alt="<?php echo e($list->name); ?>">
                                                </a>
                                            </h2>
                                        </td>
                                        <td><?php echo e($list->name); ?></td>
                                        <td><?php echo e($list->email); ?></td>
                                        <td><?php echo e($list->phone_number); ?></td>
                                        <td><?php echo e($list->join_date); ?></td>
                                        <td><?php echo e($list->role_name); ?></td>
                                        <td>
                                            <div class="edit-delete-btn">
                                                <?php if($list->status === 'Active'): ?>
                                                <a class="text-success"><?php echo e($list->status); ?></a>
                                                <?php elseif($list->status === 'Inactive'): ?>
                                                <a class="text-warning"><?php echo e($list->status); ?></a>
                                                <?php elseif($list->status === 'Disable'): ?>
                                                <a class="text-danger" ><?php echo e($list->status); ?></a>
                                                <?php else: ?> 
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="<?php echo e(url('view/user/edit/'.$list->user_id)); ?>"class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <?php if(Session::get('role_name') === 'Super Admin'): ?>
                                                <a class="btn btn-sm bg-danger-light user_delete" data-bs-toggle="modal" data-bs-target="#deleteUser">
                                                    <i class="feather-trash-2 me-1"></i>
                                                </a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade contentmodal" id="deleteUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                    class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('user/delete')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="delete-wrap text-center">
                        <div class="del-icon">
                            <i class="feather-x-circle"></i>
                        </div>
                        <input type="hidden" name="user_id" class="e_user_id" value="">
                        <input type="hidden" name="avatar" class="e_avatar" value="">
                        <h2>Sure you want to delete</h2>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-success me-2">Yes</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">No</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('script'); ?>


<script>
    $(document).on('click','.user_delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_user_id').val(_this.find('.user_id').text());
        $('.e_avatar').val(_this.find('.avatar').text());
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Desktop\school_sm_laravel9\resources\views/usermanagement/list_users.blade.php ENDPATH**/ ?>