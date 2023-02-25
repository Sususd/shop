const checkParams = () => {
    const card = $('.card-number').val();
    const date = $('.putDate').val();
    const cvv = $('.putCvv').val();

    if (card.length && date.length && cvv.length) {
        $('.btn').removeAttr('disabled');
    } else {
        $('.btn').attr('disabled', 'disabled');
    }
}
