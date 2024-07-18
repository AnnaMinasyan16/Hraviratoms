<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Հրավիրատոմս</title>
    <link rel="stylesheet" href="invite.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="message">
        <p>Please open the website on a smart phone.</p>
    </div>

    <div class="my">
        <div class="header">
            <div class="header-content">
                <img src="./pics/sd.jpg" alt="">
                <div class="header-text">
                    <p>S&D <br> WEDDING
                    <p>
                </div>
            </div>
        </div>
        <div class="invite-text">
            <div class="invite-text-content">
                <h5>Սիրելի ընկերներ և հարազատներ !</h5>
                <h6>
                    Սիրով հրավիրում ենք ձեզ կիսելու մեզ հետ՝ մեր կյանքի կարևոր և հիշարժան օրը 
                </h6>
                <h4>18.08.2024</h4>
                <hr style="width: 100%; text-align: center; ">
            </div>
        </div>

        <div class="church">
            <div class="church-text">
                <div class="title">
                    <h5>Պսակադրություն</h5>
                </div>
                <div class="clock">
                    <h4>14:30</h4>
                </div>
            </div>
            <div class="church-photo">
                <img src="./pics/lusavorich_rpFa03m.jpeg" alt="">
            </div>
            <div class="location">
                <img src="./pics/pin.png" alt="" style="width: 30px;">
                <h6>Սուրբ Գրիգոր Լուսավորիչ մայր եկեղեցի, ք․ Երևան </h6>
            </div>
            <a href="https://www.google.com/maps/place/%D0%A1%D0%BE%D0%B1%D0%BE%D1%80+%D0%A1%D0%B2%D1%8F%D1%82%D0%BE%D0%B3%D0%BE+%D0%93%D1%80%D0%B8%D0%B3%D0%BE%D1%80%D0%B8%D1%8F+%D0%9F%D1%80%D0%BE%D1%81%D0%B2%D0%B5%D1%82%D0%B8%D1%82%D0%B5%D0%BB%D1%8F/@40.172162,44.514665,17z/data=!3m1!4b1!4m6!3m5!1s0x406abcf5dce61905:0x5b1b85523b3f82de!8m2!3d40.1721579!4d44.5172399!16s%2Fm%2F06w5y6_?entry=ttu">
                <div class="loc-button">
                        <h6>Ինչպես հասնել</h6>
                </div>
                </a>
        </div>
        <hr style="width: 80%; margin-top: 40px; margin-left: 50px;">
        <div class="rest">
            <div class="church-text">
                <div class="title">
                    <h5>Հարսանեկան խնջույք</h5>
                </div>
                <div class="clock">
                    <h4>17:00</h4>
                </div>
            </div>
            <div class="church-photo">
                <img src="./pics/hall.jpg" alt="">
            </div>
            <div class="location">
                <img src="./pics/pin.png" alt="" style="width: 30px;">
                <h6>ՍԱՖԱՐԻ ՀՈԼԼ, ք․ Չարենցավան</h6>
            </div>

            <a href="http://www.google.com/maps/place/Safari+Hall/@40.4023899,44.6471507,17.37z/data=!4m6!3m5!1s0x404025013eb24ee3:0x29c15ce0b0679667!8m2!3d40.4034252!4d44.647551!16s%2Fg%2F11kj_lcg1c?entry=ttu">
            <div class="loc-button">
                    <h6>Ինչպես հասնել</h6>
            </div>

            </a>
        </div>
        <hr style="width: 80%; margin-top: 40px; margin-left: 50px;">

        <div class="end-text">
            <h6>Խնդրում ենք հաստատել ձեր մասնակցությունը մինչև  <p>11.08.2024</p></h6>
        </div>

        <div class="formGroup">

        <form action="connect.php" method = "post">

    <div class="formComponent">
    <input type="text" id="firstName" name="firstName" placeholder = "Անուն"><br>
    </div>

    <div class="formComponent">
    <input type="text" id="lastName" name="lastName" placeholder = "Ազգանուն"><br>
    </div>

    <div class="formComponent">
    <input type="text" id="guestCount" name="guestCount" placeholder = "Հյուրերի քանակ"><br>
    </div>

    <div class="formButton">
        <input type="submit" value="ՈՒՂԱՐԿԵԼ">
    </div>   
        </form>

        </div>

        <div class="footer">
            <div class="footer-content">
                <p>&copy2024</p>
            </div>
        </div>
    </div>


    <script>
    function validateForm() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var guestCount = document.getElementById("guestCount").value;

    if (firstName === "" || lastName === "" || guestCount === "") {
        alert("Խնդրում ենք լրացնել բոլոր դաշտերը։");
        return false;
    }
    return true;
}
</script>

</body>

</html>