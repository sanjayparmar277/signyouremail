// Tab based section hide/show
function openTabs(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" is-active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " is-active";
}

$(document).ready(function () {
	// Show Add Additional Fields Modal popup
    $('.button.is-fullwidth').on('click', function () {
        $(this).siblings('#addRemoveFieldModel').css('display', 'block');
        $('#addRemoveFieldCard').css('display', 'block');
    });

    // Close uing close button Add Additional Fields modal
    $('#addRemoveFieldModel .modal-card-foot .button').on('click', function () {
        $(this).parents('#addRemoveFieldModel').css('display', 'none');
        $(this).parents('#addRemoveFieldCard').css('display', 'none');
    });

    // close uing cross Add Additional Fields modal
    $('#addRemoveFieldModel .modal-card-head .delete').on('click', function () {
        $(this).parents('#addRemoveFieldModel').css('display', 'none');
        $(this).parents('#addRemoveFieldCard').css('display', 'none');
    });


 //    var $fieldCount = 0;
	// $('#addRemoveFieldModel span.button.is-info.has-extra-padding').on('click', function(){
	// 	alert('444');
	// 	$(".error").remove();
	// 	$(".values").remove();
	// 	if($("#input_type").val()!=""){
	// 		var $type = $(".select.is-fullwidth").val();
	// 		//alert($type)
	// 		$fieldCount++;;
	// 		if($type == 'text') {
	// 			var $node = '<p><label for="text'+$fieldCount+'">Text '+$fieldCount+': </label><input type="text" name="text'+$fieldCount+'" id="text'+$fieldCount+'"/><span class="removeField">Remove</span></p>';
	// 		} else if($type == 'phone') {
	// 			var $node = '<p><label for="textarea'+$fieldCount+'">Textarea '+$fieldCount+': </label><textarea name="textarea'+$fieldCount+'" id="textarea'+$fieldCount+'"/><span class="removeField">Remove</span></p>';
	// 		} else if($type == 'link') {
	// 			var $node = '<p><label for="file'+$fieldCount+'">File '+$fieldCount+': </label><input type="file" name="file'+$fieldCount+'" id="file'+$fieldCount+'"/><span class="removeField">Remove</span></p>';
	// 		}
	// 		$('.columns.has-small-gap .column').last().after($node);
	// 	} else {
	// 		$error_msg = "<p style='color:red;' class='error'>Select input type<p>";
	// 		$('form').prepend($error_msg);
	// 	}
	// });
	
	// $('form').on('click', '.removeField', function(){
	// 	$(this).parent().remove();
	// });


	var max_fields = 10; //Maximum allowed input fields 
    var wrapper    = $(".wrapper"); //Input fields wrapper
    var add_button = $(".button.is-info.has-extra-padding"); //Add button class or ID
    var x = 1; //Initial input field is set to 1
 
 //When user click on add input button
 $(add_button).click(function(e){
        e.preventDefault();
 //Check maximum allowed input fields
        if(x < max_fields){ 
            alert(x);

            x++; //input field increment
 //add input field
            // $(wrapper).append('<div><input type="text" name="input_array_name[]" placeholder="Input Text Here" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
            var fieldName = $('.addNewField .control:nth-child(1) input').val();
            var fieldValue = $('.addNewField .control:nth-child(2) input').val();

            // $(wrapper).append('<div class="column is-12"><div class="field is-marginless remove_field"><div class="field-body"><div class="field has-addons"><p class="control"><input type="text" placeholder="Field Name" class="input"></p> <p class="control is-expanded"><input type="text" placeholder="Field Value" class="input"></p> <p class="control"><span class="select is-fullwidth"><select><option value="text">Text</option> <option value="phone">Phone</option> <option value="link">Link</option></select></span></p> <div class="control"><span class="button is-danger"><span class="icon"><i class="icon-trash-o"></i></span> <span>Remove</span></span></div></div></div></div></div>');
            $('.addAdonsField').append('<div id="dynamic_'+x+'" class="column is-12 full-hide"><div class="field is-marginless"><div class="field-body"><div class="field has-addons"><p class="control"><input value="'+fieldName+'" type="text" placeholder="Field Name" class="input"></p> <p class="control is-expanded"><input value="'+fieldValue+'" type="text" placeholder="Field Value" class="input"></p> <p class="control"><span class="select is-fullwidth"><select><option value="text">Text</option> <option value="phone">Phone</option> <option value="link">Link</option></select></span></p> <div class="control remove_field"><span id="dynamic_del_'+x+'" class="button is-danger"><span class="icon"><i class="icon-trash-o"></i></span> <span>Remove</span></span></div></div></div></div></div>');
            // $('.addAdonsinputField').append('<div class="column is-12 is-half-widescreen"><div class="field"><label class="label">Fax</label> <p class="control"><input name="fax" type="text" placeholder="Fax" class="input"></p></div></div>');            

            $('.addAdonsFieldinput').append('<div id="dynamic_'+x+'" class="column is-12 is-half-widescreen full-hide"><div class="field"><label class="label">'+fieldName+'</label> <p class="control"><input name="basic[custom_fields]['+x+']['+fieldName+']" value="'+fieldValue+'" type="text" placeholder="Fax" class="input"> <input type="hidden" name="basic[custom_fields]['+x+'][type]" value="text"><input type="hidden" name="basic[custom_fields]['+x+'][name]" value="test456456"> </p></div></div>');

        }
    });
    
    /*$('[name="input_array_name_popup"]').on('keyup', function(e){
        //e.preventDefault();
        if(x < max_fields){ 
          console.log(x);
          x++; 
          alert($(this).val());
        }
    });*/

    //when user click on remove button
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault();
        alert (x+'_test');
        $(this).parents('.full-hide').remove(); 
        $('#dynamic_'+x).remove(); 
        alert (alert ('#dynamic_'+x));
        x--;
    });

});


/*--- ALL FIELD ADDED ---*/ 
$('.AddAnotherfield').click(function(){
  $('.addanotherfield-open').css('display', 'block');
});
$('.addanotherfield-hide').click(function(){
  $('.addanotherfield-open').css('display', 'none');
});


/*--- Social label remove ---*/ 
$('.delete-btn').click(function(){
    $(this).parents('.social-wrap').remove();
});


// 
$( function() {
    $( "#sortable").sortable({
      revert: true
    });
    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    $( ".button.is-info.drag-handle.delete-btn" ).disableSelection();
  } );

//Addon Disclaimer 
$('.addon-disclaimer').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-desclaimer-hide" draggable="false"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">disclaimer</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div><div class="field"><label class="label">Disclaimer</label> <p class="control"><span class="select"><select class="changdec"><option value="Breach of confidentiality"> Breach of confidentiality </option><option value="Unintentional transmission of computer viruses"> Unintentional transmission of computer viruses </option><option value="Custom Disclaimer"> Custom Disclaimer </option></select></span></p></div> <div class="field"><p class="control"><textarea name="disclaimer" type="text" placeholder="Disclaimer text here..." disabled="disabled" class="textarea" style="font-size: 11px;"></textarea></p></div> <div class="field"><label class="label">Font Size</label> <p class="control"><span class="select is-fullwidth"><select class="changfontsize"><option value="9">Extra Small</option> <option value="10">Small</option> <option value="11">Medium</option> <option value="12">Large</option></select></span></p></div></div></div></div> <!----></div></div>');  
    $('.remove-addon-this').click(function(){
        $(this).parents('.addon-desclaimer-hide').hide();  
    });
	$(".changdec").prop("selectedIndex", 0).change();
});

//Addon Banner
$('.addon-banner').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-banner-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content  show-content"><h3 class="card-header-title">banner</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div><div class="field"><label class="label">Banner Image</label> <p class="control"><div><img class="bannerimg" src="https://cdn.signmyemails.com/images/avatar.png" style="max-height: 75px; background: rgb(255, 255, 255);"> <!----> <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span> <input type="file" name="image" accept="image/*" class="is-hidden bannerimg"></label> <div class="modal is-active " style="display: none;"><div class="modal-card" style="display: none;"><header class="modal-card-head"><p class="modal-card-title">Crop &amp; upload This Image</p> <a class="delete"></a></header> <section class="modal-card-body"> <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div> </section> <footer class="modal-card-foot"><div class="columns is-fullwidth is-gapless"><div class="column"><div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div></div> <div class="column is-narrow has-text-left"><div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div></div></div></footer></div></div></div></p></div> <div class="field"><label class="label">Banner Link (optional)</label> <p class="control"><input name="banner_link" type="text" placeholder="Banner Link" class="input"></p></div> <div class="columns is-multiline"><div class="column is-12 is-half-widescreen"><div class="field"><label class="label">Banner Width</label> <div class="field-body"><div class="field has-addons"><p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"> 480 </span></p> <p class="control is-expanded"><input type="range" min="50" max="600" step="1" class="input"></p></div></div></div></div> <div class="column is-12 is-half-widescreen"><div class="field"><label class="label">Top/Bottom Spacing</label> <p class="control"><span class="select is-fullwidth"><select><option value="0">None</option> <option value="5">Small</option> <option value="10">Medium</option> <option value="15">Large</option></select></span></p></div></div></div></div></div></div> <!----></div></div>');  
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-banner-hide').hide();  
    });
});

//Addon Badges
$('.addon-badges').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-badges-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">badges</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div class="add-badge-wrap"><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Badge" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Image</label> <p class="control"><div><img src="" style="max-height: 75px; background: rgb(255, 255, 255); display: none;"> <!----> <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span> <input type="file" name="image" accept="image/*" class="bannerimg"></label> <div class="modal is-active " style="display: none;"><div class="modal-card" style="display: none;"><header class="modal-card-head"><p class="modal-card-title">Crop &amp; upload This Image</p> <a class="delete"></a></header> <section class="modal-card-body"> <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div> </section> <footer class="modal-card-foot"><div class="columns is-fullwidth is-gapless"><div class="column"><div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div></div> <div class="column is-narrow has-text-left"><div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div></div></div></footer></div></div></div></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link (optional)</label> <p class="control"><input type="text" placeholder="Badge Link" class="input"></p></div> <div class="field"><label class="label">Badge Width</label> <div class="field-body"><div class="field has-addons"><p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"> 100 </span></p> <p class="control is-expanded"><input type="range" min="20" max="450" step="1" class="input"></p></div></div></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Badge" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Image</label> <p class="control"><div><img src="" style="max-height: 75px; background: rgb(255, 255, 255); display: none;"> <!----> <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span> <input type="file" name="image" accept="image/*" class="is-hidden"></label> <div class="modal is-active " style="display: none;"><div class="modal-card" style="display: none;"><header class="modal-card-head"><p class="modal-card-title">Crop &amp; upload This Image</p> <a class="delete"></a></header> <section class="modal-card-body"> <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div> </section> <footer class="modal-card-foot"><div class="columns is-fullwidth is-gapless"><div class="column"><div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div></div> <div class="column is-narrow has-text-left"><div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div></div></div></footer></div></div></div></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link (optional)</label> <p class="control"><input type="text" placeholder="Badge Link" class="input"></p></div> <div class="field"><label class="label">Badge Width</label> <div class="field-body"><div class="field has-addons"><p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);">100</span></p> <p class="control is-expanded"><input type="range" min="20" max="450" step="1" class="input"></p></div></div></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Badge" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Image</label> <p class="control"><div><img src="" style="max-height: 75px; background: rgb(255, 255, 255); display: none;"> <!----> <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span> <input type="file" name="image" accept="image/*" class="is-hidden"></label> <div class="modal is-active " style="display: none;"><div class="modal-card" style="display: none;"><header class="modal-card-head"><p class="modal-card-title">Crop &amp; upload This Image</p> <a class="delete"></a></header> <section class="modal-card-body"> <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div> </section> <footer class="modal-card-foot"><div class="columns is-fullwidth is-gapless"><div class="column"><div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div></div> <div class="column is-narrow has-text-left"><div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div></div></div></footer></div></div></div></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link (optional)</label> <p class="control"><input type="text" placeholder="Badge Link" class="input"></p></div> <div class="field"><label class="label">Badge Width</label> <div class="field-body"><div class="field has-addons"><p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);">100</span></p> <p class="control is-expanded"><input type="range" min="20" max="450" step="1" class="input"></p></div></div></div></div></div></div> <span class="button is-primary is-block add-badge-content">Add Badge</span></div></div> <!----></div></div>');  
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-badges-hide').hide();  
    });
});

//Addon Badges
$('.addon-links').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-links-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">links</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div class="add-link-contetn"><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div><div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div></div> <span class="button is-primary is-block">Add Link</span></div></div> <!----></div></div>');
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-links-hide').hide();  
    });
});

//Addon Quote
$('.addon-quote').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-quote-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">quote</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div><div class="columns is-multiline"><div class="column is-12"><div class="field"><label class="label">Text</label> <p class="control"><input type="text" placeholder="Text" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link (optional)</label> <p class="control"><input type="text" placeholder="Link" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text(optional)</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div></div></div></div> <!----></div></div>');
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-quote-hide').hide();  
    });
});

//Addon mobileapp
$('.addon-mobileApp').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-mobileApp-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">mobileApp</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div><div class="field"><label class="label">Call To Action</label> <p class="control"><input type="text" placeholder="Call To Action" class="input"></p></div> <div class="field"><label class="label"><span>Android App</span><br></label> <div class="columns"><div class="column is-narrow"><img src="https://s3.amazonaws.com/signmyemails/assets/site/google_play_badge.png" alt="" style="width: 100%; max-width: 130px;"></div> <div class="column"><p class="control"><input type="text" placeholder="Android App Url" class="input"></p></div></div></div> <div class="field"><label class="label"><span>IOS App</span><br></label> <div class="columns"><div class="column is-narrow"><img src="https://s3.amazonaws.com/signmyemails/assets/site/app_store_badge.png" alt="" style="width: 100%; max-width: 130px;"></div> <div class="column"><p class="control"><input type="text" placeholder="IOS App Url" class="input"></p></div></div></div></div></div></div> <!----></div></div>');
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-mobileApp-hide').hide();  
    });
});

//Addon Meeting
$('.addon-meeting').click(function(){
    $('.installed-addons').append('<div class="card card-item is-stacked is-active addon-meeting-hide"><header role="tab" aria-expanded="false" class="card-header touchable drag-handle has-danger-bg is-uppercase show-content"><h3 class="card-header-title">mobileApp</h3> <span class="card-header-button"><a class="button is-dark is-small"><span class="icon is-small"><i class="icon-pencil"></i></span><span>EDIT</span></a> <a class="button is-dark is-small remove-addon-this"><span class="icon is-small"><i class="icon-trash-o"></i></span><span>REMOVE</span></a></span></header> <div style="display: none;" class="show-content-edit"><div class="card-content"><div class="card-content-box"><div><div class="field"><label class="label">Call To Action</label> <p class="control"><input type="text" placeholder="Call To Action" class="input"></p></div> <div class="field"><label class="label"><span>Android App</span><br></label> <div class="columns"><div class="column is-narrow"><img src="https://s3.amazonaws.com/signmyemails/assets/site/google_play_badge.png" alt="" style="width: 100%; max-width: 130px;"></div> <div class="column"><p class="control"><input type="text" placeholder="Android App Url" class="input"></p></div></div></div> <div class="field"><label class="label"><span>IOS App</span><br></label> <div class="columns"><div class="column is-narrow"><img src="https://s3.amazonaws.com/signmyemails/assets/site/app_store_badge.png" alt="" style="width: 100%; max-width: 130px;"></div> <div class="column"><p class="control"><input type="text" placeholder="IOS App Url" class="input"></p></div></div></div></div></div></div> <!----></div></div>');
    $('.remove-addon-this').click(function(){
      $(this).parents('.addon-meeting-hide').hide();  
    });
});


  $("body").delegate('header.show-content', 'click', function(){
    $(this).siblings('.show-content-edit').toggleClass('hide-show');
  });

// Remove Badge
$('body').on('click', '.delete.is-medium', function(){
  $(this).parent('div').remove();
});

// Select id and show content
$('#selectList').change(function () {
    if ($(this).val() == 1){
        $('.template-style1').addClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 2){
        $('.template-style1').removeClass('active');
        $('.template-style2').addClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 3){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').addClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 4){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').addClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 5){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').addClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 6){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').addClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 7){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').addClass('active');
        $('.template-style8').removeClass('active');
      }else if($(this).val() == 8){
        $('.template-style1').removeClass('active');
        $('.template-style2').removeClass('active');
        $('.template-style3').removeClass('active');
        $('.template-style4').removeClass('active');
        $('.template-style5').removeClass('active');
        $('.template-style6').removeClass('active');
        $('.template-style7').removeClass('active');
        $('.template-style8').addClass('active');
      }
});


// add badge on click 
$('body').on('click', '.add-badge-content', function(){
  $(this).siblings('.add-badge-wrap').append('<div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Badge" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Image</label> <p class="control"></p><div><img src="" style="max-height: 75px; background: rgb(255, 255, 255); display: none;"> <!----> <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span> <input type="file" name="image" accept="image/*" class="is-hidden"></label> <div class="modal is-active " style="display: none;"><div class="modal-card" style="display: none;"><header class="modal-card-head"><p class="modal-card-title">Crop &amp; upload This Image</p> <button class="delete"></button></header> <section class="modal-card-body"> <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div> </section> <footer class="modal-card-foot"><div class="columns is-fullwidth is-gapless"><div class="column"><div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div></div> <div class="column is-narrow has-text-left"><div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div></div></div></footer></div></div></div><p></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link (optional)</label> <p class="control"><input type="text" placeholder="Badge Link" class="input"></p></div> <div class="field"><label class="label">Badge Width</label> <div class="field-body"><div class="field has-addons"><p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);">100</span></p> <p class="control is-expanded"><input type="range" min="20" max="450" step="1" class="input"></p></div></div></div></div></div>');
});

// add link on click
$('body').on('click', '.add-link', function(){
  $(this).siblings('.add-link-contetn').append('<div class="columns" style="background: rgb(245, 246, 247); margin-bottom: 18px; position: relative;"><a title="Remove Link" class="delete is-medium" style="position: absolute; right: 5px; top: 5px;"></a> <div class="column is-half"><div class="field"><label class="label">Link</label> <p class="control"><input type="text" placeholder="http://" class="input"></p></div></div> <div class="column is-half"><div class="field"><label class="label">Link Text</label> <p class="control"><input type="text" placeholder="Link Text" class="input"></p></div></div></div>');
});

// append new value

$('[name="basic[fullname]"]').keyup(function(){
  var fullName = $(this).val();
  $('.fullName').text(fullName);
});
$('[name="basic[jobTitle]"]').keyup(function(){
  var jobTitle = $(this).val();
  $('.jobTitle').text(jobTitle);
});
$('[name="basic[company]"]').keyup(function(){
  var company = $(this).val();
  $('.company').text(company);
});
$('[name="basic[website]"]').keyup(function(){
  var website = $(this).val();
  $('.website').text(website);
});
$('[name="basic[email]"]').keyup(function(){
  var email = $(this).val();
  $('.email').text(email);
});
$('[name="basic[phone]"]').keyup(function(){
  var phone = $(this).val();
  $('.phone').text(phone);
});
$('[name="basic[mobile]"]').keyup(function(){
  var mobile = $(this).val();
  $('.mobile').text(mobile);
});
$('[name="basic[address]"]').keyup(function(){
  var address = $(this).val();
  $('.address').text(address);
});
$('[name="basic[fax]"]').keyup(function(){
  var fax = $(this).val();
  $('.fax').css('display', 'block');
});


// Images upload
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('.blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

$('[name="social[platforms][linkedin]"]').keyup(function() {
  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.linkedIn').hide();
  }else{
    $('.linkedIn').show();
  }  
});


$('[name="social[platforms][instagram]"]').keyup(function() {
  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.istaGram').hide();
  }else{
    $('.istaGram').show();
  }  
});

$('[name="social[platforms][facebook]"]').keyup(function() {
  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.faceBook').hide();
  }else{
    $('.faceBook').show();
  }  
});

$('[name="social[platforms][twiter]"]').keyup(function() {
  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.twiTter').hide();
  }else{
    $('.twiTter').show();
  }  
});

$('[name="basic[fax]"]').keyup(function() {
  var fax = $(this).val();

  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.faxadd').css('display', 'none');
    $('.faxno').text('');
  }else{
    $('.faxadd').css('display', 'block')  
    $('.faxno').text(fax);
  }
});

$('[name="basic[custom_fields][1][skype]"]').keyup(function() {
  var fax = $(this).val();

  var checkLength = $(this).val();
   
  if(checkLength == 0 || checkLength == null || checkLength == undefined || checkLength == ''){
    $('.skypeadd').css('display', 'none');
    $('.skypeval').text('');
  }else{
    $('.skypeadd').css('display', 'block')  
    $('.skypeval').text(fax);
  }
});

$('body').on( 'change', '.changdec', function(){
  var desclaimerVal = $(this).val();

  if(desclaimerVal == "Breach of confidentiality"){
    $('[name="disclaimer"]').attr("disabled", 'disabled');
    $('[name="disclaimer"]').val('This email and any files transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. If you have received this email in error please notify the system manager. This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. If you are not the intended recipient you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited.');
  }else if(desclaimerVal == "Unintentional transmission of computer viruses" ){
    $('[name="disclaimer"]').attr("disabled", 'disabled');
    $('[name="disclaimer"]').val('WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. The sender therefore does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission.');
  }else{
    $('[name="disclaimer"]').removeAttr("disabled");
    $('[name="disclaimer"]').val('');
  }
});

// 01-09-2019

// disclaimer append text
$('body').on('keyup', '[name="disclaimer"]',function(){
  var disclaimer = $(this).val();
  $('.disclaimer').text(disclaimer);
});
$('body').on( 'change', '.changdec', function(){
  var descVal = $('[name="disclaimer"]').val();
  $('.disclaimer').text(descVal);
});
$('body').on( 'change', '.changfontsize', function(){
  var Val = $(this).val();
  $('[name="disclaimer"]').css("font-size", Val + "px");
  $('.disclaimer').css("font-size", Val + "px");
});

function readURLbanner(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.bannerimg').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("body").on('change', '.bannerimg', function() {
  readURLbanner(this);
});

$("body").on('change', '.bannerimg', function() {
  readURLbanner(this);
});
