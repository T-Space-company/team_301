let intervals = []
function startCount() {
    let activeStep = 1
    setDefaultPositions()
    function makeStep() {
        if (activeStep >= 5) {
            clearInterval(interval)
            return
        }
        activeStep++
        const element = document.querySelector(`#stageNumber${activeStep}`);
        element.classList.remove('pos2');
        element.classList.add('pos1');
        if (window.innerWidth < 1024) {
            const mobileScroll = document.querySelector(`#mobileScroll`);
            mobileScroll.style.transform = `translateX(-${(element.clientWidth) * (activeStep-1)}px)`
        }
        if (activeStep > 4)
            return
        const element2 = document.querySelector(`#stageNumber${activeStep+1}`);
        element2.classList.remove('pos3');
        element2.classList.add('pos2');
    }
    const interval = setInterval(() => {
        makeStep()
    }, 5000)
    intervals.push(interval)
}
startCount()

window.addEventListener("resize", (event) => {
    intervals.forEach(item => {
        clearInterval(item)
    })
    startCount()
});
function setDefaultPositions() {
    const mobileScroll = document.querySelector(`#mobileScroll`);
    mobileScroll.style.transform = `translateX(0px)`
    const element1 = document.querySelector(`#stageNumber1`)
    element1.classList.remove('pos3');
    element1.classList.remove('pos2');
    element1.classList.add('pos1');
    const element2 = document.querySelector(`#stageNumber2`)
    element2.classList.remove('pos3');
    element2.classList.remove('pos1');
    element2.classList.add('pos2');
    const element3 = document.querySelector(`#stageNumber3`)
    element3.classList.remove('pos1');
    element3.classList.remove('pos2');
    element3.classList.add('pos3');
    const element4 = document.querySelector(`#stageNumber4`)
    element4.classList.remove('pos1');
    element4.classList.remove('pos2');
    element4.classList.add('pos3');
    const element5 = document.querySelector(`#stageNumber5`)
    element5.classList.remove('pos1');
    element5.classList.remove('pos2');
    element5.classList.add('pos3');
}

