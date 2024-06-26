<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        /* Your CSS styles here */
        .navbar {
            position: fixed;
            height: 31.75px; /* Adjust the height */
            top: 0;
            background-color: #d1e5ff;
            border-style: solid;
            border-width: 0 0 3px;
            border-color: #000;
            z-index: 30;
            display: flex;
            align-items: center; /* Center the items vertically */
            justify-content: space-between; /* Space between the logo and the links */
            padding: 0; /* Add padding to the left and right */
            width: 100vw;
            left: 0px;
        }

        .navbar img {
            height: 30px; /* Adjust the height if needed */
            margin-left: 80px;
        }

        .navbar ul {
            list-style: none;
            display: flex; /* Use flexbox for the list */
            align-items: center; /* Center the list items vertically */
            margin-right: 80px;
        }

        .navbar ul li {
            margin: 10px; /* Adjust the margin between the list items */
            position: relative;
        }

        .navbar ul li a {
            color: #000;
            text-decoration: none;
            line-height: 50px; /* Match the height of the navbar */
            font-size: 15px;
            font-weight: 550;
            padding: 8px 10px;
        }

        .navbar ul li a:hover{
            color: #4695F8;
            transition: all 0.5s ease;
        }

        .navbar ul ul {
            position: absolute;
            top: calc(100% + 3px);
            left: 0;
            background-color: #fff;
            border-radius: 12px;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border: 1px solid #000;
            padding: 0 15px;
            display: none;
            text-align: justify;
            gap: 10px;
            transition: all 0.5s ease;
        }

        .navbar ul li:hover > ul {
            display: block;
        }

        .navbar ul ul li {
            margin: 0;
            width: 80px;
        }

        .navbar ul ul li a {
            font-size: 15px;
            text-align: justify;
            gap: 10px;
        }

        .navbar ul ul li a:hover{
            color: #4695F8;
        }

        .arrow {
            margin-left: 5px;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            width: 30px;
            cursor: pointer;
            margin-right: 40px;
        }

        .line {
            width: 100%;
            height: 3px;
            background-color: black;
            margin: 2px 2px;
        }

        #click {
            display: none;
        }

        #click:checked + .menu-btn .line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        #click:checked + .menu-btn .line:nth-child(2) {
            opacity: 0;
        }

        #click:checked + .menu-btn .line:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        @media (max-width: 880px){
            .navbar ul{
                position: fixed;
                top: 50px;
                background: #fff;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                border-radius: 12px;
                border: 1px solid #000;
                z-index: 1;
                height: 50vh;
                width: 100%;
                display: block;
                text-align: justify;
                margin: 10px 10px 0 0;
                left: 0%;
                transition: all 0.3s ease;
                opacity: 0;
            }

            #click:checked ~ ul{
                opacity: 1;
            }

            .navbar img{
                margin-left: -10px;
            }

            .hamburger{
                display: flex;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="https://videochatting.co/wp-content/uploads/2023/06/VC-1.png" alt="Video Chatting Logo">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </label>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="dropdown"><a href="#">Chat Sites <span class="arrow">&#x25BC;</span></a>
                <ul class="submenu">
                    <li><a href="#">Coomeet</a></li>
                    <li><a href="#">Flingstar</a></li>
                    <li><a href="#">Shagle</a></li>
                    <li><a href="#">Flirtbees</a></li>
                    <li><a href="#">Chatrandom</a></li>
                    <li><a href="#">Chatroulette</a></li>
                    <li><a href="#">Chatspin</a></li>
                </ul>
            </li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
</body>
</html>