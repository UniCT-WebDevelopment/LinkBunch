const { default: axios } = require('axios');

require('./bootstrap');

require('alpinejs');

$('.user-link').on('click', function(e) {
    axios.post('/visit/' + $(this).data('link-id'), {
        link: $(this).attr('href')
    })
        .then(response => console.log('response: ', response))
        .catch(error => console.error('error: ', error));
});