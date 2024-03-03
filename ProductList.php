*{
    margin: 0;
    padding: 0;
}

/* Breadcrumb Nav */
.Breadcrumb-Nav{
    list-style: none;
    font-family: 'Inter',sans-serif;
    color: rgba(1, 88, 152, 1);
    display: flex;
    align-items: center;
    margin:40px 0 20px 102px;
    
}

.Breadcrumb-Nav li{
    display: inline-block;
    font-size: 16px;
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

/* Sort Container */
.sort-container{
    display: flex;
    justify-content: space-between;
    font-family: "Roboto", sans-serif;
    width: 1306px;
    margin: 0 102px;
}

.sort-container h1{
    font-family: 'Montserrat', sans-serif;
    color: #0b416f;
    margin: 36px 0;
 
}

.sort{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.sort-container select{
    border-radius: 10px;
    padding: 5px;
    font-family: "Roboto",sans-serif;
}

/* Product List */
.product-list{
    background-color: white;
    width: 100%;
    
}

.product-list-container{
    display: flex;
    margin-bottom: 10%;
}

.product-list-container .sidebar-container{
    width: 250px;
    height: auto;
    margin: 0px 102px;
    border: 1px solid #808080;
    /* box-shadow: 0 4px 4px #808080; */
    box-shadow: 0 4px 50px rgba(0, 0, 0, 0.1);

}

.product-list-container .sidebar-container form .filter{
    background-color: #0b416f;
    height: 66px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    font-weight: 600;
}

form .filter-title{
    background-color: white;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    font-weight: 600;
    border-top: 1px solid #808080;
    border-bottom: 1px solid #808080;
}

form .filter-container{
    background-color: white;
    height: auto;
    display: flex;
    flex-direction: column;
    padding: 15px;
    gap: 10px;
}

form .filter-container .checkbox{
    font-family: 'Roboto', sans-serif;
}

form .clear-filter{
    display: flex;
    flex-direction: column;
    align-items: center;
}

form .clear-filter input{
    height: 45px;
    width: 170px;
    background-color: #015898;
    color: white;
    font-family: "Roboto", sans-serif;
    border: none;
    border-radius: 30px;
    margin-top: 30px;
}

/* Product List Container */

.list-container{
    height: 770px;
    width: 955px;
    border-radius: 10px;
    box-shadow: 0 4px 50px rgba(0, 0, 0, 0.1);
}

.list-container .product-container{
    display: flex;
    margin-top: 43px;
    margin-left: 73px;
}
 #product{
    width: 230px;
    height: 330px;
    margin-right: 64px;
    font-family: "Roboto", sans-serif;
}

 #info{
    height: 65px;
}

 #info p{
    padding: 5px 0px;
}

#product img{
    width: 230px;
    height: 178px;
}

#info .name{
    width: 200px;
    color: black;
    font-size: 16px;
    font-weight: 600;

}

#info .brand{ 

    width: 200px;
    color: #808080;
    font-size: 11px;
}

#info .price{

    width: 200px;
    color: black;
    font-size: 16px;
    font-weight: 600;
}

#product .view-container{
    width: 230px;
    display: flex;
    justify-content: center;
}

#product .view-container .view-btn{
    background-color: #0b416f;
    font-family: 'Montserrat', sans-serif;
    border-radius: 15px;    
    width: 145px;
    height: 30px;
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
#product .view-container .view-btn p{
    color: white;
    font-size: 12px;
    font-weight: 400;
    
}
