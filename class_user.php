<?php
class User {
    public $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

// Membuat objek, mengubah nilai, dan menampilkan
$user1 = new User();
$user1->setUsername("admin_kece");
echo "Username: " . $user1->getUsername();
?>