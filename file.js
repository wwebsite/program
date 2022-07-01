emailList = ['test@email.com']
function addEmail(){
    newEmail = document.getElementById('add').value
    emailList.push(" " +  newEmail)
    document.getElementById('se').innerHTML = 'refresh emails'
    // Store data
    var someData = newEmail
    localStorage.setItem('myDataKey', someData);
}

function showEmails(){
    document.getElementById('emailss').innerHTML = emailList
    // get data
    var data = localStorage.getItem('myDataKey');
}
