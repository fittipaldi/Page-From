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

    <main>
        <h1>Kamma Holding Text</h1>
        <p class="sub">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a sodales purus. Quisque
            elementum elementum arcu vel
            ullamcorper. Duis mattis id tortor non viverra. Quisque consequat varius feugiat. Mauris suscipit at leo vel
            efficitur.</p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque odio ac dui iaculis, ut
            tempor odio
            feugiat. Pellentesque sit amet pellentesque orci. Maecenas ut facilisis est. In egestas malesuada mauris ac
            sollicitudin. Donec justo ex, efficitur ultricies posuere quis, imperdiet sit amet massa. In varius sit amet
            elit id
            gravida. Sed eu tellus ac ligula condimentum luctus. Phasellus tempor a nisi sed faucibus. Proin vulputate
            eros nec
            mattis malesuada. Donec lobortis tristique urna sit amet faucibus. Phasellus cursus tellus nisi, vel
            tristique ipsum
            lacinia ac. Quisque purus velit, suscipit eu lectus ac, finibus laoreet quam.
        </p>
        <p>
            Curabitur nunc est, auctor convallis odio quis, lobortis gravida odio. Ut magna urna, tristique non velit
            vitae, dapibus
            ultrices augue. Phasellus dui nulla, hendrerit vitae lobortis sit amet, commodo quis nisi. Aliquam
            vestibulum, sem a
            fermentum auctor, turpis diam porta nisl, eu pellentesque quam justo non odio. Aliquam vestibulum fringilla
            turpis,
            suscipit porta metus faucibus nec. Nulla facilisi. Ut finibus sit amet nulla sit amet varius. We are hiring
            at the moment, to find out more <a class="red" href="https://www.kammadata.com/about/jobs/">click here</a>
        </p>
        <p>
            Phasellus blandit est nec laoreet dapibus. Ut ut est sit amet dui posuere interdum a id lacus. Duis ornare
            risus eros,
            vel suscipit dui malesuada id. Phasellus tincidunt molestie neque, in pulvinar orci tincidunt vel. Nulla
            vitae elit
            lacus. Nulla cursus tempus fermentum. Nunc ac justo ut felis semper bibendum nec a diam. Sed feugiat lectus
            turpis,
            cursus sagittis nunc iaculis sed. Aenean aliquet venenatis tellus, eu fermentum lacus malesuada quis.
            Vivamus aliquet
            fringilla elit, a cursus lectus dignissim a.
        </p>
        <p>
            Praesent vitae lacus et dui facilisis consequat. Pellentesque malesuada bibendum gravida. Donec vel
            dignissim velit, eu
            pulvinar lectus. Mauris ultrices urna iaculis blandit cursus. Donec neque dui, porttitor iaculis tincidunt
            at, tincidunt
            nec ipsum. Nunc elementum mi nisi, at iaculis ex rutrum hendrerit. Suspendisse vel pharetra ante. Donec in
            consequat
            lacus. Cras eget ligula eleifend, faucibus tellus eu, rutrum felis.
        </p>
        <div class="work">
            <p>
                <a class="clean" href="https://www.kammadata.com/about/our-values/">
                    READ MORE ABOUT HOW WE WORK <span class="red">⇾</span>
                </a>
            </p>
        </div>
    </main>

    <footer>
        <p>© Kamma {{ date('Y') }} | <a href="https://www.kammadata.com/support/privacy/">Privacy Policy</a> | <a
                href="https://www.kammadata.com/support/terms/">Terms and Conditions</a> | <a
                href="https://www.kammadata.com/support/contact/">Contact</a></p>
    </footer>
</div>
</body>
</html>
