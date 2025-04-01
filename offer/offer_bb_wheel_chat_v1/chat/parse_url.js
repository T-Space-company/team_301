
const infoElems = offerData.info.split('%7E');
offerData.crm_campaign = infoElems[9]
offerData.thank_you_page = infoElems[10]
offerData.bge = infoElems[12]
offerData.source = infoElems[11]

function updateParamsBigo(obj) {
    fetch(`https://${window.location.host}/?${obj}`)
        .then((response) => response.text())
        .then(() => {
            console.log("OK!");
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}
const obj = {
    _update_tokens: 1,
    sub_id: offerData.subid,
}
infoElems.forEach((el, idx) => {
    let param = "sub_id_" + (idx + 1)
    obj[param] = el;

})
const queryString = new URLSearchParams(obj).toString();
console.log(queryString);
updateParamsBigo(queryString);