<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Form Pendaftaran</title>
</head>
<body>
    <header>
        <h3>TABEL PENDAFTARAN</h3>
        <!-- Nama : nadira aurellia rosa -->
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" />
            </p>
            <p>
                <label for="tempat">Tempat Lahir :</label>
                <input type="text" name="tempat" />
            </p>
            <p>
                <label for="tanggal">Tanggal Lahir :</label>
                <input type="date" name="tanggal" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="5"></textarea>
            </p>
            <p>
                <label for="jk">Jenis Kelamin :</label>
                <label><input type="radio" name="jk" value="laki2" />Laki - Laki</label>
                <label><input type="radio" name="jk" value="pr" />Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </p>
            <p>
            <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>