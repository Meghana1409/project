<html>
    <head>
        <title>contact</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                text-align: center;
                background: radial-gradient(#fff,#ffd6d6);
                font-family: sans-serif;
            }
            .contact-title{
                margin-top: 100px;
                text-transform: uppercase;
                transition: all 2s ease-in-out;
            }
            .contact-title h1{
                font-size: 32px;
                line-height: 10px;
            }
            .contact-title h2{
                font-size: 16px;
            }
            form{
                margin-top: 50px;
                transition: all 2s ease-in-out;
            }
            .form-control{
                width: 600px;
                background: transparent;
                border: none;
                outline: none;
                border-bottom: 1px solid gray;
                font-size: 18px;
                margin-bottom: 16px;
            }
            button{
                display: inline-block;
                background-color: #ff3368;
                color: #fff;
                padding: 8px 30px;
                margin: 30px 0;
                border-radius: 30px;
                transition: background 0.5s;
            }
        </style>
    </head>
    <body>
        <div class="contact-title">
        <h1>Contact Us</h1>
        <h2>we are always ready to serve you!!</h2>
    </div>
    <div class="contact-form">
        <form action="" method="POST" id="contact-form">
            <input type="text" name="name" class="form-control" placeholder="Username" required><br>
            <input type="email" name="mail" class="form-control" placeholder="Email" required><br>
            <textarea name="query" class="form-control" placeholder="Enter Your query..." cols="30" rows="10" required></textarea><br><br>
            <button type="submit">submit</button>
        </form>
    </div>
    </body>
</html>