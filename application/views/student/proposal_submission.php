<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <div class="tab-list">
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="main-header">
                            <h4>Pengajuan Proposal</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="student.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Proposal</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Pengajuan</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Radio-Button start -->
                                    <div class="card-header">
                                        <h5 class="card-header-text">Form Pengajuan Proposal</h5>
                                        <?php if($accountability_report->status == 0 ) {?>
                                            <div class="label-main" style="padding-top:5px;">
                                                <label class="label bg-danger"><i class="icon-ban"></i> Anda tidak dapat mengajukan proposal. Pastikan jurusan Anda telah menyerahkan SPJ dan LPJ dari kompetisi sebelumnya ke bagian kemahasiswaan.</label>
                                            </div>
                                        <?php }?>
                                    
                                    </div>
                                    <div class="card-block tab-icon">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12" id="tabs">
                                                <!-- <h6 class="sub-title">Tab With Icon</h6> -->

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#proposal-document" role="tab"><i class="icofont icofont-file-document "></i>Dokumen Proposal</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-toggle="tab" href="#team-profile" role="tab"><i class="icofont icofont-ui-user"></i>Profil Tim</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>

                                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Student/act_proposal_submission'; ?>">                                                       

                                                <!-- Tab panes -->
                                                <form enctype="multipart/form-data" action="<?=site_url('Student/act_proposal_submission')?>" method="post">
                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="proposal-document" role="tabpanel">
                                                        <!-- Proposal Document inputs starts -->
                                                            <div class="form-group row">
                                                                <label for="department" class="col-xs-2 col-form-label form-control-label">Jurusan</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control " name="department" id="department">
                                                                    <?php	foreach($department as $key => $dpt) : ?>
			                                                            <option value="<?= $dpt->id?>"> <?=$dpt->name ?></option>
		                                                            <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="competition" class="col-xs-2 col-form-label form-control-label">Kompetisi</label>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="col-sm-8">
                                                                        <select class="form-control " name="competition" id="competition">
                                                                        <?php	foreach($competition as $key => $cmp) : ?>
			                                                                <option value="<?= $cmp->id?>"> <?=$cmp->name ?></option>
		                                                                <?php endforeach;	?>
                                                                        </select>
                                                                    </div>
                                                                    <span class="md-add-on-file float-right">
                                                                        Atau
                                                                        <!-- Button trigger modal -->
                                                                        <button type="button" id="add-competition" class="btn btn-primary" 
                                                                        style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                                        data-toggle="modal" data-target="#add-competition-modal-form" >+ Data Kompetisi</button>
                                                                    </span>
                                                                </div>   
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="budget" class="col-xs-2 col-form-label form-control-label">Dana yang diajukan</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="number" name="budget" placeholder="Jumlah Dana" value="" id="budget">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="summary" class="col-xs-2 col-form-label form-control-label">Ringkasan</label>
                                                                <div class="col-sm-10">
                                                                  <textarea name="summary" id="summary" class="form-control" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="proposal" class="col-xs-2 col-form-label form-control-label">Proposal</label>
                                                                <div class="md-group-add-on">
                                                                    <span class="md-add-on-file">
                                                                        <button class="btn btn-primary" style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;">Browse</button>
                                                                    </span>
                                                                    <div class="md-input-file">
                                                                        <input type="file" name="proposal" id="file-upload" />
                                                                        <input type="text" class="md-form-control md-form-file" style="margin-right: 18px;float: right;width: 97%;">
                                                                        <label class="md-label-file" id="file-upload-filename" style="padding-left: 5px; color: rgb(155, 156, 169);">doc Proposal</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light next" name="next" id="next">Berikutnya </button>
                                                          <!-- </form> -->
                                                        <!-- Proposal Document inputs ends -->
                                                    </div>


                                                    <div class="tab-pane " id="team-profile" role="tabpanel">
                                                        <!-- Team Profile inputs starts -->
                                                        <div id="team-profile-form">
                                                          <!-- a place to add components -->
                                                          <span id="renderBox"></span>

                                                          <button type="button" class="btn btn-primary waves-effect waves-light prev" name="prev" id="prev">Sebelumnya</button>
                                                          <button type="button" class="btn btn-info waves-effect waves-light float-right px-2" name="add-team" id="add-team" >Tambah Tim </button>

                                                          <?php if($accountability_report->status == 1) {?>
                                                            <button type="submit" class="btn btn-success waves-effect waves-light float-right " name="submit" id="submit" >Submit</button>
                                                          <?php }else {?>
                                                            <button type="button" class="btn btn-disable disabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jurusan Anda belum menyerahkan SPJ dan LPJ dari kompetisi sebelumnya">tidak dapat submit</button>
                                                          <?php }?>
                                                        </div>
                                                    <!-- Team Profile inputs ends -->
                                                    </div>
                                                </div>
                                                <!-- Tab panes end -->

                                                </form>

                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <!-- loader ends -->
            </div>
            <!-- Row end -->

        </div>
        </div>
        <!-- Container-fluid ends -->
    </div>
</div>


<!-- Add Competition Modal -->
<div class="modal fade modal-flex" id="add-competition-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Tambah Data Kompetisi</h5>
        </div>

        <form method="POST" action="<?php echo base_url().'index.php/Student/act_add_competition'; ?>">
            <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="competitionName" class="block form-control-label">Nama Kompetisi</label>
                        <input type="text" class="form-control" name="name" placeholder="ex: Gemastik">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="institusion" class="block form-control-label">Institusi Penyelenggara</label>
                        <input type="text" class="form-control" name="institusion" placeholder="ex: Universitas Gajah Mada">
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="location" class="block form-control-label">Lokasi</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi Kompetisi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level" class="block form-control-label">Level Kompetisi</label>
                            <select class="form-control " name="level">
                                <option value="4">Kota</option>
                                <option value="3">Provinsi</option>
                                <option value="2">Nasional</option>
                                <option value="1">Internasional</option>
                            </select>    
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="registDate" class="block form-control-label">Tanggal Pendaftaran</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_opendate" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_closedate" id="regist-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="eventDate" class="block form-control-label">Tanggal Pelaksanaan Kompetisi</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_startdate" id="event-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_closedate" id="event-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row"> <div class="col-sm-10"> </div> </div>

            </div>
            <div class="modal-footer" style="padding-top: 3pt">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- End of Add Competition Modal -->



    <!-- Required Jqurey -->
    <script
        src="<?php echo base_url();?>assets/js/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous">
    </script>

    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>
    <!-- https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js -->
    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <!-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js -->
    <script src="<?php echo base_url();?>assets/js/3.0.0-alpha1jquery.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <!-- waves effects.js -->
      <script src="<?php echo base_url();?>assets/plugins/Waves/waves.min.js"></script>

      <!-- Scrollbar JS-->
      <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

      <!--classic JS-->
      <script src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>

      <!-- notification -->
      <script src="<?php echo base_url();?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>


      <!-- Rickshaw Chart js -->
      <script src="<?php echo base_url();?>assets/plugins/d3/d3.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/rickshaw/rickshaw.js"></script>

      <!-- Sparkline charts -->
      <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

      <!-- Counter js  -->
      <script src="<?php echo base_url();?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/countdown/js/jquery.counterup.js"></script>

		<!-- custom js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/pages/dashboard.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/pages/elements.js"></script>
		<script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		


<!-- apache_response_headers -->

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?php echo base_url();?>assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?php echo base_url();?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

		<!-- Date picker.js -->
		<script src="<?php echo base_url();?>assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

		<!-- Select 2 js -->
		<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.full.min.js"></script>

		<!-- Max-Length js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

		<!-- Multi Select js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

		<!-- Tags js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

		<!-- Bootstrap Datepicker js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

    <!-- bootstrap range picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- color picker -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/spectrum/spectrum.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jscolor/jscolor.js"></script>

		<!-- highlite js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript">SyntaxHighlighter.all();</script>

		<!-- custom js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/pages/advance-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		

<script> 
  	window._data = {};
    // to generate random and unique key 
    function generateKey() { return window.performance.now(); }
    // Render components based on data
    function reloadComponents() {
        $("#renderBox").html("");
        Object.keys(_data).forEach(function(key, index){
            addComponent(key, _data[key], index);
        });
        hideShowRemoveButton();
    }
    // handling Hide-Show remove button
    function hideShowRemoveButton() {
    	if(Object.keys(_data).length == 1){
            $(".js-remove-button").hide();
        }
    }
    // remove component
    function removeComponent(key){
        $("fieldSet #team" + key).remove()
    }
    // adding new component
    function addComponent(key, datum, index) {
        // Components Initialization
        var fieldSet = $("<fieldset id='team" + key + "'></fieldset>");
        var legend = $("<legend>#"+ (index + 1) +"</legend>")
        var categoryField = $("<input />", {"class": 'form-control', "type": 'text', "name": 'category[]', "placeholder":'ex: Ide Bisnis, UX Design, Smart City'});
        var coachField = $("<input />", {"class": 'form-control', "type": 'text', "name": 'coach[]', "placeholder":'NIDN Pembimbing'});
        var leaderField = $("<input />", {"class": 'form-control', "type": 'text', "name": 'leader[]', "placeholder":'NIM Ketua Tim'});
        var member1Field = $("<input />", {"class": 'form-control', "type": 'text', "name": 'member1[]', "placeholder":'NIM Anggota 1'});
        var member2Field = $("<input />", {"class": 'form-control', "type": 'text', "name": 'member2[]', "placeholder":'NIM Anggota 2'});
        var member3Field = $("<input />", {"class": 'form-control', "type": 'text', "name": 'member3[]', "placeholder":'NIM Anggota 3'});
        var member4Field = $("<input />", {"class": 'form-control', "type": 'text', "name": 'member4[]', "placeholder":'NIM Anggota 4'});
        var removeButton = $("<button type='button' style='float:right' class='js-remove-button cancelBtn btn btn-warning waves-effect waves-light px-2 my-2'>Remove</button>")
        
        // Components Set Value
        categoryField.val(datum.category);
        coachField.val(datum.coach);
        leaderField.val(datum.leader);
        member1Field.val(datum.member1);
        member2Field.val(datum.member2);
        member3Field.val(datum.member3);
        member4Field.val(datum.member4);
    
        // Components Callbacks
        categoryField.on('change', function(event){
            _data[key].category = event.target.value;
        });
        // Components Callbacks
        coachField.on('change', function(event){
            _data[key].coach = event.target.value;
        });
        leaderField.on('change', function(event){
            _data[key].leader = event.target.value;
        });
        member1Field.on('change', function(event){
            _data[key].member1 = event.target.value;
        });
        member2Field.on('change', function(event){
            _data[key].member2 = event.target.value;
        });
        member3Field.on('change', function(event){
            _data[key].member3 = event.target.value;
        });
        member4Field.on('change', function(event){
            _data[key].member4 = event.target.value;
        });
        removeButton.on('click', function(event){
            delete _data[key];
            // we can use this function to remove component
            // fieldSet.remove();
            // but reloadComponents is much better since it will reset the numbering
            reloadComponents();
        });
        // Render Components
        fieldSet.append(legend);
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Ketegori Kompetisi"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    categoryField
                ])
            ]) 
        );
        fieldSet.append(legend);
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Pembimbing"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    coachField
                ])
            ]) 
        );
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Ketua Tim"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    leaderField
                ])
            ]) 
        );
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Anggota 1"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    member1Field
                ])
            ]) 
        );
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Anggota 2"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    member2Field
                ])
            ]) 
        );
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Anggota 3"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    member3Field
                ])
            ]) 
        );
        fieldSet.append(
            $("<div/>", {"class": "form-group row"}).append([
                    $("<label/>", {"class": "col-xs-2 col-form-label form-control-label"}).append([
                    "Anggota 4"
                ]),
                $("<div/>", {"class": "col-sm-10"}).append([
                    member4Field
                ])
            ]) 
        );
        fieldSet.append(removeButton);   
        $("#renderBox").append(fieldSet);
    }
    // Initialize data
    _data[generateKey()] = { category: '', coach: '', leader: '', member1: '', member2: '', member3: '', member4: '' };
    reloadComponents();
    $("body").on("click", "#add-team", function() {
        key = generateKey();
        _data[key] = { category: '', coach: '', leader: '', member1: '', member2: '', member3: '', member4: '' };
        newIndex = Object.keys(_data).length - 1
        addComponent(key, _data[key], newIndex);
    });
</script>

<script>
    $('.next').click(function () {
        $('.nav-tabs > .nav-item > .active').parent().next('li').find('a').trigger('click');
    });
</script>

<script>
    $('.prev').click(function(){
        $('.nav-tabs > .nav-item > .active').parent().prev('li').find('a').trigger('click');
    });
</script>

<script>
    var input = document.getElementById( 'file-upload' );
    var infoArea = document.getElementById( 'file-upload-filename' );
    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    
        // the change event gives us the input it occurred in 
        var input = event.srcElement;
        
        // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
        var fileName = input.files[0].name;
        
        // use fileName however fits your app best, i.e. add it into a div
        infoArea.textContent = fileName;
    }
</script>

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


</body>
</html>