<?php
namespace App\Repositories;
use App\Interfaces\Repositories\ContactsRepositoryInterface;
use App\Models\Contacts;

class ContactsRepository implements ContactsRepositoryInterface {
    public function getContacts(){
        return Contacts::all()->take(10);
    }

    public function searchContacts(string $search){
        $loweredString = strtolower($search);
        return Contacts::whereRaw('lower(name) like (?)',["%{$loweredString}%"])->take(10)->get();
    }

    public function getContactById(int $id){
        return Contacts::find($id);
    }

    public function deleteContactById(int $id){
        return Contacts::destroy($id);
    }

    public function postContact(string $name, string $phone){
        return Contacts::create(array('name'=>$name,'phone'=>$phone));
    }

    public function updateContact(string $name, string $phone, int $id){
        $Contact = Contacts::find($id);
        $Contact->name = $name;
        $Contact->phone = $phone;
        return $Contact->save();
    }
}