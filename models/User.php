<?php

require_once 'config/connection.php';

class User
{
    public ?int $id = null;
    public string $name;
    public string $email;
    public string $phone;
    public string $password;
    public string $role = 'user'; // Default role
    public string $profile_photo;
    public string $created_at;
    public string $updated_at;

    public function save(): bool
    {
        global $conn;

        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, role, profile_photo, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            return false;
        }

        $stmt->bind_param(
            "ssssssss",
            $this->name,
            $this->email,
            $this->phone,
            $this->password,
            $this->role,
            $this->profile_photo,
            $this->created_at,
            $this->updated_at
        );

        $result = $stmt->execute();

        if ($result) {
            $this->id = $conn->insert_id;
        }

        $stmt->close();

        return $result;
    }

    public function findByEmail(string $email): ?array
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
        }

        $stmt->close();

        return null;

    }

    public function getAllUsers(): array
    {
        global $conn;
        $stmt = $conn->prepare("SELECT id, name, email, phone, role, profile_photo , created_at, updated_at FROM users");

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }

            return [];
        }

        $stmt->close();
        return [];
    }
}
