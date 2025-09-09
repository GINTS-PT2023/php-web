
// show alert by adding a event listener to form.
const form = document.getElementById('form');

form.addEventListener("submit", () => {

    alert("Form Successfully Submitted!")

})


// show alert using submitAlert().
function submitAlert(){

    alert("Form Successfully Submitted Using submitAlert() Function!")

}