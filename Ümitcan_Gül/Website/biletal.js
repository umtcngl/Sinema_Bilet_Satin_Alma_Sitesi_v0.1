const container = document.querySelector(".container1");
const count = document.getElementById('count');
const amount = document.getElementById('amount');
const select =document.getElementById('movie');


container.addEventListener('click', function(e) {
    if (e.target.classList.contains('seat') && !e.target.classList.contains('reserved')) {
        
        e.target.classList.toggle('selected');

        let selectedSeatCount = container.querySelectorAll('.seat.selected').length;
        let price =select.value;
        count.innerText=selectedSeatCount;
        amount.innerText=selectedSeatCount*price;
    }
});

select.addEventListener('change',function(e){
    let selectedSeatCount = container.querySelectorAll('.seat.selected').length;
    let price =select.value;
    count.innerText=selectedSeatCount;
    amount.innerText=selectedSeatCount*price;
})


        

