var username;
function account_edit(){
    document.getElementById('account_btn_edit').style.display='none'
    document.getElementById('account_btn_cancel').style.display='inline'
    document.getElementById('account_btn_save').style.display='inline'
    document.getElementById('account_btn_delete').style.display='inline'

    document.getElementById('form-username').removeAttribute('readonly')
    document.getElementById('form-password').removeAttribute('readonly')
    document.getElementById('form-password').value=''
    document.getElementById('form-name').removeAttribute('readonly')
    document.getElementById('form-email').removeAttribute('readonly')

    username=document.getElementById('form-username').value
}

function account_cancel(){
    window.location.replace("index.php?p=account")
}

/* function create_post(el){
    
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
 */

    function create_post(ele) {
        var srcElement = document.getElementById(ele);
        if (srcElement != null) {
            if (srcElement.style.display == "block") {
                srcElement.style.display = 'none';
            }
            else {
                srcElement.style.display = 'block';
            }
            return false;
        }
    }