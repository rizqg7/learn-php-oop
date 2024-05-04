<?php class SocialMedia
{
    public string $name;
}
// final class
final class Facebook extends SocialMedia // jika sudah di deklarasikan menggunakan final maka sudah tidak bisa di overide lagi 
{ // final method
    final public function login(string $username, string $password): bool // jika sebuah function /method 
    {
        return true;
    }
}
# class FakeFacebook extends Facebook{
    // final public function login(string $username, string $password): bool // jika sebuah function /method tidak bisa di override
    // {
    //     return true;
    // }
# }