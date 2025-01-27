<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Demo</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
@yield('main')
</body>

<script>
    @yield('customJs')
    function renderTemplate(template) {
        fetch(`/api/` + template)
            .then(response => response.text())
            .then(data => {
                if (template !== 'screen1') {
                    document.querySelector('.content').innerHTML = data;
                    return;
                } else {
                    let result = '';
                    data = JSON.parse(data);
                    result += '<tr>';
                    data.data.forEach(item => {
                        result += `<td>${item.title}</td>`;
                        result += `<td>${item.status}</td>`;
                        result += `<td>${item.notes}</td>`;
                    });
                    result += '</tr>';
                    document.querySelector('.content').innerHTML = result;
                }
            });
    }
</script>

<style>
    @yield('customCss')
</style>
</html>
