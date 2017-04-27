tinymce.init({
    selector: "textarea.tinymce",
    width : "100%",
    height: 300,
    image_title: true, 

    automatic_uploads: true,

    images_upload_url: 'postAcceptor.php',

	
    file_picker_types: 'image', 

	
    file_picker_callback: function(cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');



      input.onchange = function() {
        var file = this.files[0];


        var id = 'blobid' + (new Date()).getTime();
        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
        var blobInfo = blobCache.create(id, file);
        blobCache.add(blobInfo);

      cb(blobInfo.blobUri(), { title: file.name });
      };

      input.click();
    },
    plugins: [
        "image",
        "searchreplace visualblocks fullscreen",
        "table contextmenu paste"
    ],
    
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",


    
  });