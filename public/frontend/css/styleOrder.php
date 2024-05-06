<style>
        .header {
            height: fit-content;
            padding: 2% 3% 0 10%;
            display: flex;
            background-color: #FCEED5;
            height: 7vw;
            display: flex;
        }

        .logo {
            text-align: left;
            font-size: 24px;
            font-weight: 700;
            color: var(--Primary-Color-Dark-Blue, #003459);
            width: 80%;
        }

        #complete {
            background-color: #003459;
            color: #FCEED5;
            font-size: 24px;
            font-weight: 700;
            border-radius: 20px;
            margin-top: 2vw;
            padding: 0.5vw 1vw;
            margin-left: 23%;
        }

        .options {
            display: flex;
            flex-wrap: wrap;
        }

        .orders {
            display: flex;
            flex-wrap: wrap;
            height: fit-content;
        }

        #detail-order {
            background-color: white;
            width: 50%;
            border: 1px solid #CCD1D2;
            padding: 3vw 8vw;
        }

        .title {
            font-size: 24px;
            font-weight: 600;
        }

        #location,
        #pay {
            margin-top: 2vw;
            border: 1px solid #AFAFAF;
            border-radius: 10px;
        }

        .options input[type=radio] {
            width: 3%;
            margin: 1vw 2vw;
        }

        .options p {
            margin: 1vw 0;
            font-size: 18px;
            font-weight: 400;
            width: 65%;
        }

        .options i {
            width: 20%;
            margin: 1vw 0;
            text-align: center;
        }

        #infor-customer p {
            font-size: 16px;
            font-weight: 400;
            margin-top: 1.5vw;
        }

        #infor-customer input[type=text],
        input[type=tel] {
            width: 100%;
            padding: 1vw;
            border: 1px solid #AFAFAF;
            border-radius: 10px;
        }

        #address_shop {
            border: 1px solid #CCD1D2;
            border-radius: 10px;
            width: 100%;
            text-align: left;
            background-color: white;
            padding: 0.5vw 1vw 0 1vw;
            font-size: 18px;
        }

        #infor-customer p {
            font-size: 16px;
            font-weight: 400;
            margin-top: 1.5vw;
        }

        #infor-customer h5 {
            color: #003459;
        }

        #bank p {
            line-height: 0px;
            width: 100%;
            padding: 2vw 1vw 2vw 5vw;
            margin-bottom: -3vw;
            font-size: 16px;
            font-weight: 400;
            color: #656565;
        }

        #bank h6 {
            padding: 0 0 0 5vw;
            margin-bottom: -1vw;
        }

        #products {
            background-color: #F5F5F5;
            width: 50%;
            border: 1px solid #CCD1D2;
            max-height: max-content;
            padding: 3vw 1vw;
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
            font-weight: 600;
        }

        .detail-product {
            width: 60%;
            text-align: left;
        }

        .pro-price {
            font-family: 'Inter';
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 5px;
            align-items: center;
            display: flex;
            margin-left: 3.5vw;
            color: rgba(203, 14, 14, 0.757);
        }

        .img-product {
            width: 5vw;
            margin-top: 1vw;
        }

        #error-message,
        #error-message1 {
            color: red;
            margin-left: 1vw;
        }
    </style>