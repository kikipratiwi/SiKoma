<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <!-- Warning Section Ends -->

      <!-- Required Jqurey -->
      <script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>

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


      <script> 
// $(document).ready(function() {
    var teamId = 1;
    $("body").on("click", "#add-team", function() {
    // $("#add-team").click(function() {
      teamId++;

      var $fieldset = $('#team');
      var nextFieldset = $fieldset.clone();

      var cancelBtn = "<button type='button' style='float:right' class='cancelBtn btn btn-warning waves-effect waves-light px-2 my-2'>Batalkan</button>"
      nextFieldset.append(cancelBtn);

      nextFieldset.attr('id', 'team-' + teamId);
      nextFieldset.children('legend')[0].innerHTML = '#' + teamId

      $("nextFieldset :input").each(function(i) {
        $(this).attr('name', 't' + teamId + '-' + $(this).attr('name'));
      });

      console.log($("nextFieldset :input"));
      console.log(nextFieldset.children('input'));

      $("#add-team").before(nextFieldset);
    });

    $("body").on("click", ".cancelBtn", function() {
        $(this).parents('fieldset').remove();
    });

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

    // $("#file-upload").change(function() {
    //     input = $(this).srcElement();
    //     fileName = input.files[0].name;
    //     $("#file-upload-filename").text(filename);
    // });

    $("#tabs").tabs();
    $(".nexttab").click(function() {
        var selected = $("#tabs").tabs("option", "selected");
        $("#tabs").tabs("option", "selected", selected + 1);
    });



// });

</script>

</body>

</html>