<div class="col-md-12">
	<div class="panel">
		<div class="box-header">
			<div class="pull-left">
				<a href="<?= base_url()?>admin/<?= $cls_name;?>/create" class="btn btn-success">Tambah Data</a>
			</div>
			<div class="pull-right">
				<?php $this->load->view('barang/_search') ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="box-body">
			<div class="content-box-wrapper">
				<table class="table table-responsive table-striped table_content">
					<tr>
						<th style="width:10px;">No</th>
						<th style="width:60px;">Aksi</th>
						<th>Kode</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Jenis</th>
						<th>Satuan</th>
					</tr>
						<?php if(count($model)){ ?>
							<?php $no=1; foreach($model as $row){ ?>
							<tr>
								<td class="text-center"><?= ($no+$offset);?></td>
								<td class="text-center">
									<a href="<?= base_url()?>admin/<?= $cls_name;?>/update/<?= $row->id?>" title="Edit"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url()?>admin/<?= $cls_name;?>/delete/<?= $row->id?>" class="confirmation" title="Hapus"><i class="fa fa-trash"></i></a>
								</td>
								<td><?= $row->kode;?></td>
								<td><?= $row->nama;?></td>
								<td><?= $row->Kategori->nama;?></td>
								<td><?= $row->Jenis->nama;?></td>
								<td><?= $row->Satuan->nama;?></td>
							</tr>
							<?php $no++; } ?>
						<?php }else{ ?>
							<tr>
								<td colspan="3"><?= $this->config->item('empty');?></td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
		<div class="box-footer clearfix">
			<div class="pull-left">
				<?= isset($paging) ? $paging : '';?>
			</div>
			<div class="pull-right">
				<p><?= isset($page) ? $page : '';?></p>
			</div>
		</div>
	</div>
</div>