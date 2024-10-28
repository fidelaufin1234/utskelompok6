<?php
// Data Produk
$products = [
    ["id" => 1, "product" => "Buavita", "stock" => 30, "price" => 7890],
    ["id" => 2, "product" => "Bango", "stock" => 21, "price" => 21890],
    ["id" => 3, "product" => "Sariwangi", "stock" => 10, "price" => 9990],
    ["id" => 4, "product" => "Shampo", "stock" => 23, "price" => 32450],
    ["id" => 5, "product" => "Bedak", "stock" => 11, "price" => 15750],
    ["id" => 6, "product" => "Baju", "stock" => 13, "price" => 55490],
    ["id" => 7, "product" => "Jumper", "stock" => 2, "price" => 52430],
];

// a. Menghitung Jumlah Total untuk setiap produk dan Jumlah Total keseluruhan
$totalAmount = 0;
foreach ($products as &$product) {
    $product["amount"] = $product["stock"] * $product["price"];
    $totalAmount += $product["amount"];
}
unset($product); // Release reference

// b. Menghitung Diskon
$discountRate = 0;
if ($totalAmount >= 400000) {
    $discountRate = 0.3; // 30%
} elseif ($totalAmount >= 200000) {
    $discountRate = 0.15; // 15%
}
$discountAmount = $totalAmount * $discountRate;
$totalPayment = $totalAmount - $discountAmount;

// c. Menampilkan Array Multidimensional
echo "<h3>Tabel Harga Barang</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>{$product['id']}</td>";
    echo "<td>{$product['product']}</td>";
    echo "<td>{$product['stock']}</td>";
    echo "<td>" . number_format($product['price'], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($product['amount'], 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "<tr><td colspan='4'><strong>Total</strong></td><td><strong>" . number_format($totalAmount, 0, ',', '.') . "</strong></td></tr>";
echo "</table>";
?>



<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-center text-xl font-bold mb-4">Struk Pembayaran</h2>
        <p class="text-center mb-4">Tanggal Transaksi: 28 October 2024</p>
        <div class="mb-4">
            <div class="flex justify-between">
                <span>Buavita (30 x 7.890)</span>
                <span>236.700</span>
            </div>
            <div class="flex justify-between">
                <span>Bango (21 x 21.890)</span>
                <span>459.690</span>
            </div>
            <div class="flex justify-between">
                <span>Sariwangi (10 x 9.990)</span>
                <span>99.900</span>
            </div>
            <div class="flex justify-between">
                <span>Shampo (23 x 32.450)</span>
                <span>746.350</span>
            </div>
            <div class="flex justify-between">
                <span>Bedak (15 x 11.560)</span>
                <span>173.400</span>
            </div>
            <div class="flex justify-between">
                <span>Baju (13 x 55.450)</span>
                <span>720.850</span>
            </div>
            <div class="flex justify-between">
                <span>jumper (2 x 52.430)</span>
                <span>104.860</span>
            </div>
        </div>
        <div class="border-t border-gray-300 pt-4">
            <div class="flex justify-between font-bold">
                <span>Total:</span>
                <span>2.541.750</span>
            </div>
            <div class="flex justify-between">
                <span>Diskon:</span>
                <span>762.525</span>
            </div>
            <div class="flex justify-between font-bold">
                <span>Total Pembayaran:</span>
                <span>1.779.225</span>
            </div>
        </div>
        <p class="text-center mt-4">Terima Kasih telah berbelanja!</p>
    </div>
</body>
</html>