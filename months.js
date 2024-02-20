const btns = document.querySelectorAll(".btn");
btns.forEach(card => {
    card.addEventListener('click', function (event) {
        let clickedBtn = event.target.id;
        // console.log(clickedBtn); // console worked successfully

        $.ajax({
            url: "./collectData.php",
            method: "post",
            data: { id: clickedBtn },
            success: function (response) {
                console.log(response);
            }
        })
    })
})