<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na M-Pesa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Century Gothic', sans-serif;
        }

        .card {
            width: 400px;
            border: none;
            border-radius: 20px;
            margin: auto;
            padding: 30px;
            background-image: url('kenya.jpg'); /* Replace with your pattern image */
            background-size: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .options {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .option {
            border: none;
            border-radius: 20px;
            background: #e57f10;
            padding: 10px 20px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .option:hover {
            background: #f3952a;
        }

        .mpesa {
            background: #00796b;
        }

        .media {
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .media img {
            border-radius: 15px;
            width: 100px;
            height: 100px;
        }

        .media h6 {
            font-size: 22px;
            color: #e57f10;
            margin-left: 20px;
        }

        .form-label {
            color: #e57f10;
            font-weight: 600;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
        }

        .btn-success {
            background-color: #e57f10;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 15px 30px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #f3952a;
        }
    </style>
</head>
<body oncontextmenu="return false" class="snippet-body">
    <div class="container">
        <div class="card mt-5">
            <div class="options">
                <div class="option mpesa"><span>M-Pesa</span></div>
                <div class="option"><span>Paypal</span></div>
                <div class="option"><span>E-Card</span></div>
            </div>
            <div class="media">
            <img src="./images/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" />
                <div class="media-body">
                    <h6 class="mt-1">Enter Amount & Number</h6>
                </div>
            </div>
            <div class="media">
                <form class="row g-3" action="./stk_initiate.php" method="POST">
                    <div class="col-12">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                    </div>
                    <div class="col-12">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" name="submit" value="submit">Donate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
