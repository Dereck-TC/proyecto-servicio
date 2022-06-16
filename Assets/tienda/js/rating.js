const RatingAverage = document.getElementById('ratingAverage');
const FiveStars = document.getElementById('fiveStars');
const FourStars = document.getElementById('fourStars');
const ThreeStars = document.getElementById('threeStars');
const TwoStars = document.getElementById('twoStars');
const OneStar = document.getElementById('oneStar');
const People = document.getElementById('people');
const StarsRatingAverage = document.getElementById('starsRatingAverage');
let idServicio = document.getElementById('idservicio').value;

// calculate rating average only one decimal
function getRatingAverage(data) {
    let sum = 0;
    let count = 0;
    // if(!empty(data)){
        for (let i = 0; i < data.length; i++) {
            sum += parseInt(data[i].valoracion);
            count++;
        }
    
        let colorStars = '';
        for(let i = 0; i < 5; i++) {
            if(Math.round(sum/count) > i) {
                colorStars += '<span><i class="active icon-star"></i></span>';
            } else {
                colorStars += '<span><i class="icon-star"></i></span>';
            }
        }
        StarsRatingAverage.innerHTML = colorStars;
    
        return (sum / count).toFixed(1);
    // }else{
    //     return 0;
    // }
    
}

// get amount of people per rating
function getRatingAmount(data) {
    let amount = [];
    for (let i = 0; i < data.length; i++) {
        if (amount[data[i].valoracion] === undefined) {
            amount[data[i].valoracion] = 1;
        } else {
            amount[data[i].valoracion]++;
        }
    }
    return amount;
}

// get percentage of people per rating
function getRatingPercentage(data) {
    let percentage = [];
    for (let i = 0; i < data.length; i++) {
        if (percentage[data[i].valoracion] === undefined) {
            percentage[data[i].valoracion] = 1;
        } else {
            percentage[data[i].valoracion]++;
        }
    }
    for (let i = 0; i < percentage.length; i++) {
        percentage[i] = (percentage[i] / data.length) * 100;
    }
    return percentage;
}

function setBars(ratingPercentage){
    $(document).ready(function() {
        $('.bar span').hide();
        $('#bar-five').animate({
        width: ratingPercentage[5]+'%'}, 1000);
        $('#bar-four').animate({
        width: ratingPercentage[4]+'%'}, 1000);
        $('#bar-three').animate({
        width: ratingPercentage[3]+'%'}, 1000);
        $('#bar-two').animate({
        width: ratingPercentage[2]+'%'}, 1000);
        $('#bar-one').animate({
        width: ratingPercentage[1]+'%'}, 1000);

        setTimeout(function() {
        $('.bar span').fadeIn('slow');
        }, 1000);
    });
}

let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
let ajaxUrl = base_url+'/Tienda/getRatingC/'+idServicio;
request.open("GET",ajaxUrl,true);
request.send();

request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        let data = JSON.parse(request.responseText);
        var ratingAverage = getRatingAverage(data) == "NaN" ? 0 : getRatingAverage(data);
        let ratingAmount = getRatingAmount(data);
        let ratingPercentage = getRatingPercentage(data);

        RatingAverage.innerHTML = ratingAverage;
        FiveStars.innerHTML = ratingAmount[5] ? ratingAmount[5]: 0  ;
        FourStars.innerHTML = ratingAmount[4] ? ratingAmount[4]: 0  ;
        ThreeStars.innerHTML = ratingAmount[3] ? ratingAmount[3]: 0  ;
        TwoStars.innerHTML = ratingAmount[2] ? ratingAmount[2]: 0  ;
        OneStar.innerHTML = ratingAmount[1] ? ratingAmount[1]: 0  ;
        People.innerHTML = data.length;
        setBars(ratingPercentage);
       
    }
    
}
console.log(getRatingAverage(data))