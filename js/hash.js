function hashPWD(){
    let hashedPassword = CryptoJS.SHA256($("#password").val());
    $("#password").val(hashedPassword.toString(CryptoJS.enc.Hex));
}