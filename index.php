<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website im Bau</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
            padding-top: 100px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.2em;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        #timer {
            margin-top: 20px;
            font-size: 1em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚧 Website im Bau 🚧</h1>
        <p>Unsere Seite ist gerade in Arbeit. Schau bald wieder vorbei!</p>
        <div id="timer"></div>
    </div>

    <script>
        // Datum der Erstellung der Datei eintragen (JJJJ, MM-1, TT)
        const creationDate = new Date(2025, 9, 29, 0, 0, 0); // Oktober = 9, da JS von 0 zählt
        const timerDiv = document.getElementById('timer');

        function updateTimer() {
            const now = new Date();
            let diff = now - creationDate;

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            diff -= days * (1000 * 60 * 60 * 24);
            const hours = Math.floor(diff / (1000 * 60 * 60));
            diff -= hours * (1000 * 60 * 60);
            const minutes = Math.floor(diff / (1000 * 60));
            diff -= minutes * (1000 * 60);
            const seconds = Math.floor(diff / 1000);

            timerDiv.textContent = `Online seit: ${days} Tage, ${hours} Stunden, ${minutes} Minuten, ${seconds} Sekunden`;
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    </script>
</body>
</html>
