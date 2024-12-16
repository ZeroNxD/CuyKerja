<style>
    .UserBox {
        border: 3px solid rgb(68, 3, 189);
        width: 1200px;
        padding: 20px;
        margin: 0 auto;
        border-radius: 20px;
        display: flex;
    }

    .UserBox img{
        border-radius: 50%;
        width: 200px;
        height: 200px;
        border: 3px solid rgb(72, 71, 71);
        margin-left: 40px;
    }

    .ButtonList{
        display: flex;
        margin: 0 auto;
        justify-content: center;
        width: 1200px;
        padding: 30px;
    }

    .ButtonList img{
        width: 100%;
        height: 100%;
        max-width: 200px;
        max-height: 200px;
    }

    .ButtonList .Button1{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 30px; 
        text-align: center; 
        border: 3px solid black; 
        border-radius: 15px; 
        width: 600px;
        background: #e0dede;
    }

    .ButtonList .Button2{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 30px; 
        margin-left: 40px;
        text-align: center; 
        border: 3px solid black; 
        border-radius: 20px; 
        width: 600px;
        background: #e0dede;
    }

    .ButtonList button {
        border: 5px solid #000000;
        background-color: #01fe40;
        color: #494848; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        margin-top: 40px;
        width: 350px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .ButtonList button:hover {
        background-color: #0026c0; 
        color: white;
        border: 5px solid rgb(108, 107, 107);
    }

    .UserInformation{
        margin-left: 40px;
        padding-top: 40px;
    }

    .UserInformation h1{
        font-weight:bold;
        font-style: italic;
    }

    .UserInformation h2{
        margin-top: 20px;
    }

    .body {
        text-align: center;
    }

    .Quotes {
        position: relative;
        display: inline-block; 
        width: 80%; 
        max-width: 80%; 
        overflow: hidden; 
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .Quotes img {
        width: 100%; 
        height: 100%; 
        display: block;
        border-radius: 15px;
    }

    .Quotes .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%; 
        height: 100%; 
        display: flex; 
        flex-direction: column; 
        align-items: flex-start;
        justify-content: flex-start; 
        background: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: center;
        border-radius: 15px;
    }

    .Quotes .overlay h1 {
        margin: 0;
        font-size: 40px; 
        font-weight: bold;
        padding-top: 150px;
        font-style: italic;
    }

    .Quotes .overlay h2 {
        margin: 10px 0;
        font-size: 25px;
        font-weight: bold;
        margin-top: 290px;
        padding-top: 70px;
        padding-left: 100px;
    }

</style>