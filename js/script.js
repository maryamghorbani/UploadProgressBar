const form = document.querySelector('#upload');
const progress = document.getElementById('progress');
const progressBar = progress.querySelector('.progress-bar');


form.addEventListener('submit', function (event) {
    event.preventDefault();

    let file = this.querySelector('#fileupload').files[0]

    if (file) {
        progress.classList.remove('d-none');
        let formdata = new FormData();
        formdata.append('file', file);

        let ajax = new XMLHttpRequest();
        ajax.upload.addEventListener('progress' , progressHandler)
        ajax.addEventListener('load', completeHandler)

        ajax.open('POST', './upload.php');
        ajax.send(formdata)
    }
})


function progressHandler(event) {
    let percent = Math.round((event.loaded / event.total) * 100)
    progressBar.style.width = `${percent}%`
    progressBar.innerHTML = `${percent}%`
}


function completeHandler() {
    console.log('complete')
}