$(document).ready(() => {
    let font = 18
    let h1 = 24
    $('#aumenta').click(() => {
        if(font < 22) {
            font++
            $('body').css({'font-size': font + 'px'})
            $('p').css({'font-size': font + 'px'})
            $('h1').css({'font-size': h1 + font + 'px'})
        }
    })

    $('#diminui').click(() => {
        if(font > 18) {
            font--
            $('body').css({'font-size': font + 'px'})
            $('p').css({'font-size': font + 'px'})
            $('h1').css({'font-size': h1 + font + 'px'})

        }

    })
})