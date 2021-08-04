<?php if ($this->session->flashdata('status') == '1') { ?>
    <script>
        toastr.success('berhasil');
    </script>
<?php } elseif ($this->session->flashdata('status') == '0') { ?>
    <script>
        toastr.error('gagal');
    </script>
<?php } ?>

<script type="text/javascript">
    $("#inp").hide();
    $("#view").show();
    $("#btn-inp").click(function(){
        $("#inp").show();
        $("#view").hide();
    });
    $("#btn-view").click(function(){
        $("#inp").hide();
        $("#view").show();
    })
</script>

<?php if ($edit != 'null') : ?>
    <script>
      $("#inp").show();
      $("#view").hide();
      var variabels = JSON.parse('<?= $edit ?>');
      $('[name = "id_proyek"]').val(variabels.id_proyek);
      $('[name = "id_kontraktor"]').val(variabels.id_kontraktor);
      $('[name = "nama_proyek"]').val(variabels.nama_proyek);
      $('[name = "lokasi"]').val(variabels.lokasi);
      $('[name = "target"]').val(variabels.target);
      $('[name = "pagu"]').val(variabels.pagu);
      $('[name = "nilai_proyek"]').val(variabels.nilai_proyek);
      $('[name = "uang_muka"]').val(variabels.uang_muka);
      $('[name = "no_kontrak"]').val(variabels.no_kontrak);
      $('[name = "waktu_pelaksanaan"]').val(variabels.waktu_pelaksanaan);
      $('[name = "tgl_kontrak"]').val(variabels.tgl_kontrak);
      $('[name = "tgl_berakhir"]').val(variabels.tgl_berakhir);
      $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
  </script>
<?php endif ?>
