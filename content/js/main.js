var getParam = window.location.search;
/**
 * Created by karlygashmukhitova on 6/14/17.
 */
/*
localStorage.setItem('id', 'true');
*/

console.log(getRandomInt(0,1000) + '' + getRandomInt(0,1000));
var param = localStorage.getItem('id', true);
console.log(param);
/*
if (param=='true'){
.ajax({
        type: "POST",
        url: "posts/view_update";
        data: param()
    }
});
*/

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}
/*decodeURIComponent(location.search.substr(1)).split('&')*/
