
const btnEditAbstract = document.querySelector('#btn-edit-abstract');

const abstractHtml = document.querySelector('#abstract-html');
const abstractMd = document.querySelector('#abstract-md');
const abstractPreview = document.querySelector('#abstract-preview');

const stackeditAbstract = new Stackedit();

btnEditAbstract.addEventListener('click', function() {
    // Open the iframe
    stackeditAbstract.openFile({
        name: 'Filename', // with an optional filename
        content: {
            text: abstractMd.value // and the Markdown content.
        }
    });
});

// Listen to StackEdit events and apply the changes to the textarea.
stackeditAbstract.on('fileChange', (file) => {
    abstractMd.value = file.content.text;
    abstractHtml.value = file.content.html;
    abstractPreview.innerHTML = file.content.html;
});
