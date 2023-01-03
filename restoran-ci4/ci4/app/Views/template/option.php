<select name="kategori" id="kategori" style="width: 7rem;">
    <?php foreach ($kategori as $key => $value) : ?>
    <option value="idkategori" ><?= $value['kategori'] ?></option>
    <?php endforeach ;?>
</select>