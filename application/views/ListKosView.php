<!-- ZAKY -->

<!--  
    Menampilkan Data kost yang ada dalam database dan Menampilkan data Kost dengan dataTable
-->
<?php $this->load->view('template/Navbar');?>
<div class="container" style="width: 100%; margin-top: 100px;">
    <!-- <form class="form-inline" style="margin: 30px auto;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

    <!-- Membuat table yang berisi list data kost menggunakan dataTable -->
    <table class="table table-hover dataTable" id="mydata" style="width: 100%">
      <thead class="thead-dark">
        <tr>
          <th>Nama Kost</th>
          <th>jenis Kost</th>
          <th>Harga Kost</th>
          <th>Alamat kost</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>

    
</div>

<!-- Function untuk Mengambil data dari database dengan dataTable -->
<script type="text/javascript">
    $(document).ready(function() {
        // const id = <?= $this->session->userdata('id'); ?>;
        let table = $('#mydata').DataTable({
        "ordering": true,
        "order": [
            [0, 'asc']
        ],
        "ajax": {
            "url": "<?= site_url('KostController/data_kost') ?>", // Mengambil fungsi GetKost() dari KostModel
            "type": "GET", // Mengambil Data Kost dari Database
            "dataSrc": ""
        }, 
        // Data Column yang akan diambil dari database
        "columns": [{
            "data": "namaKos"
            },
            {
            "data": "jenisKos", 
            render: function(data, type, row) {
                return data == 0 ?"Perempuan" :"Laki-laki"
            }
            },
            {
            "data": "hargaKos"
            },
            {
            "data": "alamatKos"
            },
            {
            "data": "deskripsi",
            }, 
            {
            "render": function(data, type, row){
            return '<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-user-times"></i></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModald" data-whatever="${data}"><i class="fas fa-user-edit"></i></button>'
            }
            }
            
        ]
        });
    })

</script>