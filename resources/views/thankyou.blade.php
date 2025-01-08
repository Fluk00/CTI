<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        /* Global Styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }

        /* Header Section */
        .language-layer {
            background-color: #00008E;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 5px 20px;
        }

        .language-layer a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .language-layer a:hover {
            color: #ffdd57;
        }

        .logo-layer {
            background-color: white;
            display: flex;
            align-items: center;
            padding: 10px 20px;
        }

        .logo-layer img {
            height: 40px;
            margin-right: 15px;
        }

        /* Content Section */
        .content {
            text-align: center;
            padding: 50px 20px;
            background-color: #f4f4f4;
        }

        .content img {
            height: 100px;
            margin-bottom: 20px;
        }

        .content h1 {
            font-size: 28px;
            color: #333;
        }

        .content p {
            font-size: 18px;
            color: #666;
            margin: 10px 0 30px;
        }

        .content .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .content .btn:hover {
            background-color: #218838;
        }

        /* Footer Section */
        footer {
            background-color: #001432;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        footer h5 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        footer address {
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
        }

        footer p {
            font-size: 14px;
            margin-bottom: 5px;
        }

        footer .social-icon img {
            height: 30px;
            margin: 0 10px;
        }

        footer .social-icon img:hover {
            opacity: 0.8;
        }

        footer .world-map {
            max-width: 100%;
            height: auto;
            text-align: right;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            width: 100%;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
        }

        .footer-left {
            flex: 1;
            min-width: 300px;
        }

        .footer-right {
            flex: 1;
            text-align: right;
            min-width: 300px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="language-layer">
            <a href="#">ID</a>
            <a href="#">EN</a>
        </div>
        <div class="logo-layer">
            <img src="{{ asset('images/logo helios.png') }}" alt="Helios Logo">
            <img src="{{ asset('images/logo sangfor.png') }}" alt="Sangfor Logo">
        </div>
    </header>

    <!-- Content Section -->
    <div class="content">
        <img src="{{ asset('images/ty.png') }}" alt="Thank You Icon">
        <h1>Thank You for Your Interest</h1>
        <p>Our team will contact you within 5 working days.</p>
        <a href="/" class="btn">Back to Homepage</a>
    </div>

    <!-- Footer Section -->
    <footer class="bg-primary text-white py-5" style="background-image: url('{{ asset('images/slider.png') }}'); background-size: cover; background-position: center;">
        <div class="footer-content">
            <div class="footer-left">
                <h5>PT. Helios Informatika Nusantara</h5>
                <address>
                    Centennial Tower, 12th Floor,<br>
                    Jl. Jenderal Gatot Subroto<br>
                    No. Kav 24-25, Jakarta 12930, Indonesia
                </address>
                <p><strong>Phone:</strong> +62 21 8062 2220</p>
                <p><strong>Email:</strong> Tencent@helios.id</p>
            </div>
            <div class="footer-right">
                <img src="{{ asset('images/worldmap.png') }}" alt="World Map" class="world-map">
            </div>
        </div>
        <div class="social-icons">
            <a href="#"><img src="{{ asset('images/FB.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('images/ig.png') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('images/twt.png') }}" alt="Twitter"></a>
            <a href="#"><img src="{{ asset('images/yt.png') }}" alt="YouTube"></a>
            <a href="#"><img src="{{ asset('images/in.png') }}" alt="LinkedIn"></a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 PT. Helios Informatika Nusantara - All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
