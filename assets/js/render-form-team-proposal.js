$(document).ready(function() {
  	window._data = {};

		// to generate random and unique key 
    function generateKey() { return window.performance.now(); }
		
		// Render components based on data
		function reloadComponents() {
			$("#renderBox").html("");
      Object.keys(_data).forEach(function(key, index){
        addComponent(key, _data[key], index);
      });
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
			var leaderField = $("<input type='text' name='leader[]' />");
			var member1Field = $("<input type='text' name='member1[]' />");
      var removeButton = $("<button type='button' style='float:right' class='cancelBtn btn btn-warning waves-effect waves-light px-2 my-2'>Remove</button>")

      // Components Set Value
			leaderField.val(datum.leader);
      member1Field.val(datum.member1);
			
      // Components Callbacks
			leaderField.on('change', function(event){
      	_data[key].leader = event.target.value;
      });
			member1Field.on('change', function(event){
      	_data[key].member1Field = event.target.value;
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
			fieldSet.append(leaderField);
			fieldSet.append(member1Field);
      fieldSet.append(removeButton);   
      $("#renderBox").append(fieldSet);
    }

    // Initialize data
    _data[generateKey()] = { leader: '', member1: '' };
		reloadComponents();
    
    $("body").on("click", "#add-team", function() {
      key = generateKey();
      _data[key] = { leader: '', member1: '' };
      newIndex = Object.keys(_data).length - 1
      addComponent(key, _data[key], newIndex);
    });
});

