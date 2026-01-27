<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .hero .cta-button {
            display: inline-block;
            background-color: white;
            color: #667eea;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
            transition: transform 0.3s;
        }
        .hero .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        /* Features Section */
        .features {
            padding: 80px 20px;
            background-color: #f8f9fa;
        }
        .features-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .features h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #333;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .feature-card h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }
        .feature-card p {
            color: #666;
            line-height: 1.8;
        }
        
        /* About Section */
        .about {
            padding: 80px 20px;
            background-color: white;
        }
        .about-container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        .about h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
        }
        .about p {
            font-size: 18px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .about .btn-secondary {
            display: inline-block;
            background-color: #667eea;
            color: white;
            padding: 12px 35px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .about .btn-secondary:hover {
            background-color: #764ba2;
        }
        
        /* CTA Section */
        .cta-section {
            background-color: #333;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .cta-section .btn-contact {
            display: inline-block;
            background-color: #667eea;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .cta-section .btn-contact:hover {
            background-color: #764ba2;
        }
    </style>
</head>
<body>
    @include('common.header')

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to My Website</h1>
        <p>Discover amazing features and services that will transform your experience. We're here to help you succeed.</p>
        <a href="/about" class="cta-button">Learn More</a>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-container">
            <h2>Why Choose Us?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🚀</div>
                    <h3>Fast Performance</h3>
                    <p>Lightning-fast load times and optimized performance to ensure the best user experience.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure & Reliable</h3>
                    <p>Top-notch security measures to keep your data safe and protected at all times.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💡</div>
                    <h3>Innovative Solutions</h3>
                    <p>Cutting-edge technology and creative solutions tailored to your needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-container">
            <h2>About Our Platform</h2>
            <p>We are dedicated to providing the best services and solutions to our clients. With years of experience and a passionate team, we strive to deliver excellence in everything we do.</p>
            <p>Our mission is to empower businesses and individuals with the tools they need to succeed in today's digital world.</p>
            <a href="/about" class="btn-secondary">Read More About Us</a>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today and let's discuss how we can help you achieve your goals.</p>
        <a href="/contact-us" class="btn-contact">Contact Us</a>
    </section>

    @include('common.footer')
</body>
</html>