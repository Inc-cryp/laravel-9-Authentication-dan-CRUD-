<form action="/warga/{{$warga->id}}" method="post">
    @method('put')
    @csrf

    <input type="text" name="nama" id="" placeholder="nama" value={{$warga->nama}}><br>
    <input type="text" name="nik" id="" placeholder="nik" value={{$warga->nik}}><br>
    <input type="text" name="no_kk" id="" placeholder="no_kk" value={{$warga->no_kk}}><br>

    <select name="jenis_kelamin" id="">
        <option value="">pilih jenis kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == 'L') selected @endif>LAKI-LAKI</option>
        <option value="L" @if($warga->jenis_kelamin == 'P') selected @endif>PEREMPUAN</option>
    </select><br>

    <textarea name="alamat" id="" cols="30" rows="10">{{$warga->alamat}}</textarea>
    <input type="submit" name="submit" id="" value="Save">
    
</form>

