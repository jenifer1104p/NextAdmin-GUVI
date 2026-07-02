<?php

require "../config/database.php";

$sql = $conn->prepare("SELECT * FROM users ORDER BY id DESC");
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($users) > 0) {

    foreach ($users as $user) {

        echo "
        <tr>

            <td>{$user['id']}</td>

            <td>" . htmlspecialchars($user['username']) . "</td>

            <td>" . htmlspecialchars($user['email']) . "</td>

            <td>

                <button
                    class='btn btn-warning btn-sm editBtn'
                    data-id='{$user['id']}'
                    data-username='" . htmlspecialchars($user['username'], ENT_QUOTES) . "'
                    data-email='" . htmlspecialchars($user['email'], ENT_QUOTES) . "'>
                    Edit
                </button>

                <button
                    class='btn btn-danger btn-sm deleteBtn'
                    data-id='{$user['id']}'>
                    Delete
                </button>

            </td>

        </tr>
        ";

    }

} else {

    echo "
    <tr>
        <td colspan='4' class='text-center'>
            No Users Found
        </td>
    </tr>
    ";

}

?>