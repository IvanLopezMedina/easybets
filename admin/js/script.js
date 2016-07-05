function login() {
    'use strict';
    var email = document.getElementById('email').value;
    var password = document.getElementByI('password').value;
    if (email !== '' && password !== '') {
        if (window.XMLHttpRequest) {
            http = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            http = new ActiveXObject('Microsoft.XMLHTTP');
        }

        http.onreadystatechange = function () {
            if (http.readyState == 4 && http.status == 200) {
                var xd = String(http.responseText.trim());
                if (xd == '<center><font COLOR=green>Acceso permitido</font><center>') {
                    window.location = 'index.php';
                }
                if (xd == '<center><font COLOR=green><a href=\'http://localhost/easybetsweb/admin/\'>Acceso admin</a></font><br><center>') {
                    window.location = '../easybetsweb/admin/index.php';
                }
                document.getElementById('add').innerHTML = http.responseText;
                //           document.getElementById("user").innerHTML = email;
            }
        };
        http.open('POST', 'check.php', true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.send('email=' + email + '& password=' + password);
    } else {
        document.getElementById('add').innerHTML = '<center><font COLOR=red>Rellene todos los campos</font><center>';
    }
}

function crearUser() {
    'use strict';
    var nombre = document.getElementById('nombre').value;
    var direccion = document.getElementById('direccion').value;
    var email = document.getElementById('correo').value;
    var password = document.getElementById('pwd').value;
    var dni = document.getElementById('dni').value;
    if (window.XMLHttpRequest) {
        http = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        http = new ActiveXObject('Microsoft.XMLHTTP');
    }
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            document.getElementById('add').innerHTML = http.responseText;
        }
    };
    http.open('POST', 'insert.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.send('nombre=' + nombre + '& direccion=' + direccion + '& email=' + email + '& password=' + password + '& dni=' + dni);
}

function recordar() {
    var email = document.getElementById('correo').value;
    var password = document.getElementById('password').value;
    if (window.XMLHttpRequest) {
        http = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        http = new ActiveXObject('Microsoft.XMLHTTP');
    }
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            document.getElementById('add').innerHTML = http.responseText;
            //           document.getElementById("user").innerHTML = email;
        }
    };
    http.open('POST', 'password.php', true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.send('email=' + email + '& password=' + password);
}

function show_value2(x) {
    document.getElementById('slider_value2').innerHTML = x;
    document.getElementById('movedor').value = x;
}

function add_one() {
    document.f.sld6.value = parseInt(document.f.sld6.value) + 1;
    show_value2(document.f.sld6.value);
}

function subtract_one() {
    document.f.sld6.value = parseInt(document.f.sld6.value) - 1;
    show_value2(document.f.sld6.value);
}

function editarbarra(y) {
    document.getElementById('barra').value = y;
    document.getElementById('slider_value2').innerHTML = y;
}

function editarbarra2(y) {
    document.getElementById('barra').value = y;
    document.getElementById('slider_value2').innerHTML = y;
    dinero = (y / 10000) - (y / 10000 * 0.15);
    document.getElementById('valoracion').innerHTML = dinero;
    document.getElementById('euroshidden').innerHTML = dinero;
}

function show_value3(x) {
    document.getElementById('movedor').value = x;
    document.getElementById('slider_value2').innerHTML = x;
    dinero = (x / 10000) - (x / 10000 * 0.15);
    document.getElementById('valoracion').innerHTML = dinero;
    document.getElementById('euroshidden').innerHTML = dinero;
}
