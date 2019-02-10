<section class="content-header">
    <h1>INPUT PENGAWAS </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="pull-left">
                                <h3 class="box-title">Form Pengisian Pengawas</h3>
                            </div>
                        </div>
                        <div class="box-body">
                                        
              <form action="?page=input1tambahpro" method="post" enctype="multipart/form-data">
                                        
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nomor PJN/SPJ</label>    
                                                        <input type="text" class="form-control" name="nomer_pjn_spj" placeholder="Masukan Nomor PJN/SPJ" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                   <div class="col-md-4">
                                                       <div class="form-group">   
                                                            <label>Jenis Pekerjaan</label>
                                                                 <select class="form-control" name="jenis_pekerjaan">
                                                                    <option style="display:none;">-- pilih salah satu --</option>
                                                                    <option value="SKTM">SKTM</option>
                                                                    <option value="SIPIL">SIPIL</option>
                                                                  </select>
                                                        </div>
                                                    </div>
                                                </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

function autofill(){
      var kks = $ ("#kks").val();
      $.ajax({
        url : 'autofill-ajax.php',
        data : 'kks='+kks,
      }).done (function(data){
        var json = data;
        var obj = JSON.parse(json);
        $("#eq").val(obj.eq);
        $("#boboteq").val(obj.boboteq);
        $("#noeq").val(obj.noeq);
      });
    }

</script>