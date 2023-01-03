<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="col-3 mb-2"><a class="btn btn-primary" href="<?= base_url('/admin/kategori/create') ?>" role="button">Tambah Data</a></div>
<div class="col-6 mb-2">
    <h1><?= $judul; ?></h1>
</div>


<table class="table" style="width: 50rem;">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Hapus</th>
        <th>Ubah</th>
    </tr>
    <?php $no = 1 ?>
    <?php foreach ($kategori as $key => $value): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $value['kategori'] ?></td>
            <td><?= $value['keterangan'] ?></td>
            <td><a href="<?= base_url() ?>/admin/kategori/delete/<?= $value['idkategori'] ?>">Hapus</a></td>
            <td><a href="<?= base_url() ?>/admin/kategori/find/<?= $value['idkategori'] ?>">Ubah</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?= $pager->links('group1', 'bootstrap') ?>

<?= $this->endSection() ?>