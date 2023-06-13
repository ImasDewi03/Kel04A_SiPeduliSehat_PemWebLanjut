

<?php $__env->startSection('title', 'Data Tempat Tidur'); ?>

<?php $__env->startSection('content'); ?>
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Tempat Tidur</h4>
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
 <form method="post" action="/cari_tmptidur">
     <?php echo csrf_field(); ?>
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Ruang..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_tmptidur" class="btn btn-success mb-3">Tambah</a>
								<div class="table-responsive">
								    <?php if(session('sukses')): ?>
								    <div class="alert alert-success my-4">
								        <?php echo e(session('sukses')); ?>

								    </div>
								    <?php endif; ?>
								    
								    <?php if(session('hapus')): ?>
								    <div class="alert alert-danger my-4">
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
												<th>No Tempat Tidur</th>
												<th>Ruang</th>
												<th>Status</th>
												<th>Diisi Oleh</th>
												<th>Terakhir Diupdate</th>
																	<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
						<?php
						//rumus: ($tmptidur->currentPage()*data per halaman) - (data per halaman - 1)
						$i=($tmptidur->currentPage()*10) - 9 
						?>
						<?php $__currentLoopData = $tmptidur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>					<tr>
												<th scope="row"><?php echo e($i++); ?></th>
												<td><?php echo e($t->nomor); ?></td>
												<td><?php echo e($t->ruang); ?></td>
												<td><?php echo e($t->status); ?></td>
												<td>
												    <?php
								if($t->pasien){
								echo $t->pasien;
								}
								else{
								echo "none";
								} ?>
												</td>
												<td><?php echo e($t->updated_at); ?></td>

        			  <td>

                            <a href="/edit_tmptidur/<?php echo e($t->id); ?>"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form class="d-inline" method="post" action="/hapus_tmptidur">
                                <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($t->id); ?>" name="id">
                            <button class="btn" onclick="return confirm('Yakin mau menghapus?')"><i class="far fa-trash-alt"></i></button>
                            </form>
												</td>
											</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					
										</tbody>
									</table>
								</div><!-- bd -->
							<?php echo e($tmptidur->links()); ?>

							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/tempat_tidur.blade.php ENDPATH**/ ?>