<!-- ZAKY -->

<?php $this->load->view('template/Navbar');?>
<div class="container" style="width: 100%;">
    <!-- <form class="form-inline" style="margin: 30px auto;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

    <table class="table table-dark table-hover table-bordered dataTable" id="mydata" style="width: 100%">
      <thead>
        <tr>
          <th>Nama Kost</th>
          <th>jenis Kost</th>
          <th>Harga Kost</th>
          <th>Alamat kost</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
    </table>

    
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // const id = <?= $this->session->userdata('id'); ?>;
        let table = $('#mydata').DataTable({
        "ordering": true,
        "order": [
            [0, 'asc']
        ],
        "ajax": {
            "url": "<?= site_url('KostController/data_kost') ?>",
            "type": "GET",
            "dataSrc": ""
        },
        "columns": [{
            "data": "namaKos"
            },
            {
            "data": "jenisKos"
            },
            {
            "data": "hargaKos"
            },
            {
            "data": "alamatKos"
            },
            {
            "data": "deskripsi",
            // "render": function(data, type, row) {
            //     return <?= $this->session->userdata('hak_akses'); ?> == 2 && row.id_dokter == id ? `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-trash"></i></button>
            //     <div class="mt-2 mt-md-0 ml-md-2 d-inline-block"><button class="btn btn-primary mr-2" data-toggle="modal" data-target="#editModal" data-edit="${data}"><i class="fas fa-edit"></i></button></div>` : ''
            // }
            }
        ]
        });
    })

</script>