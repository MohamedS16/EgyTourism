        ham = document.querySelector('.ham');
        links = document.querySelector('.links');
        cancel = document.querySelector('.cancel')


        // nav side bar

        ham.addEventListener('click', function () {
            links.classList.add('nright')
        })

        cancel.addEventListener('click', function () {
            links.classList.remove('nright')
        })