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
                                <li class="breadcrumb-item"><a href="ormawa.html"><i class="icofont icofont-home"></i></a>
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
                                                <label class="label bg-danger" style="white-space: pre-wrap; text-transform: uppercase;"><i class="icon-ban"></i> Anda tidak dapat mengajukan proposal. Pastikan jurusan Anda telah menyerahkan SPJ dan LPJ dari kompetisi sebelumnya ke bagian kemahasiswaan.</label>
                                            </div>
                                        <?php }?>

                                        <?php if($this->session->flashdata('error') == TRUE ) {?>
                                            <div class="label-main" style="padding-top:5px;">
                                                <label class="label bg-danger" style="white-space: pre-wrap; text-transform: uppercase;"><i class="icon-ban"></i> <?php echo $this->session->flashdata('error');?></label>
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

                                                <!-- Tab panes -->
                                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Ormawa/act_proposal_submission'; ?>">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="proposal-document" role="tabpanel">
                                                        <!-- Proposal Document inputs starts -->
                                                            <div class="form-group row">
                                                                <label for="competition" class="col-xs-2 col-form-label form-control-label">Kompetisi</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="js-select2-competition form-control" name="competition" id="competition" style="width: 100%" required>
                                                                        <?php foreach($competition as $key => $cmp) : ?>
                                                                            <?php if($cmp->status == true){?>
			                                                                <option value="<?= $cmp->id?>"> <?=$cmp->name ?></option>

                                                                            <?php } else { ?>
                                                                            <option value="<?= $cmp->id?>" disabled> <?=$cmp->name ?></option>
                                                                            <

		                                                                <?php } endforeach;	?>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="budget" class="col-xs-2 col-form-label form-control-label">Dana yang diajukan</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" id="currency-field" pattern="^\$\d{1,3}(.\d{3})*(\,\d+)?Rp" value="" data-type="currency" placeholder="Jumlah Dana" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="proposal" class="col-xs-2 col-form-label form-control-label">Proposal</label>
                                                                <div class="md-group-add-on">
                                                                    <span class="md-add-on-file">
                                                                        <button class="btn btn-primary" style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;">Browse</button>
                                                                    </span>
                                                                    <div class="md-input-file">
                                                                        <input type="file" name="proposal" id="file-upload"  required/>
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

		<!-- currency format js -->
		<script src="<?php echo base_url();?>assets/js/currency-format.js"></script>
		
    <!-- select2 -->
    <script src="<?php echo base_url();?>assets/select2.min.js"></script>    

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
        var legend = $("<legend>#"+ (index + 1) +"</legend>");
        var categoryField   = $("<select />", {"class": 'js-category js-select2 form-control js-required', "style": 'width: 100%',"name": 'category[]'});
        var coachField      = $("<select />", {"class": 'js-select2 form-control js-required', "style": 'width: 100%',"name": 'coach[]'});
        var leaderField     = $("<select />", {"class": 'js-select2 form-control js-required ', "style": 'width: 100%',"name": 'leader[]'});
        var member1Field =  $("<select />", {"class": 'js-select2 form-control ', "style": 'width: 100%',"name": 'member1[]'});
        var member2Field =  $("<select />", {"class": 'js-select2 form-control ', "style": 'width: 100%',"name": 'member2[]'});
        var member3Field =  $("<select />", {"class": 'js-select2 form-control ', "style": 'width: 100%',"name": 'member3[]'});
        var member4Field =  $("<select />", {"class": 'js-select2 form-control ', "style": 'width: 100%',"name": 'member4[]'});
        var removeButton =  $("<button type='button' style='float:right' class='js-remove-button cancelBtn btn btn-warning waves-effect waves-light px-2 my-2'>Remove</button>")
        
        // mentor
        <?php foreach($mentor as $key => $dpt) : ?>
            optionText = <?php echo json_encode($dpt->name, JSON_HEX_TAG); ?>;
            optionValue = <?php echo json_encode($dpt->id, JSON_HEX_TAG); ?>;
            
            coachField.append(`<option value="${optionValue}"> ${optionText} </option>`); 
        <?php endforeach; ?>

        // cat
        <?php foreach($competitioncat as $key => $cat) : ?>
            optionText = <?php echo json_encode($cat->name, JSON_HEX_TAG); ?>;
            optionValue = <?php echo json_encode($cat->id, JSON_HEX_TAG); ?>;

            categoryField.append(`<option value="${optionValue}"> ${optionText} </option>`); 
        <?php endforeach; ?>

        // student
        <?php foreach($student as $key => $dpt) : ?>
            optionText = <?php echo json_encode($dpt->name, JSON_HEX_TAG); ?>;
            optionValue = <?php echo json_encode($dpt->id, JSON_HEX_TAG); ?>;

            leaderField.append(`<option value="${optionValue}"> ${optionText} </option>`); 
            member1Field.append(`<option value="${optionValue}"> ${optionText} </option>`); 
            member2Field.append(`<option value="${optionValue}"> ${optionText} </option>`); 
            member3Field.append(`<option value="${optionValue}"> ${optionText} </option>`); 
            member4Field.append(`<option value="${optionValue}"> ${optionText} </option>`); 
        <?php endforeach; ?>

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

        // Jquery library function for components
      	$('.js-select2').select2({
            width: 'resolve',
            placeholder: "Cari Nama",
            allowClear: true // need to override the changed default
        });

        $('.js-category').select2({
            width: 'resolve',
            placeholder: "Cari Kategori Kompetisi atau Yang Lainnya",
            allowClear: true // need to override the changed default
        });

        $('.js-required').prop("required", true);
    }

    // Initialize data
    _data[generateKey()] = { text_category: '', category: '', coach: '', leader: '', member1: '', member2: '', member3: '', member4: '' };
    reloadComponents();
    $("body").on("click", "#add-team", function() {
        key = generateKey();
        _data[key] = { text_category: '', category: '', coach: '', leader: '', member1: '', member2: '', member3: '', member4: '' };
        newIndex = Object.keys(_data).length - 1
        addComponent(key, _data[key], newIndex);
    });

</script>

<script>
    $('.js-team').on('change', function(event ) {
        var prevValue = $(this).data('previous');
        $('.js-team').not(this).find('option[value="'+prevValue+'"]').removeAttr('disabled', 'disabled');
        
        var value = $(this).val();
        $(this).data('previous',value); 
        var txt = $(".js-team option[value='"+value+"']").text();
        $('select').not(this).find('option[value="'+value+'"]').attr('disabled', 'disabled');
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

<script>
$(document).ready(function() {
    $('.js-select2-competition').select2({
        width: 'resolve', // need to override the changed default
        placeholder: "Cari Nama Kompetisi atau singkatan",
        allowClear: true
    });
});
</script>

<!-- Validation date -->
<script>
    var eventstart = document.getElementById('event-date-start');
    var eventend = document.getElementById('event-date-end');   
    var end = document.getElementById('regist-date-end');     
    
    eventstart.addEventListener('change', function() {        
        if (eventstart.value){                                     
            eventend.min = eventstart.value;
            end.max = eventstart.value;
            console.log(eventstart.value);
        }
            
    }, false);
    eventend.addEventLiseter('change', function() {
        if (eventend.value)
            eventstart.max = eventend.value;
    }, false);
</script>

<script>    
    var start = document.getElementById('regist-date-start');
    var end = document.getElementById('regist-date-end');
    var eventstart = document.getElementById('event-date-start');

    start.addEventListener('change', function() {
        if (start.value)
            end.min = start.value;
    }, false);
    end.addEventLiseter('change', function() {
        if (end.value){
            start.max = end.value;            
            eventstart.min = end.value;
        }            
    }, false); 
</script> 

<script>

$("input[data-type='currency']").on({
  keyup: function() {
    formatCurrency($(this));
  },
  blur: function() { 
    formatCurrency($(this), "blur");
  }
});
</script>

</body>
</html>