<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOBBIN | INVOICE</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            margin: 0.5cm 1cm 1.5cm 1cm;
            font-size: 14px;
            font-family: 'Helvetica';
        }

        * {
            box-sizing: border-box;
        }

        .w-100 {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        footer.pdf-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            background: #a98c35;
            font-size: 14px;
            margin: 0;
            padding-top: 10px;
            height: 30px;
            color: white;
        }

        .m-0 {
            margin: 0;
        }

        .my-10 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .product_table {
            border-collapse: collapse;
        }

        .product_table th,
        .product_table td {
            padding: 5px;
        }

        .product_table th {
            background: #1b1b1a;
            color: white;
        }

        .product_table tr:nth-child(even) {
            background: #f2f2f2;
        }

        .bt-line {
            height: 70px;
            width: 8px;
            background-color: #b59e4c;
            display: inline-block;
            margin: 15px;
        }

        .title {
            display: inline-block;
            font-size: 60px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .logo {
            padding-left: 30px;
            padding-top: 20px;
        }

        .quotation {
            background-color: #1b1b1a;
            margin-left: -1.1cm;
            padding: 10px;
            width: 70%;
        }

        .quotation-last {
            background-color: #b59e4c;
            margin-right: -1.1cm;
            padding: 22px 60px 22px 22px;
            width: 30%;
        }

        .quotation-text {
            font-size: 20px;
            color: white;
            margin-left: 50px;
        }

        .link {
            margin-right: 20%;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .mt-20 {
            margin-top: 20px;
        }

    </style>
</head>

<body>
    <main>
        <div>
            <table class="w-100">
                <tr class="text-left">
                    <td class="logo">
                        <img src="{{asset('asset/frontend/assets/logo/bobbin.png')}}" alt="Logo" style="width:100px;">
                        <div class="bt-line">
                        </div>
                        <span class="title">Bobbin</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="quotation">
                            <span class="quotation-text">QUOTATION</span>
                        </div>
                    </td>
                    <td class="link">
                        <p>www.facbook.com/bobbin.ctg<br>bobbinctg@gmail.com</p>
                    </td>
                    <td>
                        <div class="quotation-last"></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="my-10">
            <table class="w-100">
                <tr>
                    <td width="70%" class="text-left">
                        <b>Chattogram Branch:</b><br>
                        Shop No. 13, first floor,<br>
                        New Market(B-Block),<br>
                        Chattogram,Bangladesh.<br>
                        <br>
                        <b>Dhaka Branch:</b><br>
                        Road 6A, House 17, Sector 5,<br>
                        Uttara, Dhaka, Bangladesh.<br>
        </div>
        </td>
        <td width="30%" class="text-right">
            <b>Date:</b> {{ date('d-m-Y') }}<br>
            <br>
            <b>Order ID:</b> {{ $orders[0]->order_id }}<br>
            <br>
            <b>Payment Method:</b> COD<br>
        </td>
        </tr>
        </table>
        </div>
        <div class="mt-20">
            <table class="w-100 product_table">
                <thead>
                    <tr>
                        <th class="text-left">Bill To</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="20%" class="text-left">Name:</td>
                        <td width="50%" class="text-left">{{ $orders[0]->user->name }}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="text-left">Email:</td>
                        <td width="50%" class="text-left">{{ $orders[0]->user->email }}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="text-left">Contact No:</td>
                        <td width="50%" class="text-left">{{ $orders[0]->user->mobile_no }}</td>
                    </tr>
                    <tr>
                        <td width="20%" class="text-left">Address:</td>
                        <td width="50%" class="text-left">
                            {{ $orders[0]->user->street.', '.$orders[0]->user->postal_code.', '.$orders[0]->user->city }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-30">
            <table class="w-100 product_table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-left">Product</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Color</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                        $total = 0;
                    @endphp
                    @foreach ($orders as $order)
                    <tr>
                        <td class="text-center">{{ $i++ }}</td>
                        <td class="text-left">{{ $order->product->name }}</td>
                        <td class="text-center">{{ $order->size->title }}</td>
                        <td class="text-center">{{ $order->color->title }}</td>
                        <td class="text-center">{{ $order->qty }}</td>
                        <td class="text-right">{{ $order->price }}</td>
                        <td class="text-right">{{ $order->price*$order->qty }}</td>
                    </tr>
                    @php
                        $total += $order->price*$order->qty;
                    @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-right">Total</td>
                        <td class="text-right">{{ $total }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    <footer class="pdf-footer w-100 text-center">
        Contact No: +8801609469623 | Email: bobbinctg@gmail.com | Address: Shop No. 13, first floor, New Market(B-Block)
    </footer>
</body>

</html>
