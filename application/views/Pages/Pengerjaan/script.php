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
    $('[name = "id_pengerjaan"]').val(variabels.id_pengerjaan);
    $('[name = "id_proyek"]').val(variabels.id_proyek);
    $('[name = "nama_proyek"]').val(variabels.nama_proyek);
    $('[name = "id_kontraktor"]').val(variabels.id_kontraktor);
    $('[name = "nama_komtraktor"]').val(variabels.nama_komtraktor);
    $('[name = "progres_pengerjaan"]').val(variabels.progres_pengerjaan);
    // $('[name = "bukti_pengerjaan"]').val(variabels.bukti_pengerjaan);
    $('[name = "keterengan"]').val(variabels.keterengan);
    $('[name = "tgl_laporan"]').val(variabels.tgl_laporan);
    $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
  </script>
<?php endif ?>

<script type="text/javascript">
  $("#_id").change(function(){
    $('[name="nama_proyek"]').val($(this).find('option:selected').data('name'));
    });
</script>

<script type="text/javascript">
  $("#_idk").change(function(){
    $('[name="nama_komtraktor"]').val($(this).find('option:selected').data('name'));
    });
</script>
