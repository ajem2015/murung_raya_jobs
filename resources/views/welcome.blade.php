<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Figtree', sans-serif;
                background-color: #fff;
                color: #333;
            }

            .container {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 20px;
            }

            .header {
                position: absolute;
                top: 20px;
                right: 20px;
            }

            .header a {
                color: #ff2d20;
                text-decoration: none;
                margin-left: 20px;
                font-weight: 600;
            }

            .header a:hover {
                color: #e02515;
            }

            .content {
                text-align: center;
                max-width: 800px;
            }

            .logo {
                margin-bottom: 40px;
            }

            .logo svg {
                width: 80px;
                height: 80px;
            }

            h1 {
                font-size: 3rem;
                font-weight: 600;
                margin-bottom: 20px;
                color: #ff2d20;
            }

            p {
                font-size: 1.2rem;
                color: #666;
                margin-bottom: 40px;
            }

            .links {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
                margin-top: 40px;
            }

            .link-card {
                background: #f9fafb;
                border-radius: 8px;
                padding: 20px;
                text-decoration: none;
                color: #333;
                transition: all 0.3s ease;
                border: 1px solid #e5e7eb;
            }

            .link-card:hover {
                background: #fff;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                transform: translateY(-2px);
            }

            .link-card h3 {
                color: #ff2d20;
                font-size: 1.1rem;
                margin-bottom: 10px;
            }

            .link-card p {
                font-size: 0.9rem;
                margin: 0;
            }

            @media (max-width: 768px) {
                h1 {
                    font-size: 2rem;
                }

                .links {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        @if (Route::has('login'))
            <div class="header">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="container">
            <div class="content">
                <div class="logo">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9965L25.4519 63.7861C25.3971 63.8148 25.3396 63.8378 25.2799 63.8549C25.255 63.8617 25.2297 63.8649 25.2044 63.8699C25.0967 63.8909 24.9867 63.8909 24.879 63.8699C24.8537 63.8649 24.8285 63.8617 24.8036 63.8549C24.7439 63.8378 24.6864 63.8148 24.6316 63.7861L0.671754 49.9965C0.519407 49.9092 0.392818 49.7832 0.304889 49.6314C0.21696 49.4795 0.170547 49.307 0.170547 49.1315V14.8858C0.170547 14.7978 0.182155 14.7102 0.20513 14.6253C0.215268 14.5914 0.230606 14.5594 0.24496 14.5276C0.258855 14.4969 0.272749 14.4691 0.289927 14.4433C0.318838 14.3974 0.350117 14.3535 0.38397 14.3116C0.406436 14.284 0.430416 14.2583 0.45587 14.2333L12.9389 1.56497C13.1113 1.39178 13.3346 1.29007 13.5703 1.27501C13.8059 1.25995 14.0402 1.33232 14.2307 1.48087L26.2832 11.5653V1.67354C26.2832 1.49803 26.3296 1.32553 26.4176 1.17365C26.5056 1.02177 26.6321 0.895765 26.7843 0.808456L37.8039 0.00854791C38.0396 -0.00651341 38.2739 0.0658535 38.4644 0.214402C38.6549 0.362952 38.7906 0.575697 38.8477 0.814964L40.5448 7.91916L52.4053 1.48087C52.5958 1.33232 52.8301 1.25995 53.0658 1.27501C53.3014 1.29007 53.5247 1.39178 53.6971 1.56497L61.5203 9.03952C61.5457 9.06454 61.5697 9.09029 61.5922 9.11675C61.626 9.15858 61.6573 9.20247 61.6859 9.24808C61.7002 9.27387 61.7141 9.30162 61.7262 9.32938C61.7496 9.37945 61.7699 9.43108 61.7869 9.48391C61.7991 9.51757 61.8081 9.55194 61.8139 9.58676C61.8291 9.64753 61.8403 9.70931 61.8473 9.77163C61.8538 9.81866 61.8548 9.86569 61.8548 9.91418V14.6253Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <h1>Laravel</h1>
                <p>You're running Laravel {{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>

                <div class="links">
                    <a href="https://laravel.com/docs" class="link-card" target="_blank">
                        <h3>Documentation</h3>
                        <p>Laravel has wonderful documentation covering every aspect of the framework.</p>
                    </a>

                    <a href="https://laracasts.com" class="link-card" target="_blank">
                        <h3>Laracasts</h3>
                        <p>Thousands of video tutorials on Laravel, PHP, and JavaScript. Check them out!</p>
                    </a>

                    <a href="https://laravel-news.com" class="link-card" target="_blank">
                        <h3>Laravel News</h3>
                        <p>All the latest Laravel news, straight to your browser.</p>
                    </a>

                    <a href="https://nova.laravel.com" class="link-card" target="_blank">
                        <h3>Laravel Nova</h3>
                        <p>Beautifully designed administration panel for your Laravel applications.</p>
                    </a>

                    <a href="https://forge.laravel.com" class="link-card" target="_blank">
                        <h3>Forge</h3>
                        <p>Server management made easy. Deploy your Laravel apps on any cloud provider.</p>
                    </a>

                    <a href="https://vapor.laravel.com" class="link-card" target="_blank">
                        <h3>Vapor</h3>
                        <p>Laravel Vapor is a serverless deployment platform powered by AWS.</p>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
