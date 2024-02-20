<form action="/mahasiswa/store" method="POST">
    @csrf 
    <table>
        <tr>
            <td><label for="nim">NIM:</label></td>
            <td><input type="text" class="form-control" id="nim" name="nim"></td>
        </tr>
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" class="form-control" id="nama" name="nama"></td>
        </tr>
        <tr>
            <td><label for="prodi">Prodi:</label></td>
            <td><input type="text" class="form-control" id="prodi" name="prodi"></td>
        </tr>
        <tr>
            <td><label for="fakultas">Fakultas:</label></td>
            <td><input type="text" class="form-control" id="fakultas" name="fakultas"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
            <td>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
    </table>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
