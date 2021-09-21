<?php
$myPdo = null;
header('Access-Control-Allow-Origin: *');
require_once('/home/newsfeedsmartapp/public_html/libs2/functions.php');
$obj = new Functions("india");
$uid = $_POST["user_id"];
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

$action = $_POST['action'];
$source = $_POST['source'];
switch ($action) {

    case "create_user":
        $device = "web";
        if (isMobile()) {
            $device = "mobile";
        }
        $uid = $obj->createUser("lumiHealth_count", $device, array('source' => $source));
        echo $uid;
        break;
    case "letsGo":
        buttonIncrement();
        break;
    case "share":
        buttonIncrement();
        break;
    case "appStore":
        buttonIncrement();
        break;
    case "fun_screen_selected":
        buttonIncrement();
        break;
    case "rewards_screen_selected":
        buttonIncrement();
        break;
    case "persalizaion_screen_selected":
        buttonIncrement();
        break;
    case 'saveAnsData':
        saveAnsData();
        break;
    case 'max_selected_op':
        max_selected_op();
        break;
    default:
        $response = array(
            "status" => 400,
            "message" => "Operation not found"
        );
        echo json_encode($response);
        break;
}

function buttonIncrement()
{
    global $obj;
    $uid = NULL;
    $action = $_POST['action'];
    if (isset($_POST['user_id'])) {
        $uid = $_POST['user_id'];
    }
    $res1 = $obj->clickUpdater("lumiHealth_count", $uid, $action);
    echo ($res1);
}

function saveAnsData()
{
    global $obj;
    $uid = NULL;
    if (isset($_POST['user_id'])) {
        $uid = $_POST['user_id'];
    }
    $ansText = $_POST['ansText'];
    $q_no = $_POST['qno'];
    $ansData = array('selected_ans' . $q_no => $ansText);
    $uid = array('uid' => $_POST['user_id']);
    $res5 = $obj->updateData('lumiHealth_count', $ansData, $uid);
    echo ("save Data");
}

function max_selected_op()
{
    global $obj;
    $uid = NULL;
    if (isset($_POST['user_id'])) {
        $uid = $_POST['user_id'];
    }
    $max_selected_op = $_POST['max_selected_op'];
    $uid = array('uid' => $_POST['user_id']);
    $data = array('max_selected_op' => $max_selected_op);
    $res4 = $obj->updateData('lumiHealth_count', $data, $uid);
}
