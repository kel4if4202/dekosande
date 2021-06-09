<!-- Rendi -->

<!-- View Booking : Pemilik Kost
    Delete Booking : Button -->

    <?php $this->load->view('template/Navbar');?>
<div class="container" style="width: 100%;">
    <!-- <form class="form-inline" style="margin: 30px auto;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

    <!-- Membuat table yang berisi list data kost menggunakan dataTable -->
    <table class="table table-dark table-hover table-bordered dataTable" id="mydata" style="width: 100%">
      <thead>
        <tr>
          <th>Id Booking</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Biaya</th>
          <th>NIK</th>
          <th>Id Kos</th>
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
            "url": "<?= site_url('BookingController/data_booking') ?>", // Mengambil fungsi GetKost() dari KostModel
            "type": "GET", // Mengambil Data Kost dari Database
            "dataSrc": ""
        }, 
        // Data Column yang akan diambil dari database
        "columns": [{
            "data": "idBooking"
            },
            {
            "data": "status"
            },
            {
            "data": "tanggal"
            },
            {
            "data": "biaya"
            },
            {
            "data": "NIK"
            },
            {
            "data": "idKos",
            // "render": function(data, type, row) {
            //     return <?= $this->session->userdata('hak_akses'); ?> == 2 && row.id_dokter == id ? `<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-whatever="${data}"><i class="fas fa-trash"></i></button>
            //     <div class="mt-2 mt-md-0 ml-md-2 d-inline-block"><button class="btn btn-primary mr-2" data-toggle="modal" data-target="#editModal" data-edit="${data}"><i class="fas fa-edit"></i></button></div>` : ''
            // }
            }
        ]
        });
    })

</script>