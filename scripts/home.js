var activeFaq=null;

function focusFaq(f){
        $('#faq'+f+'-body').css({display:'block'})
        $('#faq'+f+'-title').addClass("faq-title-active");
    activeFaq=f;
}

function blurFaq(f){
    $('#faq'+f+'-body').css({display:'none'})
    $('#faq'+f+'-title').removeClass("faq-title-active");
    if(activeFaq==f){
        activeFaq=null;
    }
}

$('#faq1-title').click(()=>{
    if(activeFaq==1){
        blurFaq(1);
    }
    else{
        blurFaq(activeFaq);
        focusFaq(1);
    }


})

$('#faq2-title').click(()=>{
    if(activeFaq==2){
        blurFaq(2);
    }
    else{
        blurFaq(activeFaq);
        focusFaq(2);
    }
})

$('#faq3-title').click(()=>{
    if(activeFaq==3){
        blurFaq(3);
    }
    else{
        blurFaq(activeFaq);
        focusFaq(3);
    }
})

const iemOnMaps="https://www.google.com.sa/maps/place/Institute+of+Engineering+%26+Management/"+
"@22.5734889,88.4327701,18z/"+
"data=!4m8!1m2!2m1!1siem!3m4!1s0x0:0x905231d91b918a3!8m2!3d22.5744178!4d88.433778";


$("#locate-link").click(()=>{
window.location=iemOnMaps;
})

$("#footer-credits-button").click(()=>{
    $("#footer-credits-button").css({display:'none'});
    $("#footer-credits-body").css({display:'flex'});
})
