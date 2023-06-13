

<?php $__env->startSection('title', 'Tambah Obat Dan Perlengkapan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Tambah Obat Dan Perlengkapan</h4>
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
                        <form method="post" action="/store_obat">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" required class="form-control" value="<?php echo e(old('nama')); ?>">
                            </div>
                        <div class="mb-3">
                            <label for="jenis">Jenis</label>
                            <select id="jenis" name="jenis" class="form-control">
                                <optgroup label="Obat">
                                    <option  value="Paracetamol">Paracetamol</option>
                                    <option value="Antibiotik">Antibiotik</option>
                                    <option value="Antiseptik">Antiseptik</option>
                                </optgroup>
                                <optgroup label="Perlengkapan">
                                <option value="APD">Alat Pelindung Diri (APD)</option>
                                <option value="Alat Periksa">Alat Periksa</option>
                                </optgroup>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" required class="form-control" id="stok" value="<?php echo e(old('stok')); ?>">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        </form>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/tambah_obat.blade.php ENDPATH**/ ?>