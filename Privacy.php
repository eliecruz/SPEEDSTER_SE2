*{
    padding: 0;
    margin: 0;

}

/* Breadcrumb */

.Breadcrumb-Nav{
    list-style: none;
    color: rgba(1, 88, 152, 1);
    display: flex;
    align-items: center;
    margin:40px 0 20px 102px;
    
}

.Breadcrumb-Nav li{
    display: inline-block;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
}

.Breadcrumb-Nav li::after{
    content: " > ";
    font-weight: bold;
}

.Breadcrumb-Nav li:last-child::after{
    content: "";    
}

.Breadcrumb-Nav a{
    font-weight: normal;
    text-decoration: none;
    color: rgba(1, 88, 152, 1);
}

.Breadcrumb-Nav a:hover{
    text-decoration: underline;
}

/* Privacy */

.privacy{
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 50px 0 100px 0;
}

.privacy .text{
    font-family: 'Montserrat', sans-serif;
    width: 648px;
}

.text h1{
    margin-top: 20px;
    font-size: 30px;
    text-align: center;
}

.text h3{
    margin-top: 40px;
    font-size: 20px;
}

.text h5{
    margin-top: 40px;
    font-size: 16px;
}

.text p{
    margin-top: 20px;
    font-size: 16px;
}

