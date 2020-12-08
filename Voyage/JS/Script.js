document.addEventListener("DOMContentLoaded",  () =>{
    let People = document.getElementById("cmdPeople")
    let Transport = document.getElementById("cmdTransport")
    let Logement = document.getElementById("cmdLogement")
    let Activite = document.getElementById("cmdActivite")

    let txtPeople = document.getElementById("txtPeople")
    let txtTransport = document.getElementById("txtTransport")
    let txtLogement = document.getElementById("txtLogement")
    let txtActivite = document.getElementById("txtActivite")

    let txtHotelName = document.getElementById("txtHotelData00")
    let txtHotelCode = document.getElementById("txtHotelData02")
    let txtHotelCity = document.getElementById("txtHotelData03")

    let logoMenu = document.getElementById("CPNVLogo")

    let imgHotel = document.getElementById("HotelPic")

    //display only what we want onclik
    People.addEventListener("click",  () =>{
        txtPeople.classList.remove("hidden")
        txtTransport.classList.add("hidden")
        txtLogement.classList.add("hidden")
        txtActivite.classList.add("hidden")

        People.classList.add("cmd-nav-selected")
        Transport.classList.remove("cmd-nav-selected")
        Logement.classList.remove("cmd-nav-selected")
        Activite.classList.remove("cmd-nav-selected")
    });
    Transport.addEventListener("click",  () =>{
        txtPeople.classList.add("hidden")
        txtTransport.classList.remove("hidden")
        txtLogement.classList.add("hidden")
        txtActivite.classList.add("hidden")

        People.classList.remove("cmd-nav-selected")
        Transport.classList.add("cmd-nav-selected")
        Logement.classList.remove("cmd-nav-selected")
        Activite.classList.remove("cmd-nav-selected")
    });
    Logement.addEventListener("click",  () =>{
        txtPeople.classList.add("hidden")
        txtTransport.classList.add("hidden")
        txtLogement.classList.remove("hidden")
        txtActivite.classList.add("hidden")

        People.classList.remove("cmd-nav-selected")
        Transport.classList.remove("cmd-nav-selected")
        Logement.classList.add("cmd-nav-selected")
        Activite.classList.remove("cmd-nav-selected")
    });
    Activite.addEventListener("click",  () =>{
        txtPeople.classList.add("hidden")
        txtTransport.classList.add("hidden")
        txtLogement.classList.add("hidden")
        txtActivite.classList.remove("hidden")

        People.classList.remove("cmd-nav-selected")
        Transport.classList.remove("cmd-nav-selected")
        Logement.classList.remove("cmd-nav-selected")
        Activite.classList.add("cmd-nav-selected")
    });

    //switch img by name
    txtHotelName.addEventListener("change", ()=>{

        if (RegExp("^[Aa]lpha").test(txtHotelName.value)) {
            imgHotel.classList.remove("hidden")
            imgHotel.src = "IMG/alpha.jpg"
        }

        if (RegExp("^[Bb]eta").test(txtHotelName.value)) {
            imgHotel.classList.remove("hidden")
            imgHotel.src = "IMG/beta.jpg"
        }

        if (RegExp("^[Dd]elta").test(txtHotelName.value)) {
            imgHotel.classList.remove("hidden")
            imgHotel.src = "IMG/delta.jpg"
        }

        if (RegExp("^[Ee]psilon").test(txtHotelName.value)) {
            imgHotel.classList.remove("hidden")
            imgHotel.src = "IMG/epsilon.jpg"
        }

        if (RegExp("^[Gg]amma").test(txtHotelName.value)) {
            imgHotel.classList.remove("hidden")
            imgHotel.src = "IMG/gamma.jpg"
        }

    })

    //NPA city link
    txtHotelCode.addEventListener("change", ()=>{

        npa.forEach((npa, i) => {
            if (txtHotelCode.value.toString() === npa.toString()){
                txtHotelCity.value = villes[i]
            }
        })

    })

    //wipe doc on click
    logoMenu.onclick = function () {

        txtPeople.classList.add("hidden")
        txtTransport.classList.add("hidden")
        txtLogement.classList.add("hidden")
        txtActivite.classList.add("hidden")

        People.classList.remove("cmd-nav-selected")
        Transport.classList.remove("cmd-nav-selected")
        Logement.classList.remove("cmd-nav-selected")
        Activite.classList.remove("cmd-nav-selected")
        return false
    }
})