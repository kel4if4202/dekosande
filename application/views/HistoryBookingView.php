<!-- DIMAS -->

<!-- View Booking : Pencari
    Cancle Booking : Button -->

<?php $this->load->view('template/Navbar');?>
<div class="container" style="width: 100%; margin-top: 100px;">

    <table class="table table-hover dataTable" id="mydata" style="width: 100%">
      <thead class="thead-dark">
        <tr>
          <th>Tanggal</th>
          <th>ID Kos</th>
          <th>Status</th>
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
            "url": "<?= site_url('BookingController/getBookingByNIK') ?>", // Mengambil fungsi GetKost() dari KostModel
            "type": "GET", // Mengambil Data Kost dari Database
            "dataSrc": ""
        }, 
        // Data Column yang akan diambil dari database
        "columns": [{
            "data": "tanggal"
            },
            {
            "data": "idKos"
            },
            {
            "data": "status", 
            render: function(data, type, row) {
                return data == 0 ? "Belum Lunas" :"Lunas"
            }
             
            }
        ]
        });
    })

</script>