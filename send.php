<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
    $botToken = "7845089182:AAEKfLND6ZJurXLg_u72FdzbdSW_3DTVMkw";  // 🔹 Replace with your Telegram Bot Token
    $chatId = "7187468717";      // 🔹 Replace with your Chat ID

    $message = urlencode($_POST["message"]);  // 🔹 User Input Message

    // 🔹 Telegram API URL
    $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$message";

    // 🔹 Send Message
    $response = file_get_contents($apiUrl);

    // 🔹 Check Response
    if ($response) {
        echo "<script>alert('✅ Message Sent Successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('❌ Failed to Send Message!'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('⚠ Invalid Request!'); window.location.href='index.php';</script>";
}
?>
