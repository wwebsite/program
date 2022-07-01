emailList = ['test@email.com']
function addEmail(){
    newEmail = document.getElementById('add').value
    emailList.push(" " +  newEmail)
    document.getElementById('se').innerHTML = 'refresh emails'
}

function showEmails(){
    document.getElementById('emailss').innerHTML = emailList
}