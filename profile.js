function modify() {

    document.getElementById('password').removeAttribute('readonly');
    document.getElementById('address').removeAttribute('readonly');
    document.getElementById('email').removeAttribute('readonly');
    document.getElementById('tel').removeAttribute('readonly');
    document.getElementById('gender').removeAttribute('readonly');
    document.getElementById('age').removeAttribute('readonly');
    document.getElementById('name').removeAttribute('readonly');
    document.getElementById('firstname').removeAttribute('readonly');
    document.getElementById('buttonmodify').innerHTML = 'Submit';
    return;
}