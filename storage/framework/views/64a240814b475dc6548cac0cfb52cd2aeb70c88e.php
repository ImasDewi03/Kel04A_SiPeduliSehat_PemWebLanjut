

<?php $__env->startSection('title', 'Tambah Jadwal'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Tempat Tidur</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
					    
					    <?php if($errors->any()): ?>
					        <div class="alert alert-danger my-3">
					            <ul>
					                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <li><?php echo e($e); ?></li>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            </ul>
					        </div>
					    <?php endif; ?>
					    
					    <?php if(session('pasien')): ?>
					    <div class="alert alert-danger my-3">
					        <?php echo e(session('pasien')); ?>

					    </div>
					    <?php endif; ?>
					    
                        <form method="post" action="/store_tmptidur">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nomor">Nomor Tempat Tidur</label>
                                <input type="number" name="nomor" id="nomor" required class="form-control" value="<?php echo e(old('nomor')); ?>">
                            </div>
                        <div class="mb-3">
                            <label for="ruang">Ruang</label>
                            <input type="text" name="ruang" required class="form-control" id="ruang" value="<?php echo e(old('ruang')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status"
                            class="form-control">
                                <option value="Terisi">Terisi</option>
                                <option value="Kosong">Kosong</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pasien">Pasien</label>
                            <input type="text" name="pasien" id="pasien" value="<?php echo e(old('pasien')); ?>" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/tambah_tmptidur.blade.php ENDPATH**/ ?>