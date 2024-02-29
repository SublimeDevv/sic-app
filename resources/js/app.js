import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

let dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube tus archivos aquí',
    acceptedFiles: '.jpg, .jpeg, .png, .gif, .bmp',
    addRemoveLinks: true,
    uploadMultiple: false,
    maxFiles: 1,
    dictRemoveFile: 'Borrar Archivo',

    init: function () {
        if (document.querySelector('[name=image]').value.trim()) {
            console.log("No entra aqui")
            const imagePublic = {}
            imagePublic.size = 12345
            imagePublic.name = document.querySelector('[name=image]').value;
            this.options.addedfile.call(this, imagePublic);
            this.options.thumbnail.call(this, imagePublic, `/uploads/${imagePublic.name}`);
            imagePublic.previewElement.classList.add('dz-success', 'dz-complete');
        }

    }
});

dropzone.on('success', function (file, response) {
    console.log(response)
    document.querySelector('[name=image]').value = response.image;
});

dropzone.on('removedfile', function (file) {
    document.querySelector('[name=image]').value = '';
});


