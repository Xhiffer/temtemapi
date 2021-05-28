<?php
namespace Api;


class TemtemApi
{
    private array $temtems;

    public function __construct( $temtems) 
    {
        $this ->temtems = $temtems;
    }
    public function fetchAll()
    {

        return $this->temtems;
    }
    public function insertOne($id)
    {
        $url = 'https://temtem-api.mael.tech/api/temtems/'.$id; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $temtem = json_decode($data); // decode the JSON feed
        return $temtem;
    }

}
?>