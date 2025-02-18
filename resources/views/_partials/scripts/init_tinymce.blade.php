
let theme = "";

if (localStorage.getItem('hs_theme') === 'dark') {
    theme = 'dark';
} else if (localStorage.getItem('hs_theme') === 'default') {
    theme = 'default';
} else if (localStorage.getItem('hs_theme') === 'auto') {
    theme = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "default";
}

const initTinymceEditor = (content_theme) => {
    tinymce.init({
        skin: null,
        content_css: content_theme,
        selector: '.js-tiny-editor',
        language: 'fr_FR',
        license_key: 'gpl|{{ env('TINYMCE_API_KEY') }}',
        // advcode_inline: true,
        line_height_formats: '0.5 0.8 1 1.2 1.4 1.6 2',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
    });
}

initTinymceEditor(theme);

window.addEventListener('on-hs-appearance-change', function (ev) {
    if (ev.detail === 'dark') {
        theme = 'dark';
    } else if (ev.detail === 'default') {
        theme = 'default';
    } else if (ev.detail === 'auto') {
        theme = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "default";
    }

    tinymce.remove();
    initTinymceEditor(theme);
    console.log(theme);  // Affiche le thème pour vérifier
});
