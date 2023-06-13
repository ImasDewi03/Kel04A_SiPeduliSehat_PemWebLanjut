

<?php $__env->startSection('title', 'Tambah Jadwal'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Jadwal</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
					    <?php if(session('empty')): ?>
					    <div class="alert alert-danger my-3">
					        <?php echo e(session('empty')); ?>

					    </div>
					    <?php endif; ?>
					    
					    <?php if($errors->any()): ?>
					        <div class="alert alert-danger my-3">
					            <ul>
					                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <li><?php echo e($e); ?></li>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            </ul>
					        </div>
					    <?php endif; ?>
                        <form method="post" action="/store_jadwal">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="no_dokter">Nomor Dokter</label>
                                <input type="number" name="no_dokter" id="no_dokter" required class="form-control" value="<?php echo e(old('no_dokter')); ?>">
                            </div>
                        <div class="mb-3">
                            <label for="jam">Jam (awal - akhir)</label>
                            <input type="text" name="jam" required class="form-control" id="jam" value="<?php echo e(old('jam')); ?>" placeholder="Contoh: 08.00 - 16.00">
                        </div>
                        <div class="mb-3">
                            <label for="hari">Hari (awal - akhir)</label>
                            <input type="text" name="hari" required class="form-control" id="hari" value="<?php echo e(old('hari')); ?>" placeholder="Contoh: Senin - Jumat">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/tambah_jadwal.blade.php ENDPATH**/ ?>