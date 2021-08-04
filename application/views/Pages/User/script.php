<?php if ($this->session->flashdata('status') == '1') { ?>
    <script>
        toastr.success('berhasil');
    </script>
<?php } elseif ($this->session->flashdata('status') == '0') { ?>
    <script>
        toastr.error('gagal');
    </script>
<?php } ?>

<?php if (!empty($edit)) : ?>
    <script>
        var variabels = JSON.parse('<?= $edit ?>');
        $('[name = "id_user"]').val(variabels.id_user);
        $('[name = "nama"]').val(variabels.nama);
        $('[name = "username"]').val(variabels.username);
        // $('[name = "password"]').val(variabels.password);
        $('[name = "role"]').val(variabels.role);
        $("#simpan").text('Edit').removeClass('btn-primary').addClass('btn-success');
    </script>
<?php endif ?>
