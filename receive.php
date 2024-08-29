<?php
// 获取并解析从设备发送的 XML 数据
$data = file_get_contents('php://input');
$plistBegin = '<?xml version="1.0"';
$plistEnd = '</plist>';
$pos1 = strpos($data, $plistBegin);
$pos2 = strpos($data, $plistEnd);
$data2 = substr($data, $pos1, $pos2 - $pos1 + strlen($plistEnd));

$xml = xml_parser_create();
xml_parse_into_struct($xml, $data2, $vs);
xml_parser_free($xml);

$UDID = "";
$DEVICE_NAME = "";
$DEVICE_PRODUCT = "";
$DEVICE_VERSION = "";
$IMEI = "";
$ICCID = "";

// 解析 XML 数据并提取信息
$arrayCleaned = array();
foreach ($vs as $v) {
    if ($v['level'] == 3 && $v['type'] == 'complete') {
        $arrayCleaned[] = $v;
    }
}

foreach ($arrayCleaned as $index => $elem) {
    switch ($elem['value']) {
        case "UDID":
            $UDID = $arrayCleaned[$index + 1]['value'];
            break;
        case "PRODUCT":
            $DEVICE_PRODUCT = $arrayCleaned[$index + 1]['value'];
            break;
        case "VERSION":
            $DEVICE_VERSION = $arrayCleaned[$index + 1]['value'];
            break;
        case "DEVICE_NAME":
            $DEVICE_NAME = $arrayCleaned[$index + 1]['value'];
            break;
        case "IMEI":
            $IMEI = $arrayCleaned[$index + 1]['value'];
            break;
    }
}

// 加载设备标识符到设备型号的映射表
$deviceModels = include('device_models.php');
$deviceModel = $deviceModels[$DEVICE_PRODUCT] ?? 'Unknown Device';

// 加载 iOS 版本映射表
$iosVersionMap = include('ios_version_map.php');
$iosVersion = $iosVersionMap[$DEVICE_VERSION] ?? "Unknown iOS Version";

// 构建要传递给前端页面的 URL 参数
$params = http_build_query([
    'UDID' => $UDID,
    'DEVICE_NAME' => $DEVICE_NAME,
    'DEVICE_MODEL' => $deviceModel,
    'DEVICE_VERSION' => $iosVersion,
    'IMEI' => $IMEI,
]);


// 将用户重定向到前端页面，并传递解析后的数据
header('HTTP/1.1 301 Moved Permanently');
header("Location: https://udid.onch.top/index.php?" . $params);
exit();