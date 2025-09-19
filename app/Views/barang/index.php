<h2>Stok Barang</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Deskripsi</th>
    </tr>
    <?php if (!empty($barang)): ?>
        <?php foreach($barang as $b): ?>
        <tr>
            <td><?= esc($b['nama']) ?></td>
            <td><?= esc($b['harga']) ?></td>
            <td><?= esc($b['jumlah']) ?></td>
            <td><?= esc($b['satuan']) ?></td>
            <td><?= esc($b['deskripsi']) ?></td>
        </tr>
        <?php endforeach ?>
    <?php else: ?>
        <tr><td colspan="6">Tidak ada data</td></tr>
    <?php endif ?>
</table>
