window.addEventListener("load",function(){
    const slider = this.document.querySelector(".top");
    const sliderMain = this.document.querySelector(".slider-main");
    const sliderItems= this.document.querySelectorAll(".slider-item");
    const btnNext = this.document.querySelector(".slider-next");
    const btnPrev = this.document.querySelector(".slider-prev");
    const dotItem = this.document.querySelectorAll(".slider-dot-item");
    const sliderItemWith = sliderItems[0].offsetWidth;//1366; 
    console.log(sliderItemWith);
    const sliderLength = sliderItems.length;
    let postionX= 0;
    let index=0;

    btnNext.addEventListener("click", function(){
        changeSlide(1);
    });

    btnPrev.addEventListener("click", function(){
        changeSlide(-1);
    });

    [...dotItem].forEach(item => item.addEventListener("click", function(e){
        
        [...dotItem].forEach(el => el.classList.remove("active"));
        e.target.classList.add("active");
        const itemIndex = parseInt(e.target.dataset.index);
        index = itemIndex;
        postionX =-1.0 * index * sliderItemWith;
        sliderMain.style = 'transform: translateX('+(postionX) +'px)';
    }));


    function changeSlide(direciton){
        if(direciton === 1){
            if(index <sliderLength-1){
                index++;
                postionX -= sliderItemWith;
                sliderMain.style = 'transform: translateX('+postionX +'px)';
            }
            
            //document.getElementById("slider-main").style.transform= 'translateX(${postionX}px)';
        }
        else if(direciton ===-1){
            
            if(index>0 ){
                index--;
                postionX += sliderItemWith;
                sliderMain.style = 'transform: translateX('+postionX +'px)';
            }
        }
        [...dotItem].forEach(el => el.classList.remove("active"));
        dotItem[index].classList.add("active");
        console.log(index);
    }
    var temp = 1;
    changeSlider=function(){
        if(index ===sliderLength-1){
            temp =-1;
        }
        if(index===0){
            temp =1;
        }
        changeSlide(temp);
    }
    setInterval(changeSlider, 8000);
    
});