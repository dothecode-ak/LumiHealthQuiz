<?php
if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = 'Facebook';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:url" content="https://www.newsfeedsmartapp.com/LumiHealth/index.php?v=1.0">
    <meta property="og:title" content="">
    <meta name="author" content="Lumi ">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://www.newsfeedsmartapp.com/LumiHealth/Coverart.jpg">
    <meta property="og:type" content="product">
    <title>LUMI Health - Your Best Approach to Health</title>
    <link rel="shortcut icon" href="assets/Icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?v=<?php echo date('his'); ?>">

</head>

<body>

    <!-- sound load -->
    <audio id="buttonMusic">
        <source src="sound/button_music.mp3" type="audio/mpeg">
    </audio>
    <audio id="gameMusic">
        <source src="sound/game_music.wav" type="audio/mpeg">
    </audio>
    <!-- end -->
    <div class="lumiQuiz">

        <div class="startPage">
            <img id="startblinkTop2" src="" class="starblink" alt="" srcset="">
            <img id="startblinkTop1" src="" class="starblink2" alt="" srcset="">
            <img src="assets/Asteroid.png" id="astroid" alt="" srcset="">
            <img id="starblink1" src="" class="starblink" alt="" srcset="">
            <img id="startblinkTop3" src="" class="starblink2" alt="" srcset="">
            <div class="startText">

                <img src="assets/02Countdown.png" alt="" srcset="">

            </div>
            <img id="starblink2" class="starblink2" src="" alt="" srcset="">

            <input id="letsgo" class="letsGo" type="image" src="assets/LetsGo.png" onclick="letsGo();">
        </div>

        <!-- game section  -->

        <div class="common Div">
            <img class="mute" id="mute_action" src="assets/Mute-Off.png" alt="">
            <div id="gamediv">
                <!-- <img id="startblinkTopGame1" src="" class="starblink" alt="" srcset=""> -->
                <img src="assets/Asteroid.png" id="astroid" alt="" srcset="">
                <img id="startblinkTopGame2" src="" class="starblink2" alt="" srcset="">
                <img class="quizLogo" src="assets/Logo.png" alt="" srcset="">
                <div class="gamediv2">

                    <img id="startblinkTopGame3" src="" class="starblink2" alt="" srcset="">
                    <img id="startblinkTopGame4" src="" class="starblink2" alt="" srcset="">
                    <div id="question">

                    </div>

                    <div class="answerList">
                        <div class="answerDiv" id="btn0">

                            <div class="circle">
                                <p class="optionText">
                                    1
                                </p>
                            </div>
                            <div id="choice0" class="textCenter">

                            </div>
                        </div>


                        <div class="answerDiv" id="btn1">

                            <div class="circle">
                                <p class="optionText">
                                    2
                                </p>
                            </div>
                            <div id="choice1" class="textCenter">

                            </div>
                        </div>



                        <div class="answerDiv" id="btn2">

                            <div class="circle">
                                <p class="optionText">
                                    3
                                </p>
                            </div>
                            <div id="choice2" class="textCenter">

                            </div>
                        </div>
                    </div>
                    <img id="startblinkTopGame5" src="" class="starblink2" alt="" srcset="">
                </div>
            </div>
            <!-- Result Screen -->

            <div id="result1">

                <div class="maxselectedanswer1">
                    <img src="assets/Asteroid.png" id="astroid" alt="" srcset="">

                    <div class="funResultHead">
                        <p class="shareText1">Your best approach <br>to health is...</p>
                        <p class="subHeadText">FUN</p>
                        <div class="subtextDiv">
                            <p>You're motivated when your <br>health journey is like a quest, <br>with mini goals and milestones <br>reach!</p>
                            <button class="shareButton"><img class="sharePage1" src="assets/Share.png" alt="" srcset="" onclick="fbshare();"></button>
                        </div>
                    </div>

                    <img id="startblinkTopresult1" src="" class="starblink" alt="" srcset="">
                    <img id="startblinkRightresult1" src="" class="starblink" alt="" srcset="">
                </div>
                <img class="funText4" src="assets/05ResultFunTxt.png" alt="">

                <button class="appStore"><img class="appStoreImg" src="assets/04SeeResultAppStore.png" alt="" onclick="appStore();"></button>
                <img id="startblinkBottomresult1" src="" class="starblink" alt="" srcset="">
                <img class="footer1Img" id="funIcon" src="" alt="" srcset="">
            </div>

            <!-- result2 -->
            <div id="result2">

                <div class="maxselectedanswer2">
                    <img src="assets/Asteroid.png" id="astroid" alt="" srcset="">
                    <img id="startblinkTopresult1" src="" class="starblink" alt="" srcset="">
                    <img id="startblinkRightresult1" src="" class="starblink" alt="" srcset="">

                </div>
                <div class="funResultHead">
                    <p class="shareText1">Your best approach <br>to health is...</p>
                    <p class="subHeadText2">IT HAS TO BE <br>TAILORED TO YOU</p>
                    <div class="subtextDiv">
                        <p>You need activities and <br>reminders tailored to your <br>individual needs!</p>
                        <button class="shareButton"><img class="sharePage1" src="assets/Share.png" alt="" srcset="" onclick="fbshare();"></button>
                    </div>
                </div>
                <img class="funText4" src="assets/05ResultPersonalizeTxt.png" alt="">
                <button class="appStore"><img class="appStoreImg" src="assets/04SeeResultAppStore.png" alt="" onclick="appStore();"></button>
                <img id="startblinkBottomresult1" src="" class="starblink" alt="" srcset="">
                <img class="footer1Img" id="persolisationIcon" src="" alt="" srcset="">
            </div>


            <!-- result3 -->
            <div id="result3">

                <div class="maxselectedanswer3">
                    <img src="assets/Asteroid.png" id="astroid" alt="" srcset="">
                    <img id="startblinkTopresult1" src="" class="starblink" alt="" srcset="">
                    <img id="startblinkRightresult1" src="" class="starblink" alt="" srcset="">

                </div>
                <div class="funResultHead">
                    <p class="shareText1">Your best approach <br>to health is...</p>
                    <p class="subHeadText2">REWARDS</p>
                    <div class="subtextDiv">
                        <p>You're motivated by rewards <br> at every step of your health <br>journey.</p>
                        <button class="shareButton"><img class="sharePage1" src="assets/Share.png" alt="" srcset="" onclick="fbshare();"></button>
                    </div>
                </div>
                <img class="funText4" src="assets/05ResultRewardTxt.png" alt="">
                <button class="appStore"><img class="appStoreImg" src="assets/04SeeResultAppStore.png" alt="" onclick="appStore();"></button>
                <img id="startblinkBottomresult1" src="" class="starblink" alt="" srcset="">
                <img class="footer1Img" id="rewardsIcon" src="" alt="" srcset="">
            </div>

            <div class="quizFooter">
                <img id="blinkImg" src="assets/Skyline01.png" alt="" srcset="">

            </div>



        </div>
    </div>

    <script>

    </script>
    <script src="util/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        var source = '<?php echo $source; ?>';
        console.log(source);
    </script>
    <script src="js/script.js?v=<?php echo date('his'); ?>"></script>
    <script>
        var letsGo_start = document.getElementById('gameMusic');


        function letsGo() {

            letsGo_start.play();
            letsGo_start.volume = 0.2;
            button_music.play();
            button_music.volume = 0.2;
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                    "user_id": user_id,
                    "action": "letsGo",
                },
                success: (function(data) {
                    console.log(data);

                })
            });

        }

        function fbshare() {
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                    "user_id": user_id,
                    "action": "share",
                },
                success: (function(data) {
                    console.log(data);

                })
            });
            if (result == 'btn0' || dl_display == 'btn0') {
                $.ajax({
                    url: _url,
                    type: "POST",
                    data: {
                        "user_id": user_id,
                        "action": "fun_screen_selected",
                    },
                    success: (function(data) {
                        console.log(data);

                    })
                });
                window.open(

                    "https://www.facebook.com/sharer.php?u=http://bit.ly/39xFMr3", "_blank"
                )
            } else if (result == 'btn1' || dl_display == 'btn1') {

                $.ajax({
                    url: _url,
                    type: "POST",
                    data: {
                        "user_id": user_id,
                        "action": "rewards_screen_selected",
                    },
                    success: (function(data) {
                        console.log(data);

                    })
                });
                window.open(

                    "https://www.facebook.com/sharer.php?u=http://bit.ly/2MVsME2"
                )
            } else if (result == 'btn2' || dl_display == 'btn2') {

                $.ajax({
                    url: _url,
                    type: "POST",
                    data: {
                        "user_id": user_id,
                        "action": "persalizaion_screen_selected",
                    },
                    success: (function(data) {
                        console.log(data);

                    })
                });
                window.open(

                    "https://www.facebook.com/sharer.php?u=https://bit.ly/39xG1Ct"
                )
            }
        }

        function appStore() {
            $.ajax({
                url: _url,
                type: "POST",
                data: {
                    "user_id": user_id,
                    "action": "appStore",
                },
                success: (function(data) {
                    console.log(data);

                })
            });
            window.open(
                "https://apps.apple.com/app/apple-store/id1528658000?pt=695139&ct=facebook-nfsa-launch&mt=8"
            )
        }
    </script>


    <script>

    </script>



</body>

</html>