function editUser(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_akun_ajax_edit.php",
    data: "user_id_user="+id,
    success: function (data) {
      var $response = $(data);
      $('#user_id_user').val($response.filter('#user_id_user').text());
      $('#user_nip').val($response.filter('#user_nip').text());
      $('#user_nama_lengkap').val($response.filter('#user_nama_lengkap').text());
      $('#user_username').val($response.filter('#user_username').text());
      $('#user_password').val($response.filter('#user_password').text());
      $('#user_hak_akes').val($response.filter('#user_hak_akes').text());
      $('#edit_akun').modal('show');
    }
  });
}
function editPenyedia(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_penyedia_ajax_edit.php",
    data: "penyedia_id_penyedia="+id,
    success: function (data) {
      var $response = $(data);
      $('#penyedia_id_penyedia').val($response.filter('#penyedia_id_penyedia').text());
      $('#penyedia_nama_instansi').val($response.filter('#penyedia_nama_instansi').text());
      $('#penyedia_alamat').text($response.filter('#penyedia_alamat').text());
      $('#penyedia_bank').val($response.filter('#penyedia_bank').text());
      $('#penyedia_no_rekening').val($response.filter('#penyedia_no_rekening').text());
      $('#penyedia_npwp').val($response.filter('#penyedia_npwp').text());
      $('#penyedia_penanggung_jawab').val($response.filter('#penyedia_penanggung_jawab').text());
      $('#penyedia_jabatan_pj').val($response.filter('#penyedia_jabatan_pj').text());
      $('#edit_penyedia').modal('show');
    }
  });
}
function editSpk(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_spk_ajax_edit.php",
    data: "spk_id_spk="+id,
    success: function (data) {
      var $response = $(data);
      $('#spk_id_spk').val($response.filter('#spk_id_spk').text());
      // $('#spk_file').val($response.filter('#spk_file').text());
      $('#spk_id_akun_ppk').val($response.filter('#spk_id_akun_ppk').text());
      $('#spk_id_penyedia').val($response.filter('#spk_id_penyedia').text());
      $('#spk_harga').val($response.filter('#spk_harga').text());
      $('#spk_waktu').val($response.filter('#spk_waktu').text());
      $('#spk_tgl_spk').val($response.filter('#spk_tgl_spk').text());
      $('#spk_akun_nama_lengkap').val($response.filter('#spk_akun_nama_lengkap').text());
      $('#spk_penyedia_nama_instansi').val($response.filter('#spk_penyedia_nama_instansi').text());
      $('#edit_spk').modal('show');
    }
  });
}
function editPagu(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_pagu_ajax_edit.php",
    data: "pagu_id_pagu="+id,
    success: function (data) {
      var $response = $(data);
      $('#pagu_id_pagu').val($response.filter('#pagu_id_pagu').text());
      $('#pagu_id_permohonan').val($response.filter('#pagu_id_permohonan').text());
      $('#pagu_pagu').val($response.filter('#pagu_pagu').text());
      $('#pagu_terikat').val($response.filter('#pagu_terikat').text());
      $('#pagu_realisasi').val($response.filter('#pagu_realisasi').text());
      $('#pagu_sisa_pagu').val($response.filter('#pagu_sisa_pagu').text());
      $('#pagu_permohonan_no_sub_output').val($response.filter('#pagu_permohonan_no_sub_output').text());
      $('#pagu_permohonan_no_komponen').val($response.filter('#pagu_permohonan_no_komponen').text());
      $('#pagu_permohonan_akun_dana_dipa').val($response.filter('#pagu_permohonan_akun_dana_dipa').text());
      $('#pagu_permohonan_detail').text($response.filter('#pagu_permohonan_detail').text());
      $('#edit_pagu').modal('show');
    }
  });
}
function editDetailSipu(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_detail_sipu_ajax_edit.php",
    data: "id_detail_sipu="+id,
    success: function (data) {
      var $response = $(data);
      $('#detail_sipu_id_detail_sipu').val($response.filter('#detail_sipu_id_detail_sipu').text());
      $('#detail_sipu_id_sipu').val($response.filter('#detail_sipu_id_sipu').text());
      $('#detail_sipu_nama_barang').val($response.filter('#detail_sipu_nama_barang').text());
      $('#detail_sipu_spesifikasi').val($response.filter('#detail_sipu_spesifikasi').text());
      $('#detail_sipu_jumlah').val($response.filter('#detail_sipu_jumlah').text());
      $('#detail_sipu_harga_satuan').val($response.filter('#detail_sipu_harga_satuan').text());
      $('#detail_sipu_keterangan').val($response.filter('#detail_sipu_keterangan').text());
      $('#edit_detail_sipu').modal('show');
    }
  });
}
function editPermohonan(id) {
  $.ajax({
    type: "GET",
    url: "backend/controller_permohonan_ajax_edit.php",
    data: "id_permohonan="+id,
    success: function (data) {
      var $response = $(data);
      $('#permohonan_id_permohonan').val($response.filter('#permohonan_id_permohonan').text());
      $('#permohonan_id_sipu').val($response.filter('#permohonan_id_sipu').text());
      $('#permohonan_id_akun_pemohon').val($response.filter('#permohonan_id_akun_pemohon').text());
      $('#permohonan_id_spk').val($response.filter('#permohonan_id_spk').text());
      $('#permohonan_no_sub_output').val($response.filter('#permohonan_no_sub_output').text());
      $('#permohonan_no_komponen').val($response.filter('#permohonan_no_komponen').text());
      $('#permohonan_no_akun_dana_dipa').val($response.filter('#permohonan_no_akun_dana_dipa').text());
      $('#permohonan_detail').val($response.filter('#permohonan_detail').text());
      $('#permohonan_akun_nama_lengkap').val($response.filter('#permohonan_akun_nama_lengkap').text());
      $('#permohonan_sipu_tgl_pengajuan').val($response.filter('#permohonan_sipu_tgl_pengajuan').text());
      $('#permohonan_sipu_status').val($response.filter('#permohonan_sipu_status').text());
      $('#permohonan_sipu_unit').val($response.filter('#permohonan_sipu_unit').text());
      $('#edit_permohonan').modal('show');
    }
  });
}
