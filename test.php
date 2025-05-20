<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=Netmatters_db", "root", "");
    echo "✅ Connected to the database!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
