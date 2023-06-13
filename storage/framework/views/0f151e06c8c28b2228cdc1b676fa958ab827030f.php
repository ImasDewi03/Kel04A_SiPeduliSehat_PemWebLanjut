

<?php $__env->startSection('title', 'Tambah Pegawai'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Pegawai</h4>
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
                        <form method="post" action="/store_pegawai">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="no_pegawai">Nomor Pegawai</label>
                                <input type="number" name="no_pegawai" id="no_pegawai" required class="form-control" value="<?php echo e(old('no_pegawai')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required id="nama" value="<?php echo e(old('nama')); ?>">
                            </div>
                        <div class="mb-3">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" required class="form-control" id="jabatan" value="<?php echo e(old('jabatan')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="diterima">Diterima</label>
                            <input type="date" name="diterima" required class="form-control" id="diterima" value="<?php echo e(old('spesialis')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon">Telepon</label>
                            <input type="tel" name="telepon" id="telepon" class="form-control" required value="<?php echo e(old('telepon')); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required><?php echo e(old('alamat')); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/tambah_pegawai.blade.php ENDPATH**/ ?>