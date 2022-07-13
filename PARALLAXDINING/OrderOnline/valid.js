function hideAllErrors() {
    //get all the feedback class elements
    var allfbs = document.getElementsByClassName("feedback");

    //iterate on all feedback elements and set their display none
    for (var i = 0; i < allfbs.length; i++)
        allfbs[i].style.display = "none";
}
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready() {
    document.getElementsByClassName('btn-submit')[0].addEventListener('click', submitclicked)
    console.log('here');
}

function submitclicked() {
    alert('Thank You for your purchase ')
    alert('Do visit again')
    alert('If you want to order more press click button')
}