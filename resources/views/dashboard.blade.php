<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            margin: 0;
        }

        .clock-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .clock {
            font-size: 3rem;
            letter-spacing: 0.1rem;
            color: #333;
        }

        .date {
            font-size: 1.2rem;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="clock-container">
        <a href="{{ route('index')}}">
            Check Hierarchy
        </a>
        <div class="clock"></div>
        <div class="date"></div>
    </div>

    <script>
        $(document).ready(function() {
            function updateClock() {
                const now = new Date();

                let hours = now.getHours();
                let minutes = now.getMinutes();
                let seconds = now.getSeconds();

                hours = (hours < 10) ? '0' + hours : hours;
                minutes = (minutes < 10) ? '0' + minutes : minutes;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                const timeString = hours + ':' + minutes + ':' + seconds;

                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const dateString = now.toLocaleDateString(undefined, options);
                $('.clock').text(timeString);
                $('.date').text(dateString);
            }

    setInterval(updateClock, 1000);
    updateClock();
        });
    </script>
</body>
</html>
