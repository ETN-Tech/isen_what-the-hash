
const btnEditContent = document.querySelector('#btn-edit-content');

const contentHtml = document.querySelector('#content-html');
const contentMd = document.querySelector('#content-md');
const contentPreview = document.querySelector('#content-preview');

const stackeditContent = new Stackedit();

btnEditContent.addEventListener('click', function() {
    // Open the iframe
    stackeditContent.openFile({
        name: 'Filename', // with an optional filename
        content: {
            text: contentMd.value // and the Markdown content.
        }
    });
});

// Listen to StackEdit events and apply the changes to the textarea.
stackeditContent.on('fileChange', (file) => {
    contentMd.value = file.content.text;
    contentHtml.value = file.content.html;
    contentPreview.innerHTML = file.content.html;
});
