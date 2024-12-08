<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket Penjualan Stadion Maguwoharjo - Customer Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            scroll-behavior: smooth;
        }

        .highlight {
            color: #FFD700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .footer {
            background-color: #1a1a1a;
            color: white;
            padding: 50px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            padding: 20px;
            min-width: 250px;
        }

        .footer-section h2 {
            color: #FFD700;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer-section p,
        .footer-section ul {
            font-size: 14px;
            line-height: 24px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #FFD700;
        }

        .social-icons a {
            color: white;
            margin: 0 15px;
            font-size: 24px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a:hover {
            color: #FFD700;
            transform: scale(1.2);
        }

        .footer-bottom {
            background-color: #0f0f0f;
            padding: 15px 0;
            font-size: 14px;
            color: #888;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        header.scrolled {
            background-color: rgba(0, 0, 0, 0.95);
            padding: 10px 30px;
        }

        .logo {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        .nav-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: #FFD700;
            transform: translateY(-3px);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background-color: white;
            color: #333;
        }

        .btn-green {
            background-color: #4CAF50;
            color: white;
        }

        .btn-green:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .hero {
            height: 100vh;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('/homeadiks.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out 0.3s;
            animation-fill-mode: both;
        }

        .hero p {
            font-size: 1.8rem;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out 0.6s;
            animation-fill-mode: both;
        }

        .cta-button {
            padding: 15px 40px;
            font-size: 1.3rem;
            text-decoration: none;
            color: white;
            background-color: #FFD700;
            border-radius: 50px;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out 0.9s;
            animation-fill-mode: both;
        }

        .cta-button:hover {
            background-color: #FFC300;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .upcoming-matches {
            padding: 100px 20px;
            background-color: #f9f9f9;
        }

        .upcoming-matches h2 {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 60px;
            color: #333;
        }

        .match-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .match-card {
            flex-basis: calc(33.333% - 40px);
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .match-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .team-logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 30px;
            background-color: #f0f0f0;
        }

        .team-logo {
            width: 100px;
            height: 100px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .match-card:hover .team-logo {
            transform: scale(1.1);
        }

        .vs {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }

        .match-card h3 {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 1.5rem;
        }

        .match-info {
            padding: 30px;
        }

        .match-info p {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .match-card .btn {
            display: block;
            text-align: center;
            margin: 30px;
        }

        .next-matches {
            text-align: center;
            margin-top: 60px;
        }

        .user-actions {
            display: flex;
            align-items: center;
        }

        .user-actions .btn {
            margin-left: 15px;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 60px;
            color: #333;
        }

        .booking-form, .payment-form {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
            transform: translateY(-3px);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 15px;
            }

            .nav-container {
                margin-top: 20px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .auth-buttons {
                margin-top: 20px;
            }

            .hero h1 {
                font-size: 3.5rem;
            }

            .hero h2 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.5rem;
            }

            .match-card {
                flex-basis: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="/logo.png" alt="Logo" class="logo">
        <div class="nav-container">
            <nav>
                <a href="#"><i class="fas fa-home"></i> Home</a>
                <a href="#upcoming-matches"><i class="fas fa-calendar"></i> Match Schedule</a>
                <a href="#booking"><i class="fas fa-ticket-alt"></i> Book Tickets</a>
                <a href="#payment"><i class="fas fa-money-bill"></i> Payment</a>
            </nav>
        </div>
        <div class="user-actions">
            <span>Welcome, Customer!</span>
            <a href="/logout" class="btn btn-outline"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </header>

    <section class="hero">
        <h1>E-TICKET</h1>
        <h2 class="highlight">STADION MAGUWOHARJO</h2>
        <p>Experience the thrill of live football!</p>
        <a href="#upcoming-matches" class="cta-button"><i class="fas fa-ticket-alt"></i> View Matches and Tickets</a>
    </section>

    <section id="upcoming-matches" class="upcoming-matches">
        <h2 class="section-title">Upcoming Matches</h2>
        <div class="match-list">
            <div class="match-card">
                <div class="team-logos">
                    <img src="/logo.png" alt="PSS Sleman" class="team-logo">
                    <span class="vs">VS</span>
                    <img src="/persija.png" alt="Persija Jakarta" class="team-logo">
                </div>
                <h3>PSS Sleman vs Persija Jakarta</h3>
                <div class="match-info">
                    <p><i class="far fa-calendar-alt"></i> <strong>Date:</strong> <span>October 22, 2024</span></p>
                    <p><i class="far fa-clock"></i> <strong>Time:</strong> <span>20:00</span></p>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Venue:</strong> <span>Stadion Maguwoharjo</span></p>
                    <p><i class="fas fa-tag"></i> <strong>Price:</strong> <span>IDR 100,000</span></p>
                </div>
                <a href="#booking" class="btn btn-green">Book Ticket</a>
            </div>

            <div class="match-card">
                <div class="team-logos">
                    <img src="/logo.png" alt="PSS Sleman" class="team-logo">
                    <span class="vs">VS</span>
                    <img src="/AREMA.png" alt="Arema FC" class="team-logo">
                </div>
                <h3>PSS Sleman vs Arema FC</h3>
                <div class="match-info">
                    <p><i class="far fa-calendar-alt"></i> <strong>Date:</strong> <span>October 29, 2024</span></p>
                    <p><i class="far fa-clock"></i> <strong>Time:</strong> <span>18:30</span></p>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Venue:</strong> <span>Stadion Maguwoharjo</span></p>
                    <p><i class="fas fa-tag"></i> <strong>Price:</strong> <span>IDR 110,000</span></p>
                </div>
                <a href="#booking" class="btn btn-green">Book Ticket</a>
            </div>

            <div class="match-card">
                <div class="team-logos">
                    <img src="/logo.png" alt="PSS Sleman" class="team-logo">
                    <span class="vs">VS</span>
                    <img src="/bali.png" alt="Bali United" class="team-logo">
                </div>
                <h3>PSS Sleman vs Bali United</h3>
                <div class="match-info">
                    <p><i class="far fa-calendar-alt"></i> <strong>Date:</strong> <span>November 5, 2024</span></p>
                    <p><i class="far fa-clock"></i> <strong>Time:</strong> <span>19:30</span></p>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Venue:</strong> <span>Stadion Maguwoharjo</span></p>
                    <p><i class="fas fa-tag"></i> <strong>Price:</strong> <span>IDR 125,000</span></p>
                </div>
                <a href="#booking" class="btn btn-green">Book Ticket</a>
            </div>
        </div>
    </section>

    <section id="booking" class="booking">
        <h2 class="section-title">Book Your Ticket</h2>
        <form class="booking-form">
            <div class="form-group">
                <label for="match">Select Match:</label>
                <select id="match" name="match" required>
                    <option value="">-- Select a match --</option>
                    <option value="1">PSS Sleman vs Persija Jakarta - Oct 22, 2024</option>
                    <option value="2">PSS Sleman vs Arema FC - Oct 29, 2024</option>
                    <option value="3">PSS Sleman vs Bali United - Nov 5, 2024</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ticket-type">Ticket Type:</label>
                <select id="ticket-type" name="ticket-type" required>
                    <option value="">-- Select ticket type --</option>
                    <option value="vip">VIP</option>
                    <option value="regular">Regular</option>
                    <option value="economy">Economy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <button type="submit">Book Ticket</button>
            </div>
        </form>
    </section>

    <section id="payment" class="payment">
        <h2 class="section-title">Payment Confirmation</h2>
        <form class="payment-form">
            <div class="form-group">
                <label for="account-name">Account Name:</label>
                <input type="text" id="account-name" name="account-name" required>
            </div>
            <div class="form-group">
                <label for="bank-name">Bank Name:</label>
                <input type="text" id="bank-name" name="bank-name" required>
            </div>
            <div class="form-group">
                <label for="account-number">Account Number:</label>
                <input type="text" id="account-number" name="account-number" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="proof">Payment Proof:</label>
                <input type="file" id="proof" name="proof" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit Payment Confirmation</button>
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>We provide fast, easy, and reliable E-Ticket services for your football matches. Experience the thrill of live games with just a few clicks!</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#upcoming-matches">Matches</a></li>
                    <li><a href="#booking">Book Tickets</a></li>
                    <li><a href="#payment">Payment</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Connect With Us</h2>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 E-Ticket Stadion Maguwoharjo. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header');
            const scrollThreshold = 100;

            window.addEventListener('scroll', function() {
                if (window.scrollY > scrollThreshold) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add form submission handlers
            document.querySelector('.booking-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Booking submitted successfully! Please proceed to payment.');
            });

            document.querySelector('.payment-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Payment confirmation submitted successfully! We will verify your payment shortly.');
            });

            // Add hover effects to match cards
            const matchCards = document.querySelectorAll('.match-card');
            matchCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-15px)';
                    this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.2)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
                });
            });
        });
    </script>
</body>

</html>