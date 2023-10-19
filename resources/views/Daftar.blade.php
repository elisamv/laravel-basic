<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba</title>
</head>

<style>
    body {
        background-color: #333;
        margin: 0;
    }
    
    #onicon {
        font-family: fantasy;
        background-color: #0F0E0E;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    
    .onicon {
        background-color: #FFCF00;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 1);
        padding: 10%;
        width: 300px;
        text-align: center;
    }
    
    .form-field {
        margin-bottom: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
    <header id="onicon">
        <div class="onicon">
            <img src="aset/onic.png " width="50% " height=" 100px " class="Logo-img ">
            <h2 style="margin-bottom: 15px; color: black; ">Pendaftaran Lomba IT Expo</h2>
            <form>
                <div class="field">
                    <label for="Nama " style="color: black; display: block; text-align: left; ">Nama Lengkap</label>
                    <input type="text " placeholder="Masukkan Nama Lengkap " id=" Nama " name="Nama " required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; ">
                </div>

                <div class="field">
                    <label for="Nomor Pokok" style=" color: black; display: block; text-align: left;">Nis/Npm</label>
                    <input type="text " placeholder="Masukkan Nis/Npm" id=" Nis/Npm " name="Nis/Npm " required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; ">
                </div>

                <div class="field">
                    <label for="Mata Lomba" style="color: black; display: block; text-align: left; ">Mata Lomba</label>
                    <input type="text " placeholder="Masukkan Mata Lomba" id="Mata Lomba " name="Mata Lomba" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; ">
                </div>

                <div class="field">
                    <label for="Status" style="color: black; display: block; text-align: left; ">Status</label>
                    <select id="Status" name="Status" required style="width: 107%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; ">
                        <option value=" " disabled selected>Pilih Status</option>
                        <option value="Siswa SMP/SMA">Siswa SMP/SMA</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 15px; ">
                    <button type="submit " style="background-color: #007bff; color: #fff; border: none; border-radius: 4px; padding: 10px 20px; cursor: pointer; transition: background-color 0.3s ease; ">Register</button>
                </div>

                <div style="margin-bottom: 15px; font-family:Arial, Helvetica, sans-serif; text-align: center; font-size: small; ">
                    <a href="https://youtube.com ">Butuh Bantuan?</a><br>
                </div>
            </form>
        </div>

    </header>

</body>

</html>