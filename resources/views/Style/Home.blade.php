<style>

    .main{
        background: #deded9;
    }

    .image-container {
        position: relative;
        display: inline-block; 
        width: 100%; 
        max-width: 100%; 
        overflow: hidden; 
    }

    .image-container img {
        width: 100%; 
        height: 100%; 
        display: block;
    }

    .image-container .overlay {
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
    }

    .image-container .overlay h1 {
        margin: 0;
        font-size: 50px; 
        font-weight: bold;
        padding-top: 200px;
        padding-left: 100px;
    }

    .image-container .overlay p {
        margin: 10px 0;
        font-size: 25px;
        font-weight: bold;
        padding-top: 70px;
        padding-left: 100px;
    }

    .image-container .overlay button {
        border: 2px solid #000000;
        background-color: #9c9c9c;
        color: #000000; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        margin-left: 100px;
        margin-top: -50px;
    }

    .image-container .overlay button:hover {
        background-color: #3b3939; 
        color: white;
        border: 2px solid white;
    }

    .LookingJob{
        position: relative;
        display: inline-block; 
        width: 100%; 
        max-width: 100%; 
        overflow: hidden; 
    }

    .LookingJob img{
        width: 500px;
        
    }


    .LookingJob .overlay{
        margin-top: 40px;
        margin-left: 30px;
        margin-right: 30px; 
        margin-bottom: 40px;
        
    }

    .LookingJob .textsection h1{
        margin-top: 10px;
        margin-bottom: 50px;
        font-style: italic;
        font-weight: bold;
        font-size: 50px;
    }

    .LookingJob .textsection h3{
         margin-bottom: 150px;
         font-style: italic;
         font-weight: bold;
         font-size: 20px;
    }

    .LookingJob .textsection button{
        margin-top: 40px;
        border: 5px solid gray;
        background-color: #9c9c9c;
        font-weight: bold;
        color: white; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        margin-left: 100px;
        margin-top: -50px;
        width: 200px;

    }

    .LookingJob .textsection button:hover{
        background-color: darkblue; 
        color: white;
        border: 5px solid blue;
    }

    .CategoryJobs{
        position: relative;
        display: inline-block; 
        width: 100%; 
        max-width: 100%; 
        overflow: hidden; 
    }

    .CategoryJobs img{
        width: 500px;
        
    }


    .CategoryJobs .overlay{
        margin-top: 40px;
        margin-left: 30px;
        margin-right: 30px; 
        margin-bottom: 40px;
        text-align: right;
        justify-content: flex-end;
        
    }

    .CategoryJobs .textsection h1{
        margin-top: 10px;
        margin-bottom: 50px;
        font-style: italic;
        font-weight: bold;
        font-size: 38px;
        text-align: right;
    }

    .CategoryJobs .textsection h3{
         margin-bottom: 150px;
         font-style: italic;
         font-weight: bold;
         font-size: 20px;
         text-align: right;
    }

    .CategoryJobs .textsection button{
        margin-top: 40px;
        border: 5px solid gray;
        background-color: #9c9c9c;
        font-weight: bold;
        color: white; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        margin-left: 50px;
        margin-top: -50px;
        width: 300px;

    }

    .CategoryJobs .textsection button:hover{
        background-color: darkcyan; 
        color: white;
        border: 5px solid green;
    }

    .featurejob{
        position: relative;
        display: inline-block; 
        width: 100%; 
        max-width: 100%; 
        overflow: hidden; 
    }

    .featurejob h1{
        margin-left: 40px;
        margin-top: 30px;
        font-weight: bold;
    }

    .featurejob img{
        margin-left: 40px;
        margin-top: 30px;
        width: 80%;
        height: 80%;
        max-width: 300px;
        max-height: 200px;
    }

    .featurejob h2{
        font-size: 25px;
    }

    .featurejob .textsection {
        padding-left: 10px
    }

    .featurejob .textsection h2{
        font-weight: bold;
    }

    .featurejob .textsection button{
        border: 5px solid gray;
        background-color: #9c9c9c;
        font-weight: bold;
        color: white; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        width: 200px;

    }

    .featurejob .textsection button:hover{
        background-color: red; 
        color: white;
        border: 5px solid purple;
    }

    .aboutus {
        position: relative;
        display: flex; 
        width: 100%; 
        max-width: 100%; 
        overflow: hidden; 
        justify-content: center;
        align-items: center;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .aboutus img {
        width: 100%; 
        max-width: 1000px;
        max-height: 500px;
        height: 100%; 
        display: block;
        justify-content: center;
    }

    .aboutus .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%; 
        height: 100%; 
        display: flex; 
        flex-direction: column; 
        align-items: center;
        justify-content: center; 
        color: black;
    }

    .aboutus .overlay h1{
        font-weight: bold;
        font-size: 30px;
    }

    .aboutus .overlay p{
        font-weight: bold;
        margin-top: 10px;
    }

    .aboutus .overlay button{
        border: 5px solid #1ce709;
        background-color: #aafea6;
        color: #2e2c2c; 
        padding: 10px 20px; 
        font-size: 16px; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: all 0.3s ease; 
        margin-top: 250px;
    }

    .aboutus .overlay button:hover{
        background-color: #2c04f7; 
        color: white;
        border: 5px solid rgb(85, 0, 244);
    }
</style>