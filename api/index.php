<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Avatar Factory AI</title>
    
    <!-- include the Press Start 2P font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <!-- include any CSS stylesheets and JavaScript files here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- inline styles -->
    <style>
        /* page styles */
        body {
            background-color: black;
            color: white;
            font-family: 'Press Start 2P', sans-serif;
            max-width: 960px;
            margin: 0 auto;
        }
        
        /* hero section styles */
        #hero {
            padding: 20px;
            text-align: center;
        }
        
        /* image grid styles */
        #image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-gap: 10px;
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .image-item {
            padding: 0;
        }
        
        .image-item img {
            max-width: 100%;
            height: auto;
        }

        /* font styles */
        h1 {
            font-size: 48px;
            font-weight: bold;
        }

        /* FAQ styles */
        #faq {
            max-width: 650px; /* make the FAQ section a little bit wider */
            margin: 0 auto; /* center the FAQ section */
            padding-top: 40px; /* add more vertical padding to the top of the FAQ section */
            padding-bottom: 40px; /* add more vertical padding to the bottom of the FAQ section */
        }
        
        details {
            margin-bottom: 20px;
        }
        
        summary {
            font-weight: bold; /* make the FAQ questions bolder */
            color: #ccc; /* make the FAQ questions a light tint of grey */
            cursor: pointer;
        }

        /* button styles */
        .buy-now-button {
            background-color: #ffcc00; /* change the yellow button tint to a more retro color */
            border-radius: 5px; /* make the button rounded */
            color: black;
            display: inline-block; /* make the button not a block element */
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
        }

        .actions {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- add your page content here -->
    
    <!-- create a hero section -->
    <div id="hero">
        <h1>Welcome to Avatar Factory AI 🎨</h1>
        <p>Looking for a unique and cool avatar for your social media profile or personal project? Look no further! Our powerful AI technology makes it easy to create stunning avatar images in minutes. Don't miss out, try Avatar Factory AI now! 🚀</p>
    </div>
    
    <!-- create an image grid section -->
    <div id="image-grid">
        <!-- generate the image grid dynamically using PHP -->
<?php
// define an array of placeholder image URLs
$image_urls = [
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
'https://via.placeholder.com/300',
];
        // loop through the image URLs and output an <img> element for each one
        foreach ($image_urls as $image_url) {
            echo "<div class='image-item'><img src='$image_url'></div>";
        }
    ?>
</div>

    <!-- create a Holiday Avatar promo section -->
    <div id="holiday-avatar-promo">
    <h2>Get ready for the holidays with Avatar Factory AI! 🎄</h2>
    <p>Create a festive avatar for your social media profile or holiday project. Our AI technology makes it easy to add holiday-themed accessories and outfits to your avatar, giving you a unique and fun look for the season. Try Avatar Factory AI now and get in the holiday spirit! 🎅</p>
    
    <!-- create a staggered image grid -->
    <div id="image-grid">
        <!-- generate the image grid dynamically using PHP -->
        <?php
        // define an array of placeholder image URLs
        $image_urls = [
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        'https://via.placeholder.com/300',
        ];
        
        // loop through the image URLs and output an <img> element for each one
        foreach ($image_urls as $image_url) {
            echo "<div class='image-item'><img src='$image_url'></div>";
        }
        ?>
    </div>
</div>

<!-- create a FAQ section -->
<div id="faq">
    <h2>Frequently Asked Questions</h2>
    <details>
        <summary>What is Avatar Factory AI? 🤖</summary>
        <p>Avatar Factory AI is a website that uses powerful AI technology to generate unique and cool avatar images for your social media profile or personal project. Our AI algorithms make it easy to create stunning avatar images in minutes, giving you a one-of-a-kind look that stands out from the crowd. 💪</p>
    </details>
    <details>
        <summary>How does it work? 🤔</summary>
        <p>To use Avatar Factory AI, simply upload a photo of yourself or choose one of our stock images. Then, use our user-friendly interface to customize your avatar with different hairstyles, accessories, and other options. Once you are happy with your avatar, you can download it or share it on social media. It's that easy! 💻</p>
    </details>
    <details>
        <summary>Is it free to use? 🆓</summary>
        <p>Yes, Avatar Factory AI is completely free to use! There are no hidden fees or subscription charges, and you can create as many avatar images as you like. However, if you want to unlock additional customization options or support our development efforts, you can make a donation through our website. 💰</p>
    </details>
    <details>
        <summary>Is it safe to use? 🔒</summary>
        <p>Yes, Avatar Factory AI is safe to use. We take your privacy and security very seriously, and we have implemented industry-standard measures to protect your personal information. Your uploaded images are automatically deleted from our servers after a short period of time, and we do not share your data with third parties without your consent. You can use Avatar Factory AI with confidence. 🔐</p>
    </details>
</div>

    <!-- create a "Buy Now" button as a link that redirects to Stripe Checkout -->
    <div class="actions">
        <a href="https://stripe.com/checkout" class="buy-now-button">Buy Now</a>
    </div>

</body>
</html>