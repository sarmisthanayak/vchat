<!-- content_header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Video Chatting</title>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        #header {
            background-color: transparent;
            background-image: linear-gradient(180deg, #D1E5FF 84%, #FFFFFF 100%);
            padding: 20px;
            text-align: center;
            margin-left: -9px;
            margin-right: -8px;
        }

        .heading {
            color: #4695F8;
            font-weight: 800;
            letter-spacing: 0.9px;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #000;
            text-shadow: 2px 1px 0px #000000;
            margin-top: 15px;
        }

        .heading h1 {
            margin: 0;
            padding: 50px 0 10px 0; /* Adjusted padding to reduce the gap below h1 */
            font-size: 80px;
        }

        .heading h2 {
            color: #000;
            font-size: 24px;
            margin: 0;
            font-weight: 200;
        }

        #card-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 1px;
        }

        .card {
            background-color: #FFFFFF;
            border-radius: 30px;
            padding: 5px;
            width: 200px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border: solid 3px #000;
            cursor: pointer;
            margin: 0 15px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(0.90);
            box-shadow: 0px 8px 12px rgba(0, 0, 255, 0.5);
        }

        .card a {
            text-decoration: none;
        }

        .card img {
            margin-top: 0;
        }

        .card p {
            color: black;
            font-size: 23px;
            font-weight: 550;
            margin-bottom: 0;
        }

        @media (max-width: 880px) {
            .heading h1 {
                font-size: 65px;
            }

            .heading h2 {
                font-size: 20px;
            }

            #card-container {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .card {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .heading h1 {
                font-size: 50px;
            }

            .heading h2 {
                font-size: 18px;
            }

            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div id="header">
        <div class="heading">
            <h1>Random Video Chatting</h1>
        </div>
        <div>
            <h2>Free 1on1 adult video chat with girls online, top adult chat sites in VideoChatting.co</h2>
        </div>
        <div id="card-container">
            <div class="card">
                <a href="#">
                    <img src="https://videochatting.co/wp-content/uploads/2023/03/1-removebg-preview.png" alt="Logo">
                    <p>Coomeet</p>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <img src="https://videochatting.co/wp-content/uploads/2023/03/3-removebg-preview.png" alt="Logo">
                    <p>Shagle</p>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <img src="https://videochatting.co/wp-content/uploads/2023/07/flingster.png" alt="Logo">
                    <p>Flingstar</p>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <img src="https://videochatting.co/wp-content/uploads/2023/04/5-removebg-preview-1.png" alt="Logo">
                    <p>Chatspin</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>