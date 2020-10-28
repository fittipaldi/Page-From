<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kamma about page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamma About</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">

</head>
<body>
<div class="container">
    <header>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.32 103.54" class="svg-logo">
            <title>Kamma</title>
            <polygon
                points="76.92 0 54.73 0 17.75 46.45 17.75 0 0 0 0 103.54 17.75 103.54 17.75 56.8 58.43 103.54 81.95 103.54 36.39 50.88 76.92 0"></polygon>
            <polygon
                points="269.69 52.07 235.97 0 219.55 0 219.55 103.54 237.3 103.54 237.3 34.02 269.69 83.28 302.09 34.02 302.09 103.54 319.84 103.54 319.84 0 303.42 0 269.69 52.07"></polygon>
            <polygon
                points="404.26 52.07 370.53 0 354.12 0 354.12 103.54 371.87 103.54 371.87 34.02 404.26 83.28 436.65 34.02 436.65 103.54 454.4 103.54 454.4 0 437.99 0 404.26 52.07"></polygon>
            <path
                d="M137.76,0,97.53,103.54h8.29a14,14,0,0,0,13.07-9l27.9-72.24,27.89,72.24a14,14,0,0,0,13.08,9H196L155.81,0Z"></path>
            <path
                d="M538.09,0H520L479.81,103.54h8.29a14,14,0,0,0,13.07-9l27.9-72.24L557,94.58a14,14,0,0,0,13.08,9h8.28Z"></path>
        </svg>
    </header>

    <main class="main-form">
        <h3>Share to a friend</h3>
        <p class="light">Share this great deal with friends!</p>
        <form method="post" name="form" id="form" action="{{ URL::to('send-form') }}" class="share-form">
            @csrf
            <div class="form-group">
                <label for="your-name">Your name *</label>
                <input id="your-name" name="your_name" type="text" size="20"/>
            </div>
            <div class="form-group">
                <label for="friends-name">Friend's name *</label>
                <input id="friends-name" name="friends_name" type="text" size="20"/>
            </div>
            <div class="form-group">
                <label for="friends-email">Friend's email *</label>
                <input id="friends-email" name="friends_email" type="text" size="20"/>
            </div>
            <div class="form-group">
                <label for="submit"></label>
                <input id="submit" type="submit" value="SUBMIT"/>
            </div>
        </form>
    </main>

    <footer>
        <p>© Kamma {{ date('Y') }} | <a href="https://www.kammadata.com/support/privacy/">Privacy Policy</a> | <a
                href="https://www.kammadata.com/support/terms/">Terms and Conditions</a> | <a
                href="https://www.kammadata.com/support/contact/">Contact</a></p>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#form').on('submit', function (e) {
            e.preventDefault();
            const data = $(this).serialize();
            const action = $(this).attr('action');
            const method = $(this).attr('method');

            $.ajax({
                url: action,
                method: method,
                data: data,
                dataType: 'json',
                beforeSend: function (jqXHR, settings) {
                },
                success: function (data, textStatus, jqXHR) {
                    alert(data.message);
                }
            });
        });
    });
</script>

</body>
</html>
