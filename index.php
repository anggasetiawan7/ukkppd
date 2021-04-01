
<!Doctype html>
<htm>
<head>
    <title>UKK PPDB 2021</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
<div class="container">
    
    <h1 class="text-center">Penerimaan Peserta Didik Baru</h1>
    <h2 class="text-center">SMK WIKRAMA BOGOR</h2>
  
   <!-- Awal embuat card form --> 
     <div class="card mt-3">
         <div class="card-header bg-primary text-white">
            form pendaftaran peserta didik baru
        </div>
  <div class="card-body">
    <form method="post" action="">
        <div class="form-group">
             <label>Nis siswa</label>
             <input type="text" name="11806505" class="form-control" placeholder="input Nis Anda disini!" required>
        </div>
        <div class="form-group">
             <label>Nama</label>
             <input type="text" name="angga" class="form-control" placeholder="input Nama Anda disini!" required>
            </div>
        <div class="form-group">
             <label>Jns_kelamain</label>
             <input type="text" name="laki-laki" class="form-control" placeholder="input JK Anda disini!" required>
            </div>
         <div class="form-group">
             <label>Temp_lahir</label>
             <input type="text" name="bogor" class="form-control" placeholder="input tempat lahir Anda disini!" required>
            </div>
         <div class="form-group">
             <label>tgl_lahir</label>
             <input type="text" name="7 maret 2003" class="form-control" placeholder="input ttl Anda disini!" required>
            </div>
        <div class="form-group">
             <label>Alamat</label>
             <textarea class="form-control" placeholder="input Nama Anda disini!"></textarea>
            </div>
            <div class="form-group">
             <label>Asal_sekolah</label>
             <input type="text" name="smpn satu atap" class="form-control" placeholder="input asal sekolah Anda disini!" required>
            </div> 
            <div class="form-group">
             <label>kelas</label>
             <input type="text" name="x" class="form-control" placeholder="input kelas Anda disini!" required>
            </div>
            <div class="form-group">
             <label>jurusan</label>
            <select class="form-control" name="rpl">
            <option></option>
            <option value="rekayasa perangkat lunak">RPL</option>
           </select>
            </div>

            <button type="submit" class="btn btn-succes" name="bsimpan">simpan</button>
            <button type="reset" class="btn btn-danger" name="breset">Hapus</button>


    </form>
    </div>
    </div>
<!--Ahir dari card form -->

 <!-- Awal embuat card form --> 
 <div class="card mt-3">
         <div class="card-header bg-succes text-white">
            Daftar siswa
         </div>
  <div class="card-body">
  <table class="table table-bordered table-striped">
  <tr>
  <th>no.</th>
  <th>Nis</th>
  <th>Nama</th>
  <th>jns_kelamin</th>
  <th>temp_lahir</th>
  <th>tgl_lahir</th>
  <th>alamat</th>
  <th>asal_sekolah</th>
  <th>kelas</th>
  <th>jurusan</th>
  
  </tr>
  <tr>
  <td><?=$no++;?></td>
  <td><?=$data['Nis']?></td>
  <td><?=$data['Nama']?></td>
  <td><?=$data['jns_kelamain']?></td>
  <td><?=$data['temp_lahir']?></td>
  <td><?=$data['tgl_lahir']?></td>
  <td><?=$data['alamat']?></td>
  <td><?=$data['asal_sekolah']?></td>
  <td><?=$data['kelas']?></td>
  <td><?=$data['jurusan']?></td>
  <td>
  
    <a href="#" class="btn btn-warning">edit </a>
    <a href="#" class="btn btn-danger">hapus </a>

    </tr>

  </td>
  </table>

     </div>
    </div>
<!--Ahir dari card form -->

    </div>
    <acript type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>