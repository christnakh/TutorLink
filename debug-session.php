<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo "<h2>Session Debug Information</h2>";
echo "<pre>";
echo "Session ID: " . session_id() . "\n";
echo "Session Status: " . session_status() . "\n";
echo "Session Data:\n";
print_r($_SESSION);
echo "\n\n";

// Test database connection
try {
    require_once 'config/database.php';
    echo "Database connection: SUCCESS\n";
    echo "isLoggedIn: " . ($isLoggedIn ? 'true' : 'false') . "\n";
    echo "userRole: " . $userRole . "\n";
    echo "firstName: " . $firstName . "\n";
} catch (Exception $e) {
    echo "Database connection: FAILED - " . $e->getMessage() . "\n";
}

echo "</pre>";

// Test header inclusion
echo "<h3>Testing Header Inclusion:</h3>";
try {
    include 'includes/header.php';
    echo "<p>Header included successfully!</p>";
} catch (Exception $e) {
    echo "<p>Header error: " . $e->getMessage() . "</p>";
}
