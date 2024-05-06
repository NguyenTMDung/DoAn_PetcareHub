<style>
    .header {
    height: fit-content;
    padding: 2% 3% 0 2%;
    display: flex;
    background-color: #FCEED5;
}

.logo {
    width: 15vw;
    text-align: center;
}

.logo img {
    width: 5vw;
    max-width: 70px;
}

.header .logo {
    width: 10vw;
}

.header #search-container {
    position: relative;
    background-color: #ffffffea;
    flex-direction: row;
    display: flex;
    width: 45vw;
    border-radius: 10px;
    border: 1px solid #D9D7D7;
    margin-left: 5vw;
}

.header #submit {
    padding: 1.5% 2%;
    margin-left: 1%;
    background-color: white;
}

.header #input_search {
    width: 90%;
    border: none;
    margin: 1% 1%;

}

.header #isearch {
    width: 90%;
}

.header #phone,
#email {
    text-align: center;
    padding: 1% 5%;
    margin: 0 5vw 0 0;
}

.header #sty_phone,
#sty_email {
    color: #8E8989;
    font-family: Inter;
}

.header #infor {
    display: inline-flex;
    margin-left: 10vw;
}

.menu {
    display: flex;
    justify-content: center;
    background-color: #FCEED5;
    height: 5vw;
}

.menu .nav-link {
    font-family: 'inter';
    font-size: 20px;
    font-weight: bold;
    font-style: normal;
    color: var(--Primary-Color-Dark-Blue, #003459);
    padding: 0.5vw 4vw;
}

.nav-link a {
    font-family: 'inter';
    font-size: 20px;
    font-weight: bold;
    font-style: normal;
    color: var(--Primary-Color-Dark-Blue, #003459);
    text-decoration-line: none;
    padding-right: 1vw;
}

.menu a:hover {
    text-decoration: underline;
}

.menu a:active {
    text-decoration: underline;
    font-weight: bolder;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin: 0 3vw;
}

#sty-user {
    list-style-type: none;
    margin-top: -1vw;
}

.menu .dropdown-item {
    width: 100%;
    padding: 5% 20%;
}

#footer {
    height: 10%;
    background-color: #FCEED5;
    width: 100%;
    font-style: normal;
    font-family: 'inter';
}

#footer .fa-phone-alt,
.bi-envelope-fill,
.fa-tiktok,
.fa-facebook-f,
.fa-youtube {
    color: white;
    background-color: black;
    padding: 1%;
    border-radius: 100%;
    margin: 3% 3% 3% 0;
}

#footer .fa-facebook-f {
    width: 25px;
    padding-left: 1.5%;
}

#footer table,
td {
    margin-left: 15%;
    margin-right: 10%;
    font-family: 'inter';
}

#footer #connect_shop {
    margin-top: 5%;
}

#footer h3 {
    font-size: 20px;
    font-weight: bold;
}

#infor-shop {
    padding-bottom: -2px;
}

#footer #policy {
    padding-top: 3%;
    width: 30%;
    line-height: 45px;
}

#footer a {
    color: #000;
}

.dropbtn {
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
    display: block;
}

.nav .sub-menu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    width: 200px;
    background-color: #ffffff;
    border: 1px solid gainsboro;
    border-radius: 5px;
    padding: 5% 0;
}

.sub-menu li {
    list-style-type: none;
    padding: 5%;
    width: 100%;
}

.sub-menu li a {
    font-size: 16px;
    color: #000;
    text-decoration: none;
    margin: 8%;
}

.sub-menu li:hover {
    background-color: #d9d7d72f;
}

.nav li:hover>.sub-menu {
    display: block;
    color: #D9D7D7;
}

.nav>li>.sub-menu {
    top: 40px;
    left: 0;
}

.al-center {
    display: flex;
    align-items: center;
}

.ju-center {
    justify-content: center;
}

.item {
    width: 17vw;
    text-align: center;
    border-radius: 12px;
    background: var(--Neutral-Color-00, #FDFDFD);
    box-shadow: 0px 4px 28px -2px rgba(0, 0, 0, 0.08);
    height: 25vw;
    margin: 2vw;

}

.item p {
    text-align: left;
    margin: auto;
    width: 80%;

}

.text-truncate-container p {
    -webkit-line-clamp: 2;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-size: 18px;
    text-align: left;
    font-weight: 500;
}

.pro-price {
    color: #FF0E0E;
    font-family: 'Inter';
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    text-align: left;
    margin: 0.5vw 2vw 2vw 2vw;
}

#title-header {
    display: flex;
    justify-content: space-between;
    margin: auto;
    width: 20%;
    margin-top: 5vw;
}

#title-header a {
    font-size: 20px;
    font-weight: 700;
    text-decoration-line: none;
    color: var(--Primary-Color-Dark-Blue, #003459);;
}

#title-header a:hover {
    text-decoration-line: underline;
}

#title-header a:active {
    text-decoration-line: underline;
}
#frame
{
    width: 90%;
    margin: auto;
    border: 1px solid black;
    border-radius: 10px;
    margin-top: 3vw;
    text-align: center;
    margin-bottom: 3vw;
}
#frame #title
{
    width: 100%;
    background-color: #FCEED5;
    color: #003459;
    border-radius: 10px;
    height: 4vw;
    padding: 1vw;
    font-size: 24px;
}
input[type=checkbox] {
    position: relative;
      cursor: pointer;
      border-radius: 5px;
      margin:4vw;
      border: 1px solid white;
      margin-top: 2vw;
}
input[type=checkbox]:before {
    content: "";
    display: block;
    position: absolute;
    width: 30px;
    height: 30px;
    top: 0;
    left: 0;
    background-color:#e9e9e9;
    border-radius: 5px;
}
input[type=checkbox]:checked:before {
    content: "";
    display: block;
    position: absolute;
    width: 30px;
    height: 30px;
    top: 0;
    left: 0;
    background-color:#003459;
    border-radius: 5px;
}
input[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 10px;
    height: 20px;
    border: solid white;
    border-width: 0 4px 4px 0;
    border-radius: 1px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    margin-left: 5px;
    top: 2px;
    left: 6px;
}
.img-product
{
    width: 30vw;
}
.text-truncate-container {
    width: 100%;
    margin: auto;
}

.text-truncate-container p {
    -webkit-line-clamp: 1;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-size: 18px;
    text-align: left;
    font-weight: 700;
}
.product
{
    display: flex;
    margin-left: 1vw;
    margin-right: 4vw;
}
.select-kind
{
    display: flex;
    width: 15vw;
    padding: 0.5vw;
    margin-top: 0.5vw;
    border-radius: 5px;
    border: 0.5px solid rgb(202, 202, 202);
}
#orders td
{
    padding: 2vw 0;
}
.pro-price {
    color: #FF0E0E;
    font-family: 'Inter';
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 5px;
    margin-top: 1vw;
    margin-left: 0;
}
.quantitys
{
    width: 4vw;
    margin-top: -1vw;
}
#title {
    font-size: 20px;
    font-weight: 700;
    text-decoration-line: none;
    color: var(--Primary-Color-Dark-Blue, #003459);;
}
tr
{
    width: 100%;
}
.delete-pro
{
    padding: 0 2vw;
    background-color: #ffffff;
    border: none;
}
.detail-product
{
    margin-left: 2vw;
    width: 80%;
}
#quantity_title, #quantity_procducts
{
    font-size: 20px;
    font-weight: 600;
}
#total_title, .total_procducts
{
    font-size: 24px;
    font-weight: 600;
}
.total_procducts
{
    color: #FF0E0E;
}
#pay
{
    background-color: #003459;
    color: #FCEED5;
    padding: 0.8vw;
    font-size: 24px;
    font-weight: 700;
    width: 20%;
    border-radius: 30px;
    margin-bottom: 5vw;
    margin-left: 40%;
}
</style>