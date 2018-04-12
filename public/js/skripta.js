$(document).ready(function(){		
	
	
	$('#drzava').change(function(){
		$('#grad').empty(); 
		var drzava=$('#drzava').val();
		var gradSelect=$('#grad');
		$.post('search',{'drzava':drzava , '_token':$('input[name=_token]').val() } , function(data){
			$('#grad').append($('<option>', {value:'1',text: 'Svi Gradovi'}));
			$(data).each(function(key,value){
			           $(value).each(function(key,value){
			              $('#grad').append($('<option>', {value: value['id'],text: value['naziv']}));
			           });
			       }); 			
			
		});
	});

	$('#proizvodjac').change(function(){
		$('#model').empty(); 
		var proizvodjac=$('#proizvodjac').val();
		var modelSelect=$('#model');
		$.post('search',{'proizvodjac':proizvodjac , '_token':$('input[name=_token]').val() } , function(data){
			$('#model').append($('<option>', {value:'1',text: 'Svi Modeli'}));
			$(data).each(function(key,value){
			           $(value).each(function(key,value){
			              $('#model').append($('<option>', {value: value['id'],text: value['naziv']}));
			           });
			       }); 			
			
		});
	});

	    var sliderDivCijena = $('#cijena');
	    sliderDivCijena.slider({
	        range: true,
	        min: 0,
	        step: 50,
	        max: 1000000,
	        values: [0, 1000000],
	        slide: function (event, ui) {
	            $('#cijenaMin').html(ui.values[0]);
	            $('#cijenaMax').html(ui.values[1]);
	        },
	        stop: function (event, ui) {
	            $('#cijenaMin1').val(ui.values[0]);
	            $('#cijenaMax1').val(ui.values[1]);
	        }
	    });    

	    var sliderDivKilometri = $('#kilometraza');
	    sliderDivKilometri.slider({
	        range: true,
	        min: 0,
	        step: 200,
	        max: 400000,
	        values: [0, 400000],
	        slide: function (event, ui) {
	            $('#kilometriMin').html(ui.values[0]);
	            $('#kilometriMax').html(ui.values[1]);
	        },
	        stop: function (event, ui) {
	            $('#kilometrazaMin1').val(ui.values[0]);
	            $('#kilometrazaMax1').val(ui.values[1]);
	        }
	    });


	    var sliderDivGodine = $('#godiste');
	    sliderDivGodine.slider({
	        range: true,
	        min: 1980,
	        max: 2017,
	        values: [1980, 2017],
	        slide: function (event, ui) {
	            $('#godineMin').html(ui.values[0]);
	           	$('#godineMax').html(ui.values[1]);
	        },
	        stop: function (event, ui) {
	            $('#godisteMin1').val(ui.values[0]);
	            $('#godisteMax1').val(ui.values[1]);
	        }
	    });

		$('#cijenaMin1').val(sliderDivCijena.slider('values', 0));
		$('#cijenaMax1').val(sliderDivCijena.slider('values', 1));
		$('#kilometrazaMin1').val(sliderDivKilometri.slider('values', 0));
		$('#kilometrazaMax1').val(sliderDivKilometri.slider('values', 1));
		$('#godisteMin1').val(sliderDivGodine.slider('values', 0));
		$('#godisteMax1').val(sliderDivGodine.slider('values', 1));

	    

		$("input[name='gorivo']").change(function(){
			var goriva = [];
			 $.each($("input[name='gorivo']:checked"), function(){            
                goriva.push($(this).val());
            });
			 console.log(goriva);
			 $('#gorivo1').val(goriva);
		});

		$("input[name='stanje']").change(function(){
			var stanje = [];
			 $.each($("input[name='stanje']:checked"), function(){            
                stanje.push($(this).val());
            });
			 console.log(stanje);
			 $('#stanje1').val(stanje);
		});

	    $(document).on('click','#pretrazi',function(event){
	    

	    	
           	//preuzimanje cekiranih checkboxova za gorivo
	    	 var stanje = [];
            $.each($("input[name='stanje']:checked"), function(){            
                stanje.push($(this).val());
            });
            console.log(stanje);
            //kraj preuzimanja

	    });

	     
	   
});
function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

