emailList = ['test@email.com']
function addEmail(){
    newEmail = document.getElementById('add').value
    emailList.push(" " +  newEmail)
    document.getElementById('se').innerHTML = 'refresh emails'
    // Store data
    var someData = emailList
    localStorage.setItem('myDataKey', someData);

    // Get data
    emailList.push(localStorage.getItem('myDataKey'))
}

function showEmails(){
    document.getElementById('emailss').innerHTML = emailList
}
