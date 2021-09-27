$(document).ready(function() {
    $('#auto').keyup(function() {
        var keyword = $(this).val();
        var xmlhttp;
        if (window.XMLHttpRequest) { 
            xmlhttp = new XMLHttpRequest();
        } else { 
            xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('response').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET', 'Post_event/search?keyword='+keyword, true);
        xmlhttp.send();
    });
    // $('div').click(function() {
    //     var xmlhttp;
    //     if (window.XMLHttpRequest) { 
    //         xmlhttp = new XMLHttpRequest();
    //     } else { 
    //         xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
    //     }
    //     xmlhttp.onreadystatechange = function() {
    //         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    //             document.getElementById('response').innerHTML = xmlhttp.responseText;
    //         }
    //     }
    //     xmlhttp.open('POST', 'Home/click', true);
    //     xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //     xmlhttp.send('name=zhangsan');
    // });

    // var isAdvancedUpload = function() {
    //     var div = document.createElement('div');
    //     return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
    //   }();
})
