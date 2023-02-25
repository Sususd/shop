const checkParams = () => {
    const name = $('.putName').val();
    const fname = $('.putFname').val();
    const email = $('.putEmail').val();
    const pass = $('.putPass').val();
    const region = $('.putRegion').val();
    const city = $('.putCity').val();
    const number = $('.putNumber').val();
    const home = $('.putHome').val();
    const phone = $('.putPhone').val();
    const postalcode = $('.putPostalcode').val();

    if (name.length && fname.length && email.length && pass.length && region.length && city.length && number.length && home.length && phone.length && postalcode.length) {
        $('.btn').removeAttr('disabled');
    } else {
        $('.btn').attr('disabled', 'disabled');
    }
}
