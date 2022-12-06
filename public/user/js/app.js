
let btnone = document.getElementById("btnone")
let content = document.getElementById("content")
let bttwo = document.getElementById("btntwo")
let categories = document.getElementById("categories")
let hover = document.getElementById("hover")



//display
content.style.display = "none"
categories.style.display = "none"






//box-height
$("#btn").click(function(){
    box.style.height = "235px"
    $("#btn").click(function(){
        box.style.height = "170px"
    })
});

//btn function process

    btnone.addEventListener("click",function(){
        content.style.display = "block"

        btnone.addEventListener("click",function(){
            content.style.display = 'none'
        })
    })


    bttwo.addEventListener("click",function(){
        categories.style.display = " block"
        

        bttwo.addEventListener("click",function(){
            categories.style.display = "none"
        })
    })

//btn-icon function 
    btnone.addEventListener("click",function(){
        btnone.innerHTML = `
        <img src="../image/up-arrow.png" class="ms-3"  alt="">
        <h6 class="d-inline-block fontsizetwo1 hover">less</h6>
        `
  
          btnone.addEventListener("click",function(){
              btnone.innerHTML = `
              <img src="../image/down-arrow.png" class="ms-3"  alt="">
              <h6 class="d-inline-block fontsizetwo1 hover">More</h6>
              `
          })
      })


      let boxalert = document.getElementById('boxalert')
      let btnclick = document.getElementById('click')
      btnclick.addEventListener('click',function(){
        boxalert.classList.toggle('showbox')
      })

      let boxbtn = document.getElementById('box-toggle');
      boxbtn.style.display = 'none';

      $(document).ready(function(){
        $('#btn-show').click(function(){
            $('#box-toggle').slideToggle(300)
        })
      })