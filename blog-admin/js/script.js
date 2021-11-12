$(function() {

    $('.nav_toggler').on('click', function(){
      $('.menu').addClass('on_screen');
    });

    $('.nav_back').on('click', function(){
      $('.menu').removeClass('on_screen');
    });

    $('.nav-tabs li button').on('click', function(){
      $('.menu').removeClass('on_screen');
      window.location.hash = $(this).attr("id");
      
    });

    $('#Post_write').trumbowyg({
      svgPath : 'js/ui/icons.svg',
      btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        // ['formatting'],
        ['strong', 'em'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
    });

    $('#Post_edit').trumbowyg({
      svgPath : 'js/ui/icons.svg',
      btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        // ['formatting'],
        ['strong', 'em'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
    });

    $('.active_btn').on('click', function(){

      $('#editposttab').click();

    });

    $('.trash_btn').on('click', function(){

      $('#restoreposttab').click();

    });

    $('.edit_btn').on('click', function(){

      $('#editposttab').click();

    });

    

    var link_location = window.location.hash;
	  var target_tab = link_location.replace(/[^a-zA-Z ]/g, "");
	  console.log(target_tab);
    $("#" + target_tab).click();

    $('.image_remove').on('click', function(){
      $('.edit-image').css({'display' : 'none'});
      $('#image_remove').val('deleteimg');
    });


});


function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
        // $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    $('.file-upload-image').attr('src','#');
    $('.image-title').html('Upload Your Image');
  }
  $('.image-upload-wrap').bind('dragover', function() {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function() {
    $('.image-upload-wrap').removeClass('image-dropping');
  });