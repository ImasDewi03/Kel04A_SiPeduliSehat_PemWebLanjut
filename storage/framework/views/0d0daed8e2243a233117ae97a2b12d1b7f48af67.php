

<?php $__env->startSection('title', 'Data Pasien'); ?>

<?php $__env->startSection('content'); ?>
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Pasien</h4>
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
							     <form method="post" action="/cari_pasien">
							         <?php echo csrf_field(); ?>
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Pasien..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_pasien" class="btn btn-success mb-3">Tambah</a>
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

		                  <th>Nama</th>
												<th>Tanggal Lahir</th>
												<th>Penyakit</th>
												<th>Tanggal Masuk</th>
												<th>Alamat</th>
												<th>Telepon</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
					<?php 
					//rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
					$i = ($pasien->currentPage()*10) - 9 ?>
					  <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>						<tr>
												<th scope="row"><?php echo e($i++); ?></th>
												<td><?php echo e($p->nama); ?></td>
												<td><?php echo e($p->tanggal_lahir); ?></td>
												<td>
                            
                            <?php 
                            if($p->penyakit){ 
                            echo $p->penyakit;
                            }
                            else{
                                echo 'none';
                            }
                            ?>				</td>
												<td><?php echo e($p->tanggal_masuk); ?></td>
												<td><?php echo e($p->alamat); ?></td>
												<td><?php echo e($p->telepon); ?></td>
												<td>

                            <a href="/edit_pasien/<?php echo e($p->id); ?>"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" class="d-inline" action="/hapus_pasien">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
                            <button class="btn" onclick="return confirm('Yakin mau menghapus?')"><i class="far fa-trash-alt"></i></button>
                            </form>
									    		</td>
											</tr>
											
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						<?php echo e($pasien->links()); ?>

						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pemweb\L-sirs\resources\views/admin/data_pasien.blade.php ENDPATH**/ ?>