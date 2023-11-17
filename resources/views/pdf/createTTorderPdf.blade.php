<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-2xl font-bold mb-2">TT Orders Details</h2>
                <p>TT Order Number : {{ $invoice->invoice_no }}</p>
                <!-- Additional invoice information -->

            </div>
            {{-- Receive Buyer --}}
            <div class="border-t border-gray-200">
                <h2 class="text-l my-4 pb-2 ml-4 border-b  border-gray-300">Receive From Buyer Transaction</h2>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="text-left text-sm py-3 px-4 font-semibold uppercase">Buyer Name</th>
                            <th class="text-left text-sm py-3 px-4 font-semibold uppercase">Bank Name</th>
                            <th class="text-left text-sm py-3 px-4 font-semibold uppercase"> Date</th>
                            <th class="text-left text-sm py-3 px-4 font-semibold uppercase">Value</th>
                            <!-- Add more table headers as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example table row -->
                        @foreach ($receiveFromBuyer as $receive)
                            <tr>

                                <td class="text-left text-sm py-3 px-4">{{ $receive->invoice->buyer->name }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ $receive->bank->name }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ $receive->transaction_date }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ '$' . $receive->value }}</td>

                                <!-- Add more table data for each transaction -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end items-center border-t py-7 relative border-gray-300">
                    <h2 style="left: 55rem;" class="absolute  text-sm font-bold">Total Amount : $
                        {{ $totalReceiveFromBuyerValue }}
                    </h2>
                </div>
            </div>
            {{-- Receive Buyer --}}

            {{-- Pay Factory --}}
            <div class="border-t border-gray-200">
                <h2 class="text-l my-4 pb-2 ml-4 border-b  border-gray-300">Pay To Factory Transaction</h2>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="text-left py-3 px-4 text-sm font-semibold uppercase">Factory Name</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold uppercase">Bank Name</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold uppercase"> Date</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold uppercase">Value</th>
                            <!-- Add more table headers as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example table row -->
                        @foreach ($payToFactory as $receive)
                            <tr>

                                <td class="text-left text-sm py-3 px-4">{{ $receive->invoice->factory->name }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ $receive->bank->name }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ $receive->transaction_date }}</td>
                                <td class="text-left text-sm py-3 px-4">{{ '$' . $receive->value }}</td>

                                <!-- Add more table data for each transaction -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end items-center border-t py-7 relative border-gray-300">
                    <h2 style="left: 55rem;" class="absolute  text-sm font-bold">Total Amount : $
                        {{ $totalpayToFactoryValue }}
                    </h2>
                </div>
            </div>
            {{-- Pay Factory --}}
            <div class="w-full flex justify-end ">
                <div class="w-1/3 border p-3 my-5 mr-44 border-b">
                    <div class="flex items-center gap-2 justify-end">
                        <div class="text-sm font-bold">Total Receive From Buyer :</div>
                        <div class="text-sm font-bold text-right">$ {{ $totalReceiveFromBuyerValue }}</div>
                    </div>
                    <div class="flex gap-2 items-center mb-2 justify-end">
                        <div class="text-sm font-bold">Total Pay To Factory :</div>
                        <div class="text-sm font-bold text-right">$ {{ $totalpayToFactoryValue }}</div>
                    </div>
                    <div class="border-b">

                    </div>
                    <div class="flex gap-2 mb-2 items-center justify-end">
                        <div class="text-sm font-bold">Current Balance :</div>
                        <div class="text-sm font-bold text-right">
                            ${{ $totalReceiveFromBuyerValue - $totalpayToFactoryValue }}</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>
