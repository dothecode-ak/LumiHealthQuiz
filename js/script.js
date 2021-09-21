
var _url = "https://newsfeedsmartapp.com/LumiHealth/webservices.php";
var user_id;
$.ajax({
    url: _url,
    type: "POST",
    data: {
        "action": "create_user",
        "source": source
    },
    success: (function (data) {
        user_id = data;
        console.log(user_id);

    })
});

var iconFunArray = [];
var iconRewardsArray = [];
var iconPersolisation = [];
var button_music = document.getElementById('buttonMusic');
button_music.currentTime = 0;
var letsGo_start = document.getElementById('gameMusic');
var blankArr = [];
var qno = 1;
var dl_display;
var result;
//footer blinking images
var imgArrayList = ["assets/Skyline01.png", "assets/Skyline02.png", "assets/Skyline03.png", "assets/Skyline04.png", "assets/Skyline05.png"];
var curnt = 0;
setInterval(() => {
    $('#blinkImg').attr('src', imgArrayList[curnt]);
    curnt = (curnt < imgArrayList.length - 1) ? curnt + 1 : 0;
}, 500);

//icon setImages

for (var i = 1; i <= 64; i++) {
    iconFunArray.push("assets/animation/icon-fun/fun (" + i + ").png")
}

for (var i = 1; i <= 40; i++) {
    iconRewardsArray.push("assets/animation/icon-reawards/rewards (" + i + ").png")
}


for (var i = 1; i <= 65; i++) {
    iconPersolisation.push("assets/animation/icon-persolasation/persolaisation (" + i + ").png")
}



//fun bliking icon


//fun end


//rewwards  bliking icon


//rewwards end

//rewwards  bliking icon


//rewwards end



//star blinking
var startImglist = ["assets/Star01.png", "assets/Star02.png", "assets/Star03.png"];


var cnt2 = 0;
setInterval(() => {
    $('.starblink').attr('src', startImglist[cnt2]);
    cnt2 = (cnt2 < startImglist.length - 1) ? cnt2 + 1 : 0;
}, 500);

setInterval(() => {
    $('.starblink2').attr('src', startImglist[cnt2]);
    cnt2 = (cnt2 < startImglist.length - 1) ? cnt2 + 1 : 0;
}, 500);

//next div event
$('#letsgo').click(function () {
    $('.startPage').hide();
    $('#gamediv').show();
    $('.mute').show();
});

$('#mute_action').click(function () {
    var image = document.getElementById('mute_action');
    if (image.src.match("assets/Mute-Off.png")) {
        image.src = "assets/Mute-On.png";
        letsGo_start.pause();
        button_music.pause();
        button_music.muted = true;
        console.log("Yes");
    } else {
        image.src = "assets/Mute-Off.png";
        letsGo_start.play();
        button_music.muted = false;
        console.log("NO");
    }

});
//result image list
var resultImageList = ["assets/"]
//Quiz logic

function LUMIQuiz(questions) {
    this.questions = questions;
    this.questionIndex = 0;

}
LUMIQuiz.prototype.getQuestionIndex = function () {
    return this.questions[this.questionIndex];

}
LUMIQuiz.prototype.next = function () {
    this.questionIndex++;

}
function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;

}
//result logic



//end
LUMIQuiz.prototype.isEnded = function () {
    return this.questionIndex === this.questions.length;
    // $('.answerDiv').css('pointer-events', 'all');
}
function LUMIQuizFun() {

    if (quiz.isEnded()) {
        //result logic
        console.log("Endded")
        console.log(blankArr);
        const maxSelected = (blankArr = []) => {
            const temp = Math.floor(blankArr.length / 2);
            const map = {};
            for (let i = 0; i < blankArr.length; i++) {
                const value = blankArr[i];
                map[value] = map[value] + 1 || 1;
                if (map[value] > temp)
                    return value
            };
            return false;
        };

        result = maxSelected(blankArr);
        console.log(result);
        //special logic
        var defalut_logic = blankArr.reduce(function (acc, el, i, arr) {
            if (arr.indexOf(el) !== i && acc.indexOf(el) < 0) acc.push(el); return acc;
        }, []);
        dl_display = defalut_logic[0]
        switch (dl_display) {
            case "btn0":
                btn0();
                break;
            case "btn1":
                btn2();
                break;
            case "btn2":
                btn1();
                break;
        }
        //end

        switch (result) {
            case "btn0":
                btn0();
                break;
            case "btn1":
                btn2();
                break;
            case "btn2":
                btn1();
                break;
        }

        function btn0() {
            // if (global_detec == 'Iphone') {
            //     $('.appStore').show();
            // }
            // else {
            //     $('.appStore').hide();
            // }

            console.log("result One")
            $("#gamediv").hide();
            $('#result1').show();
            $('.quizFooter').hide();
            var funCnt = 0;
            setInterval(() => {
                $('#funIcon').attr('src', iconFunArray[funCnt]);
                funCnt = (funCnt < iconFunArray.length - 1) ? funCnt + 1 : 0;
            }, 40);
        }
        function btn1() {

            console.log("result two");
            $("#gamediv").hide();
            $('#result1').hide();
            $('#result2').show();
            $('.quizFooter').hide();

            var persoCnt = 0;
            setInterval(() => {
                $('#persolisationIcon').attr('src', iconPersolisation[persoCnt]);
                persoCnt = (persoCnt < iconPersolisation.length - 1) ? persoCnt + 1 : 0;
            }, 40);

        }
        function btn2() {
            // if (global_detec == 'Iphone') {
            //     $('.appStore').show();
            // }
            // else {
            //     $('.appStore').hide();
            // }

            var redwardsCnt = 0;
            setInterval(() => {
                $('#rewardsIcon').attr('src', iconRewardsArray[redwardsCnt]);
                redwardsCnt = (redwardsCnt < iconRewardsArray.length - 1) ? redwardsCnt + 1 : 0;
            }, 40);
            console.log("result 3");
            $("#gamediv").hide();
            $('#result1').hide();
            $('#result2').hide();
            $('#result3').show();
            $('.quizFooter').hide();
        }


        if (result === "btn0") {
            result = 'A';
        }
        else if (result === "btn1") {
            result = 'B';
        }
        else if (result === 'btn2') {
            result = 'C';
        }
        else {
            result = 'Default';
        }
        $.ajax({
            url: _url,
            type: "POST",
            data: {
                "user_id": user_id,
                "action": "max_selected_op",
                "max_selected_op": result
            },

            success: (function (data) {
                console.log(data);

            })

        });
    }
    else {
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
        var choices = quiz.getQuestionIndex().choices;
        for (var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            next("btn" + i, choices[i]);
        }
    }
};

function next(id, next) {
    var button = document.getElementById(id);


    button.onclick = function () {
        button_music.currentTime = 0;
        $('.answerDiv').css('pointer-events', 'none');
        $('#' + button.id).css({ 'background-color': '#9620c0', 'color': '#ffffff' });
        $('#' + button.id + '>' + '.circle').css({ 'background-color': '#ffffff' });
        $('#' + button.id + '>' + '.circle' + '>' + 'p').css('color', '#9620c0');
        quiz.next(next);
        var cc_choice = button.id
        var c_text_selected = $('#' + cc_choice + '>' + '.textCenter').text();
        console.log(c_text_selected);
        blankArr.push(button.id)
        button_music.play();
        button_music.valume = 0.65;

        setTimeout(() => {
            button_music.currentTime = 0;
            button_music.pause();
            console.log("Activated loop")
            $('.answerDiv').css('pointer-events', 'all');
            $('#' + button.id).css({ 'background-color': '#ffffff', 'color': '#9620c0' });
            $('#' + button.id + '>' + '.circle').css('background-color', '#9620c0');
            $('#' + button.id + '>' + '.circle' + '>' + 'p').css('color', '#ffffff');

            LUMIQuizFun();

            qno++;
            // button_music.muted = false;
        }, 300)


        // setInterval(() => {
        //     button_music.currentTime = 0;
        // }, 700)
        $.ajax({
            url: _url,
            type: "POST",
            data: {
                "user_id": user_id,
                "action": "saveAnsData",
                "ansText": c_text_selected,
                "qno": qno
            },

            success: (function (data) {
                console.log(data);

            })

        });

    }
};






//end
//Quest list
var quesList = [new Question("I will be motivated to\n keep a healthier lifestyle\n if there are...", ["Fun experiences and activities", "Attractive rewards", "Personal reminders to keep going"]),
new Question("I will be motivated\n to exercise more if…", ["There are goals and milestones to achieve", "I can earn sports & activewear vouchers", "There are workout challenges tailored for me"]),
new Question("I will be more likely to \nchoose healthier meals if..", ["It’s part of a daily challenge", "It means I can earn grocery shopping vouchers", "I’m given recommended guidelines on what’s good for me"]),
new Question("I will be more likely to get\n 7-9 hours of sleep daily if…", ["Clocking sleep hours feels like a mission in a quest", "I get rewarded for clocking sufficient sleep hours", "I get tips and recommendations that help me build good sleep habits"]),
]

var quiz = new LUMIQuiz(quesList);
//display quiz

LUMIQuizFun();

