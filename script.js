// script.js
document.addEventListener('DOMContentLoaded', function() {
    var udid = document.getElementById('showText').value;

    document.getElementById('showText').value = udid;

    document.getElementById('copyButton').addEventListener('click', function () {
        var showText = document.getElementById('showText');
        showText.select();
        document.execCommand('copy');
        alert('确认复制的弹窗文字');
    });
});