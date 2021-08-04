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
    $('[name = "id_kontraktor"]').val(variabels.id_kontraktor);
    $('[name = "id_user"]').val(variabels.id_user);
    $('[name = "nama"]').val(variabels.nama);
    $('[name = "pemilik"]').val(variabels.pemilik);
    $('[name = "no_hp"]').val(variabels.no_hp);
    $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
  </script>
<?php endif ?>
<!-- <script type="text/javascript">
  $("#_id").change(function(){
    $('[name="nama"]').val($(this).find('option:selected').data('name'));
});
</script> -->
<?php if(!empty($_GET['id_user'])): ?>
  <script type="text/javascript">
   $("#inp").show();
   $("#view").hide();
 </script>
 <?php endif ?>