<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'bdd.php'; 

$user_id = $_SESSION['user_id'] ?? null;
$user_role = $_SESSION['user_role'] ?? null;
$user_prenom = 'Utilisateur';
$user_nom = '';
$nombreRdv = 0;

if (empty($user_id) && !str_ends_with($_SERVER['PHP_SELF'], 'login.php')) {
    header("Location: login.php");
    exit();
}

if ($user_id) {
    try {
        $stmt = $pdo->prepare("
            SELECT id, firstname, name, email, role
            FROM users
            WHERE id = :id
        ");
        $stmt->execute(['id' => $user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $user_prenom = htmlspecialchars($user['firstname'] ?? '');
            $user_nom = htmlspecialchars($user['name'] ?? '');
            $user_role = $user['role'];
        }

    } catch (PDOException $e) {
        $user_prenom = 'Erreur';
    }
}

if (basename($_SERVER['PHP_SELF']) === 'login.php') {
    if ($user_role === 'client') {
        header("Location: homePage.php");
        exit();
    } elseif ($user_role === 'admin') {
        header("Location: admin_dashboard.php");
        exit();
    }
}

try {
    if ($user_role === 'client') {
        $sql = "SELECT COUNT(*) FROM appointments WHERE user_id = ?";
        $params = [$user_id];

    } elseif ($user_role === 'admin') {
        $sql = "SELECT COUNT(*) FROM appointments";
        $params = [];
    }

    if (!empty($sql)) {
        $stmtCount = $pdo->prepare($sql);
        $stmtCount->execute($params);
        $nombreRdv = $stmtCount->fetchColumn();
    }

} catch (PDOException $e) {
    $nombreRdv = 0;
}
?>
