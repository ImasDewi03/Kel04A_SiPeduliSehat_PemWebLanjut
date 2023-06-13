

<?php $__env->startSection('title', 'Data Dokter'); ?>

<?php $__env->startSection('content'); ?>
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Dokter</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
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
						<div class="card">
							<div class="card-body">
							    <form method="post" action="/cari_dokter">
							        <?php echo csrf_field(); ?>
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Dokter..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_dokter" class="btn btn-success mb-3">Tambah</a>
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>No</th>
												<th>Nomor Dokter</th>
												<th>Nama</th>
												<th>Spesialis</th>
												<th>Diterima</th>
												<th>Telepon</th>
												<th>Alamat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
						<?php $i = ($dokter->currentPage()*10) - 9 ?>
						 <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>					<tr>
												<th scope="row"><?php echo e($i++); ?></th>
												<td><?php echo e($d->no_dokter); ?></td>
												<td><?php echo e($d->nama); ?></td>
												<td><?php echo e($d->spesialis); ?></td>
												<td><?php echo e($d->diterima); ?></td>
												<td><?php echo e($d->telepon); ?></td>
												<td><?php echo e($d->alamat); ?></td>
												<td>
						
                            <a href="/edit_dokter/<?php echo e($d->id); ?>"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" action="/hapus_dokter" class="d-inline">
                                <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($d->id); ?>">
                            <button type="submit" class="btn d-inline"><i class="far fa-trash-alt" onclick="return confirm('Yakin mau menghapus <?php echo e($d->nama); ?>?')"></i></button>
                            </form>
												</td>
											</tr>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
										</tbody>
									</table>
								</div><!-- bd -->
								<div class="mt-3"></div>
					<?php echo e($dokter->links()); ?>

							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/data_dokter.blade.php ENDPATH**/ ?>