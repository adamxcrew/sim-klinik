<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Kunjungan Pasien (<?php echo $pasien ?>)</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">No.Pelayanan</th>
                            <th class="text-center">Tipe</th>
							<th class="text-center">Detail</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach($list as $data):
                        ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td><?php echo date("d-m-Y",strtotime($data->tgl_pelayanan)); ?></td>
							<td><?php echo $data->no_ref_pelayanan; ?></td>
                            <td><?php echo $data->tipe_pelayanan; ?></td>
							<td class="text-center">
								<a href="<?= base_url('admin/pasien/detail/'.$data->no_ref_pelayanan) ?>" class="btn btn-sm btn-info">Detail</a>
							</td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

