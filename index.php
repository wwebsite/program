<!DOCTYPE html>
<html>
    <head>
        <script src="file.js"></script>
        <title>Email program</title>
        <style>
            body{
                background-color: rgb(15, 28, 40);
                color: rgb(224, 0, 97);
            }
            .everything{
                margin-right: 40%;
                margin-left: 40%;
                margin-top: 100px;
            }
            #aeb{
                display: flex;
                flex-direction: row;
                margin-top: 50px;
            }
            #se{
                margin-left: 50px;
                background-color: rgb(19, 36, 52);
                color: rgb(224, 0, 97);
            }
            #stuff{
                display: flex;
                flex-direction: column;
            }
            p{
                font-size: 30px;
            }
            #add{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="everything">

            <div id="stuff">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="message"></textarea>
                <input placeholder="Add new email" id="add" type="text">  
                <button onclick="addEmail()">Add Email</button>
            </div>

            <div id="aeb">
                <p>current emails:</p> 
                <button id="se" onclick="showEmails()">show emails</button>
            </div>
            <p id="emailss">hidden emails</p>
        </div>
    </body>
</html>