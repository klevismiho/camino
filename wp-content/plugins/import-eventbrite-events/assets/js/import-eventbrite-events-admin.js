(function( $ ) {
	'use strict';

	jQuery(document).ready(function(){
		jQuery('.xt_datepicker').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});
		jQuery(document).on("click", ".iee_datepicker", function(){
		    jQuery(this).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: 'yy-mm-dd',
				showOn:'focus'
			}).focus();
		});

		jQuery(document).on("click", ".vc_ui-panel .iee_datepicker input[type='text']", function(){
		    jQuery(this).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: 'yy-mm-dd',
				showOn:'focus'
			}).focus();
		});
	});
	
	jQuery(document).ready(function(){
		jQuery(document).on('change', '#eventbrite_import_by', function(){

			if( jQuery(this).val() == 'event_id' ){
				jQuery('.import_type_wrapper').hide();
				jQuery('.eventbrite_organizer_id').hide();
				jQuery('.eventbrite_organizer_id .iee_organizer_id').removeAttr( 'required' );
				jQuery('.eventbrite_event_id').show();
				jQuery('.eventbrite_event_id .iee_eventbrite_id').attr('required', 'required');
			
			} else if( jQuery(this).val() == 'organizer_id' ){
				jQuery('.import_type_wrapper').show();
				jQuery('.eventbrite_organizer_id').show();
				jQuery('.eventbrite_organizer_id .iee_organizer_id').attr('required', 'required');
				jQuery('.eventbrite_event_id').hide();
				jQuery('.eventbrite_event_id .iee_eventbrite_id').removeAttr( 'required' );
			}
		});

		jQuery('#import_type').on('change', function(){
			if( jQuery(this).val() != 'onetime' ){
				jQuery('.hide_frequency .import_frequency').show();
			}else{
				jQuery('.hide_frequency .import_frequency').hide();
			}
		});

		jQuery("#import_type").trigger('change');
		jQuery("#eventbrite_import_by").trigger('change');
	});	

	// Render Dynamic Terms.
	jQuery(document).ready(function() {
	    jQuery('.eventbrite_event_plugin').on( 'change', function() {

	    	var event_plugin = jQuery(this).val();
	    	var taxo_cats = jQuery('#iee_taxo_cats').val();
	    	var taxo_tags = jQuery('#iee_taxo_tags').val();

	    	var data = {
	            'action': 'iee_render_terms_by_plugin',
	            'event_plugin': event_plugin,
	            'taxo_cats': taxo_cats,
	            'taxo_tags': taxo_tags
	        };

	        var terms_space = jQuery('.event_taxo_terms_wraper');
	        terms_space.html('<span class="spinner is-active" style="float: none;"></span>');
	        // send ajax request.
	        jQuery.post(ajaxurl, data, function(response) {
	            if( response != '' ){
	            	terms_space.html( response );
	            }else{
	            	terms_space.html( '' );
	            }	            
	        });    
	    });
	    jQuery(".eventbrite_event_plugin").trigger('change');                  
	});

	jQuery(document).ready(function() {
	    jQuery('.enable_ticket_sec').on( 'change', function() {
			var ischecked= jQuery(this).is(':checked');
			if(ischecked){
				jQuery('.checkout_model_option').show();
			}else{
				jQuery('.checkout_model_option').hide();
			}
	    });
	    jQuery(".enable_ticket_sec").trigger('change');
	});

	// Color Picker
	jQuery(document).ready(function($){
		$('.iee_color_field').each(function(){
			$(this).wpColorPicker();
		});
	});

	//Shortcode Copy Text
	jQuery(document).ready(function($){
		$(document).on("click", ".iee-btn-copy-shortcode", function() { 
			var trigger = $(this);
			$(".iee-btn-copy-shortcode").removeClass("text-success");
			var $tempElement = $("<input>");
			$("body").append($tempElement);
			var copyType = $(this).data("value");
			$tempElement.val(copyType).select();
			document.execCommand("Copy");
			$tempElement.remove();
			$(trigger).addClass("text-success");
			var $this = $(this),
			oldText = $this.text();
			$this.attr("disabled", "disabled");
			$this.text("Copied!");
			setTimeout(function(){
				$this.text("Copy");
				$this.removeAttr("disabled");
			}, 800);
	  
		});

	});

})( jQuery );
