body{
    --header-height : 50px;
    --footer-height : 70px;
    margin: var(--header-height) 0 0 var(--footer-height);
    margin: auto;
    font-family: sans-serif;
}

.preload *{
    transition: none !important;
}


.header , .nav-bar{
    margin: auto;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--header-height);
    border: none;
    display: flex;
}

.header{
    background: #33628C;
}

.footer{
    margin: auto;
    position: fixed;
    margin-top: 608px;
    width: 100%;
    height: var(--footer-height);
    border: none;
    display: flex;
    background: #C2D3E2;
    font-size: 14px; 
       
}

.footer-data{
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    align-content: center;
    color: #716D6D;
    text-align: center;
}

.nav-bar{
    background: #33628C;
}

.header-button{
    width: var(--header-height);
    height: var(--header-height);
    flex-shrink: 0;
    background: #33628C;
    outline: none;
    border: none;
    color: #ffffff;
    cursor: pointer;
}

.date{
    padding-top: 15px;
    padding-left: 25px;
    color: #000000;
    font-family:sans-serif;
    font-style: italic;
    font-weight: 700;
    font-size: 18px;
}

.open-img{
    width: 195px;
}

.nav-links{
    margin-top: 50px;
    padding-top: 50px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
    height: 100vh;
    width: 244px;
    background: #33628C;
    transform: translateX(-244px);
    transition: transform 0.3s;
    
}


.nav-links .nav-bar .nav-header-button{
    width: var(--header-height);
    height: var(--header-height);
    flex-shrink: 0;
    background: none;
    outline: none;
    border: none;
    color: #ffffff;
    cursor: pointer;
}

.nav-links .nav-bar .close-img{
    width: fit-content;
    height: 50px;
}

.nav-open .nav-links{
    transform: translateX(0);
}

.nav-link{
    display: flex;
    height: 30px;
    align-items: center;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    padding: 12px 15px;
    background: transform 0.2s;
    
}


.nav-links > a i::before{
    padding-right: 25px; 
}

.nav-links span{
    font-size: 16px;
    font-family:sans-serif;
}

.nav-link-active{
    color: white; 
    background: rgba(255, 253, 253, 0.13);  
}

.nav-link:hover{
    background: rgba(255, 253, 253, 0.363);
}


.nav-overlay{
    position: fixed;
    top: 0;
    left:0;
    width: 100%;
    height: 100vh;
    visibility: hidden;
    opacity: 1;
    transition: opacity 0.3s;
}

.nav-open .nav-overlay{
    visibility: visible;
    opacity: 1;
}


@media (min-width: 800px) {


    .notification {
        position: absolute;
        right: 25%;
        padding-top: 15px;
        margin-right: 10px;
    }
    
    .notification i{
        color: #000000;
    }
    
    .user-login{
        position: absolute;
        right: 16%;
        padding-top: 15px;
        display: flex;
    }
    
    .img-rounded-circle{
        position: absolute;
        right: 5%;
        border-radius: 50%;
        width:50px;
        height: 50px;
    }

}

@media (max-width: 799px) {
    
    .open-img{
        visibility: hidden;
    }

    .date{
        visibility: hidden;
    }

    .notification {
        position: absolute;
        right: 70%;
        padding-top: 15px;
    }
    
    .notification i{
        color: #000000;
    }
    
    .user-login{
        position: absolute;
        right: 40%;
        padding-top: 15px;
        display: flex;
        visibility: hidden;
    }
    
    .img-rounded-circle{
        position: absolute;
        right: 5%;
        border-radius: 50%;
        width:50px;
        height: 50px;
    }
    
}
    



