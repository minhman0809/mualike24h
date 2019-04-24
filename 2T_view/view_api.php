   <section class="content">
   <div class="container-fluid">
      <div class="row clearfix">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card animated bounceIn">
               <div class="header">
                  <h2>
                     <i class="fa fa-commenting" aria-hidden="true"></i>API DOCUMENT<small></small>
                  </h2>
                  <ul class="header-dropdown m-r--5">
                     <button type="button" class="btn btn-primary waves-effect" style="display: none;" data-toggle="modal" data-target="#edit-vip" id="btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Chỉnh Sửa</button>
                     <!--<button type="button" class="btn btn-danger waves-effect" onclick="del_package()">Xóa</button>-->
                  </ul>
               </div>
               <!-- <div class="body table-responsive">
                  <table class="table table-bordered" width="100%" id="result-vip">
                  </table>
                  </div> -->
               <form>
                  <div class="form-group">
                     <label for="usr">Api Key:</label>
                     <input type="text" class="form-control" id="apikey" readonly>
                     <a data-fancybox="" data-animation-duration="700" data-src="#updateApi" href="javascript:;" class="btn btn-primary">Sửa</a>
                     <div style="display: none;" id="updateApi" class="animated-modal">
                        <label for="usr">Api Key:</label>
                        <input type="text" class="form-control" id="apikey2" readonly>
                        <button type="button" class="btn btn-primary" onclick="updateApiKey()">Sửa</button>
                        <button type="button" class="btn btn-success" onclick="randomApiKey()">Random</button>
                     </div>
                  </div>
               </form>
               <!--  start document -->
               <div class="container">
                  <div id="doc-header" class="doc-header text-center">
                     <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
                     <div class="meta"><i class="far fa-clock"></i> Last updated: 11/2018 by nghiahsgs</div>
                  </div>
                  <!--//doc-header-->
                  <div class="row">
                     <div class="col-md-12">
                        <h2>Api order mắt livestream</h2>
                        <p>B1:Bạn lấy api của tài khoản của bạn</p>
                        <p>B2: Gửi 1 method Post đến url "http://mualike24h.com/api/lstream/create"</p>
                        <p>DataPost là</p>
                        <ul class="list-group">
                           <li class="list-group-item">apikey: apikey của bạn</li>
                           <li class="list-group-item">fbid: Uid cần mua mắt</li>
                           <li class="list-group-item">name: Note mua mắt</li>
                           <li class="list-group-item">name_package: Gói mua mắt</li>
                           <li class="list-group-item">limit_time: Thời hạn mua mắt: </li>
                           <li class="list-group-item">note: Ghi chú khi mua: </li>
                        </ul>
                        <p>Vd cần mua gói 50 mắt cho uid 100006526419466 với ghi chú là nghiahsgs với thời hạn là 1 tháng, ghi chú là abc thì data POST sẽ như sau</p>
                        <p style="font-weight: bold;">Request</p>
                        <p style="font-weight: bold;">POST: http://mualike24h.com/api/lstream/create</p>
                        <p style="font-weight: bold;">
                           apikey={apikey của bạn}&fbid=100006526419466&name=nghiahsgs&name_package=50&limit_time=1& note=a
                        </p>
                        <img src="https://i.imgur.com/6aeNjJo.png" class="img-responsive">
                        <p>Kết quả phản hồi (json)</p>
                        <p style="font-weight: bold;">Response</p>
                        <p style="font-weight: bold;">{success:true}</p>
                     </div>
                     <div class="col-md-12">
                        <h2>Api list các gói mắt livestream đã mua</h2>
                        <p>B1:Bạn lấy api của tài khoản của bạn</p>
                        <p>B2: Gửi 1 method GET đến url "http://mualike24h.com/api/lstream/select.php"</p>
                        <p>Query là</p>
                        <ul class="list-group">
                           <li class="list-group-item">apikey: apikey</li>
                        </ul>
                        <p>Vd cần lấy danh sách các gói đã mua thì :</p>
                        <p style="font-weight: bold;">Request</p>
                        <p style="font-weight: bold;">GET: http://mualike24h.com/api/lstream/select.php?apikey={apikey của bạn}& note={ghi chú khi bạn order}</p>
                        <p>Kết quả phản hồi (json)</p>
                        <p style="font-weight: bold;">Response</p>
                        <p style="font-weight: bold;">{"id":"","fbid":"","name":"","name_buy":"","name_package":"","limit_time":"","time_buy":"","action":"checked","note":""}</p>
                        <!--<p style="font-weight: bold;">{success:true}</p>-->
                     </div>
                  </div>
               </div>
               <!-- end document -->
            </div>
         </div>
      </div>
      <!-- đấ -->
   </div>
</section>
    <script type="text/javascript">
         $(document).ready(function() {
     load_api();
 });

 function updateApiKey() {
     var apikey = $('#apikey2').val();
     $.ajax({
         url: prefix + modun + '/modun_post.php',
         type: 'POST',
         dataType: 'JSON',
         data: {
             t: 'update_api_key',
             apikey: apikey
         },
         success: (data) => {
             console.log(data);
             if (data.error) {
                 showNotification('bg-red', data.msg);
             } else {
                 // showNotification('bg-green', data.msg);
                 // $("input").val('');
                 // $("textarea").val('');
                 alert(data.msg);
                 location.reload();
             }
         }
     })
 }

 function randomApiKey() {
     function makeid() {
         var text = "";
         var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
         for (var i = 0; i < 5; i++)
             text += possible.charAt(Math.floor(Math.random() * possible.length));
         return text;
     }
     $('#apikey2').val(makeid());
 }

 function load_api() {
     //console.log('load_api');
     $.ajax({
         url: prefix + modun + '/modun_post.php',
         type: 'POST',
         dataType: 'JSON',
         data: {
             t: 'get_api_key'
         },
         success: (data) => {
             let apikey = '';
             for (var i = 0; i <= data.length - 1; i++) {
                 apikey = data[i]['apikey'];
             }
             console.log(apikey);
             $('#apikey').val(apikey);
             $('#apikey2').val(apikey);
         }
     })
 }
    </script>