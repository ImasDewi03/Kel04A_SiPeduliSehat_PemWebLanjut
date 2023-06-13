

<?php $__env->startSection('title', 'Data Tindakan'); ?>

<?php $__env->startSection('content'); ?>
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Tindakan</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
                     <form method="post" action="/cari_tindakan">
                         <?php echo csrf_field(); ?>
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Pasien..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_tindakan" class="btn btn-success mb-3">Tambah</a>
								<div class="table-responsive">
								    
								    <?php if(session('sukses')): ?>
								    <div class="alert alert-success my-4">
								        <?php echo e(session('sukses')); ?>

								    </div>
								    <?php endif; ?>
								    
								    <?php if(session('hapus')): ?>
								    <div class="alert alert-warning my-4">
								        <?php echo e(session('hapus')); ?>

								    </div>
								    <?php endif; ?>
								    
								    <?php if(session('update')): ?>
								    <div class="alert alert-info my-4">
								        <?php echo e(session('update')); ?>

								    </div>
								    <?php endif; ?>
								    
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>No</th>
												<th>Pasien</th>
											
												<th>Jenis Tindakan</th>
												<th>Waktu</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
					<?php
					//rumus: ($tindakan->currentPage()*data per halamab) - (data per halaman - 1) 
					$i= ($tindakan->currentPage()*10) - 9
					?>					    
					<?php $__currentLoopData = $tindakan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>						<tr>
												<th scope="row"><?php echo e($i++); ?></th>
												<td><?php echo e($t->nama); ?></td>
											
												<td><?php echo e($t->nama_tindakan); ?></td>
												<td><?php echo e($t->created_at); ?></td>
												<td>
												   
                            <a href="/edit_tindakan/<?php echo e($t->id); ?>"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" class="d-inline" action="/hapus_tindakan">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($t->id); ?>">
                            <button class="btn" type="submit" onclick="return confirm('Yakin mau menghapus?')"><i class="far fa-trash-alt"></i></button>
							</form>					</td>
											</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					</tbody>
									</table>
								</div><!-- bd -->
							<?php echo e($tindakan->links()); ?>

							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/data_tindakan.blade.php ENDPATH**/ ?>