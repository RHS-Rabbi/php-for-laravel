<?php
// 04-access modifiers


class User{
    public string $name; // Everyone can access
    protected string $email; // This class + child class
    private string $password; // Only this class

    public function getName(): string {
        return $this->name; // Public  method
    }

    protected function getEmail(): string {
        return $this->email; // child also called
    }

    private function hashPassword(): string {
        // return bcrypt($this->password);  ---> bcrypt laravel Supported
    }
}
$u = new User();
$u->name = 'Rabbi';
$u-> email = 'rabbi@gmail.com'; // -> Fatal error
$u->password = '1234'; // -> Fatal error

?>