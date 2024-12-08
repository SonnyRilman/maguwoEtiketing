<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket Stadion Maguwoharjo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .e-ticket {
            background-color: white;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .ticket-header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .ticket-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .ticket-body {
            padding: 20px;
        }
        .match-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .match-info h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .team-logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 20px 0;
        }
        .team-logo {
            width: 60px;
            height: 60px;
        }
        .vs {
            font-size: 18px;
            font-weight: bold;
        }
        .ticket-details {
            border-top: 1px dashed #ccc;
            padding-top: 20px;
        }
        .ticket-detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
        .qr-code img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="e-ticket">
        <div class="ticket-header">
            <h1>E-Ticket Stadion Maguwoharjo</h1>
        </div>
        <div class="ticket-body">
            <div class="match-info">
                <h2>PSS Sleman vs Persija Jakarta</h2>
                <div class="team-logos">
                    <img src="/logo.png" alt="PSS Sleman" class="team-logo">
                    <span class="vs">VS</span>
                    <img src="/persija.png" alt="Persija Jakarta" class="team-logo">
                </div>
            </div>
            <div class="ticket-details">
                <div class="ticket-detail">
                    <span><i class="far fa-calendar-alt"></i> Date:</span>
                    <span>October 22, 2024</span>
                </div>
                <div class="ticket-detail">
                    <span><i class="far fa-clock"></i> Time:</span>
                    <span>20:00</span>
                </div>
                <div class="ticket-detail">
                    <span><i class="fas fa-map-marker-alt"></i> Venue:</span>
                    <span>Stadion Maguwoharjo</span>
                </div>
                <div class="ticket-detail">
                    <span><i class="fas fa-chair"></i> Seat:</span>
                    <span>Tribune A, Row 5, Seat 23</span>
                </div>
                <div class="ticket-detail">
                    <span><i class="fas fa-ticket-alt"></i> Ticket No:</span>
                    <span>PSS24100123</span>
                </div>
            </div>
            <div class="qr-code">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=PSS24100123" alt="QR Code">
            </div>
        </div>
    </div>
</body>
</html>