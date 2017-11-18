function deleteDetailSipu(id,id_sipu) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_detail_sipu_delete.php?id_sipu="+id_sipu+"&detail_sipu_id_detail_sipu="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=tambah_permohonan_detail&id_sipu="+id_sipu;
        });
      }
    });
  });
}
function deleteDetailSipuPengawas(id,id_sipu) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_detail_sipu_delete.php?id_sipu="+id_sipu+"&detail_sipu_id_detail_sipu="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=edit_sipu&id_sipu="+id_sipu;
        });
      }
    });
  });
}

function deleteSipuPermohonan(id_sipu,id_permohonan) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_sipu_delete.php?id_sipu="+id_sipu,
      success: function () {
        $.ajax({
          type: "GET",
          url: "backend/controller_permohonan_delete.php?id_permohonan="+id_permohonan,
          success: function () {
            swal({
              title: "Data Terhapus",
              text: "",
              type: "success",
              confirmButtonText: "Oke",
              closeOnConfirm: false
            },
            function(){
              window.location = "pemohon";
            });
          }
        });
      }
    });
  });
}

function deletePagu(id) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_pagu_delete.php?pagu_id_pagu="+id,
      success: function () {
        console.log("backend/controller_pagu_delete.php?pagu_id_pagu="+id);
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=pagu";
        });
      }
    });
  });
}

function deleteSpk(id) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_spk_delete.php?id_spk="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=spk";
        });
      }
    });
  });
}

function deletepenyedia(id) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_penyedia_delete.php?id_penyedia="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=penyedia";
        });
      }
    });
  });
}

function deleteakun(id) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_akun_delete.php?id_akun="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=akun";
        });
      }
    });
  });
}

function deletepermohonan(id) {
  swal({
    title: "Hapus Data",
    text: "Anda yakin untuk menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    closeOnConfirm: false
  },
  function(){
    $.ajax({
      type: "GET",
      url: "backend/controller_permohonan_delete.php?id_permohonan="+id,
      success: function () {
        swal({
          title: "Data Terhapus",
          text: "",
          type: "success",
          confirmButtonText: "Oke",
          closeOnConfirm: false
        },
        function(){
          window.location = "?halaman=permohonan";
        });
      }
    });
  });
}
