const form = document.querySelector('#upload');

form.addEventListener('submit', function (event) {
    event.preventDefault();
    let file = this.querySelector('#fileupload').files[0]

    if (file) {
        let formdata = new FormData();
        formdata.append('file', file);

        let ajax = new XMLHttpRequest();
        ajax.addEventListener('load', completeHandler)

        ajax.open('POST', './upload.php');
        ajax.send(formdata)
    }
})

function completeHandler() {
    console.log('complete')
}