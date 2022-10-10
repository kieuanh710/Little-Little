let PaymentItem = document.querySelector('.paymentSuccess_item');
function next() {
    if (i >= PaymentItem.length - 1) {
        return false;
    }
    i++;
    PaymentItem.setAttribute('src', PaymentItem[i]);
}