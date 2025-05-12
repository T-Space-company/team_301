const activeCard=document.querySelector(".active-card");
let count=0;
function balanceF(e){document.querySelectorAll(".balance__count").forEach((t=>{t.textContent=`${e}`}))}
const refcount={prof1:document.querySelector("#prof1"),
    count1:document.querySelector("#count1"),
    prof2:document.querySelector("#prof2"),
    count2:document.querySelector("#count2"),
    prof3:document.querySelector("#prof3"),
    count3:document.querySelector("#count3"),
    prof4:document.querySelector("#prof4"),
    count4:document.querySelector("#count4"),
    prof5:document.querySelector("#prof5"),
    count5:document.querySelector("#count5"),
    // prof6:document.querySelector("#prof6"),
    // count6:document.querySelector("#count6"),
    finalcount:document.querySelector(".finalCount")},
    titleBtn=document.querySelector(".title__btn").addEventListener("click",onClickTitleBtn),
    titleCard=document.querySelector(".title__card"),
    cardOne=document.querySelector(".card__one"),
    cardTwo=document.querySelector(".card__two"),
    cardThree=document.querySelector(".card__three"),
    cardFour=document.querySelector(".card__four"),
    cardFive=document.querySelector(".card__five"),
    // cardSix=document.querySelector(".card__six"),
    finalCard=document.querySelector(".final__card"),
    btnB=document.querySelector("#b1").addEventListener("click",onB1),
    btnS=document.querySelector("#s1").addEventListener("click",onS1),
    btncontainer1=document.querySelector("#btncontainer1")
;

function onClickTitleBtn(e){e.preventDefault(),
    titleCard.style.opacity=0,
    titleCard.style.display="none",
    cardOne.classList.add("active-card"),balanceF(count)
}

function onB1(){
    setTimeout((()=>{cardOne.classList.add("card-exit")}), 2e3),
        setTimeout((()=>{cardTwo.classList.add("active-card")}), 2500);
    const e=document.querySelector("#img1");btncontainer1.style.display="none",e.src="images/b.png",refcount.prof1.style.display="flex";
    const t=refcount.count1.textContent;count=parseInt(t),balanceF(count)}
function onS1(){
    setTimeout((()=>{cardOne.classList.add("card-exit")}),2e3),
        setTimeout((()=>{cardTwo.classList.add("active-card")}),2500);
    const e=document.querySelector("#img1");btncontainer1.style.display="none",e.src="images/S.webp",refcount.prof1.style.display="flex";
    const t=refcount.count1.textContent;count=parseInt(t),balanceF(count)}
const btnB2=document.querySelector("#b2").addEventListener("click",onB2),btnS2=document.querySelector("#s2").addEventListener("click",onS2),btncontainer2=document.querySelector("#btncontainer2");

function onB2(){setTimeout((()=>{cardTwo.classList.add("card-exit")}),2e3),
    setTimeout((()=>{cardThree.classList.add("active-card")}),2500);
    const e=document.querySelector("#img2");btncontainer2.style.display="none",e.src="images/b.png",refcount.prof2.style.display="flex";
    const t=refcount.count2.textContent;count+=parseInt(t),balanceF(count)}

function onS2(){setTimeout((()=>{cardTwo.classList.add("card-exit")}),2e3),
    setTimeout((()=>{cardThree.classList.add("active-card")}),2500);
    const e=document.querySelector("#img2");btncontainer2.style.display="none",e.src="images/S.webp",refcount.prof2.style.display="flex";
    const t=refcount.count2.textContent;count+=parseInt(t),balanceF(count)}
const btnB3=document.querySelector("#b3").addEventListener("click",onB3),btnS3=document.querySelector("#s3").addEventListener("click",onS3),btncontainer3=document.querySelector("#btncontainer3");

function onB3(){setTimeout((()=>{cardThree.classList.add("card-exit")}),2e3),

    setTimeout((()=>{cardFour.classList.add("active-card")}),2500);
    const e=document.querySelector("#img3");btncontainer3.style.display="none",e.src="images/b.png",refcount.prof3.style.display="flex";
    const t=refcount.count3.textContent;count+=parseInt(t),balanceF(count)}

function onS3(){setTimeout((()=>{cardThree.classList.add("card-exit")}),2e3),
    setTimeout((()=>{cardFour.classList.add("active-card")}),2500);
    const e=document.querySelector("#img3");btncontainer3.style.display="none",e.src="images/S.webp",refcount.prof3.style.display="flex";
    const t=refcount.count3.textContent;count+=parseInt(t),balanceF(count)}
const btnB4=document.querySelector("#b4").addEventListener("click",onB4),btnS4=document.querySelector("#s4").addEventListener("click",onS4),btncontainer4=document.querySelector("#btncontainer4");

function onB4(){setTimeout((()=>{cardFour.classList.add("card-exit")}),2e3),
    setTimeout((()=>{cardFive.classList.add("active-card")}),2500);
    const e=document.querySelector("#img4");btncontainer4.style.display="none",e.src="images/b.png",refcount.prof4.style.display="flex";
    const t=refcount.count4.textContent;count+=parseInt(t),balanceF(count)

}function onS4(){setTimeout((()=>{cardFour.classList.add("card-exit")}),2e3),setTimeout((()=>{cardFive.classList.add("active-card")}),2500);
    const e=document.querySelector("#img4");btncontainer4.style.display="none",e.src="images/S.webp",refcount.prof4.style.display="flex";
    const t=refcount.count4.textContent;count+=parseInt(t),balanceF(count)}
const btnB5=document.querySelector("#b5").addEventListener("click",onB5),btnS5=document.querySelector("#s5").addEventListener("click",onS5),btncontainer5=document.querySelector("#btncontainer5");


function onB5(){setTimeout((()=>{cardFive.classList.add("card-exit")}),2e3),
    setTimeout((()=>{finalCard.classList.add("active-card")}),2500);
    const e=document.querySelector("#img5");btncontainer5.style.display="none",e.src="images/b.png",refcount.prof5.style.display="flex";
    const t=refcount.count5.textContent;count+=parseInt(t),balanceF(count),refcount.finalcount.textContent=count}

function onS5(){setTimeout((()=>{cardFive.classList.add("card-exit")}),2e3),
    setTimeout((()=>{finalCard.classList.add("active-card")}),2500);
    const e=document.querySelector("#img5");btncontainer5.style.display="none",e.src="images/S.webp",refcount.prof5.style.display="flex";
    const t=refcount.count5.textContent;count+=parseInt(t),balanceF(count),refcount.finalcount.textContent=count}
