<form action="/warga/store" method="post">
    
    @csrf

    <input type="text" name="nama" id="" placeholder="nama"><br>
    <input type="text" name="nik" id="" placeholder="nik"><br>
    <input type="text" name="no_kk" id="" placeholder="no_kk"><br>

    <select name="jenis_kelamin" id="">
        <option value="">pilih jenis kelamin</option>
        <option value="L">LAKI-LAKI</option>
        <option value="P">WANITA</option>
    </select><br>

    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" id="" value="Save">
</form>

