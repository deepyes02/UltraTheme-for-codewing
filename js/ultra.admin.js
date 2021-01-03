jQuery(document).ready(function($){
      var mediaUploader;
      $('#upload-button').click(function(e){
            e.preventDefault();
            if(mediaUploader) {
                  console.log(mediaUploader);
                  mediaUploader.open();
                  return;
            }
            mediaUploader = wp.media.frames.file_frame = wp.media({
                  title: 'Find your perfect looking photo, square recommended',
                  button: {
                        text: 'Choose Picture'
                  },
                  multiple: false
            });
            // console.log(mediaUploader); //shows some info here, keep extracting
      
            mediaUploader.on('select', function(){
                  attachment = mediaUploader.state().get('selection').first().toJSON();
                  console.log(attachment);
                  $('#profile_picture_url').val(attachment.url); //capture url and paste it to the input label after selection
            });
      });

      
}); //jquery die